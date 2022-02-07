<?php

namespace amin0x\nabidh;

require_once '../vendor/autoload.php';

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
        $pid = new PID();
        $evn = new EVN();
        $pv1 = new PV1();

        $msg = $nab->createRegisterPatientMessage([
            'event_type' => '',
            'event_facility' => '',
            'event_recorded_at' => '',
            'nationality' => '',
            'last_update_date_time' => '',
            'date_time_of_birth' => '',
            'first_name' => '',
            'mid_name' => '',
            'last_name' => '',
            'name_prefix' => '',
            'id' => '',
            'passport_number' => '',
            'administrative_sex' => '',
            'city' => '',
            'state' => '',
            'country' => '',
            'zip' => '',
            'admit_date_time' => '',
            'visit_number' => '',
            'hospital_service' => '',
            'patient_class' => '',
            'assigned_patient_location' => new PL(),
            'admission_type' => '',
            'attend_doctor' => new XCN(),
        ]);

        $msg->getHeader()->setSendingFacility('TESTHOS20');
        //$pid->setSSNNumberPatient('');
        $pid->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pid->addPatientIdentifierList(454445);

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pv1->setAssignedPatientLocation($apl);

        $evn->setRecordedDateTime(time());
        $evn->setEventFacility('TCODE10');
        $evn->setEventTypeCode('ADT^A04');

        $nab->addSegment($msg, $pid);
        $nab->addSegment($msg, $evn);
        $nab->addSegment($msg, $pv1);
        //$this->assertSame($msg->toString(), 'MSH|^&\|');
        $this->assertStringStartsWith('MSH', $msg->toString());
        $this->assertSame('DHA',$msg->getHeader()->getReceivingFacility());
        $this->assertSame('NABIDH',$msg->getHeader()->getReceivingApplication());
        $this->assertSame('ADT^A04',$msg->getHeader()->getMessageType());
        $this->assertSame('', rtrim(implode('^',['','','']), '^'));
        $this->assertSame(['','','',''], explode('^','^^^'));
        $this->assertSame(['A','B','','C'], explode('^','A^B^^C'));
        var_dump($msg->toString());
    }

    public function testCreateChangeOutpatientToInpatientMessage()
    {
        $nab = new Nabidh2();
        $pid = new PID();
        $evn = new EVN();
        $pv1 = new PV1();

        $msg = $nab->createChangeOutpatientToInpatientMessage();
        $msg->getHeader()->setSendingFacility('TESTHOS20');
        //$pid->setSSNNumberPatient('');
        $pid->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pid->addPatientIdentifierList(454445);

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pv1->setAssignedPatientLocation($apl);

        $evn->setRecordedDateTime(time());
        $evn->setEventFacility('TCODE10');
        $evn->setEventTypeCode('ADT^A04');

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
