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
	private $obj;
	public $errors;

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
					$this->errors[]='Segment not ended correctly at line '.$i. "=>". $line;
			$line=$this->splitSegment($line);
		}
		$this->parsedfile=$file2;
		return $file2;
	}
	
	function splitSegment($str) //segment
	{
		$str = strrev(preg_replace("/'/", "", strrev($str), 1));//remove ending " ' "
		$matches=preg_split("/(?<!\?)\+/", $str); //split on + if not escaped (negative lookbehind)
		foreach ($matches as &$value)
		{ 
			if (preg_match("/(?<!\?)'/",$value)) $this->errors[]="There's a ' not escaped in the data; string ". $str;
			if (preg_match("/(?<!\?)\?(?!\?)(?!\+)(?!:)(?!')/",$value)) $this->errors[]="There's a ? not escaped in the data; string ". $value;
			$value=$this->splitData($value); //split on :
		}
		return $matches;
	}

	function splitData($str) //composite data element
	{
		$arr=preg_split("/(?<!\?):/", $str); //split on : if not escaped (negative lookbehind)
		if (count($arr)==1) return $str;
		foreach ($arr as &$value) $value=str_replace("?","",$value);
		return $arr;
	} 
}
?>
