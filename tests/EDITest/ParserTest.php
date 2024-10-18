<?php

declare(strict_types=1);

namespace EDITest;

use EDI\Parser;

/**
 * @internal
 */
final class ParserTest extends \PHPUnit\Framework\TestCase
{
    public function testCustomStripRegex()
    {
        $p = new Parser();
        $p->setStripRegex("/[\x{0001}-\x{001F}\x{0080}-\x{00C0}]/");
        $string = "LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $p->loadString($string)->parse();

        $expected = [['LOC', '11', 'ITGOA'], ['MEA', 'WT', '', ['KGM', '9040']]];
        static::assertSame($expected, $p->get());
    }

    public function testMessageUnwrap()
    {
        $p = new Parser();
        $string = "LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $p->loadString($string)->parse();

        $expected = [['LOC', '11', 'ITGOA'], ['MEA', 'WT', '', ['KGM', '9040']]];
        static::assertSame($expected, $p->get());
    }

    public function testArrayUnwrap()
    {
        $arr = ["LOC+11+ITGOA'MEA+WT++KGM:9040'"];
        $p = new Parser();
        $p->loadArray($arr)->parse();

        $expected = [['LOC', '11', 'ITGOA'], ['MEA', 'WT', '', ['KGM', '9040']]];
        static::assertSame($expected, $p->get());
    }

    public function testArrayParsed()
    {
        $arr = [['LOC', '11', 'ITGOA'], ['MEA', 'WT', '', ['KGM', '9040']]];
        $p = new Parser();
        $p->loadArray($arr,false)->parse();

        $expected = [['LOC', '11', 'ITGOA'], ['MEA', 'WT', '', ['KGM', '9040']]];
        static::assertSame($expected, $p->get());
    }

    public function testGetRawSegments()
    {
        $txt = "LOC+11+ITGOA'MEA+WT++KGM:9040'";
        $p = new Parser();
        $p->loadString($txt);

        $expected = ["LOC+11+ITGOA'", "MEA+WT++KGM:9040'"];
        static::assertSame($expected, $p->getRawSegments());
    }

    public function testParseSimple()
    {
        $p = new Parser();
        $array = ["LOC+9+VNSGN'", "LOC+11+ITGOA'", "MEA+WT++KGM:9040'"];
        $expected = [['LOC', '9', 'VNSGN'], ['LOC', '11', 'ITGOA'], ['MEA', 'WT', '', ['KGM', '9040']]];
        $p->loadArray($array)->parse();
        static::assertSame($expected, $p->get());
    }

    public function testEscapedSegment()
    {
        $string = "EQD+CX??DU12?+3456+2?:0'";
        $expected = [['EQD', 'CX?DU12+3456', '2:0']];
        $p = new Parser();
        $p->loadString($string)->parse();
        static::assertSame($expected, $p->get());
    }

    /** @dataProvider multipleEscapedSegmentsProvider */
    public function testMultipleEscapedSegments($string, $expected)
    {
        $p = new Parser();
        $p->loadString($string)->parse();

        static::assertSame($expected, $p->get());
    }

    public static function multipleEscapedSegmentsProvider()
    {
        return [
            ["EQD+CX??DU12?+3456+2?:0'",      [['EQD', 'CX?DU12+3456', '2:0']]],
            ["EQD+CX????DU12?+3456+2?:0'",    [['EQD', 'CX??DU12+3456', '2:0']]],
            ["EQD+CX??????DU12?+3456+2?:0'",  [['EQD', 'CX???DU12+3456', '2:0']]],
            ["EQD+CX????????DU12?+3456+2?:0'", [['EQD', 'CX????DU12+3456', '2:0']]],
            ["EQD+CX??DU12?+3456+2?:0??'",    [['EQD', 'CX?DU12+3456', '2:0?']]],
            ["EQD+CX??DU12?+3456+2?:0????'",  [['EQD', 'CX?DU12+3456', "2:0??'"]]], // TODO? -> ' is correct here?
            ["EQD+CX??DU12?+3456+2?:0??????'", [['EQD', 'CX?DU12+3456', "2:0???'"]]], // TODO? -> ' is correct here?
            ["??EQD+CX??DU12?+3456+2?:0'",    [['?EQD', 'CX?DU12+3456', '2:0']]],
            ["????EQD+CX??DU12?+3456+2?:0'",  [['??EQD', 'CX?DU12+3456', '2:0']]],
            ["??????EQD+CX??DU12?+3456+2?:0'", [['???EQD', 'CX?DU12+3456', '2:0']]],
            ["EQD??+CX??DU12?+3456+2?:0'",    [['EQD?', 'CX?DU12+3456', '2:0']]],
            ["EQD????+CX??DU12?+3456+2?:0'",  [['EQD??', 'CX?DU12+3456', '2:0']]],
            ["EQD??????+CX??DU12?+3456+2?:0'", [['EQD???', 'CX?DU12+3456', '2:0']]],
            ["EQD+??CX??DU12?+3456+2?:0'",    [['EQD', '?CX?DU12+3456', '2:0']]],
            ["EQD+????CX??DU12?+3456+2?:0'",  [['EQD', '??CX?DU12+3456', '2:0']]],
            ["EQD+??????CX??DU12?+3456+2?:0'", [['EQD', '???CX?DU12+3456', '2:0']]],
        ];
    }

    public function testFileOk()
    {
        $errors = [];
        $string = \file_get_contents(__DIR__ . '/../files/example_order_ok.edi');
        for ($i = 0; $i < 100; ++$i) { // keep for simple performance tests
            $p = new Parser();
            $p->loadString($string)->parse();
            $errors = $p->errors();
        }
        static::assertSame([], $errors);

        $p = new Parser();
        $p->loadString($string)->parse();
        $data = \json_encode($p->get());
        static::assertStringContainsString('Sup 1:10', $data);
        static::assertStringNotContainsString('Konzentrat:o', $data);
        static::assertStringContainsString('"Rindfleischsuppe Konzentrat","o', $data);
    }

    public function testFileError()
    {
        $string = \file_get_contents(__DIR__ . '/../files/example_order_error.edi');
        $p = new Parser();
        $p->loadString($string)->parse();
        $errors = $p->errors();
        static::assertSame(
            [
                0 => 'There\'s a character not escaped with ? in the data; string :::H-Vollmilch 3,5%  ?*?*Marke?*?*:1l Tertra mit Drehverschluss',
            ],
            $errors
        );
    }

    public function testNotPrintableCharacter()
    {
        $string = "EQD+CèèèXDU12?+3456+2?:0'";
        $expected = [['EQD', 'CXDU12+3456', '2:0']];
        $p = new Parser();
        $p->loadString($string)->parse();
        $result = $p->get();
        $experror = "Non-printable character on line 1: EQD+CèèèXDU12?+3456+2?:0'";
        $error = $p->errors();
        static::assertSame($expected, $result);
        static::assertContains($experror, $error);
    }

    public function testNotEscapedSegment()
    {
        $string = "EQD+CX?DU12?+3456+2?:0'";
        $expected = [['EQD', 'CX?DU12+3456', '2:0']];
        $p = new Parser();
        $p->loadString($string)->parse();
        $result = $p->get();
        $experror = "There's a character not escaped with ? in the data; string CX?DU12?+3456";
        $error = $p->errors();
        static::assertSame($expected, $result);
        static::assertContains($experror, $error);
    }

    public function testSegmentWithMultipleSingleQuotes()
    {
        $strings = ["EQD+CX'DU12?+3456+2?:0'", "EQD+CXDU12?+3456+2?:0'"];
        $p = new Parser();
        $p->loadArray($strings)->parse();
        $experror = "There's a ' not escaped in the data; string EQD+CX'DU12?+3456+2?:0";
        $error = $p->errors();
        static::assertContains($experror, $error);
    }

    public function testArrayInputNoErrors()
    {
        $arr = ["LOC+9+VNSGN'", "LOC+11+ITGOA'"];
        $p = new Parser();
        $p->loadArray($arr)->parse();
        $result = $p->errors();
        static::assertEmpty($result);
    }

    public function testArrayInputEmptyLine()
    {
        $arr = ["LOC+9+VNSGN'", '', "LOC+11+ITGOA'"];
        $p = new Parser();
        $p->loadArray($arr)->parse();
        $result = $p->errors();
        static::assertEmpty($result);
    }

    public function testLoadFile()
    {
        $p = new Parser();
        $p->load(__DIR__ . '/../files/example.edi')->parse();
        $result = $p->errors();
        static::assertEmpty($result);
    }

    public function testLoadWrappedFile()
    {
        $parser = new Parser();
        $parser->load(__DIR__ . '/../files/example_wrapped.edi');
        $syntaxId = $parser->getSyntaxIdentifier();
        $parser->parse();
        $result = $parser->errors();
        static::assertEmpty($result);
        static::assertSame('IATB', $syntaxId);
    }

    public function testUNHWithoutMessageType()
    {
        $arr = ['UNH+123', "LOC+9+VNSGN'", "LOC+11+ITGOA'"];
        $p = new Parser();
        $p->loadArray($arr)->parse();
        static::assertNull($p->getMessageFormat());
        static::assertNull($p->getMessageDirectory());
    }

    public function testUNHData()
    {
        $arr = ["UNH+1452515553811+COARRI:D:95B:UN:ITG13'"];
        $p = new Parser();
        $p->loadArray($arr)->parse();
        static::assertSame('1452515553811', $p->getMessageNumber());
        static::assertSame('COARRI', $p->getMessageFormat());
        static::assertSame('95B', $p->getMessageDirectory());
    }

    public function testUNHDataOnlyFormat()
    {
        $arr = ["UNH+1452515553811+COARRI'"];
        $p = new Parser();
        $p->loadArray($arr)->parse();
        static::assertSame('1452515553811', $p->getMessageNumber());
        static::assertSame('COARRI', $p->getMessageFormat());
        static::assertNull($p->getMessageDirectory());
    }

    public function testUNAString()
    {
        $p = new Parser();
        $p->loadArray(["UNA:+.? '", 'UNH+123', "LOC+9+VNSGN'"])->parse();
        $result = $p->errors();
        static::assertEmpty($result);
    }

    /*
    public function testBigFile()
    {
        $p = new Parser();
        $p->load(__DIR__ . "/../files/example_big.edi");
        $result = $p->errors();
        $this->assertSame([], $result);
    }
     */

    public function testReleaseCharacter()
    {
        $p = new Parser();
        $p->load(__DIR__ . '/../files/example_release_character.edi')->parse();
        $loaded = $p->get();
        $result = $p->errors();
        static::assertEmpty($result);

        static::assertSame($loaded[5][2], 'NO MORE FLIGHTS 1');
        static::assertSame($loaded[6][2], 'NO MORE FLIGHTS 2?');
        static::assertSame($loaded[7][2], 'NO MORE \' FLIGHTS 3');
        static::assertSame($loaded[8][2], 'NO MORE ? FLIGHTS 3');
        static::assertSame($loaded[9][2], 'NO MORE ?\' FLIGHTS 3');

        static::assertSame($loaded[10][2], 'FIELD 1');
        static::assertSame($loaded[10][3], 'FIELD 2');

        static::assertSame($loaded[11][2], 'FIELD 1?');
        static::assertSame($loaded[11][3], 'FIELD 2');

        static::assertSame($loaded[12][2], 'FIELD 1?+FIELD 2');

        static::assertSame($loaded[13][2][0], 'FIELD 1.1');
        static::assertSame($loaded[13][2][1], 'FIELD 1.2');

        static::assertSame($loaded[14][2][0], 'FIELD 1.1?');
        static::assertSame($loaded[14][2][1], 'FIELD 1.2');

        static::assertSame($loaded[15][2], 'FIELD 1.1?:FIELD 1.2');
    }

    public function testUtf8EncodedSourceAndOutput()
    {
        $p = new Parser();
        $p->load(__DIR__ . '/../files/example_utf8.edi');
        $p->setSourceEncoding('UTF-8');
        $loaded = $p->get('UTF-8');
        static::assertSame($loaded[11][3][3], 'MUNCIË THE MIDDLE');
    }
}
