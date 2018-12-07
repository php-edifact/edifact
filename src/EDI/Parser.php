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
     * @var array|string[]|null
     */
    private $rawSegments;

    /**
     * @var array
     */
    private $parsedfile;

    /**
     * @var array
     */
    private $errors;

    /**
     * @var string
     */
    private $stripChars = "/[\x01-\x1F\x80-\xFF]/"; // UNOB encoding set

    /**
     * @var string
     */
    private static $DELIMITER = "/";

    /**
     * @var null|string : component separator character (default \:)
     */
    private $sepComp;

    /**
     * @var null|string : component separator character (default :)
     */
    private $sepUnescapedComp;

    /**
     * @var null|string : data separator character (default \+)
     */
    private $sepData;

    /**
     * @var null|string : dec separator character (no use but here) (default .)
     */
    private $sepDec;

    /**
     * @var null|string : release character (default \?)
     */
    private $symbRel;

    /**
     * @var null|string (default ?)
     */
    private $symbUnescapedRel;

    /**
     * @var null|string : repetition character (no use but here) (default *)
     */
    private $symbRep;

    /**
     * @var null|string : end character (default ')
     */
    private $symbEnd;

    /**
     * @var null|string : safe string (default §SS§)
     */
    private $stringSafe;

    /**
     * @var null|string : encoding (default UNOB)
     */
    private $encoding;

    /**
     * @var null|string : message format from UNH
     */
    private $messageFormat;

    /**
     * @var string : message directory
     */
    private $messageDirectory;

    private static $encodingToStripChars = [
        "UNOA" => "/[\x01-\x1F\x80-\xFF]/", // not as restrictive as it should be
        "UNOB" => "/[\x01-\x1F\x80-\xFF]/",
        "UNOC" => "/[\x01-\x1F\x7F-\x9F]/",
    ];

    /**
     * @var bool : TRUE when UNA's characters are known, FALSE when they are not. NULL means no initialization
     */
    private $unaChecked;

    /**
     * @var bool : TRUE when UNB encoding is known, FALSE when it's not. NULL means no initialization
     */
    private $unbChecked;

    /**
     * Parser constructor.
     *
     * @param null|string|string[] $url
     */
    public function __construct($url = null)
    {
        if ($this->unaChecked !== false) {
            $this->resetUNA();
        }

        if ($this->unbChecked !== false) {
            $this->resetUNB();
        }

        $this->errors = [];
        $this->parsedfile = [];

        if ($url === null) {
            return;
        }

        if (\is_array($url)) {

            //
            // Object constructed with an array as argument
            //
            if (\count($url) === 1) {
                $url = $this->unwrap($url[0]);
            }
            $this->rawSegments = $url;
            /** @noinspection UnusedFunctionResultInspection */
            $this->parse($url);

        } elseif (file_exists($url)) {

            //
            // Object constructed with a path to a file as argument
            //
            /** @noinspection UnusedFunctionResultInspection */
            $this->load($url);

        } else {

            //
            // Object constructed with a string as argument
            //
            /** @noinspection UnusedFunctionResultInspection */
            $this->loadString($url);

        }
    }

    /**
     * Parse edi array
     *
     * @param array $file2
     *
     * @return array
     */
    public function parse(array &$file2): array
    {
        $i = 0;
        foreach ($file2 as &$line) {
            ++$i;

            // Null byte and carriage return removal. (CR+LF)
            $line = str_replace(["\x00", "\r", "\n"], '', $line);

            // Basic sanitization, remove non printable chars.
            $lineTrim = \trim($line);
            $line = \preg_replace($this->stripChars, '', $lineTrim);
            $line_bytes = \strlen($line);

            if ($line_bytes !== \strlen($lineTrim)) {
                $this->errors[] = "There's a not printable character on line " . $i . ": " . $lineTrim;
            }

            if ($line_bytes < 2) {
                continue;
            }

            switch (\substr($line, 0, 3)) {
                case "UNA":
                    if (!$this->unaChecked) {
                        $this->analyseUNA(\substr($line, 4, 6));
                    }
                    break;
                case "UNB":
                    $line = $this->splitSegment($line);
                    if (!$this->unbChecked) {
                        $this->analyseUNB($line[1]);
                    }
                    $this->parsedfile[] = $line;
                    break;
                case "UNH":
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

        return $this->parsedfile;
    }

    /**
     * Reset UNA's characters definition
     *
     * @return void
     */
    private function resetUNA()
    {
        $this->sepComp = "\:";
        $this->sepUnescapedComp = ":";
        $this->sepData = "\+";
        $this->sepDec = "."; // See later if a preg_quote is needed
        $this->symbRel = "\?";
        $this->symbUnescapedRel = "?";
        $this->symbRep = "*"; // See later if a preg_quote is needed
        $this->symbEnd = "'";
        $this->stringSafe = "§SS§";
        $this->unaChecked = false;
    }

    /**
     * Reset UNB's encoding definition
     *
     * @return void
     */
    private function resetUNB()
    {
        $this->encoding = "UNOB";
        $this->unbChecked = false;
    }

    /**
     * Read UNA's characters definition
     *
     * @param string $line : UNA definition line (without UNA tag). Example : :+.? '
     *
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
     * UNB line analysis
     *
     * @param string|string[] $encoding UNB definition line (without UNB tag). Example UNOA:2
     *
     * @return void
     */
    public function analyseUNB($encoding)
    {
        if (\is_array($encoding)) {
            $encoding = $encoding[0];
        }

        $this->encoding = $encoding;

        // If there's a regex defined for this character set, use it.
        /** @noinspection OffsetOperationsInspection */
        if (isset(self::$encodingToStripChars[$encoding])) {
            /** @noinspection OffsetOperationsInspection */
            $this->setStripRegex(self::$encodingToStripChars[$encoding]);
        }

        $this->unbChecked = true;
    }

    /**
     * Identify message type
     *
     * @param string[] $line UNH segment
     *
     * @return void
     */
    public function analyseUNH(array $line)
    {
        if (\count($line) < 3) {
            return;
        }

        $lineElement = $line[2];
        if (!\is_array($lineElement)) {
            $this->messageFormat = $lineElement;

            return;
        }

        $this->messageFormat = $lineElement[0];
        $this->messageDirectory = $lineElement[2];
    }

    /**
     * Unwrap string splitting rows on terminator (if not escaped)
     *
     * @param string $string
     *
     * @return string[]
     */
    private function unwrap(string &$string): array
    {
        if (
            !$this->unaChecked
            &&
            \strpos($string, 'UNA') === 0
        ) {
            $this->analyseUNA(
                \substr(\substr($string, 3), 0, 9)
            );
        }

        if (
            !$this->unbChecked
            &&
            \strpos($string, 'UNB') === 0
        ) {
            $this->analyseUNB(
                \preg_replace(
                    "#^UNB\+#",
                    '',
                    \substr($string, 0, 8)
                )
            );
        }

        $string = \preg_replace(
            "/(([^" . $this->symbRel . "]" . $this->symbRel . "{2})+|[^" . $this->symbRel . "])" . $this->symbEnd . "/",
            "$1" . $this->stringSafe,
            $string
        );

        $file = \preg_split(
            self::$DELIMITER . $this->stringSafe . self::$DELIMITER . "i",
            $string
        );
        // fallback
        if ($file === false) {
            $file = [];
        }

        $end = \stripslashes($this->symbEnd);
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
     * Segments
     *
     * @param string $str
     *
     * @return array|string[]
     */
    private function splitSegment(string &$str): array
    {
        // remove ending "symbEnd"
        $str = \trim(
            \preg_replace(
                self::$DELIMITER . $this->symbEnd . '$' . self::$DELIMITER,
                '',
                $str
            )
        );

        // replace duplicate "symbRel"
        $str = \str_replace(
            $this->symbUnescapedRel . $this->symbUnescapedRel,
            $this->stringSafe,
            $str
        );

        // split on "sepData" if not escaped (negative lookbehind)
        $matches = \preg_split(
            self::$DELIMITER . "(?<!" . $this->symbRel . ")" . $this->sepData . self::$DELIMITER,
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

            if (\strpos($value, $this->symbEnd) !== false) {
                if (\preg_match(self::$DELIMITER . "(?<!" . $this->symbRel . ")" . $this->symbEnd . self::$DELIMITER, $value)) {
                    $this->errors[] = "There's a " . \stripslashes($this->symbEnd) . " not escaped in the data; string " . $str;
                }
            }

            if (\strpos($value, $this->symbUnescapedRel) !== false) {
                if (\preg_match(self::$DELIMITER . "(?<!" . $this->symbRel . ")" . $this->symbRel . "(?!" . $this->symbRel . ")(?!" . $this->sepData . ")(?!" . $this->sepComp . ")(?!" . $this->symbEnd . ")" . self::$DELIMITER, $value)) {
                    $this->errors[] = "There's a character not escaped with " . \stripslashes($this->symbRel) . " in the data; string " . $value;
                }
            }

            // split on "sepComp"
            $value = $this->splitData($value);
        }
        unset($value);

        return $matches;
    }

    /**
     * Composite data element
     *
     * @param string $str
     *
     * @return mixed
     */
    private function splitData(string &$str)
    {
        if ($str === '') {
            return $str;
        }

        $replace = function (&$string) {

            if (\strpos($string, $this->symbUnescapedRel) !== false) {
                $string = \preg_replace(
                    self::$DELIMITER . $this->symbRel . "(?=" . $this->symbRel . ")|" . $this->symbRel . "(?=" . $this->sepData . ")|" . $this->symbRel . "(?=" . $this->sepComp . ")|" . $this->symbRel . "(?=" . $this->symbEnd . ")" . self::$DELIMITER,
                    '',
                    $string
                );
            }

            return \str_replace(
                $this->stringSafe,
                $this->symbUnescapedRel,
                $string
            );
        };

        // check for "sepUnescapedComp" in the string
        if (\strpos($str, $this->sepUnescapedComp) === false) {
            return $replace($str);
        }

        // split on "sepComp" if not escaped (negative lookbehind)
        $array = \preg_split(
            self::$DELIMITER . "(?<!" . $this->symbRel . ")" . $this->sepComp . self::$DELIMITER,
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

    /**
     * Get errors
     *
     * @return array
     */
    public function errors(): array
    {
        return $this->errors;
    }

    /**
     * Get result
     *
     * @return array
     */
    public function get(): array
    {
        return $this->parsedfile;
    }

    /**
     * Get raw segments array
     *
     * @return array|string[]|null
     */
    public function getRawSegments()
    {
        return $this->rawSegments;
    }

    /**
     * Load the message from file.
     *
     * @param string $url
     *
     * @return array
     */
    public function load($url): array
    {
        $file = \file_get_contents($url);

        return $this->loadString($file);
    }

    /**
     * Load the message from a string.
     *
     * @param string $string
     *
     * @return array
     */
    public function loadString(&$string): array
    {
        /** @noinspection CallableParameterUseCaseInTypeContextInspection */
        $string = $this->unwrap($string);
        $this->rawSegments = $string;

        return $this->parse($string);
    }

    /**
     * Change the default regex used for stripping invalid characters.
     *
     * @param string $regex
     */
    public function setStripRegex($regex)
    {
        $this->stripChars = $regex;
    }

    /**
     * @return string|null
     */
    public function getMessageFormat()
    {
        return $this->messageFormat;
    }

    /**
     * @return null|string
     */
    public function getMessageDirectory()
    {
        return $this->messageDirectory;
    }
}
