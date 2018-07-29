<?php
/**
 * EDIFACT Messages Parser
 * (c)2018 Stefano Sabatini
 */

namespace EDI;

class Parser
{
    private $rawSegments;
    private $parsedfile;
    private $errors;
    private $stripChars="/[\x01-\x1F\x80-\xFF]/"; //UNOB encoding set

    private static $DELIMITER = "/";

    /**
     * @var string : component separator character (default :)
     */
    private $sepComp;
    /**
     * @var string : data separator character (default +)
     */
    private $sepData;
    /**
     * @var string : dec separator character (no use but here) (default .)
     */
    private $sepDec;
    /**
     * @var string : release character (default ?)
     */
    private $symbRel;
    private $symbUnescapedRel;
    /**
     * @var string : repetition character (no use but here) (default *)
     */
    private $symbRep;
    /**
     * @var string : end character (default ')
     */
    private $symbEnd;
    /**
     * @var string : safe string (default §SS§)
     */
    private $stringSafe;
    /**
     * @var string : encoding (default UNOB)
     */
    private $encoding;
    /**
     * @var string : message format from UNH
     */
    private $messageFormat;
    /**
     * @var string : message directory
     */
    private $messageDirectory;

    private $encodingToStripChars = [
        "UNOA" => "/[\x01-\x1F\x80-\xFF]/", // not as restrictive as it should be
        "UNOB" => "/[\x01-\x1F\x80-\xFF]/",
        "UNOC" => "/[\x01-\x1F\x7F-\x9F]/"
    ];

    /**
     * @var bool : TRUE when UNA's characters are known, FALSE when they are not. NULL means no initialization
     */
    private $unaChecked;

    /**
     * @var bool : TRUE when UNB encoding is known, FALSE when it's not. NULL means no initialization
     */
    private $unbChecked;

    public function __construct($url = null)
    {
        if ($this->unaChecked !== false) {
            $this->resetUNA();
        }
        if ($this->unbChecked !== false) {
            $this->resetUNB();
        }

        $this->errors=array();
        $this->parsedfile=array();

        if ($url===null) {
            return;
        }
        if (is_array($url)) {
            /**
             * Object constructed with an array as argument
             */
            if (count($url) == 1) {
                $url=$this->unwrap($url[0]);
            }
            $this->rawSegments = $url;
            $this->parse($url);
        } elseif (file_exists($url)) {
            /**
             * Object constructed with a path to a file as argument
             */
            $this->load($url);
        } else {
            /**
             * Object constructed with a string as argument
             */
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
    public function parse(&$file2)
    {

        //while ($line = array_shift($file2))
        $t = count($file2);
        for ($i = 1; $i <= $t; $i++) {
            $line = array_shift($file2);

            /**
             * Null byte and carriage return removal (CR+LF)
             */
            $line = preg_replace('#[\x00\r\n]#', '', $line);
            if (preg_match($this->stripChars, $line)) {
                $this->errors[]="There's a not printable character on line ".$i.": ". $line;
            }

            /**
             * Basic sanitization, remove non printable chars
             */
            $line = preg_replace($this->stripChars, '', trim($line));
            if (strlen($line) < 2) {
                continue;
            }

            switch (substr($line, 0, 3)) {
                case "UNA":
                    if (!$this->unaChecked) {
                        $this->analyseUNA(substr($line, 4, 6));
                    }
                    break;
                case "UNB":
                    $line=$this->splitSegment($line);
                    if (!$this->unbChecked) {
                        $this->analyseUNB($line[1]);
                    }
                    $this->parsedfile[] = $line;
                    break;
                case "UNH":
                    $line=$this->splitSegment($line);
                    $this->analyseUNH($line);
                    $this->parsedfile[] = $line;
                    break;
                default:
                    $line=$this->splitSegment($line);
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
        $this->encoding ="UNOB";
        $this->unbChecked = false;
    }

    /**
     * Read UNA's characters definition
     *
     * @param string $line : UNA definition line (without UNA tag). Example : :+.? '
     *
     * @return void
     */
    public function analyseUNA($line)
    {
        $line = substr($line, 0, 6);
        if (isset($line{0})) {
            $this->sepComp = preg_quote($line{0}, self::$DELIMITER);
            if (isset($line{1})) {
                $this->sepData = preg_quote($line{1}, self::$DELIMITER);
                if (isset($line{2})) {
                    $this->sepDec = $line{2}; // See later if a preg_quote is needed
                    if (isset($line{3})) {
                        $this->symbRel = preg_quote($line{3}, self::$DELIMITER);
                        $this->symbUnescapedRel = $line{3};
                        if (isset($line{4})) {
                            $this->symbRep = $line{4}; // See later if a preg_quote is needed
                            if (isset($line{5})) {
                                $this->symbEnd = preg_quote($line{5}, self::$DELIMITER);
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
     * @param string $encoding UNB definition line (without UNB tag). Example UNOA:2
     *
     * @return void
     */
    public function analyseUNB($encoding)
    {
        if (is_array($encoding)) {
            $encoding = $encoding[0];
        }
        $this->encoding = $encoding;
        /**
         * If there's a regex defined for this character set, use it
         */
        if (isset($this->encodingToStripChars[$encoding])) {
            $this->setStripRegex($this->encodingToStripChars[$encoding]);
        }
        $this->unbChecked = true;
    }

    /**
     * Identify message type
     *
     * @param string $line UNH segment
     *
     * @return void
     */
    public function analyseUNH($line)
    {
        if (count($line)<3) {
            return;
        }
        $lineElement = $line[2];
        if (!is_array($lineElement)) {
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
     * @return void
     */
    private function unwrap($string)
    {
        if (!$this->unaChecked && substr($string, 0, 3) === "UNA") {
            $this->analyseUNA(preg_replace("#^UNA#", "", substr($string, 0, 9)));
        }
        if (!$this->unbChecked && substr($string, 0, 3) === "UNB") {
            $this->analyseUNB(preg_replace("#^UNB\+#", "", substr($string, 0, 8)));
        }

        $regex="/(([^".$this->symbRel."]".$this->symbRel."{2})+|[^".$this->symbRel."])".$this->symbEnd."/";
        $string=preg_replace($regex, "$1".$this->stringSafe, $string);
        $file=preg_split(self::$DELIMITER.$this->stringSafe.self::$DELIMITER."i", $string);
        $end = stripslashes($this->symbEnd);
        foreach ($file as $fc => &$line) {
            if (trim($line) == '') {
                unset($file[$fc]);
            }
            $line .= $end;
        }
        return $file;
    }

    //Segments
    private function splitSegment($str)
    {
        $str = strrev(preg_replace(self::$DELIMITER.$this->symbEnd.self::$DELIMITER, "", strrev($str), 1));//remove ending symbEnd
        $str = trim($str);
        $str=preg_replace(self::$DELIMITER.$this->symbRel."{2}".self::$DELIMITER, $this->stringSafe, $str);
        $matches=preg_split(self::$DELIMITER."(?<!".$this->symbRel.")".$this->sepData.self::$DELIMITER, $str); //split on sepData if not escaped (negative lookbehind)
        foreach ($matches as &$value) {
            if (preg_match(self::$DELIMITER."(?<!".$this->symbRel.")".$this->symbEnd.self::$DELIMITER, $value)) {
                $this->errors[]="There's a ".stripslashes($this->symbEnd)." not escaped in the data; string ". $str;
            }
            if (preg_match(self::$DELIMITER."(?<!".$this->symbRel.")".$this->symbRel."(?!".$this->symbRel.")(?!".$this->sepData.")(?!".$this->sepComp.")(?!".$this->symbEnd.")".self::$DELIMITER, $value)) {
                $this->errors[]="There's a character not escaped with ".stripslashes($this->symbRel)." in the data; string ". $value;
            }
            $value=$this->splitData($value); //split on sepComp
        }
        return $matches;
    }

    //Composite data element
    private function splitData($str)
    {
        $replace = function($string) {
            $regex=self::$DELIMITER.$this->symbRel."(?=".$this->symbRel.")|".$this->symbRel."(?=".$this->sepData.")|".$this->symbRel."(?=".$this->sepComp.")|".$this->symbRel."(?=".$this->symbEnd.")".self::$DELIMITER;
            $string=preg_replace($regex, "", $string);
            return preg_replace(self::$DELIMITER.$this->stringSafe.self::$DELIMITER, $this->symbUnescapedRel, $string);
        };

        $arr=preg_split(self::$DELIMITER."(?<!".$this->symbRel.")".$this->sepComp.self::$DELIMITER, $str); //split on sepComp if not escaped (negative lookbehind)

        if (count($arr)==1) {
          return $replace($str);
        }
        foreach ($arr as &$value) {
            $value=$replace($value);
        }
        return $arr;
    }

    //Get errors
    public function errors()
    {
        return $this->errors;
    }

    //Get result
    public function get()
    {
        return $this->parsedfile;
    }

    // Get raw segments array
    public function getRawSegments()
    {
        return $this->rawSegments;
    }

    //load the message from file
    public function load($url)
    {
        $file = file_get_contents($url);
        return $this->loadString($file);
    }

    //load the message from a string
    public function loadString(&$string)
    {
        $string = $this->unwrap($string);
        $this->rawSegments = $string;
        return $this->parse($string);
    }

    // change the default regex used for stripping invalid characters
    public function setStripRegex($regex)
    {
        $this->stripChars=$regex;
    }

    public function getMessageFormat()
    {
        return $this->messageFormat;
    }

    public function getMessageDirectory()
    {
        return $this->messageDirectory;
    }
}