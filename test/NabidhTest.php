<?php

namespace amin0x\nabidh;

use PHPUnit\Framework\TestCase;

class NabidhTest extends TestCase
{

    public function testPatientTransferEvent()
    {
        $nabidh = new Nabidh();
        $pt = new ADT_A02_Patient_Transfer();
        $pt->getMsh()->setSendingFacility('TESTHOS20');
        $pt->getMsh()->setDateTimeofMessage(date('YmdHis'));
        $pt->getMsh()->setProcessingID('1002');
        $pt->getPid()->setAdministrativeSex('M');
        $pt->getPid()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pt->getPid()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $pt->getEvn()->setRecordedDateTime(date('r'));
        $pt->getEvn()->setEventFacility('TCODE10');

        $pt->getPid()->setPatientIdentifierList('123123', 'PP1122334455');
        $pt->getPid()->setPatientAddress('abc', 'abc state', '123', 'UK');
        $pt->getPid()->setNationality('USA');
        $pt->getPid()->setPhoneNumberHome('0123456789');

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pt->getPv1()->setAssignedPatientLocation($apl);


        $this->assertSame('',(string)$pt);
    }

    public function testDeletePatientRecord()
    {
        $nabidh = new Nabidh();
        $pt = new ADT_A23_Delete_Patient();
        $pt->getMsh()->setSendingFacility('TESTHOS20');
        $pt->getMsh()->setDateTimeofMessage(date('YmdHis'));
        $pt->getMsh()->setProcessingID('1002');
        $pt->getPid()->setAdministrativeSex('M');
        $pt->getPid()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pt->getPid()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $pt->getEvn()->setRecordedDateTime(date('r'));
        $pt->getEvn()->setEventFacility('TCODE10');

        $pt->getPid()->setPatientIdentifierList('123123', 'PP1122334455');
        $pt->getPid()->setPatientAddress('abc', 'abc state', '123', 'UK');
        $pt->getPid()->setNationality('USA');
        $pt->getPid()->setPhoneNumberHome('0123456789');

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pt->getPv1()->setAssignedPatientLocation($apl);
        $this->assertSame('','');
    }

    public function testAdmitPatientNotification()
    {
        $nabidh = new Nabidh();
        $pt = new ADT_A01_Admit_Patient();
        $pt->getMsh()->setSendingFacility('TESTHOS20');
        $pt->getMsh()->setDateTimeofMessage(date('YmdHis'));
        $pt->getMsh()->setProcessingID('1002');
        $pt->getPid()->setAdministrativeSex('M');
        $pt->getPid()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pt->getPid()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $pt->getEvn()->setRecordedDateTime(date('r'));
        $pt->getEvn()->setEventFacility('TCODE10');

        $pt->getPid()->setPatientIdentifierList('123123', 'PP1122334455');
        $pt->getPid()->setPatientAddress('abc', 'abc state', '123', 'UK');
        $pt->getPid()->setNationality('USA');
        $pt->getPid()->setPhoneNumberHome('0123456789');

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pt->getPv1()->setAssignedPatientLocation($apl);
        $this->assertSame('','');
    }

    public function testDischargeEvent()
    {
        $this->assertSame('','');
    }

    public function testCancelDischargeEvent()
    {
        $this->assertSame('','');
    }

    public function testUpdatePatientInformation()
    {
        $this->assertSame('','');
    }

    public function testPatientDepartedTracking()
    {
        $this->assertSame('','');
    }

    public function testAdmitPatientNotificationEx()
    {
        $this->assertSame('','');
    }

    public function testAddPatientInformation()
    {
        $this->assertSame('','');
    }

    public function testRegisterPatientQ()
    {
        $msg = new ADT_A04_Register_Patient();
        $msg->getMsh()->setMessageType('');
        $msg->getMsh()->setSendingFacility('');
        $msg->getMsh()->setDateTimeofMessage('');
        $msg->getMsh()->setProcessingID('');

        $msg->getPid()->setPatientIdentifierList();
        $msg->getPid()->setDateTimeofBirth();
        $msg->getPid()->setSSNNumberPatient();
        $msg->getPid()->setPatientAddress();
        $msg->getPid()->setPatientName();
        $msg->getPid()->setNationality();
        $msg->getPid()->setPhoneNumberHome();
        $msg->getPid()->setLastUpdateDateTime();
        $msg->getPid()->setAdministrativeSex();

        $msg->getEvn()->setEventTypeCode();
        $msg->getEvn()->setEventFacility();
        $msg->getEvn()->setRecordedDateTime();

        $msg->getPv1()->setAssignedPatientLocation();
        $msg->getPv1()->setVisitNumber();
        $msg->getPv1()->setAdmitDateTime();
        $msg->getPv1()->setPendingLocation();

        var_dump($msg);

        $this->assertSame('','');
    }

    public function testUpdatePatientInformation2()
    {
        $this->assertSame('','');
    }

    public function testCancelAdmitPatientNotification()
    {
        $this->assertSame('','');
    }

    public function testPreAdmitPatient()
    {
        $this->assertSame('','');
    }

    public function testRegisterPatient()
    {
        $this->assertSame('','');
    }

    public function testPatientArrivedTracking()
    {
        $this->assertSame('','');
    }

    public function testMergePatientInformation()
    {
        $this->assertSame('','');
    }
}
