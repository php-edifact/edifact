<?php

namespace EDITest;

use EDI\Analyser;
use EDI\Interpreter;
use EDI\Parser;

/**
 * @internal
 */
final class InterpreterTest extends \PHPUnit\Framework\TestCase
{
    public function testCOARRI()
    {
        $parser = new Parser(__DIR__ . '/../files/D95BCOARRI.edi');

        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('COARRI'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());

        static::assertCount(3, $interpreter->getMessages()); //2 + service
        static::assertCount(0, $interpreter->getErrors());
        static::assertCount(2, $interpreter->getServiceSegments());
    }

    public function testServiceSegments()
    {
        $parser = new Parser(__DIR__ . '/../files/D95BCOARRI.edi');

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
        static::assertSame($svc, \json_decode($svcjson, true));
        static::assertSame(28, \substr_count($svcjsonpretty, "\n"));
    }

    public function testBAPLIE()
    {
        $parser = new Parser(__DIR__ . '/../files/D95BBAPLIE.edi');

        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());

        static::assertCount(2, $interpreter->getMessages());
        static::assertCount(0, $interpreter->getErrors());
        static::assertCount(2, $interpreter->getServiceSegments());

        static::assertSame([], $interpreter->getErrors());
    }

    public function testDESADV()
    {
        $parser = new Parser(__DIR__ . '/../files/D96ADESADV.edi');

        $mapping = new \EDI\Mapping\MappingProvider('D96A');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('DESADV'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());

        static::assertJsonStringEqualsJsonFile(
            __DIR__ . '/../files/D96ADESADV.json',
            $interpreter->getJson(true),
            'JSON does not match expected output'
        );

        static::assertSame(3598, \strlen($interpreter->getJson()));
        static::assertSame(9383, \strlen($interpreter->getJson(true)));

        static::assertCount(2, $interpreter->getMessages());
        static::assertCount(0, $interpreter->getErrors());
        static::assertCount(2, $interpreter->getServiceSegments());
        static::assertSame([], $interpreter->getErrors());
    }

    public function testMissingUNTUNZ()
    {
        $edi = "UNB+UNOA:2+LBCTI:01+OOCLIES:ZZ+160414:0307+1865'UNH+1907+BAPLIE:D:95B:UN:SMDG20'BGM++391651645'";
        $parser = new Parser($edi);
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        $errors = $interpreter->getErrors();
        static::assertCount(2, $errors);
        $segments = [];
        foreach ($errors as $err) {
            $segments[] = $err['segmentId'];
        }
        static::assertSame(['UNZ', 'UNT'], $segments);
    }

    public function testOrderError()
    {
        $edi = \file_get_contents(__DIR__ . '/../files/example_order_error.edi');
        $parser = new Parser($edi);
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('ORDERS'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        static::assertSame(
            [
                0 => 'There\'s a character not escaped with ? in the data; string :::H-Vollmilch 3,5%  ?*?*Marke?*?*:1l Tertra mit Drehverschluss',
            ],
            $parser->errors()
        );

        $errors = $interpreter->getErrors();
        static::assertCount(3, $errors);
        $segments = [];
        foreach ($errors as $err) {
            $segments[] = $err['segmentId'];
        }
        static::assertSame(['IMD', 'IMD', 'IMD'], $segments);

        static::assertCount(2, $interpreter->getMessages());

        static::assertContains('"messageHeader"', $interpreter->getJson(true));
        static::assertContains('"interchangeHeader"', $interpreter->getJsonServiceSegments(true));

        $arrayy = $interpreter->getArrayy();
        static::assertSame(
            'Butter 40x250g Alu',
            $arrayy->get('0.SG25.0.itemDescription.itemDescription.itemDescription')
        );

        $arrayy = $interpreter->getArrayyServiceSegments();
        static::assertCount(
            14,
            $arrayy->get('interchangeHeader')
        );
    }

    public function testOrderOk()
    {
        $edi = \file_get_contents(__DIR__ . '/../files/example_order_ok.edi');
        $parser = new Parser($edi);
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('ORDERS'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        static::assertSame([], $parser->errors());

        $errors = $interpreter->getErrors();
        static::assertCount(0, $errors);

        static::assertCount(2, $interpreter->getMessages());

        static::assertContains('"messageHeader"', $interpreter->getJson(true));
        static::assertContains('"interchangeHeader"', $interpreter->getJsonServiceSegments(true));

        $arrayy = $interpreter->getArrayy();
        static::assertSame(
            'Butter 40x250g Alu',
            $arrayy->get('0.SG25.0.itemDescription.itemDescription.itemDescription')
        );

        $arrayy = $interpreter->getArrayyServiceSegments();
        static::assertCount(
            14,
            $arrayy->get('interchangeHeader')
        );
    }

    public function testMissingUNBUNH()
    {
        $edi = "UNT+30+1907'UNZ+1+1865'";
        $parser = new Parser($edi);
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
        static::assertContains('UNB', $segments);
        static::assertContains('UNH', $segments);
    }

    public function testTooManyElements()
    {
        $edi = "UNB+UNOA:2+LBCTI:01+OOCLIES:ZZ:AA:DD+160414:0307+1865'UNZ+1+1865+TEST+TEST'";
        $parser = new Parser($edi);
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        $interpreter->prepare($parser->get());
        $errors = $interpreter->getErrors();
        $svcSegs = $interpreter->getServiceSegments();
        static::assertCount(0, $errors);
        static::assertArrayHasKey('Extension2', $svcSegs['interchangeTrailer']);
    }

    public function testIdInsteadOfName()
    {
        $edi = \file_get_contents(__DIR__ . '/../files/D96ADESADV.edi');
        $parser = new Parser($edi);
        $mapping = new \EDI\Mapping\MappingProvider($parser->getMessageDirectory());
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments('3'));

        $interpreter = new Interpreter($mapping->getMessage($parser->getMessageFormat()), $segs, $svc);
        $interpreter->toggleUseIdInsteadOfNameForOutput(true);

        $p = $interpreter->prepare($parser->get());
        static::assertSame([], $parser->errors());

        static::assertArrayHasKey('BGM', $p[0]);
        static::assertArrayHasKey('C002', $p[0]['BGM']);
        static::assertArrayHasKey('1001', $p[0]['BGM']['C002']);
        static::assertSame('351', $p[0]['BGM']['C002']['1001']);
        static::assertArrayHasKey('SG10', $p[0]);
        static::assertArrayHasKey('CPS', $p[0]['SG10'][0]);
    }
}
