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

    protected function setUp(): void
    {
        $this->analyser = new Analyser();
        $this->mapping = new MappingProvider('D07A');
    }

    public function testGetMessageStructure()
    {
        $messageXml = $this->mapping->getMessage('tpfrep');
        $expected = include __DIR__.'/../files/messages/tpfrep.php';
        $actual = $this->analyser->loadMessageXml($messageXml);
        self::assertSame(
            $expected,
            $actual,
            'Unable to get the correct message structure array'
        );
    }

    public function testGetCodes()
    {
        $codesXml = $this->mapping->getCodes();
        $actual = $this->analyser->loadCodesXml($codesXml);
        self::assertCount(270, $actual);
        self::assertArrayHasKey('1001', $actual);
        self::assertCount(652, $actual['1001']);
    }

    public function testGetSegmentStructure()
    {
        $segmentsXml = $this->mapping->getSegments();
        /* @noinspection UnusedFunctionResultInspection */
        $actual = $this->analyser->loadSegmentsXml($segmentsXml);
        self::assertCount(156, $actual);
        self::assertArrayHasKey('ADR', $actual);
        self::assertArrayHasKey('attributes', $actual['ADR']);
        self::assertArrayHasKey('details', $actual['ADR']);
        self::assertCount(3, $actual['ADR']['attributes']);
    }

    public function testProcess()
    {
        $parser = new Parser();
        $parser->load(__DIR__.'/../files/example.edi');
        $segments = $parser->getRawSegments();
        $parser->parse();
        $parsed = $parser->get();
        self::assertCount(15, $parsed);
        $result = (new Analyser())->process($parsed, $segments);

        self::assertSame(228, \strlen($result));
    }

    public function testProcessWrapped()
    {
        $parser = new Parser();
        $parser->load(__DIR__.'/../files/example_wrapped.edi');
        $segments = $parser->getRawSegments();
        $parser->parse();
        $parsed = $parser->get();
        self::assertCount(15, $parsed);
        $result = (new Analyser())->process($parsed, $segments);
        self::assertSame(399, \strlen($result));
    }
}
