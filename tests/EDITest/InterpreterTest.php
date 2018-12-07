<?php

namespace EDITest;

use EDI\Analyser;
use EDI\Interpreter;
use EDI\Parser;

class InterpreterTest extends \PHPUnit\Framework\TestCase
{

    public function testCOARRI()
    {
        $parser = new Parser(__DIR__ . "/../files/D95BCOARRI.edi");

        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('COARRI'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());

        $this->assertCount(3, $interpreter->getMessages()); //2 + service
        $this->assertCount(0, $interpreter->getErrors());
        $this->assertCount(2, $interpreter->getServiceSegments());
    }

    public function testServiceSegments()
    {
        $parser = new Parser(__DIR__ . "/../files/D95BCOARRI.edi");

        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('COARRI'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        $svc = $interpreter->getServiceSegments();
        $svcjson = $interpreter->getJsonServiceSegments();
        $svcjsonpretty = $interpreter->getJsonServiceSegments(true);
        $this->assertSame($svc, json_decode($svcjson, true));
        $this->assertSame(26, substr_count($svcjsonpretty, "\n"));
    }

    public function testBAPLIE()
    {
        $parser = new Parser(__DIR__ . "/../files/D95BBAPLIE.edi");

        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());

        $this->assertCount(2, $interpreter->getMessages());
        $this->assertCount(0, $interpreter->getErrors());
        $this->assertCount(2, $interpreter->getServiceSegments());

        $this->assertSame([], $interpreter->getErrors());
    }

    public function testDESADV()
    {
        $parser = new Parser(__DIR__ . "/../files/D96ADESADV.edi");

        $mapping = new \EDI\Mapping\MappingProvider('D96A');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('DESADV'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());

        $this->assertJsonStringEqualsJsonFile(
            __DIR__ . "/../files/D96ADESADV.json",
            $interpreter->getJson(true),
            "JSON does not match expected output"
        );

        $this->assertSame(3152, \strlen($interpreter->getJson()));
        $this->assertSame(8379, \strlen($interpreter->getJson(true)));

        $this->assertCount(2, $interpreter->getMessages());
        $this->assertCount(0, $interpreter->getErrors());
        $this->assertCount(2, $interpreter->getServiceSegments());
        $this->assertSame([], $interpreter->getErrors());
    }

    public function testMissingUNTUNZ()
    {
        $edi = "UNB+UNOA:2+LBCTI:01+OOCLIES:ZZ+160414:0307+1865'UNH+1907+BAPLIE:D:95B:UN:SMDG20'BGM++391651645'";
        $parser = new Parser($edi);
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        $errors = $interpreter->getErrors();
        $this->assertCount(2, $errors);
        $segments = [];
        foreach ($errors as $err) {
            $segments[] = $err['segmentId'];
        }
        $this->assertSame(['UNZ', 'UNT'], $segments);
    }

    public function testOrderError()
    {
        $edi = file_get_contents(__DIR__ . '/../files/example_order_error.edi');
        $parser = new Parser($edi);
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('ORDERS'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        $this->assertSame(
            [
                0 => 'There\'s a character not escaped with ? in the data; string :::H-Vollmilch 3,5%  ?*?*Marke?*?*:1l Tertra mit Drehverschluss',
            ],
            $parser->errors()
        );

        $errors = $interpreter->getErrors();
        $this->assertCount(3, $errors);
        $segments = [];
        foreach ($errors as $err) {
            $segments[] = $err['segmentId'];
        }
        $this->assertSame(['IMD', 'IMD', 'IMD'], $segments);

        $this->assertCount(2, $interpreter->getMessages());

        $this->assertContains('"messageHeader"', $interpreter->getJson(true));
        $this->assertContains('"interchangeHeader"', $interpreter->getJsonServiceSegments(true));

        $arrayy = $interpreter->getArrayy();
        $this->assertSame(
            'Butter 40x250g Alu',
            $arrayy->get('0.SG25.0.itemDescription.itemDescription.itemDescription')
        );

        $arrayy = $interpreter->getArrayyServiceSegments();
        $this->assertCount(
            13,
            $arrayy->get('interchangeHeader')
        );
    }

    public function testOrderOk()
    {
        $edi = file_get_contents(__DIR__ . '/../files/example_order_ok.edi');
        $parser = new Parser($edi);
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('ORDERS'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        $this->assertSame([], $parser->errors());

        $errors = $interpreter->getErrors();
        $this->assertCount(0, $errors);

        $this->assertCount(2, $interpreter->getMessages());

        $this->assertContains('"messageHeader"', $interpreter->getJson(true));
        $this->assertContains('"interchangeHeader"', $interpreter->getJsonServiceSegments(true));

        $arrayy = $interpreter->getArrayy();
        $this->assertSame(
            'Butter 40x250g Alu',
            $arrayy->get('0.SG25.0.itemDescription.itemDescription.itemDescription')
        );

        $arrayy = $interpreter->getArrayyServiceSegments();
        $this->assertCount(
            13,
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
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        /** @noinspection UnusedFunctionResultInspection */
        $interpreter->prepare($parser->get());
        $errors = $interpreter->getErrors();
        $segments = [];
        foreach ($errors as $err) {
            $segments[] = $err['segmentId'];
        }
        $this->assertContains('UNB', $segments);
        $this->assertContains('UNH', $segments);
    }

    public function testTooManyElements()
    {
        $edi = "UNB+UNOA:2+LBCTI:01+OOCLIES:ZZ:AA:DD+160414:0307+1865'UNZ+1+1865+TEST+TEST'";
        $parser = new Parser($edi);
        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('BAPLIE'), $segs, $svc);
        $p = $interpreter->prepare($parser->get());
        $errors = $interpreter->getErrors();
        $svcSegs = $interpreter->getServiceSegments();
        $this->assertCount(0, $errors);
        $this->assertArrayHasKey('Extension2', $svcSegs['interchangeTrailer']);
    }
}
