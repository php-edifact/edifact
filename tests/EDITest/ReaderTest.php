<?php

declare(strict_types=1);

namespace EDITest;

use EDI\Reader;
use EDI\Parser;

/**
 * @internal
 */
final class ReaderTest extends \PHPUnit\Framework\TestCase
{
    public function testReadEdiDataValue()
    {
        $p = new Parser();
        $p->load(__DIR__ . '/../files/example.edi');
        $r = new Reader($p);

        $sender = $r->readEdiDataValue('UNB', 2);
        static::assertSame('6XPPC', $sender);

        $unh2 = $r->readEdiDataValue(['UNH', ['1' => '1']], 2);
        static::assertSame('PAORES', $unh2[0]);

        $unh1 = $r->readEdiDataValue(['UNH', ['2.0' => 'PAORES']], 1);
        static::assertSame('1', $unh1);
    }

    public function testReadUNBDateTimeOfPpreperation()
    {
        $p = new Parser();
        $p->load(__DIR__ . '/../files/example.edi');
        $r = new Reader($p);
        $Dt = $r->readUNBDateTimeOfPreparation();
        static::assertSame('2094-01-01 09:50:00', $Dt);
    }

    public function testReadUNBDateTimeOfPreperation()
    {
        $p = new Parser();
        $p->load(__DIR__ . '/../files/example.edi');
        $r = new Reader($p);
        $Dt = $r->readUNBDateTimeOfPreparation();
        static::assertSame('2094-01-01 09:50:00', $Dt);
    }

    public function testReadUNBDateTimeOfPreparation()
    {
        $p = new Parser();
        $p->load(__DIR__ . '/../files/example.edi');
        $r = new Reader($p);
        $Dt = $r->readUNBDateTimeOfPreparation();
        static::assertSame('2094-01-01 09:50:00', $Dt);
    }

    public function testReadUNHmessageType()
    {
        $p = new Parser();
        $p->load(__DIR__ . '/../files/example.edi');
        $r = new Reader($p);
        $messageType = $r->readUNHmessageType();
        static::assertSame('PAORES', $messageType);
    }

    public function testReadUNHmessageNumber()
    {
        $p = new Parser();
        $p->load(__DIR__ . '/../files/example.edi');
        $r = new Reader($p);
        $messageNumber = $r->readUNHmessageNumber();
        static::assertSame('1', $messageNumber);
    }

    public function testpreValidate()
    {
        $p = new Parser();
        $p->load(__DIR__ . '/../files/exampleMulti.edi');
        $r = new Reader($p);
        $errors = $r->errors();
        static::assertArrayHasKey(0, $errors);

        static::assertSame('File has multiple messages', $errors[0]);
    }

    public function testSplitMultiMessage()
    {
        $multiEdi = \file_get_contents(__DIR__ . '/../files/exampleMulti.edi');
        $eddies = Reader::splitMultiMessage($multiEdi);
        static::assertCount(2, $eddies);

        $p = new Parser();
        $p->loadString($eddies[0]);
        $r = new Reader($p);
        $messageType = $r->readUNHmessageType();
        static::assertSame('PAORES', $messageType);

        $p = new Parser();
        $p->loadString($eddies[1]);
        $r = new Reader($p);
        $messageType = $r->readUNHmessageType();
        static::assertSame('PAORES', $messageType);
    }
}
