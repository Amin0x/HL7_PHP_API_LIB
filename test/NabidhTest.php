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


        $this->assertStringStartsWith('MSH',(string)$pt);
        var_dump((string)$pt);
    }

    public function testDeletePatientRecord()
    {
        $nabidh = new Nabidh();
        $pt = new ADT_A23_Delete_Patient_record();
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
        var_dump((string) $pt);
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

        var_dump((string) $pt);
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

    public function testRegisterPatient()
    {
        $msg = new ADT_A04_Register_Patient();
        $nabidh = new Nabidh();

        $msg->getMsh()->setSendingFacility('TESTHOS20');
        $msg->getMsh()->setDateTimeofMessage(date('YmdHis'));
        $msg->getMsh()->setProcessingID('1002');
        $msg->getPid()->setAdministrativeSex('M');
        $msg->getPid()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $msg->getPid()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $msg->getEvn()->setRecordedDateTime(date('r'));
        $msg->getEvn()->setEventFacility('TCODE10');

        $msg->getPid()->setPatientIdentifierList('123123', 'PP1122334455');
        $msg->getPid()->setPatientAddress('abc', 'abc state', '123', 'UK');
        $msg->getPid()->setNationality('USA');
        $msg->getPid()->setPhoneNumberHome('0123456789');

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $msg->getPv1()->setAssignedPatientLocation($apl);


        $this->assertStringStartsWith('MSH',(string)$msg);

        var_dump((string)$msg);

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


    public function testPatientArrivedTracking()
    {
        $this->assertSame('','');
    }

    public function testMergePatientInformation()
    {
        $this->assertSame('','');
    }

    public function testVaccinationRecordMessage()
    {
        $nb = new Nabidh();
        $vr = new VXU_V04_Vaccination_Record_Message();
        $vr->getMsh()->setSendingFacility('TESTHOS20');
        $vr->getMsh()->setDateTimeofMessage(date('YmdHis'));
        $vr->getMsh()->setProcessingID('1002');
        $vr->getPid()->setAdministrativeSex('M');
        $vr->getPid()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $vr->getPid()->setPhoneNumberHome('0123456789', 'abc@example.com');

        $vr->addGt1(new GT1(1));
        $vr->getGt1(0)->setGuarantorEmployerName('test data');
        $vr->addGt1(new GT1(2));
        $vr->getGt1(1)->setGuarantorEmployerName('xyz');
        $vr->getGt1(1)->setEmploymentStopDate(date('Ymd'));
        $vr->addIn1(new IN1(1));
        $vr->addIn1(new IN1(2));
        $pvg = new PV1_GROUP(new PV1());
        $pl = new PL();
        $pl->setFacility('232323');
        $pl->setBed('w3z1256');
        $pl->setRoom('room 555');
        $pl->setLocationDescription('moo hospital');
        $pl->setPointOfCare('drt');
        $pvg->getPv1()->setAssignedPatientLocation($pl);
        $pvg->getPv1()->setPatientType('4578');
        $vr->setADTPV1GROUP($pvg);

        var_dump((string)$vr);
    }

    public function testMDM_T02_Original_Document_Notification()
    {
        $msg = new MDM_T02_Original_Document_Notification();
        $msg->getMsh()->setSendingFacility('TESTHOS20');
        $msg->getMsh()->setDateTimeofMessage(date('YmdHis'));
        $msg->getMsh()->setProcessingID('1002');
        $msg->getPid()->setAdministrativeSex('M');
        $msg->getPid()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $msg->getPid()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $msg->getTxa()->setSetIDTXA(1);
        $msg->getTxa()->setActivityDateTime(strftime('%s', time()));
        $msg->getTxa()->setDocumentType('asas');
        $msg->getTxa()->setDocumentCompletionStatus('we3434');
        $msg->setMDMORCGROUP( new MDM_ORC_GROUP(new ORC(), new OBR(1)));
        $msg->getMDMORCGROUP(0)->getOBR()->setDiagnosticServiceSectionID('323');
        $msg->getMDMORCGROUP(0)->getOBR()->setFillerOrderNumber('3233333344');
        $msg->getMDMORCGROUP(0)->getOBR()->setParent('5-0232332');
        var_dump((string) $msg);
    }
}
