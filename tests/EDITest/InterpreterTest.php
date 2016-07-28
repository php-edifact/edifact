<?php

namespace EDITest;

use EDI\Analyser;
use EDI\Interpreter;
use EDI\Parser;

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

        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml(__DIR__ . "/../../src/EDI/Mapping/D95B/segments.xml");
        $svc = $analyser->loadSegmentsXml(__DIR__ . "/../../src/EDI/Mapping/Service_V3/segments.xml");

        $interpreter = new Interpreter(__DIR__ . "/../../src/EDI/Mapping/D95B/messages/coarri.xml", $segs, $svc);
        $interpreter->prepare($parser->get());

        $this->assertCount(5, $interpreter->getMessages());
        $this->assertCount(4, $interpreter->getErrors());
        $this->assertCount(2, $interpreter->getServiceSegments());

        $this->assertEquals([[], [], [], []], $interpreter->getErrors());
    }

    public function testBAPLIE()
    {
        $parser = new Parser(__DIR__ . "/../files/D95BBAPLIE.edi");

        $analyser = new Analyser();
        $segs = $analyser->loadSegmentsXml(__DIR__ . "/../../src/EDI/Mapping/D95B/segments.xml");
        $svc = $analyser->loadSegmentsXml(__DIR__ . "/../../src/EDI/Mapping/Service_V3/segments.xml");

        $interpreter = new Interpreter(__DIR__ . "/../../src/EDI/Mapping/D95B/messages/baplie.xml", $segs, $svc);
        $interpreter->prepare($parser->get());

        $this->assertCount(2, $interpreter->getMessages());
        $this->assertCount(1, $interpreter->getErrors());
        $this->assertCount(2, $interpreter->getServiceSegments());

        $this->assertEquals([[]], $interpreter->getErrors());
    }
}
