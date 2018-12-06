<?php

declare(strict_types=1);

namespace EDITest;

use EDI\Reader;

class ReaderTest extends \PHPUnit\Framework\TestCase
{
    public function testReadEdiDataValue()
    {
        $r = new Reader(__DIR__ . "/../files/example.edi");

        $sender = $r->readEdiDataValue('UNB', 2);
        $this->assertSame('6XPPC', $sender);

        $unh2 = $r->readEdiDataValue(['UNH', ['1' => '1']], 2);
        $this->assertSame('PAORES', $unh2[0]);

        $unh1 = $r->readEdiDataValue(['UNH', ['2.0' => 'PAORES']], 1);
        $this->assertSame('1', $unh1);
    }

    public function testReadUNBDateTimeOfPpreperation()
    {
        $Dt = (new Reader(__DIR__ . "/../files/example.edi"))->readUNBDateTimeOfPpreperation();
        $this->assertSame('2094-01-01 09:50:00', $Dt);
    }

    public function testReadUNBDateTimeOfPreperation()
    {
        $Dt = (new Reader(__DIR__ . "/../files/example.edi"))->readUNBDateTimeOfPreperation();
        $this->assertSame('2094-01-01 09:50:00', $Dt);
    }

    public function testReadUNBDateTimeOfPreparation()
    {
        $Dt = (new Reader(__DIR__ . "/../files/example.edi"))->readUNBDateTimeOfPreparation();
        $this->assertSame('2094-01-01 09:50:00', $Dt);
    }

    public function testReadUNHmessageType()
    {
        $messageType = (new Reader(__DIR__ . "/../files/example.edi"))->readUNHmessageType();
        $this->assertSame('PAORES', $messageType);
    }

    public function testReadUNHmessageNumber()
    {
        $messageNumber = (new Reader(__DIR__ . "/../files/example.edi"))->readUNHmessageNumber();
        $this->assertSame('1', $messageNumber);
    }


    public function testpreValidate()
    {
        $errors = (new Reader(__DIR__ . "/../files/exampleMulti.edi"))->errors();
        $this->assertArrayHasKey(0, $errors);

        $this->assertSame('File has multiple messages', $errors[0]);
    }

    public function testSplitMultiMessage()
    {
        $multiEdi = file_get_contents(__DIR__ . "/../files/exampleMulti.edi");
        $eddies = Reader::splitMultiMessage($multiEdi);
        $this->assertSame(2, \count($eddies));

        $r = new Reader($eddies[0]);
        $messageType = $r->readUNHmessageType();
        $this->assertSame('PAORES', $messageType);

        $r = new Reader($eddies[1]);
        $messageType = $r->readUNHmessageType();
        $this->assertSame('PAORES', $messageType);
    }

}
