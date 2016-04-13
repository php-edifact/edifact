<?php

namespace EDITest;

use EDI\Analyser;
use EDI\Parser;

/**
 * Class AnalyserTest
 * @package EDITest
 * @author Marius Teller <marius.teller@modotex.com>
 */
class AnalyserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Analyser
     */
    protected $analyser;

    public function setUp()
    {
        $this->analyser = new Analyser();
    }

    public function testGetMessageStructure()
    {
        $messageXml =  __DIR__."/../../src/EDI/Mapping/D07A/messages/tpfrep.xml";
        $expected = include __DIR__."/../files/messages/tpfrep.php";
        $actual = $this->analyser->loadMessageXml($messageXml);
        $this->assertEquals(
            $expected,
            $actual,
            "Unable to get the correct message structure array"
        );
    }

    public function testGetCodes()
    {
        $codesXml =  __DIR__."/../../src/EDI/Mapping/D07A/codes.xml";
        $expected = include __DIR__."/../files/codes.php";
        $actual = $this->analyser->loadCodesXml($codesXml);
        $this->assertEquals(
            $expected,
            $actual,
            "Unable to get all codes as array"
        );
    }

    public function testGetSegmentStructure()
    {
        $codesXml =  __DIR__."/../../src/EDI/Mapping/D07A/segments.xml";
        $expected = include __DIR__."/../files/segments.php";
        $this->analyser->loadSegmentsXml($codesXml);
        $actual = $this->analyser->segments;
        $this->assertEquals(
            $expected,
            $actual,
            "Unable to get all segment structures as array"
        );
    }

    public function testProcess()
    {
        $parser = new Parser(__DIR__."/../files/example.edi");
        $parsed = $parser->get();
        $segments = $parser->getRawSegments();
        $this->assertEquals(15, count($parsed));
        $analyser = new Analyser();
        $codesXml =  __DIR__."/../../src/EDI/Mapping/D07A/segments.xml";
        //$analyser->loadSegmentsXml($codesXml);
        $result = $analyser->process($parsed, $segments);
        $this->assertEquals(399, strlen($result));
    }

    public function testProcessWrapped()
    {
        $parser = new Parser(__DIR__."/../files/example_wrapped.edi");
        $parsed = $parser->get();
        $segments = $parser->getRawSegments();
        $this->assertEquals(15, count($parsed));
        $analyser = new Analyser();
        $codesXml =  __DIR__."/../../src/EDI/Mapping/D07A/segments.xml";
        //$analyser->loadSegmentsXml($codesXml);
        $result = $analyser->process($parsed, $segments);
        $this->assertEquals(399, strlen($result));
    }
}
