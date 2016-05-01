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
    private $obj;
    private $errors;
    private $stripChars="/[\x01-\x1F\x80-\xFF]/";

    public function __construct($url = null)
    {
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
            if (strlen($line)<2 || substr($line, 0, 3) === "UNA") {
                unset($file2[$x]);
                continue;
            }
            $line=$this->splitSegment($line);
        }
        $this->parsedfile=array_values($file2); //reindex
        return $file2;
    }

    //unwrap string splitting rows on terminator (if not escaped)
    private function unwrap($string)
    {
        $file2=array();
        $file=preg_split("/(?<!\?)'/i", $string);
        foreach ($file as &$line) {
            $temp=$line."'";
            if ($temp!="'") {
                $file2[]=$temp;
            }
        }
        return $file2;
    }

    //Segments
    private function splitSegment($str)
    {
        $str = strrev(preg_replace("/'/", "", strrev($str), 1));//remove ending " ' "
        $str = trim($str);
        $matches=preg_split("/(?<!\?)\+/", $str); //split on + if not escaped (negative lookbehind)
        foreach ($matches as &$value) {
            if (preg_match("/(?<!\?)'/", $value)) {
                $this->errors[]="There's a ' not escaped in the data; string ". $str;
            }
            if (preg_match("/(?<!\?)\?(?!\?)(?!\+)(?!:)(?!')/", $value)) {
                $this->errors[]="There's a character not escaped with ? in the data; string ". $value;
            }
            $value=$this->splitData($value); //split on :
        }
        return $matches;
    }

    //Composite data element
    private function splitData($str)
    {
        $arr=preg_split("/(?<!\?):/", $str); //split on : if not escaped (negative lookbehind)
        if (count($arr)==1) {
            return preg_replace("/\?(?=\?)|\?(?=\+)|\?(?=:)|\?(?=')/", "", $str); //remove ? if not escaped
        }     foreach ($arr as &$value) {
              $value=preg_replace("/\?(?=\?)|\?(?=\+)|\?(?=:)|\?(?=')/", "", $value);
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
}
