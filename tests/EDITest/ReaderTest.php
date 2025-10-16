<?php

declare(strict_types=1);

namespace EDITest;

use EDI\Parser;
use EDI\Reader;

/**
 * @internal
 */
final class ReaderTest extends \PHPUnit\Framework\TestCase
{
    public function testReadEdiDataValue()
    {
        $p = new Parser();
        $p->load(__DIR__.'/../files/example.edi');
        $r = new Reader($p);

        $sender = $r->readEdiDataValue('UNB', 2);
        self::assertSame('6XPPC', $sender);

        $unh2 = $r->readEdiDataValue([
            'UNH', [
                '1' => '1',
            ]], 2);
        self::assertSame('PAORES', $unh2[0]);

        $unh1 = $r->readEdiDataValue([
            'UNH', [
                '2.0' => 'PAORES',
            ]], 1);
        self::assertSame('1', $unh1);
    }

    public function testReadUNBDateTimeOfPpreperation()
    {
        $p = new Parser();
        $p->load(__DIR__.'/../files/example.edi');
        $r = new Reader($p);
        $Dt = $r->readUNBDateTimeOfPreparation();
        self::assertSame('2094-01-01 09:50:00', $Dt);
    }

    public function testReadUNBDateTimeOfPreperation()
    {
        $p = new Parser();
        $p->load(__DIR__.'/../files/example.edi');
        $r = new Reader($p);
        $Dt = $r->readUNBDateTimeOfPreparation();
        self::assertSame('2094-01-01 09:50:00', $Dt);
    }

    public function testReadUNBDateTimeOfPreparation()
    {
        $p = new Parser();
        $p->load(__DIR__.'/../files/example.edi');
        $r = new Reader($p);
        $Dt = $r->readUNBDateTimeOfPreparation();
        self::assertSame('2094-01-01 09:50:00', $Dt);
    }

    public function testReadUNHmessageType()
    {
        $p = new Parser();
        $p->load(__DIR__.'/../files/example.edi');
        $r = new Reader($p);
        $messageType = $r->readUNHmessageType();
        self::assertSame('PAORES', $messageType);
    }

    public function testReadUNHmessageNumber()
    {
        $p = new Parser();
        $p->load(__DIR__.'/../files/example.edi');
        $r = new Reader($p);
        $messageNumber = $r->readUNHmessageNumber();
        self::assertSame('1', $messageNumber);
    }

    public function testpreValidate()
    {
        $p = new Parser();
        $p->load(__DIR__.'/../files/exampleMulti.edi');
        $r = new Reader($p);
        $errors = $r->errors();
        self::assertArrayHasKey(0, $errors);

        self::assertSame('File has multiple messages', $errors[0]);
    }

    public function testSplitMultiMessage()
    {
        $multiEdi = \file_get_contents(__DIR__.'/../files/exampleMulti.edi');
        $eddies = Reader::splitMultiMessage($multiEdi);
        self::assertCount(2, $eddies);

        $p = new Parser();
        $p->loadString($eddies[0]);
        $r = new Reader($p);
        $messageType = $r->readUNHmessageType();
        self::assertSame('PAORES', $messageType);

        $p = new Parser();
        $p->loadString($eddies[1]);
        $r = new Reader($p);
        $messageType = $r->readUNHmessageType();
        self::assertSame('PAORES', $messageType);
    }

    public function testReadsMultiSegmentsByOffset()
    {
        $p = new Parser();
        $p->setStrict(true);
        $p->load(__DIR__.'/../files/example_multiline.edi');
        $r = new Reader($p);

        $lines = [];
        for ($i = 0; $i < 10; $i++) {
            $line = $r->readEdiDataValue([
                'FTX', [
                    1 => 'AAI',
                ]], 4, false, false, $i);
            if ($line !== null) {
                $lines[] = $line;
            }
        }

        self::assertSame(
            [
                0 => [
                    0 => 'PLS ENSURE TO TAKE OUR APPROVAL PRIOR STUFFING ANY NON HAZ CHEMICA',
                    1 => 'LS',
                ],
                1 => [
                    0 => 'THE SHIPPER SHALL NOT BE RESPONSIBLE FOR ANY COSTS/DELAYS OCCUR',
                    1 => 'DUE TO INTERVENTION OF CUSTOMS.',
                ],

            ],
            $lines
        );
    }

    public function testAddsErrorOnMissingRequiredOffest()
    {
        $p = new Parser();
        $p->setStrict(true);
        $p->load(__DIR__.'/../files/example_multiline.edi');
        $r = new Reader($p);
        $line = $r->readEdiDataValue([
            'FTX', [
                1 => 'AAI',
            ]], 4, false, true, 99);
        self::assertSame(['Segment "FTX" does not exist at offset "99"'], $r->errors());
        self::assertNull($line);
    }
}
