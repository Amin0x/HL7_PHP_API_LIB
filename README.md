# HL7_PHP_API_LIB

project to implement Nabidh HL7 using PHP

**Amin Omer** _garogigi@gmail.com_

## install

composer require amin0x/hl7_php_api_lib

## useage

> **Patient transfer message**

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

    $pt->getPV1()->setID(1);
    $pt->getPV1()->setAdmissionType('O');
    $pt->getPV1()->setAdmitDateTime(date('YmdHis'));
    $pt->getPV1()->setHospitalService(HospitalService::Unknown);
    $pt->getPV1()->setVisitNumber('99999');

    $apl = new PL();
    $apl->setPointOfCare('');
    $apl->setFacility('TCODE10');
    $apl->setLocationDescription('Test Hospital 20');
    $pt->getPV1()->setAssignedPatientLocation($apl);

    $AttendingDoctor = new XCN();
    $AttendingDoctor->setIdNumber('445566');
    $AttendingDoctor->setLastName('Ahmed');
    $AttendingDoctor->setFirstName('omer');
    $AttendingDoctor->setMiddleName('mohamed');
    $AttendingDoctor->setAssigningAuthority('SHERYAN');
    $AttendingDoctor->setPrefex('Dr.');
    $pt->getPV1()->setAttendingDoctor($AttendingDoctor);

    $res = $nabidh->sendMessage($pt, 'http://example.com/adt?app_id=&api_key=');
    if ($res !== false && $res->isSuccess()){
        //success
    } else {
        //error
    }

> **Patient Admit**

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


## Supported Messages

> 1. ADT_A01_Admit_Patient
> 2. ADT_A02_Patient_Transfer
> 3. ADT_A03_Discharge_Event
> 4. ADT_A04_Register_Patient
> 5. ADT_A05_Pre_Admit_Patient
> 6. ADT_A06_Change_Outpatient_To_Inpatient
> 7. ADT_A07_Change_Inpatient_To_Outpatient
> 8. ADT_A08_Update_Patient_Information
> 9. ADT_A09_Patient_Departed
> 10. ADT_A10_Patient_Arrived
> 11. ADT_A11_Cancel_Admit
> 12. ADT_A12_Cancel_Transfer
> 13. ADT_A13_Cancel_discharge_event
> 14. ADT_A23_Delete_Patient_Record
> 15. ADT_A28_Add_patient_information
> 16. ADT_A30_Merge_Patient_Information
> 17. ADT_A31_Update_patient_information
> 18. ADT_A39_Merge_Patient
> 19. ADT_A47_Change_Patient_Identifier_List
> 20. MDM_T02_Original_Document_Notification
> 21. MDM_T11_Document_Cancel_Notification
> 22. ORM_O01_Medication_Orders
> 23. ORU_R01_Observation_Results
> 24. PPR_PC1_Add_Probalem
> 25. PPR_PC2_Update_Probalem
> 26. PPR_PC3_Delete_Probalem
> 27. VXU_V04_Vaccination_Record_Message