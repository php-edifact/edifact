<?php

namespace EDITest;

use EDI\Analyser;

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
        $this->assertEquals($expected, $actual,
            "Unable to get the correct message structure array");
    }

}
