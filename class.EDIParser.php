<?php
/*
EDIFACT messages parser

Input a valid path to an edi file
	$c=new EDIParser('name.edi');
	or
	$c=new EDIParser();
	$c->parse('name.edi');
Output a multidimensional array.
	Errors $c->errors()
	Array  $c->get()
	Json $c->getJson()
*/

class EDIParser
{
	public $parsedfile;
	private $errors;

	public function __construct($url=null)
	{
		if ($url!==null) $this->parse($url);
		$errors=array();
	}
	
	public function parse($url)
	{
		$file=file($url);
		$file2=array();

		//split if oneliner and remove whitespace (UNWRAP)
		if (count($file)==1)
		{
			$file=preg_split("/\'/i", $file[0]);
			foreach($file as &$line) 
			{
			$temp=trim($line)."'";
			if($temp!="'")
				$file2[]=$temp;
			}
		}
		else $file2=$file;
		
		$i=0;
		foreach ($file2 as $x=>&$line)
		{
			$i++;
			$line = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $line); //basic sanitization, remove non printable chars
			
			$line = preg_replace('#[\r\n]#', '', $line); //carriage return removal (CR+LF)
			if (strlen($line)==0) {
			unset($file2[$x]);
			continue;
			}
			if (strrpos($line,"'")!=strlen($line)-1) 
					$this->errors[]='Segment not ended correctly at line '.$i. " => ". $line;
			$line=$this->splitSegment($line);
		}
		$this->parsedfile=$file2;
		return $file2;
	}
	
	private function splitSegment($str) //segment
	{
		$str = strrev(str_replace("'","",strrev($str)));//remove ending " ' "
		$matches=preg_split("~\?[:'\+\?]{1}(*SKIP)(*FAIL)|\+~s", $str); //split except release character
		foreach ($matches as &$value)
		{ 
			if (preg_match("~\?[:'\+\?]{1}(*SKIP)(*FAIL)|['\+\?]~s",$value)) $this->errors[]="There's a not escaped character in the data; string ". $str; //no char except : without release character
			$value=str_replace("?","",$value); //delete release char
			$value=$this->splitData($value);
		}
		return $matches;
	}

	private function splitData($str) //composite data element
	{
		$arr=explode(":",$str);
		if (count($arr)==1) return $str;
		return $arr;
	}

	//export
	public function errors()
	{
		if(count($this->errors)==0)	return false;
		return $this->errors;
	}
	
	public function get()
	{
		return $this->parsedfile;
	}

	public function getJson()
	{
		return json_encode($this->parsedfile);
	}
}
?>
