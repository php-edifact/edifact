<?php

namespace EDITest;

use EDI\Parser;

/**
 * Class EncoderTest
 * @package EDITest
 * @author Stefano Sabatini <sabas88@gmail.com>
 */
 
class ParserTest extends \PHPUnit_Framework_TestCase
{
    public function testMessageUnwrap()
    {
        $p=new Parser();
        $string="LOC+9+VNSGN'LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $test=$p->unwrap($string);

        $expected=array("LOC+9+VNSGN'","LOC+11+ITGOA'","MEA+WT++KGM:9040'");
        $this->assertEquals($expected,$test);
    }

    public function testParseSimple()
    {
        $p=new Parser();
        $array=array("LOC+9+VNSGN'","LOC+11+ITGOA'","MEA+WT++KGM:9040'");
        $expected=[["LOC","9","VNSGN"],["LOC","11","ITGOA"],["MEA","WT","",["KGM","9040"]]];
        $p->parse($array);
        $result=$p->get();
        $this->assertEquals($expected,$result);
    }

    public function testEscapedSegment()
    {

        $string="EQD+CX??DU12?+3456+2?:0'";
        $expected=[["EQD","CX?DU12+3456","2:0"]];
        $p=new Parser($string);
        $result=$p->get();
        $this->assertEquals($expected,$result);
    }

    public function testNotEscapedSegment()
    {

        $string="EQD+CX?DU12?+3456+2?:0'";
        $expected=[["EQD","CX?DU12+3456","2:0"]];
         $p=new Parser($string);
        $result=$p->get();
        $experror="There's a character not escaped with ? in the data; string CX?DU12?+3456";
        $error=$p->errors();
        $this->assertEquals($expected,$result);
        $this->assertContains($experror,$error);
    }

    public function testNotTerminatedSegment()
    {

        $arr= ["LOC+9+VNSGN","LOC+11+ITGOA'"];
        $error="Segment not ended correctly at line 1=>LOC+9+VNSGN";
        $p=new Parser($arr);
        $result=$p->errors();
        $this->assertContains($error,$result);
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
?>
