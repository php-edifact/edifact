<?php

namespace EDITest;

use EDI\Reader;

/**
 * Class ReaderTest
 * @package EDITest
 * @author Uldis Nelsons <uldis@weberp.lv>
 */
class ReaderTest extends \PHPUnit_Framework_TestCase
{
    public function testReadEdiDataValue()
    {
        $r = new Reader(__DIR__ . "/../files/example.edi");

        $sender = $r->readEdiDataValue('UNB', 2);
        $this->assertEquals('6XPPC', $sender);

        $unh2 = $r->readEdiDataValue(['UNH', ['1' => '1']], 2);
        $this->assertEquals('PAORES', $unh2[0]);

        $unh1 = $r->readEdiDataValue(['UNH', ['2.0' => 'PAORES']], 1);
        $this->assertEquals('1', $unh1);
    }

    public function testReadUNBDateTimeOfPpreperation()
    {
        $r = new Reader(__DIR__ . "/../files/example.edi");

        $Dt = $r->readUNBDateTimeOfPpreperation();
        $this->assertEquals('2094-01-01 09:50:00', $Dt);
    }

    public function testReadUNHmessageType()
    {
        $r = new Reader(__DIR__ . "/../files/example.edi");

        $messageType = $r->readUNHmessageType();
        $this->assertEquals('PAORES', $messageType);
    }

    public function testReadUNHmessageNumber()
    {
        $r = new Reader(__DIR__ . "/../files/example.edi");

        $messageNumber = $r->readUNHmessageNumber();
        $this->assertEquals('1', $messageNumber);
    }


    public function testpreValidate()
    {
        $r = new Reader(__DIR__ . "/../files/exampleMulti.edi");
        $errors = $r->errors();
        $this->assertArrayHasKey(0, $errors);

        $this->assertEquals('File has multiple messages', $errors[0]);
    }

    public function testSplitMultiMessage()
    {
        $multiEdi = file_get_contents(__DIR__ . "/../files/exampleMulti.edi");
        $eddies = Reader::splitMultiMessage($multiEdi);
        $this->assertEquals(2, count($eddies));

        $r = new Reader($eddies[0]);
        $messageType = $r->readUNHmessageType();
        $this->assertEquals('PAORES', $messageType);

        $r = new Reader($eddies[1]);
        $messageType = $r->readUNHmessageType();
        $this->assertEquals('PAORES', $messageType);



    }


}
