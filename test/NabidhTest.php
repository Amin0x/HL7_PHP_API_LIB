<?php

namespace amin0x\nabidh;

use PHPUnit\Framework\TestCase;

class NabidhTest extends TestCase
{

    public function testPatientTransferEvent()
    {
        $nabidh = new Nabidh();
        $pt = new ADT_A02_Patient_Transfer();
        $pt->getMessageHeader()->setSendingFacility('TESTHOS20');
        $pt->getMessageHeader()->setDateTimeofMessage(date('YmdHis'));
        $pt->getMessageHeader()->setProcessingID('D');

        $pt->getPatientIdentification()->setAdministrativeSex('M');
        $pt->getPatientIdentification()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pt->getPatientIdentification()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $pt->getPatientIdentification()->setSSNNumberPatient('784123412345671');
        $pt->getPatientIdentification()->addPatientIdentifierList('123123','TESTHOS20', 'MRN');
        //$pt->getPatientIdentification()->addPatientIdentifierList('123123','TESTHOS20', 'PPN');
        $pt->getPatientIdentification()->setPatientAddress('Dubai', 'Dubai', '', '784');
        $pt->getPatientIdentification()->setNationality('USA');
        $pt->getPatientIdentification()->setPatientName('amin', 'o', 'mohamed');
        $pt->getPatientIdentification()->setPrimaryLanguage('ENG');
        $pt->getPatientIdentification()->setLastUpdateDateTime(time());
        $pt->getPatientIdentification()->setMaritalStatus('M');
        $pt->getPatientIdentification()->setReligion('MOS');
        $pt->getPatientIdentification()->setSSNNumberPatient('784123412345671');

        $pt->getEventType()->setRecordedDateTime(date('YmdHis'));
        $pt->getEventType()->setEventFacility('1111111');
        $pt->getEventType()->setEventTypeCode('A02');
        $pt->getEventType()->setEventOccurred(date('YmdHis'));



        $apl = new PL();
        $apl->setPointOfCare('TCODE10');
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pt->getPatientVisit()->setAssignedPatientLocation($apl);
        $pt->getPatientVisit()->setID(1);

        $AttendingDoctor = new XCN();
        $AttendingDoctor->setIdNumber('445566');
        $AttendingDoctor->setLastName('Ahmed');
        $AttendingDoctor->setFirstName('omer');
        $AttendingDoctor->setMiddleName('mohamed');
        $AttendingDoctor->setAssigningAuthority('SHERYAN');
        $AttendingDoctor->setPrefex('Dr.');
        $pt->getPatientVisit()->setAttendingDoctor($AttendingDoctor);
        $pt->getPatientVisit()->setAdmissionType('O');
        $pt->getPatientVisit()->setAdmitDateTime(date('YmdHis'));
        $pt->getPatientVisit()->setHospitalService('O');


        $this->assertStringStartsWith('MSH',(string)$pt);
        var_dump((string)$pt);
    }

    public function testDeletePatientRecord()
    {
        $nabidh = new Nabidh();
        $pt = new ADT_A23_Delete_Patient_Record();
        $pt->getMessageHeader()->setSendingFacility('TESTHOS20');
        $pt->getMessageHeader()->setDateTimeofMessage(date('YmdHis'));
        $pt->getMessageHeader()->setProcessingID('D');
        $pt->getPatientIdentification()->setAdministrativeSex('M');
        $pt->getPatientIdentification()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pt->getPatientIdentification()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $pt->getEventType()->setRecordedDateTime(date('r'));
        $pt->getEventType()->setEventFacility('TCODE10');

        $pt->getPatientIdentification()->addPatientIdentifierList('123123', 'TESTHOS20', 'PPN');
        $pt->getPatientIdentification()->setPatientAddress('abc', 'abc state', '123', 'UK');
        $pt->getPatientIdentification()->setNationality('USA');
        $pt->getPatientIdentification()->setPhoneNumberHome('0123456789');

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pt->getPatientVisit()->setAssignedPatientLocation($apl);
        $this->assertSame('','');
        var_dump((string) $pt);
    }

    public function testAdmitPatientNotification()
    {
        $nabidh = new Nabidh();
        $pt = new ADT_A01_Admit_Patient();
        $pt->getMessageHeader()->setSendingFacility('TESTHOS20');
        $pt->getMessageHeader()->setDateTimeofMessage(date('YmdHis'));
        $pt->getMessageHeader()->setProcessingID('D');
        $pt->getPatientIdentification()->setAdministrativeSex('M');
        $pt->getPatientIdentification()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pt->getPatientIdentification()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $pt->getEventType()->setRecordedDateTime(date('r'));
        $pt->getEventType()->setEventFacility('TCODE10');

        $pt->getPatientIdentification()->addPatientIdentifierList('123123', 'TESTHOS20', 'PPN');
        $pt->getPatientIdentification()->setPatientAddress('abc', 'abc state', '123', 'UK');
        $pt->getPatientIdentification()->setNationality('USA');
        $pt->getPatientIdentification()->setPhoneNumberHome('0123456789');

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pt->getPatientVisit()->setAssignedPatientLocation($apl);
        $this->assertSame('','');

        var_dump((string) $pt);
    }
/*
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
    }*/

    public function testRegisterPatient()
    {
        $msg = new ADT_A04_Register_Patient();
        $nabidh = new Nabidh();

        $msg->getMessageHeader()->setSendingFacility('TESTHOS20');
        $msg->getMessageHeader()->setDateTimeofMessage(date('YmdHis'));
        $msg->getMessageHeader()->setProcessingID('D');
        $msg->getPatientIdentification()->setAdministrativeSex('M');
        $msg->getPatientIdentification()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $msg->getPatientIdentification()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $msg->getEventType()->setRecordedDateTime(date('r'));
        $msg->getEventType()->setEventFacility('TCODE10');

        $msg->getPatientIdentification()->addPatientIdentifierList('123123', 'TESTHOS20', 'PPN');
        $msg->getPatientIdentification()->setPatientAddress('abc', 'abc state', '123', 'UK');
        $msg->getPatientIdentification()->setNationality('USA');
        $msg->getPatientIdentification()->setPhoneNumberHome('0123456789');

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $msg->getPatientVisit()->setAssignedPatientLocation($apl);


        $this->assertStringStartsWith('MSH',(string)$msg);

        var_dump((string)$msg);

        $this->assertSame('','');
    }

/*    public function testUpdatePatientInformation2()
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
    }*/

    public function testVaccinationRecordMessage()
    {
        $nb = new Nabidh();
        $vr = new VXU_V04_Vaccination_Record_Message();
        $vr->getMSH()->setSendingFacility('TESTHOS20');
        $vr->getMSH()->setDateTimeofMessage(date('YmdHis'));
        $vr->getMSH()->setProcessingID('D');
        $vr->getPID()->setAdministrativeSex('M');
        $vr->getPID()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $vr->getPID()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $vr->addGt1(new GT1(1));
        $empName = new XPN();
        $empName->setFirstName('omer');
        $empName->setLastName('amin');
        $empName->setMidName('o');
        $vr->getGT1(0)->setGuarantorEmployerName($empName);
        $vr->addGt1(new GT1(2));
        $vr->getGT1(1)->setGuarantorEmployerName($empName);
        $vr->getGT1(1)->setEmploymentStopDate(date('Ymd'));
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
        $pvg->getPv1()->setPatientClass('4578');
        $vr->setADTPV1GROUP($pvg);

        var_dump((string)$vr);

        $this->assertSame('','');
    }

    public function testMDM_T02_Original_Document_Notification()
    {
        $msg = new MDM_T02_Original_Document_Notification();
        $msg->getMSH()->setSendingFacility('TESTHOS20');
        $msg->getMSH()->setDateTimeofMessage(date('YmdHis'));
        $msg->getMSH()->setProcessingID('D');
        $msg->getPID()->setAdministrativeSex('M');
        $msg->getPID()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $msg->getPID()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $msg->getTXA()->setID(1);
        $msg->getTXA()->setActivityDateTime(strftime('%s', time()));
        $msg->getTXA()->setDocumentType('asas');
        $msg->getTXA()->setDocumentCompletionStatus('we3434');
        $msg->setMDMORCGROUP(new MDM_ORC_GROUP(new ORC(), new OBR(1)), false);
        $msg->getMDMORCGROUP(0)->getOBR()->setDiagnosticServiceSectionID('323');
        $filter = new EI();
        $msg->getMDMORCGROUP(0)->getOBR()->setFillerOrderNumber($filter);
        $eip = new EIP('5-0232332');
        $msg->getMDMORCGROUP(0)->getOBR()->setParent($eip);
        var_dump((string) $msg);

        $this->assertSame('', '');
    }

    public function testADT_A47_Change_Patient_Identifier_List()
    {
        $msg = new ADT_A47_Change_Patient_Identifier_List();
        $msg->getMSH()->setSendingFacility('TESTHOS20');
        $msg->getMSH()->setDateTimeofMessage(date('YmdHis'));
        $msg->getMSH()->setProcessingID('D');
        $msg->getPID()->setAdministrativeSex('M');
        $msg->getPID()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $msg->getPID()->setPhoneNumberHome('0123456789', 'abc@example.com');



        var_dump((string) $msg);
        $this->assertSame('','');
    }

}
