<?php

declare(strict_types=1);

namespace EDI;

/**
 * EDIFACT Messages Parser
 * (c)2018 Stefano Sabatini
 */
class Parser
{
    /**
     * @var array|string[]
     */
    private $rawSegments = [];

    /**
     * @var array
     */
    private $parsedfile = [];

    /**
     * @var array
     */
    private $errors = [];

    /**
     * @var string
     */
    private $stripChars = "/[\x01-\x1F\x80-\xFF]/"; // UNOB encoding set

    /**
     * @var string
     */
    private static $DELIMITER = '/';

    /**
     * @var string Component separator character
     */
    private $sepComp = "\:";

    /**
     * @var string Component separator character
     */
    private $sepUnescapedComp = ':';

    /**
     * @var string Data separator character
     */
    private $sepData = "\+";

    /**
     * @var string Dec separator character (no use but here)
     */
    private $sepDec = '.';

    /**
     * @var string Release character
     */
    private $symbRel = "\?";

    /**
     * @var string (default ?)
     */
    private $symbUnescapedRel = '?';

    /**
     * @var string Repetition character (no use but here)
     */
    private $symbRep = '*';

    /**
     * @var string End character
     */
    private $symbEnd = "'";

    /**
     * @var string Safe string
     */
    private $stringSafe = '§SS§';

    /**
     * @var string UNB Syntax identifier
     */
    private string $syntaxID = '';

    /**
     * @var string|null Message format from UNH
     */
    private $messageFormat;

    /**
     * @var string Message directory
     */
    private $messageDirectory;

    /**
     * @var string Message number
     */
    private $messageNumber;

    private ?string $sourceEncoding = null;

    /**
     * @var array<string,string>
     */
    private static $encodingToStripChars = [
        'UNOA' => "/[\x01-\x1F\x80-\xFF]/", // not as restrictive as it should be
        'UNOB' => "/[\x01-\x1F\x80-\xFF]/",
        'UNOC' => "/[\x01-\x1F\x7F-\x9F]/",
        'UNOE' => "/[\x20-\x7E]\xA0-\xFF/",
    ];

    private static $charsets = [
        // ISO 646, except lower case letters, alternative graphic chars, national or application-oriented graphic chars
        'UNOA' => 'ASCII',
        // ISO 646, except alternative graphic chars and national or application-oriented graphic chars
        'UNOB' => 'ASCII',
        'UNOC' => 'ISO-8859-1',
        'UNOD' => 'ISO-8859-2',
        'UNOE' => 'ISO-8859-5',
        'UNOF' => 'ISO-8859-7',
    ];

    /**
     * @var bool TRUE when UNA characters are known.
     */
    private $unaChecked = false;

    /**
     * @var bool TRUE when UNB encoding is known.
     */
    private $unbChecked = false;

    /**
     * Optionally disable workarounds.
     */
    private bool $strict = false;

    /**
     * Parse EDI array.
     */
    public function parse(): self
    {
        $rawSegments = $this->getRawSegments();
        if ($this->sourceEncoding && isset(self::$charsets[$this->syntaxID]) && self::$charsets[$this->syntaxID] !== $this->sourceEncoding) {
            $rawSegments = $this->convertEncoding($this->rawSegments, $this->sourceEncoding, self::$charsets[$this->syntaxID]);
        }

        $i = 0;
        foreach ($rawSegments as $line) {
            $i++;

            // Null byte and carriage return removal. (CR+LF)
            $line = \str_replace(["\x00", "\r", "\n"], '', $line);

            // Basic sanitization, remove non-printable chars.
            $lineTrim = \trim($line);
            $line = (string) \preg_replace($this->stripChars, '', $lineTrim);
            $line_bytes = \strlen($line);

            if ($line_bytes !== \strlen($lineTrim)) {
                $this->errors[] = 'Non-printable character on line '.$i.': '.$lineTrim;
            }

            if ($line_bytes < 2) {
                continue;
            }

            switch (\substr($line, 0, 3)) {
                case 'UNA':
                    if (! $this->unaChecked) {
                        $this->analyseUNA(\substr($line, 4, 6));
                    }

                    break;
                case 'UNB':
                    $line = $this->splitSegment($line);
                    if (! $this->unbChecked) {
                        $this->analyseUNB($line[1]);
                    }
                    $this->parsedfile[] = $line;

                    break;
                case 'UNH':
                    $line = $this->splitSegment($line);
                    $this->analyseUNH($line);
                    $this->parsedfile[] = $line;

                    break;
                default:
                    $line = $this->splitSegment($line);
                    $this->parsedfile[] = $line;

                    break;
            }
        }

        return $this;
    }

    /**
     * Read UNA's characters definition.
     *
     * @param string $line UNA definition line (without UNA tag). Example : :+.? '
     * @return void
     */
    public function analyseUNA(string $line)
    {
        $line = \substr($line, 0, 6);
        if (isset($line[0])) {
            $this->sepComp = \preg_quote($line[0], self::$DELIMITER);
            $this->sepUnescapedComp = $line[0];
            if (isset($line[1])) {
                $this->sepData = \preg_quote($line[1], self::$DELIMITER);
                if (isset($line[2])) {
                    $this->sepDec = $line[2]; // See later if a preg_quote is needed
                    if (isset($line[3])) {
                        $this->symbRel = \preg_quote($line[3], self::$DELIMITER);
                        $this->symbUnescapedRel = $line[3];
                        if (isset($line[4])) {
                            $this->symbRep = $line[4]; // See later if a preg_quote is needed
                            if (isset($line[5])) {
                                $this->symbEnd = \preg_quote($line[5], self::$DELIMITER);
                            }
                        }
                    }
                }
            }
            $this->unaChecked = true;
        }
    }

    /**
     * UNB line analysis.
     *
     * @param string|string[] $line UNB definition line (without UNB tag). Example UNOA:2
     */
    public function analyseUNB($line): void
    {
        if (\is_array($line)) {
            $line = $line[0];
        }

        $this->syntaxID = $line;

        // If there's a regex defined for this character set, use it.
        /** @noinspection OffsetOperationsInspection */
        if (isset(self::$encodingToStripChars[$line])) {
            /** @noinspection OffsetOperationsInspection */
            $this->setStripRegex(self::$encodingToStripChars[$line]);
        }

        $this->unbChecked = true;
    }

    /**
     * Identify message type.
     *
     * @param array<mixed|string> $line UNH segment
     */
    public function analyseUNH(array $line): void
    {
        if (\count($line) < 3) {
            return;
        }

        $this->messageNumber = $line[1];

        $lineElement = $line[2];
        if (! \is_array($lineElement)) {
            $this->messageFormat = $lineElement;

            return;
        }

        $this->messageFormat = $lineElement[0];
        $this->messageDirectory = $lineElement[2];
    }

    /**
     * Check if the file's character encoding actually matches the one declared in the UNB header.
     *
     * @throws \LogicException
     * @throws \RuntimeException
     */
    public function checkEncoding(): bool
    {
        if (empty($this->parsedfile)) {
            throw new \LogicException('No text has been parsed yet');
        }
        if (! isset(self::$charsets[$this->syntaxID])) {
            throw new \RuntimeException('Unsupported syntax identifier: ' . $this->syntaxID);
        }

        $check = mb_check_encoding($this->parsedfile, self::$charsets[$this->syntaxID]);
        if(!$check)
            $this->errors[] = 'Character encoding does not match declaration in UNB interchange header';

        return $check;
    }

    /**
     * Get errors.
     */
    public function errors(): array
    {
        return $this->errors;
    }

    /**
     * (Un)Set strict parsing.
     */
    public function setStrict(bool $strict):void
    {
        $this->strict = $strict;
    }

    public function setSourceEncoding(string $sourceEncoding): void
    {
        $this->sourceEncoding = $sourceEncoding;
    }

    /**
     * Get parsed lines/segments.
     */
    public function get(?string $encoding = null): array
    {
        if (empty($this->parsedfile)) {
            $this->parse();
        }
    
        if (null === $encoding) {
            return $this->parsedfile;
        }
    
        return $this->convertEncoding($this->parsedfile, self::$charsets[$this->syntaxID], $encoding);
    }
    
    private function convertEncoding($data, string $from, string $to)
    {
        if (is_array($data)) {
            foreach ($data as $k => $v) {
                $data[$k] = $this->convertEncoding($v, $from, $to);
            }
        } elseif (is_string($data)) {
            $data = function_exists('iconv') ? iconv($from, $to . '//TRANSLIT', $data) : mb_convert_encoding($data, $to, $from);
        }
    
        return $data;
    }

    /**
     * Get raw segments array.
     *
     * @return array|string[]
     */
    public function getRawSegments(): array
    {
        return $this->rawSegments;
    }

    /**
     * Get syntax identifier from the UNB header.
     * Does not necessarily mean that the text is actually encoded as such.
     *
     * @return string
     * @throws \RuntimeException
     */
    public function getSyntaxIdentifier(): string
    {
        return $this->syntaxID;
    }

    /**
     * Load the message from file.
     *
     * @param string $location Either a local file path or a URL
     */
    public function load(string $location): self
    {
        $contents = \file_get_contents($location);
        if ($contents === false) {
            throw new \RuntimeException('File could not be retrieved');
        }

        $this->loadString($contents);

        return $this;
    }

    /**
     * Load the message from a string.
     */
    public function loadString(string $txt): self
    {
        $this->resetUNA();
        $this->resetUNB();
        $this->rawSegments = $this->unwrap($txt);

        return $this;
    }

    /**
     * Load a raw or parsed message from an array of strings.
     *
     * @param bool  $raw If the data hasn't been parsed yet
     */
    public function loadArray(array $lines, bool $raw = true): self
    {
        if ($raw) {
            $this->resetUNA();
            $this->resetUNB();
            $this->rawSegments = $lines;
            if (\count($lines) === 1) {
                $this->loadString($lines[0]);
            }
        } else {
            $this->rawSegments = [];
            $this->parsedfile = $lines;
        }

        return $this;
    }

    /**
     * Change the default regex used for stripping invalid characters.
     *
     * @return void
     */
    public function setStripRegex(string $regex)
    {
        $this->stripChars = $regex;
    }

    /**
     * Get the message type ID.
     *
     * @return string|null
     */
    public function getMessageFormat()
    {
        return $this->messageFormat;
    }

    /**
     * Get the message type release number.
     *
     * @return string|null
     */
    public function getMessageDirectory()
    {
        return $this->messageDirectory;
    }

    /**
     * @return string|null
     */
    public function getMessageNumber()
    {
        return $this->messageNumber;
    }

    /**
     * Reset UNA character definition to defaults.
     */
    private function resetUNA(): void
    {
        $this->sepComp = "\:";
        $this->sepUnescapedComp = ':';
        $this->sepData = "\+";
        $this->sepDec = '.'; // See later if a preg_quote is needed
        $this->symbRel = "\?";
        $this->symbUnescapedRel = '?';
        $this->symbRep = '*'; // See later if a preg_quote is needed
        $this->symbEnd = "'";
        $this->stringSafe = '§SS§';
        $this->unaChecked = false;
    }

    /**
     * Reset UNB encoding definition to defaults.
     */
    private function resetUNB(): void
    {
        $this->syntaxID = '';
        $this->unbChecked = false;
    }

    /**
     * Unwrap string splitting rows on terminator (if not escaped).
     *
     * @return string[]
     */
    private function unwrap(string &$string): array
    {
        if (
            ! $this->unaChecked
            &&
            \strpos($string, 'UNA') === 0
        ) {
            $this->analyseUNA(
                \substr(\substr($string, 3), 0, 9)
            );
        }

        if (
            ! $this->unbChecked
            &&
            \strpos($string, 'UNB') === 0
        ) {
            $this->analyseUNB(
                (string) \preg_replace(
                    "#^UNB\+#",
                    '',
                    \substr($string, 0, 8)
                )
            );
        }
        if (preg_match_all("/[A-Z0-9]+(?:\?'|$)[\r\n]+/i", $string, $matches, PREG_OFFSET_CAPTURE) > 0) {
            $this->errors[] = 'This file contains some segments without terminators';
        }

        $terminatorRegex = '/(([^'.$this->symbRel.']'.$this->symbRel.'{2})+|[^'.$this->symbRel.'])'.$this->symbEnd.'|[\r\n]+/';

        if ($this->strict) {
            $terminatorRegex = '/(([^'.$this->symbRel.']'.$this->symbRel.'{2})+|[^'.$this->symbRel.'])'.$this->symbEnd.'/';
        }

        $string = (string) \preg_replace(
            $terminatorRegex,
            '$1'.$this->stringSafe,
            $string
        );

        $file = \preg_split(
            self::$DELIMITER.$this->stringSafe.self::$DELIMITER.'i',
            $string
        );
        // fallback
        if ($file === false) {
            $file = [];
        }

        $end = \stripslashes($this->symbEnd.'');
        foreach ($file as $fc => &$line) {
            if (\trim($line) == '') {
                /* @noinspection OffsetOperationsInspection */
                unset($file[$fc]);
            }
            $line .= $end;
        }

        return $file;
    }

    /**
     * Split segment.
     *
     * @return array|string[]
     */
    private function splitSegment(string &$str): array
    {
        // remove ending "symbEnd"
        $str = \trim(
            (string) \preg_replace(
                self::$DELIMITER.$this->symbEnd.'$'.self::$DELIMITER,
                '',
                $str
            )
        );

        // replace duplicate "symbRel"
        $str = \str_replace(
            $this->symbUnescapedRel.$this->symbUnescapedRel.'',
            $this->stringSafe ?? '',
            $str
        );

        // split on "sepData" if not escaped (negative lookbehind)
        $matches = \preg_split(
            self::$DELIMITER.'(?<!'.$this->symbRel.')'.$this->sepData.self::$DELIMITER,
            $str
        );
        // fallback
        if ($matches === false) {
            $matches = [];
        }

        foreach ($matches as &$value) {
            if ($value === '') {
                continue;
            }

            // INFO:
            //
            // ? immediately preceding one of the characters '+:? restores their normal meaning
            //
            // e.g. 10?+10=20 means 10+10=20
            //
            // Question mark is represented by ??

            if (
                $this->symbEnd
                &&
                \strpos($value, $this->symbEnd) !== false
            ) {
                if (\preg_match(self::$DELIMITER.'(?<!'.$this->symbRel.')'.$this->symbEnd.self::$DELIMITER, $value)) {
                    $this->errors[] = "There's a ".\stripslashes($this->symbEnd).' not escaped in the data; string '.$str;
                }
            }

            if (
                $this->symbUnescapedRel
                &&
                \strpos($value, $this->symbUnescapedRel) !== false
            ) {
                if (\preg_match(self::$DELIMITER.'(?<!'.$this->symbRel.')'.$this->symbRel.'(?!'.$this->symbRel.')(?!'.$this->sepData.')(?!'.$this->sepComp.')(?!'.$this->symbEnd.')'.self::$DELIMITER, $value)) {
                    $this->errors[] = "There's a character not escaped with ".\stripslashes($this->symbRel ?? '').' in the data; string '.$value;
                }
            }

            // split on "sepComp"
            $value = $this->splitData($value);
        }

        return $matches;
    }

    /**
     * Composite data element.
     *
     * @return mixed
     */
    private function splitData(string &$str)
    {
        if ($str === '') {
            return $str;
        }

        $replace = function (&$string) {
            if ($this->symbUnescapedRel && \strpos($string, $this->symbUnescapedRel) !== false) {
                $string = \preg_replace(
                    self::$DELIMITER.$this->symbRel.'(?='.$this->symbRel.')|'.$this->symbRel.'(?='.$this->sepData.')|'.$this->symbRel.'(?='.$this->sepComp.')|'.$this->symbRel.'(?='.$this->symbEnd.')'.self::$DELIMITER,
                    '',
                    $string
                );
            }

            return \str_replace(
                $this->stringSafe ?? '',
                $this->symbUnescapedRel ?? '',
                $string
            );
        };

        // check for "sepUnescapedComp" in the string
        if ($this->sepUnescapedComp && \strpos($str, $this->sepUnescapedComp) === false) {
            return $replace($str);
        }

        // split on "sepComp" if not escaped (negative lookbehind)
        $array = \preg_split(
            self::$DELIMITER.'(?<!'.$this->symbRel.')'.$this->sepComp.self::$DELIMITER,
            $str
        );
        // fallback
        if ($array === false) {
            $array = [[]];
        }

        if (\count($array) === 1) {
            return $replace($str);
        }

        foreach ($array as &$value) {
            $value = $replace($value);
        }

        return $array;
    }
}
