<?php

namespace EDITest;

use EDI\Analyser;
use EDI\Encoder;
use EDI\Interpreter;
use EDI\Parser;

/**
 * @internal
 */
final class InterpreterTest extends \PHPUnit\Framework\TestCase
{
    public function testCOARRI()
    {
        $parser = new Parser();
        $parser->load(__DIR__.'/../files/D95BCOARRI.edi')->parse();

        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('COARRI'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());

        self::assertCount(3, $interpreter->getMessages()); //2 + service
        self::assertCount(0, $interpreter->getErrors());
        self::assertCount(2, $interpreter->getServiceSegments());
    }

    public function testServiceSegments()
    {
        $parser = new Parser();
        $parser->load(__DIR__.'/../files/D95BCOARRI.edi')->parse();

        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('COARRI'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        $svc = $interpreter->getServiceSegments();
        $svcjson = $interpreter->getJsonServiceSegments();
        $svcjsonpretty = $interpreter->getJsonServiceSegments(true);
        self::assertSame($svc, \json_decode($svcjson, true));
        self::assertSame(28, \substr_count($svcjsonpretty, "\n"));
    }

    public function testBAPLIE()
    {
        $parser = new Parser();
        $parser->load(__DIR__.'/../files/D95BBAPLIE.edi');
        $syntaxId = $parser->getSyntaxIdentifier();
        $parser->parse();

        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());

        self::assertCount(2, $interpreter->getMessages());
        self::assertCount(0, $interpreter->getErrors());
        self::assertCount(2, $interpreter->getServiceSegments());
        self::assertSame('UNOA', $syntaxId);

        self::assertSame([], $interpreter->getErrors());
    }

    public function testDESADV()
    {
        $parser = new Parser();
        $parser->load(__DIR__.'/../files/D96ADESADV.edi')->parse();

        $mapping = new \EDI\Mapping\MappingProvider('D96A');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('DESADV'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());

        self::assertJsonStringEqualsJsonFile(
            __DIR__.'/../files/D96ADESADV.json',
            $interpreter->getJson(true),
            'JSON does not match expected output'
        );

        self::assertSame(3594, \strlen($interpreter->getJson()));
        self::assertSame(9379, \strlen($interpreter->getJson(true)));

        self::assertCount(2, $interpreter->getMessages());
        self::assertCount(0, $interpreter->getErrors());
        self::assertCount(2, $interpreter->getServiceSegments());
        self::assertSame([], $interpreter->getErrors());
    }

    public function testMissingUNTUNZ()
    {
        $edi = "UNB+UNOA:2+LBCTI:01+OOCLIES:ZZ+160414:0307+1865'UNH+1907+BAPLIE:D:95B:UN:SMDG20'BGM++391651645'";
        $parser = new Parser();
        $parser->loadString($edi)->parse();
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        $errors = $interpreter->getErrors();
        self::assertCount(2, $errors);
        $segments = [];
        foreach ($errors as $err) {
            $segments[] = $err['segmentId'];
        }
        self::assertSame(['UNZ', 'UNT'], $segments);
    }

    public function testOrderError()
    {
        $parser = new Parser();
        $parser->load(__DIR__.'/../files/example_order_error.edi')->parse();
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('ORDERS'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        self::assertSame(
            [
                0 => 'There\'s a character not escaped with ? in the data; string :::H-Vollmilch 3,5%  ?*?*Marke?*?*:1l Tertra mit Drehverschluss',
            ],
            $parser->errors()
        );

        $errors = $interpreter->getErrors();
        self::assertCount(3, $errors);
        $segments = [];
        foreach ($errors as $err) {
            $segments[] = $err['segmentId'];
        }
        self::assertSame(['IMD', 'IMD', 'IMD'], $segments);

        self::assertCount(2, $interpreter->getMessages());

        $this->assertStringContainsString('"messageHeader"', $interpreter->getJson(true));
        self::assertStringContainsString('"interchangeHeader"', $interpreter->getJsonServiceSegments(true));

        $arrayy = $interpreter->getEdiGroups();
        $item = $arrayy[0]['SG25'][0]['itemDescription']['itemDescription']['itemDescription'];
        self::assertSame(
            'Butter 40x250g Alu',
            $item
        );

        $arrayy = $interpreter->getServiceSegments();
        self::assertCount(
            14,
            $arrayy['interchangeHeader']
        );
    }

    public function testOrderOk()
    {
        $edi = \file_get_contents(__DIR__.'/../files/example_order_ok.edi');
        $parser = new Parser();
        $parser->loadString($edi)->parse();
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('ORDERS'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        self::assertSame([], $parser->errors());

        $errors = $interpreter->getErrors();
        self::assertCount(0, $errors);

        self::assertCount(2, $interpreter->getMessages());

        self::assertStringContainsString('"messageHeader"', $interpreter->getJson(true));
        self::assertStringContainsString('"interchangeHeader"', $interpreter->getJsonServiceSegments(true));

        $arrayy = $interpreter->getEdiGroups();
        $item = $arrayy[0]['SG25'][0]['itemDescription']['itemDescription']['itemDescription'];
        self::assertSame(
            'Butter 40x250g Alu',
            $item
        );

        $arrayy = $interpreter->getServiceSegments();
        self::assertCount(
            14,
            $arrayy['interchangeHeader']
        );
    }

    public function testMissingUNBUNH()
    {
        $edi = "UNT+30+1907'UNZ+1+1865'";
        $parser = new Parser();
        $parser->loadString($edi)->parse();
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        $errors = $interpreter->getErrors();
        $segments = [];
        foreach ($errors as $err) {
            $segments[] = $err['segmentId'];
        }
        self::assertContains('UNB', $segments);
        self::assertContains('UNH', $segments);
    }

    public function testTooManyElements()
    {
        $edi = "UNB+UNOA:2+LBCTI:01+OOCLIES:ZZ:AA:DD+160414:0307+1865'UNZ+1+1865+TEST+TEST'";
        $parser = new Parser();
        $parser->loadString($edi)->parse();
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        $interpreter->prepare($parser->get());
        $errors = $interpreter->getErrors();
        $svcSegs = $interpreter->getServiceSegments();
        self::assertCount(0, $errors);
        self::assertArrayHasKey('Extension2', $svcSegs['interchangeTrailer']);
    }

    public function testIdInsteadOfName()
    {
        $parser = new Parser();
        $parser->load(__DIR__.'/../files/D96ADESADV.edi')->parse();
        $mapping = new \EDI\Mapping\MappingProvider($parser->getMessageDirectory());
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage($parser->getMessageFormat()), $segs, $svc);
        $interpreter->toggleUseIdInsteadOfNameForOutput(true);

        $p = $interpreter->prepare($parser->get());
        self::assertSame([], $parser->errors());

        self::assertArrayHasKey('BGM', $p[0]);
        self::assertArrayHasKey('C002', $p[0]['BGM']);
        self::assertArrayHasKey('1001', $p[0]['BGM']['C002']);
        self::assertSame('351', $p[0]['BGM']['C002']['1001']);
        self::assertArrayHasKey('SG10', $p[0]);
        self::assertArrayHasKey('CPS', $p[0]['SG10'][0]);
    }

    public function testRebuild()
    {
        $parser = new Parser();
        $arr_parser = $parser->load(__DIR__.'/../files/D96ADESADV.edi')->parse()->get();
        $mapping = new \EDI\Mapping\MappingProvider($parser->getMessageDirectory());
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage($parser->getMessageFormat()), $segs, $svc);
        $p = $interpreter->prepare($parser->get());
        $arr_intepreter = $interpreter->rebuildArray();
        $string_parser = (new Encoder($arr_parser))->get();
        $string_interpreter = (new Encoder($arr_intepreter))->get();

        self::assertSame($string_parser, $string_interpreter);
    }

    /*
    public function testCodes()
    {
        $parser = new Parser();
        $parser->load(__DIR__ . '/../files/D96ADESADV.edi')->parse();
        $mapping = new \EDI\Mapping\MappingProvider($parser->getMessageDirectory());
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage($parser->getMessageFormat()), $segs, $svc);

        $testCodes = [];

        $interpreter->setCodes($testCodes);

        $p = $interpreter->prepare($parser->get());
    }
    */
}
