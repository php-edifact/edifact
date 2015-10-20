<?php
/*
EDIFACT Messages Parser
(c)2014 Stefano Sabatini

INPUT
	$c=new Parser(X);
		Where X could be:
		-an url
		-a string (wrapped message)
		-an array of strings (a segment per entry)
	or
	$c=new Parser();
	followed by parse, load and/or unwrap

OUTPUT
	Errors $c->errors()
	Array  $c->get()
*/

namespace EDI;

class Parser
{
	private $parsedfile;
	private $obj;
	private $errors;

	public function __construct($url=null)
	{
		$this->errors=array();
		if($url===null) return;

		if (is_array($url)) //ARRAY
		{
			$tmparr=$url;
			if (count($url)==1) //containing only one row
			{
				$tmparr=$this->unwrap($url[0]);
			}
			$this->parse($tmparr);
		}
		else
		if (file_exists($url))
			$this->load($url); //FILE URL
		else
		{
			$this->parse($this->unwrap($url)); //STRING
		}
	}

	//Parse edi array
	function parse($file2)
	{
		$i=0;
		foreach ($file2 as $x=>&$line)
		{
			$i++;
			$line = preg_replace('#[\r\n]#', '', $line); //carriage return removal (CR+LF)
			if (preg_match("/[\x01-\x1F\x80-\xFF]/",$line))
				$this->errors[]="There's a not printable character on line ".($x+1).": ". $line;
			$line = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $line); //basic sanitization, remove non printable chars
			if (strlen($line)==0 || substr( $line, 0, 3 ) === "UNA")
			{
				unset($file2[$x]);
				continue;
			}
			if (strrpos($line,"'")!=strlen($line)-1)
				$this->errors[]='Segment not ended correctly at line '.$i. "=>". $line;
			$line=$this->splitSegment($line);
		}
		$this->parsedfile=array_values($file2); //reindex
		return $file2;
	}

	//unwrap string splitting rows on terminator (if not escaped)
	function unwrap($string)
	{
		$file2=array();
		$file=preg_split("/(?<!\?)'/i", $string);
		foreach($file as &$line)
		{
			$temp=trim($line)."'";
			if($temp!="'")
				$file2[]=$temp;
		}
		return $file2;
	}

	//Segments
	function splitSegment($str)
	{
		$str = strrev(preg_replace("/'/", "", strrev($str), 1));//remove ending " ' "
		$matches=preg_split("/(?<!\?)\+/", $str); //split on + if not escaped (negative lookbehind)
		foreach ($matches as &$value)
		{
			if (preg_match("/(?<!\?)'/",$value))
				$this->errors[]="There's a ' not escaped in the data; string ". $str;
			if (preg_match("/(?<!\?)\?(?!\?)(?!\+)(?!:)(?!')/",$value))
				$this->errors[]="There's a character not escaped with ? in the data; string ". $value;
			$value=$this->splitData($value); //split on :
		}
		return $matches;
	}

	//Composite data element
	function splitData($str)
	{
		$arr=preg_split("/(?<!\?):/", $str); //split on : if not escaped (negative lookbehind)
		if (count($arr)==1)
			return preg_replace("/\?(?=\?)|\?(?=\+)|\?(?=:)|\?(?=')/", "",$str); //remove ? if not escaped
		foreach ($arr as &$value)
			$value=preg_replace("/\?(?=\?)|\?(?=\+)|\?(?=:)|\?(?=')/", "",$value);
		return $arr;
	}

	//Get errors
	function errors()
	{
		return $this->errors;
	}

	//Get result
	function get()
	{
		return $this->parsedfile;
	}

	function load($url)
	{
		$file=file($url);
		if (count($file)==1) //containing only one row
		{
			return $this->parse($this->unwrap($file[0]));
		}
		return $this->parse($file);
	}
}
