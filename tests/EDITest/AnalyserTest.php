<?php

namespace EDITest;

use EDI\Analyser;
use EDI\Mapping\MappingProvider;
use EDI\Parser;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class AnalyserTest extends TestCase
{
    /**
     * @var Analyser
     */
    protected $analyser;

    /**
     * @var MappingProvider
     */
    protected $mapping;

    protected function setUp()
    {
        $this->analyser = new Analyser();
        $this->mapping = new MappingProvider('D07A');
    }

    public function testGetMessageStructure()
    {
        $messageXml = $this->mapping->getMessage('tpfrep');
        $expected = include __DIR__ . '/../files/messages/tpfrep.php';
        $actual = $this->analyser->loadMessageXml($messageXml);
        static::assertSame(
            $expected,
            $actual,
            'Unable to get the correct message structure array'
        );
    }

    public function testGetCodes()
    {
        $codesXml = $this->mapping->getCodes();
        $actual = $this->analyser->loadCodesXml($codesXml);
        static::assertCount(270, $actual);
        static::assertArrayHasKey('1001', $actual);
        static::assertCount(652, $actual['1001']);
    }

    public function testGetSegmentStructure()
    {
        $segmentsXml = $this->mapping->getSegments();
        /* @noinspection UnusedFunctionResultInspection */
        $actual = $this->analyser->loadSegmentsXml($segmentsXml);
        static::assertCount(156, $actual);
        static::assertArrayHasKey('ADR', $actual);
        static::assertArrayHasKey('attributes', $actual['ADR']);
        static::assertArrayHasKey('details', $actual['ADR']);
        static::assertCount(3, $actual['ADR']['attributes']);
    }

    public function testProcess()
    {
        $parser = new Parser(__DIR__ . '/../files/example.edi');
        $parsed = $parser->get();
        $segments = $parser->getRawSegments();
        static::assertCount(15, $parsed);
        $result = (new Analyser())->process($parsed, $segments);
        static::assertSame(399, \strlen($result));
    }

    public function testProcessWrapped()
    {
        $parser = new Parser(__DIR__ . '/../files/example_wrapped.edi');
        $parsed = $parser->get();
        $segments = $parser->getRawSegments();
        static::assertCount(15, $parsed);
        $result = (new Analyser())->process($parsed, $segments);
        static::assertSame(399, \strlen($result));
    }
}
