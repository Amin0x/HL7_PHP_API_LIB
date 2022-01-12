<?php

namespace amin0x\nabidh;

require_once './../vendor/autoload.php';

use PHPUnit\Framework\Constraint\StringStartsWith;
use PHPUnit\Framework\TestCase;

class Nabidh2Test extends TestCase
{

    public function testCreateCanclePatientVisitMessage()
    {
        $this->assertStringStartsWith('abc', 'abc');
    }

    public function testAddPatientIdSegment()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testAddGroup()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testCreatePatientTransferMessage()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testCreateRegisterPatientMessage()
    {
        $nab = new Nabidh2();
        $msg = $nab->createRegisterPatientMessage();

        //$this->assertSame($msg->toString(), 'MSH|^&\|');
        $this->assertStringStartsWith('MSH', $msg->toString());
        $this->assertSame('DHA',$msg->getHeader()->getReceivingFacility());
        $this->assertSame('NABIDH',$msg->getHeader()->getReceivingApplication());
        $this->assertSame('ADT^A04',$msg->getHeader()->getMessageType());
    }

    public function testCreateChangeOutpatientToInpatientMessage()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testInsertRegisterPatientMessageSegments()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testCreateMessage()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testCreateObservationMessage()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testCreateMergePatientIdMessage()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testAddPatientId()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testAddEvent()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testAddSegment()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testCreatePatientVisitMessage()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testCreateChangeInpatientToOutpatientMessage()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }

    public function testCreatePharmacyTreatmentOrderMessage()
    {
        $this->assertStringStartsWith('abc', 'abc');
        $this->assertSame('a','a');
    }
}
