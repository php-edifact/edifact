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
    
    /**
     * @var string : component separator character (default :)
     */
    private $sep_comp;
    /**
     * @var string : data separator character (default +)
     */
    private $sep_data;
    /**
     * @var string : dec separator character (no use but here) (default .)
     */
    private $sep_dec;
    /**
     * @var string : release character (default ?)
     */
    private $symb_rel;
    /**
     * @var string : repetition character (no use but here) (default *)
     */
    private $symb_rep;
    /**
     * @var string : end character (default ')
     */
    private $symb_end;
    
    /**
     * @var bool : true when UNA's characters are known
     */
    private $una_checked = false;

    public function __construct($url = null)
    {
        if($this->una_checked)
            $this->resetUNA();
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
            else if(substr($line, 0, 3) === "UNA") {
                if(!$this->una_checked)
                    $this->analyseUNA($line);
                unset($file2[$x]);
                continue;
            }
            $line=$this->splitSegment($line);
        }
        $this->parsedfile=array_values($file2); //reindex
        return $file2;
    }
    
    
    /**
     * Reset UNA's characters definition
     */
    private function resetUNA()
    {
    	$this->sep_comp = "\:";
    	$this->sep_data = "\+";
    	$this->sep_dec = "."; // See later if a preg_quote is needed
    	$this->symb_rel = "\?";
    	$this->symb_rep = "*"; // See later if a preg_quote is needed
    	$this->symb_end = "'";
    	$this->una_checked = false;
    }
    
    /**
     * Read UNA's characters definition  
     * @param string $line : UNA definition line
     */
    private function analyseUNA($line)
    {
    	$line = preg_replace("#^UNA#", "", $line);
    	if(isset($line{0})) {
    	    $this->sep_comp = preg_quote($line{0});
    	    if(isset($line{1})) {
    	        $this->sep_data = preg_quote($line{1});
    	        if(isset($line{2})) {
    	            $this->sep_dec = $line{2}; // See later if a preg_quote is needed
    	            if(isset($line{3})) {
    	                $this->symb_rel = preg_quote($line{3});
    	                if(isset($line{4})) {
    	                    $this->symb_rep = $line{4}; // See later if a preg_quote is needed
    	                    if(isset($line{5})) {
    	                        $this->symb_end = preg_quote($line{5});
    	                    }
    	                }
    	            }
    	        }
    	    }
    	    $this->una_checked = true;
    	}
    }
    
    //unwrap string splitting rows on terminator (if not escaped)
    private function unwrap($string)
    {
        if(!$this->una_checked && substr($string, 0, 3) === "UNA")
    		$this->analyseUNA(substr($string, 0, 9));
        $file2=array();
        $file=preg_split("/(?<!".$this->symb_rel.")".$this->symb_end."/i", $string);
        $end = stripslashes($this->symb_end);
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
        $str = strrev(preg_replace("/".$this->symb_end."/", "", strrev($str), 1));//remove ending symb_end
        $str = trim($str);
        $matches=preg_split("/(?<!".$this->symb_rel.")".$this->sep_data."/", $str); //split on sep_data if not escaped (negative lookbehind)
        foreach ($matches as &$value) {
            if (preg_match("/(?<!".$this->symb_rel.")".$this->symb_end."/", $value)) {
                $this->errors[]="There's a ".stripslashes($this->symb_end)." not escaped in the data; string ". $str;
            }
            if (preg_match("/(?<!".$this->symb_rel.")".$this->symb_rel."(?!".$this->symb_rel.")(?!".$this->sep_data.")(?!".$this->sep_comp.")(?!".$this->symb_end.")/", $value)) {
                $this->errors[]="There's a character not escaped with ".stripslashes($this->symb_rel)." in the data; string ". $value;
            }
            $value=$this->splitData($value); //split on sep_comp
        }
        return $matches;
    }

    //Composite data element
    private function splitData($str)
    {
        $arr=preg_split("/(?<!".$this->symb_rel.")".$this->sep_comp."/", $str); //split on sep_comp if not escaped (negative lookbehind)
        if (count($arr)==1) {
            return preg_replace("/".$this->symb_rel."(?=".$this->symb_rel.")|".$this->symb_rel."(?=".$this->sep_data.")|".$this->symb_rel."(?=".$this->sep_comp.")|".$this->symb_rel."(?=".$this->symb_end.")/", "", $str); //remove symb_rel if not escaped
        }     foreach ($arr as &$value) {
              $value=preg_replace("/".$this->symb_rel."(?=".$this->symb_rel.")|".$this->symb_rel."(?=".$this->sep_data.")|".$this->symb_rel."(?=".$this->sep_comp.")|".$this->symb_rel."(?=".$this->symb_end.")/", "", $value);
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
