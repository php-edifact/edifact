<?php

namespace EDITest;

use EDI\Parser;

/**
 * Class ParserTest
 * @package EDITest
 * @author Stefano Sabatini <sabas88@gmail.com>
 */

class ParserTest extends \PHPUnit_Framework_TestCase
{
    public function testCustomStripRegex()
    {
        $p=new Parser();
        $p->setStripRegex("/[\x{0001}-\x{001F}\x{0080}-\x{00C0}]/");
        $string="LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $test=$p->loadString($string);

        $expected=array(array("LOC","11","ITGOA"),array("MEA","WT","",array("KGM","9040")));
        $this->assertEquals($expected, $test);
    }

    public function testMessageUnwrap()
    {
        $p=new Parser();
        $string="LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $test=$p->loadString($string);

        $expected=array(array("LOC","11","ITGOA"),array("MEA","WT","",array("KGM","9040")));
        $this->assertEquals($expected, $test);
    }

    public function testArrayUnwrap()
    {
        $arr=["LOC+11+ITGOA'MEA+WT++KGM:9040'"];
        $p=new Parser($arr);
        $test=$p->get();
        $expected=array(array("LOC","11","ITGOA"),array("MEA","WT","",array("KGM","9040")));
        $this->assertEquals($expected, $test);
    }

    public function testGetRawSegments()
    {
        $txt="LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $p=new Parser($txt);
        $test=$p->getRawSegments();
        $expected=array("LOC+11+ITGOA'","MEA+WT++KGM:9040'");
        $this->assertEquals($expected, $test);
    }

    public function testParseSimple()
    {
        $p=new Parser();
        $array=array("LOC+9+VNSGN'","LOC+11+ITGOA'","MEA+WT++KGM:9040'");
        $expected=[["LOC","9","VNSGN"],["LOC","11","ITGOA"],["MEA","WT","",["KGM","9040"]]];
        $p->parse($array);
        $result=$p->get();
        $this->assertEquals($expected, $result);
    }

    public function testEscapedSegment()
    {

        $string="EQD+CX??DU12?+3456+2?:0'";
        $expected=[["EQD","CX?DU12+3456","2:0"]];
        $p=new Parser($string);
        $result=$p->get();
        $this->assertEquals($expected, $result);
    }

    public function testNotPrintableCharacter()
    {
        $string="EQD+CèèèXDU12?+3456+2?:0'";
        $expected=[["EQD","CXDU12+3456","2:0"]];
        $p=new Parser($string);
        $result=$p->get();
        $experror="There's a not printable character on line 1: EQD+CèèèXDU12?+3456+2?:0'";
        $error=$p->errors();
        $this->assertEquals($expected, $result);
        $this->assertContains($experror, $error);
    }

    public function testNotEscapedSegment()
    {
        $string="EQD+CX?DU12?+3456+2?:0'";
        $expected=[["EQD","CX?DU12+3456","2:0"]];
        $p=new Parser($string);
        $result=$p->get();
        $experror="There's a character not escaped with ? in the data; string CX?DU12?+3456";
        $error=$p->errors();
        $this->assertEquals($expected, $result);
        $this->assertContains($experror, $error);
    }

    public function testSegmentWithMultipleSingleQuotes()
    {
        $string=["EQD+CX'DU12?+3456+2?:0'","EQD+CXDU12?+3456+2?:0'"];
        $p=new Parser();
        $p->parse($string);
        $result=$p->get();
        $experror="There's a ' not escaped in the data; string EQD+CX'DU12?+3456+2?:0";
        $error=$p->errors();
        $this->assertContains($experror, $error);
    }

    public function testNotTerminatedSegment()
    {

        $arr= ["LOC+9+VNSGN","LOC+11+ITGOA'"];
        $error="Segment not ended correctly at line 1=>LOC+9+VNSGN";
        $p=new Parser($arr);
        $result=$p->errors();
        $this->assertContains($error, $result);
    }

    public function testArrayInputNoErrors()
    {
        $arr= ["LOC+9+VNSGN'","LOC+11+ITGOA'"];
        $p=new Parser($arr);
        $result=$p->errors();
        $this->assertEmpty($result);
    }

    public function testLoadFile()
    {
        $p=new Parser(__DIR__."/../files/example.edi");
        $result=$p->errors();
        $this->assertEmpty($result);
    }

    public function testLoadWrappedFile()
    {
        $p=new Parser(__DIR__."/../files/example_wrapped.edi");
        $result=$p->errors();
        $this->assertEmpty($result);
    }
}
