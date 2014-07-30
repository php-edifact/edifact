<?php
class ParserTest extends PHPUnit_Framework_TestCase
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
        $p=new Parser();
        $string="EQD+CX??DU12?+3456+2?:0'";
        $expected=[["EQD","CX?DU12+3456","2:0"]];
        $p->splitSegment($string);
        $result=$p->get();
        $this->assertEquals($expected,$result);    
    }
    
    public function testNotEscapedSegment()
    {
        $p=new Parser();
        $string="EQD+CX?DU12?+3456+2?:0'";
        $expected=[["EQD","CX?DU12+3456","2:0"]];
        $p->splitSegment($string);
        $result=$p->get();
        $experror="There's a ? not escaped in the data; string CX?DU12?+3456";
        $error=$p->errors();
        $this->assertEquals($expected,$result);
        $this->assertContains($experror,$error);
    }
    
    public function testNotTerminatedSegment()
    {
        $p=new Parser();
        $string="LOC+9+VNSGN\nLOC+11+ITGOA'";
        $error="Segment not ended correctly at line 1=>LOC+9+VNSGN";
        $p->parse($string);
        $result=$p->errors();
        $this->assertContains($error,$result);    
    }
    
    public function testNoErrors()
    {
        $p=new Parser();
        $string="LOC+9+VNSGN'\nLOC+11+ITGOA'";
        $p->parse($string);
        $result=$p->errors();
        $this->assertEmpty($result);    
    }
}
?>