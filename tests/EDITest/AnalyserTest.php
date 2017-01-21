<?php

namespace EDITest;

use EDI\Analyser;
use EDI\Parser;
use EDI\Mapping;

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
    protected $mapping;

    public function setUp()
    {
        $this->analyser = new Analyser();
        $this->mapping = new \EDI\Mapping\MappingProvider('D07A');
    }

    public function testGetMessageStructure()
    {
        $messageXml = $this->mapping->getMessage('tpfrep');
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
        $codesXml = $this->mapping->getCodes();
        $actual = $this->analyser->loadCodesXml($codesXml);
        $this->assertCount(270, $actual);
        $this->assertArrayHasKey('1001', $actual);
        $this->assertCount(652, $actual['1001']);
    }

    public function testGetSegmentStructure()
    {
        $segmentsXml = $this->mapping->getSegments();
        $this->analyser->loadSegmentsXml($segmentsXml);
        $actual = $this->analyser->segments;
        $this->assertCount(156, $actual);
        $this->assertArrayHasKey('ADR', $actual);
        $this->assertArrayHasKey('attributes', $actual['ADR']);
        $this->assertArrayHasKey('details', $actual['ADR']);
        $this->assertCount(3, $actual['ADR']['attributes']);
    }

    public function testProcess()
    {
        $parser = new Parser(__DIR__."/../files/example.edi");
        $parsed = $parser->get();
        $segments = $parser->getRawSegments();
        $this->assertEquals(15, count($parsed));
        $analyser = new Analyser();

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

        $result = $analyser->process($parsed, $segments);
        $this->assertEquals(399, strlen($result));
    }
}
