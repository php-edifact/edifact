<?php

namespace EDITest;

use EDI\Analyser;
use EDI\Mapping\MappingProvider;
use EDI\Parser;
use PHPUnit\Framework\TestCase;

class AnalyserTest extends TestCase
{
    /**
     * @var Analyser
     */
    protected $analyser;

    /**
     * @var MappingProvider
     */
    protected $mapping;

    public function setUp()
    {
        $this->analyser = new Analyser();
        $this->mapping = new MappingProvider('D07A');
    }

    public function testGetMessageStructure()
    {
        $messageXml = $this->mapping->getMessage('tpfrep');
        $expected = include __DIR__ . "/../files/messages/tpfrep.php";
        $actual = $this->analyser->loadMessageXml($messageXml);
        $this->assertSame(
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
        /* @noinspection UnusedFunctionResultInspection */
        $actual = $this->analyser->loadSegmentsXml($segmentsXml);
        $this->assertCount(156, $actual);
        $this->assertArrayHasKey('ADR', $actual);
        $this->assertArrayHasKey('attributes', $actual['ADR']);
        $this->assertArrayHasKey('details', $actual['ADR']);
        $this->assertCount(3, $actual['ADR']['attributes']);
    }

    public function testProcess()
    {
        $parser = new Parser(__DIR__ . "/../files/example.edi");
        $parsed = $parser->get();
        $segments = $parser->getRawSegments();
        $this->assertSame(15, \count($parsed));
        $result = (new Analyser())->process($parsed, $segments);
        $this->assertSame(399, \strlen($result));
    }

    public function testProcessWrapped()
    {
        $parser = new Parser(__DIR__ . "/../files/example_wrapped.edi");
        $parsed = $parser->get();
        $segments = $parser->getRawSegments();
        $this->assertSame(15, \count($parsed));
        $result = (new Analyser())->process($parsed, $segments);
        $this->assertSame(399, \strlen($result));
    }
}
