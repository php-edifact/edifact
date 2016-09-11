<?php

namespace EDITest;

use EDI\Analyser;
use EDI\Interpreter;
use EDI\Parser;
use EDI\Mapping;

/**
 * Class InterpreterTest
 *
 * @package EDITest
 * @author Mark Davidson <mark@4each.co.uk>
 */
class InterpreterTest extends \PHPUnit_Framework_TestCase
{

    public function testCOARRI()
    {
        $parser = new Parser(__DIR__ . "/../files/D95BCOARRI.edi");

        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('coarri'), $segs, $svc);
        $interpreter->prepare($parser->get());

        $this->assertJsonStringEqualsJsonFile(
            __DIR__ . "/../files/D95BCOARRI.json",
            $interpreter->getJson(),
            "JSON does not match expected output"
        );

        $this->assertEquals(
            include __DIR__ . "/../files/messages/coarri.php",
            $interpreter->getMessages(),
            "Unable to get the correct message structure array"
        );

        $this->assertCount(5, $interpreter->getMessages());
        $this->assertCount(4, $interpreter->getErrors());
        $this->assertCount(2, $interpreter->getServiceSegments());

        $this->assertEquals([[], [], [], []], $interpreter->getErrors());
    }

    public function testBAPLIE()
    {
        $parser = new Parser(__DIR__ . "/../files/D95BBAPLIE.edi");

        $mapping = new \EDI\Mapping\MappingProvider('D95B');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('baplie'), $segs, $svc);
        $interpreter->prepare($parser->get());

        $this->assertCount(2, $interpreter->getMessages());
        $this->assertCount(1, $interpreter->getErrors());
        $this->assertCount(2, $interpreter->getServiceSegments());

        $this->assertEquals([[]], $interpreter->getErrors());
    }

    public function testDESADV()
    {
        $parser = new Parser(__DIR__ . "/../files/D96ADESADV.edi");

        $mapping = new \EDI\Mapping\MappingProvider('D96A');
        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml($mapping->getSegments());
        $svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

        $interpreter = new Interpreter($mapping->getMessage('desadv'), $segs, $svc);
        $interpreter->prepare($parser->get());

        $this->assertJsonStringEqualsJsonFile(
            __DIR__ . "/../files/D96ADESADV.json",
            $interpreter->getJson(true),
            "JSON does not match expected output"
        );

        $this->assertCount(2, $interpreter->getMessages());
        $this->assertCount(1, $interpreter->getErrors());
        $this->assertCount(2, $interpreter->getServiceSegments());

        $this->assertEquals([[]], $interpreter->getErrors());
    }
}
