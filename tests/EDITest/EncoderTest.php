<?php

namespace EDITest;

use EDI\Encoder;

/**
 * Class EncoderTest
 * @package EDITest
 * @author Stefano Sabatini <sabas88@gmail.com>
 */
class EncoderTest extends \PHPUnit_Framework_TestCase
{
    public function testEncodeNull()
    {
        $message= null;
        $e= new Encoder($message);
        $this->assertInstanceOf('EDI\Encoder', $e);
    }

    public function testEncodeMessage()
    {
        $message=[["LOC","9","VNSGN"],["LOC","11","ITGOA"],["MEA","WT","",["KGM","9040"]]];
        $expected="LOC+9+VNSGN'LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $e = new Encoder($message);
        $res = $e->get();
        $this->assertEquals($expected, $res);
    }

    public function testEncodeMessageNotWrapped()
    {
        $message=[["LOC","9","VNSGN"],["LOC","11","ITGOA"],["MEA","WT","",["KGM","9040"]]];
        $expected="LOC+9+VNSGN'\nLOC+11+ITGOA'\nMEA+WT++KGM:9040'";
        $e = new Encoder($message, false);
        $res = $e->get();
        $this->assertEquals($expected, $res);
    }
}
