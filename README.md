# HL7_PHP_API_LIB

project to implement Nabidh HL7 using PHP

**Amin Omer** _Aminomer575@gmail.com_

#### install

composer require amin0x/hl7_php_api_lib

#### useage

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
