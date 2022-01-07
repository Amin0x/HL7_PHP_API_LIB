<?php
namespace nabidh;

class RegisterPatientFactory
{
    private MSH $msh;
    private PID $pid;
    private EVN $evn;
    private PV1 $pv1;

    /**
     * RegisterPatientQuery constructor.
     */
    public function __construct()
    {
        $this->msh = new MSH();
        $this->msh->setMessageType('ADT^A04');
        $this->msh->setMessageControlID(time());
        $this->msh->setDateTimeofMessage(date('YmdH:i:s'));
        $this->msh->setSendingApplication('');
        $this->msh->setSendingFacility('');
        $this->msh->setProcessingID('');

        $this->evn = new EVN('A04',date('r'),'');
        $this->evn->setEventTypeCode('A04');
        $this->evn->setRecordedDateTime(date('c'));
        $this->evn->setEventFacility('');
        $this->pid = new PID();
        $this->pv1 = new PV1();
    }


    public function addPatientName($firtName, $midName, $lastName) {
        if(!isset($firtName) || empty($firtName))
            return;

        if (!isset($midName) || empty($midName))
            return;

        if (!isset($lastName) || empty($lastName))
            return;

        $this->pid->setPatientIdentifierList("");

    }

    public function addPatientId(
        array $patientIdentifierList, //['passport' => '', id => '']
        array $name,
        string $dateBirth,
        string $sex,
        string $address,
        string $phone,
        string $emiratesID,
        string $nationality,
        string $lastUpdate
    )
    {
        $this->pid->setPatientIdentifierList($patientIdentifierList);
        $this->pid->setAdministrativeSex($sex);
        $this->pid->setPatientName($name[0], $name[1], $name[2]);
        $this->pid->setPatientAddress($address);
        $this->pid->setPhoneNumberHome($phone);
        $this->pid->setPhoneNumberHome($phone);
        $this->pid->setDateTimeofBirth($dateBirth);
        $this->pid->setSSNNumberPatient($emiratesID);
        $this->pid->setLastUpdateDateTime($lastUpdate);
        $this->pid->setNationality($nationality);
    }

    public function patientVisit(array $patientClass, array $assignedPatientLocation, string $admissionType,
                string $hospitalService, string $visitNumber, string $admitDateTime)
    {
        $this->pv1->setPatientClass($patientClass);
        $this->pv1->setAssignedPatientLocation($assignedPatientLocation);
        $this->pv1->setAdmissionType($admissionType);
        $this->pv1->setHospitalService($hospitalService);
        $this->pv1->setVisitNumber($visitNumber);
    }

    /**
     * @return MSH
     */
    public function getMsh(): MSH
    {
        return $this->msh;
    }

    /**
     * @return PID
     */
    public function getPid(): PID
    {
        return $this->pid;
    }

    /**
     * @return EVN
     */
    public function getEvn(): EVN
    {
        return $this->evn;
    }

    /**
     * @return PV1
     */
    public function getPv1(): PV1
    {
        return $this->pv1;
    }

    public function isValide()
    {

    }


}