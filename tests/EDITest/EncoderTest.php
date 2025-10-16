<?php

namespace EDITest;

use EDI\Encoder;

/**
 * @internal
 */
final class EncoderTest extends \PHPUnit\Framework\TestCase
{
    public function testEncodeNull()
    {
        $message = null;
        $e = new Encoder($message);
        self::assertInstanceOf('EDI\Encoder', $e);
    }

    public function testEncodeMessage()
    {
        $message = [['LOC', '9', 'VNSGN'], ['LOC', '11', 'ITGOA'], ['MEA', 'WT', '', ['KGM', '9040']]];
        $expected = "LOC+9+VNSGN'LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $res = (new Encoder($message))->get();
        self::assertSame($expected, $res);
    }

    public function testEncodeMessageNotWrapped()
    {
        $message = [['LOC', '9', 'VNSGN'], ['LOC', '11', 'ITGOA'], ['MEA', 'WT', '', ['KGM', '9040']]];
        $expected = "LOC+9+VNSGN'\nLOC+11+ITGOA'\nMEA+WT++KGM:9040'";
        $res = (new Encoder($message, false))->get();
        self::assertSame($expected, $res);
    }

    public function testEncodeMessageWithUNA()
    {
        $message = [['LOC', '9', 'VNSGN'], ['LOC', '11', 'ITGOA'], ['MEA', 'WT', '', ['KGM', '9040']]];
        $expected = "UNA:+.? 'LOC+9+VNSGN'LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $e = new Encoder($message);
        $e->setUNA('&+.?');
        $e->disableUNA();
        $e->enableUNA();
        $res = $e->get();
        self::assertSame($expected, $res);
        $e->setUNA("&+.? '", true);
        $res2 = $e->get();
        $expected2 = "UNA&+.? 'LOC+9+VNSGN'LOC+11+ITGOA'MEA+WT++KGM&9040'";
        self::assertSame($expected2, $res2);

        $e->setUNA("&+.? '", true);
        $e->encode($message, false); //test compact
        $res3 = $e->get();
        $expected3 = "UNA&+.? '\nLOC+9+VNSGN'\nLOC+11+ITGOA'\nMEA+WT++KGM&9040'";
        self::assertSame($expected3, $res3);
    }

    public function testMessageWithSingleElement()
    {
        $message = [['LOC', '9', 'VNSGN'], ['CNT', [['11']]]];
        $expected = "LOC+9+VNSGN'CNT+11'";
        $e = new Encoder($message);
        $res = $e->get();
        self::assertSame($expected, $res);
    }
}
