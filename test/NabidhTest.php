<?php

namespace amin0x\nabidh;

use PHPUnit\Framework\TestCase;

class NabidhTest extends TestCase
{

    public function testPatientTransferEvent()
    {
        $nabidh = new Nabidh();
        $pt = new ADT_A02_Patient_Transfer();
        $pt->getMSH()->setSendingFacility('TESTHOS20');
        $pt->getMSH()->setDateTimeofMessage(date('YmdHis'));
        $pt->getMSH()->setProcessingID('D');

        $pt->getPID()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pt->getPID()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $pt->getPID()->addPatientIdentifierList('123123','TESTHOS20', 'MRN');
        $pt->getPID()->setPatientAddress('Dubai', 'Dubai', '', '784');
        $pt->getPID()->setPatientName('amin', 'o', 'mohamed');
        $pt->getPID()->setLastUpdateDateTime(date('YmdHis'));
        $pt->getPID()->setAdministrativeSex('M');
        $pt->getPID()->setPrimaryLanguage('ENG');
        $pt->getPID()->setNationality(Nationality::Canadian[0]);
        $pt->getPID()->setMaritalStatus('M');
        $pt->getPID()->setReligion('MOS');
        $pt->getPID()->setSSNNumberPatient('111111111111111');
        $pt->getPID()->setPatientDeathIndicator('N');
        $pt->getPID()->setIdentityUnknownIndicator('T');

        $pt->getEVN()->setRecordedDateTime(date('YmdHis'));
        $pt->getEVN()->setEventFacility('1111111');
        $pt->getEVN()->setEventTypeCode('A02');
        $pt->getEVN()->setEventOccurred(date('YmdHis'));

        $apl = new PL();
        $apl->setPointOfCare('');
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pt->getPV1()->setAssignedPatientLocation($apl);
        $pt->getPV1()->setID(1);

        $AttendingDoctor = new XCN();
        $AttendingDoctor->setIdNumber('445566');
        $AttendingDoctor->setLastName('Ahmed');
        $AttendingDoctor->setFirstName('omer');
        $AttendingDoctor->setMiddleName('mohamed');
        $AttendingDoctor->setAssigningAuthority('SHERYAN');
        $AttendingDoctor->setPrefex('Dr.');
        $pt->getPV1()->setAttendingDoctor($AttendingDoctor);
        $pt->getPV1()->setAdmissionType('O');
        $pt->getPV1()->setAdmitDateTime(date('YmdHis'));
        $pt->getPV1()->setHospitalService(HospitalService::Unknown);
        $pt->getPV1()->setVisitNumber('99999');


        $this->assertStringStartsWith('MSH',(string)$pt);
        $pt = (string) $pt;
        var_dump((string)$pt);
    }

    public function testDeletePatientRecord()
    {
        $nabidh = new Nabidh();
        $pt = new ADT_A23_Delete_Patient_Record();
        $pt->getMSH()->setSendingFacility('TESTHOS20');
        $pt->getMSH()->setDateTimeofMessage(date('YmdHis'));
        $pt->getMSH()->setProcessingID('D');
        $pt->getPID()->setAdministrativeSex('M');
        $pt->getPID()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pt->getPID()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $pt->getEVN()->setRecordedDateTime(date('r'));
        $pt->getEVN()->setEventFacility('TCODE10');

        $pt->getPID()->addPatientIdentifierList('123123', 'TESTHOS20', 'PPN');
        $pt->getPID()->setPatientAddress('abc', 'abc state', '123', 'UK');
        $pt->getPID()->setNationality('USA');
        $pt->getPID()->setPhoneNumberHome('0123456789');

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pt->getPV1()->setAssignedPatientLocation($apl);
        $this->assertSame('','');
        var_dump((string) $pt);
    }

    public function testAdmitPatientNotification()
    {
        $nabidh = new Nabidh();
        $pt = new ADT_A01_Admit_Patient();
        $pt->getMSH()->setSendingFacility('TESTHOS20');
        $pt->getMSH()->setDateTimeofMessage(date('YmdHis'));
        $pt->getMSH()->setProcessingID('D');
        $pt->getPID()->setAdministrativeSex('M');
        $pt->getPID()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $pt->getPID()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $pt->getEVN()->setRecordedDateTime(date('r'));
        $pt->getEVN()->setEventFacility('TCODE10');

        $pt->getPID()->addPatientIdentifierList('123123', 'TESTHOS20', 'PPN');
        $pt->getPID()->setPatientAddress('abc', 'abc state', '123', 'UK');
        $pt->getPID()->setNationality('USA');
        $pt->getPID()->setPhoneNumberHome('0123456789');

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $pt->getPV1()->setAssignedPatientLocation($apl);
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

        $msg->getMSH()->setSendingFacility('TESTHOS20');
        $msg->getMSH()->setDateTimeofMessage(date('YmdHis'));
        $msg->getMSH()->setProcessingID('D');
        $msg->getPID()->setAdministrativeSex('M');
        $msg->getPID()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $msg->getPID()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $msg->getEVN()->setRecordedDateTime(date('r'));
        $msg->getEVN()->setEventFacility('TCODE10');

        $msg->getPID()->addPatientIdentifierList('123123', 'TESTHOS20', 'PPN');
        $msg->getPID()->setPatientAddress('abc', 'abc state', '123', 'UK');
        $msg->getPID()->setNationality('USA');
        $msg->getPID()->setPhoneNumberHome('0123456789');

        $apl = new PL();
        $apl->setFacility('TCODE10');
        $apl->setLocationDescription('Test Hospital 20');
        $msg->getPV1()->setAssignedPatientLocation($apl);


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
        $vr->getPID()->setDateTimeofBirth(date('Ymd', strtotime('19990507')));
        $vr->getPID()->setPhoneNumberHome('0123456789', 'abc@example.com');
        $vr->getPID()->addPatientIdentifierList('123123','TESTHOS20', 'MRN');
        $vr->getPID()->setPatientAddress('Dubai', 'Dubai', '', '784');
        $vr->getPID()->setPatientName('amin', 'o', 'mohamed');
        $vr->getPID()->setLastUpdateDateTime(date('YmdHis'));
        $vr->getPID()->setAdministrativeSex('M');
        $vr->getPID()->setPrimaryLanguage('ENG');
        $vr->getPID()->setNationality(Nationality::Canadian[0]);
        $vr->getPID()->setMaritalStatus('M');
        $vr->getPID()->setReligion('MOS');
        $vr->getPID()->setSSNNumberPatient('111111111111111');
        $vr->getPID()->setPatientDeathIndicator('N');
        $vr->getPID()->setIdentityUnknownIndicator('T');

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

        $AttendingDoctor = new XCN();
        $AttendingDoctor->setIdNumber('445566');
        $AttendingDoctor->setLastName('Ahmed');
        $AttendingDoctor->setFirstName('omer');
        $AttendingDoctor->setMiddleName('mohamed');
        $AttendingDoctor->setAssigningAuthority('SHERYAN');
        $AttendingDoctor->setPrefex('Dr.');
        $pvg->getPV1()->setAttendingDoctor($AttendingDoctor);

        $pvg->getPV1()->setAdmissionType('O');
        $pvg->getPV1()->setAdmitDateTime(date('YmdHis'));
        $pvg->getPV1()->setHospitalService(HospitalService::Unknown);
        $pvg->getPV1()->setVisitNumber('99999');
        $vr->setADTPV1GROUP($pvg);

        $vr = (string) $vr;
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
