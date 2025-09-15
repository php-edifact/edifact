<?php
/**
 * EDIFACT Messages Parser
 * (c)2016 Stefano Sabatini
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
    /**
     * @var string : repetition character (no use but here) (default *)
     */
    private $symbRep;
    /**
     * @var string : end character (default ')
     */
    private $symbEnd;
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
        "UNOC" => "/[\x01-\x1F\x7F-\x9F]/",
        "UNOW" => "/[\x01-\x1F\x7F-\x9F]/",
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
        if ($url===null) {
            return;
        }
        if (is_array($url)) {
            $tmparr=$url;
            if (count($url) == 1) {
                $tmparr=$this->unwrap($url[0]);
            }
            $this->rawSegments = $tmparr;
            $this->parse($tmparr);
        } elseif (file_exists($url)) {
            $this->load($url); //FILE URL
        } else {
            $this->loadString($url); //STRING
        }
    }

    //Parse edi array
    public function parse($file2)
    {
        $i=0;
        $this->errors=array();
        foreach ($file2 as $x => &$line) {
            $i++;
            $line = preg_replace('#[\x00\r\n]#', '', $line); //null byte and carriage return removal (CR+LF)
            if (preg_match($this->stripChars, $line)) {
                $this->errors[]="There's a not printable character on line ".$i.": ". $line;
            }
            $line = preg_replace($this->stripChars, '', $line); //basic sanitization, remove non printable chars
            if (strlen($line)<2) {
                unset($file2[$x]);
                continue;
            }
            switch (substr($line, 0, 3)) {
                case "UNA":
                    if (!$this->unaChecked) {
                        $this->analyseUNA(substr($line, 4, 6));
                    }
                    unset($file2[$x]);
                    break;
                case "UNB":
                    $line=$this->splitSegment($line);
                    if (!$this->unbChecked) {
                        $this->analyseUNB($line[1]);
                    }
                    break;
                case "UNH":
                    $line=$this->splitSegment($line);
                    $this->analyseUNH($line);
                    break;
                default:
                    $line=$this->splitSegment($line);
                    break;
            }
        }
        $this->parsedfile=array_values($file2); //reindex
        return $file2;
    }


    /**
     * Reset UNA's characters definition
     */
    private function resetUNA()
    {
        $this->sepComp = "\:";
        $this->sepData = "\+";
        $this->sepDec = "."; // See later if a preg_quote is needed
        $this->symbRel = "\?";
        $this->symbRep = "*"; // See later if a preg_quote is needed
        $this->symbEnd = "'";
        $this->unaChecked = false;
    }

    /**
     * Reset UNB's encoding definition
     */
    private function resetUNB()
    {
        $this->encoding ="UNOB";
        $this->unbChecked = false;
    }

    /**
     * Read UNA's characters definition
     * @param string $line : UNA definition line (without UNA tag). Example : :+.? '
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
     * Read UNA's characters definition
     * @param string $line : UNB definition line (without UNB tag). Example UNOA:2
     */
    public function analyseUNB($encoding)
    {
        if (is_array($encoding)) {
            $encoding = $encoding[0];
        }
        $this->encoding = $encoding;
        if (isset($this->encodingToStripChars[$encoding])) { // we have a normed char set for your content
            $this->setStripRegex($this->encodingToStripChars[$encoding]);
        }
        $this->unbChecked = true;
    }

    /**
     * Identify message type
     * @param string $line : UNH segment
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

    //unwrap string splitting rows on terminator (if not escaped)
    private function unwrap($string)
    {
        if (!$this->unaChecked && substr($string, 0, 3) === "UNA") {
            $this->analyseUNA(preg_replace("#^UNA#", "", substr($string, 0, 9)));
        }
        if (!$this->unbChecked && substr($string, 0, 3) === "UNB") {
            $this->analyseUNB(preg_replace("#^UNB\+#", "", substr($string, 0, 8)));
        }

        $file2=array();
        $file=preg_split(self::$DELIMITER."(?<!".$this->symbRel.")".$this->symbEnd.self::$DELIMITER."i", $string);
        $end = stripslashes($this->symbEnd);
        foreach ($file as &$line) {
            $temp=$line.$end;
            if ($temp!=$end) {
                $file2[]=$temp;
            }
        }
        return $file2;
    }

    //Segments
    private function splitSegment($str)
    {
        $str = strrev(preg_replace(self::$DELIMITER.$this->symbEnd.self::$DELIMITER, "", strrev($str), 1));//remove ending symbEnd
        $str = trim($str);
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
        $arr=preg_split(self::$DELIMITER."(?<!".$this->symbRel.")".$this->sepComp.self::$DELIMITER, $str); //split on sepComp if not escaped (negative lookbehind)
        if (count($arr)==1) {
            return preg_replace(self::$DELIMITER.$this->symbRel."(?=".$this->symbRel.")|".$this->symbRel."(?=".$this->sepData.")|".$this->symbRel."(?=".$this->sepComp.")|".$this->symbRel."(?=".$this->symbEnd.")".self::$DELIMITER, "", $str); //remove symbRel if not escaped
        }     foreach ($arr as &$value) {
              $value=preg_replace(self::$DELIMITER.$this->symbRel."(?=".$this->symbRel.")|".$this->symbRel."(?=".$this->sepData.")|".$this->symbRel."(?=".$this->sepComp.")|".$this->symbRel."(?=".$this->symbEnd.")".self::$DELIMITER, "", $value);
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
    public function loadString($string)
    {
        $arr = $this->unwrap($string);
        $this->rawSegments = $arr;
        return $this->parse($arr);
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
