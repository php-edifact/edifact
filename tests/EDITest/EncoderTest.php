<?php

namespace EDITest;

use EDI\Encoder;

class EncoderTest extends \PHPUnit\Framework\TestCase
{
    public function testEncodeNull()
    {
        $message = null;
        $e = new Encoder($message);
        $this->assertInstanceOf('EDI\Encoder', $e);
    }

    public function testEncodeMessage()
    {
        $message = [["LOC", "9", "VNSGN"], ["LOC", "11", "ITGOA"], ["MEA", "WT", "", ["KGM", "9040"]]];
        $expected = "LOC+9+VNSGN'LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $res = (new Encoder($message))->get();
        $this->assertSame($expected, $res);
    }

    public function testEncodeMessageNotWrapped()
    {
        $message = [["LOC", "9", "VNSGN"], ["LOC", "11", "ITGOA"], ["MEA", "WT", "", ["KGM", "9040"]]];
        $expected = "LOC+9+VNSGN'\nLOC+11+ITGOA'\nMEA+WT++KGM:9040'";
        $res = (new Encoder($message, false))->get();
        $this->assertSame($expected, $res);
    }

    public function testEncodeMessageWithUNA()
    {
        $message = [["LOC", "9", "VNSGN"], ["LOC", "11", "ITGOA"], ["MEA", "WT", "", ["KGM", "9040"]]];
        $expected = "UNA:+.? 'LOC+9+VNSGN'LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $e = new Encoder($message);
        $e->setUNA("&+.?");
        $e->disableUNA();
        $e->enableUNA();
        $res = $e->get();
        $this->assertSame($expected, $res);
        $e->setUNA("&+.? '", true);
        $res2 = $e->get();
        $expected2 = "UNA&+.? 'LOC+9+VNSGN'LOC+11+ITGOA'MEA+WT++KGM&9040'";
        $this->assertSame($expected2, $res2);
    }
}
