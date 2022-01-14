<?php
namespace amin0x\nabidh;

class RegisterPatientFactory
{
    private $msh;
    private $evn;
    private $pid;
    private $pd1;
    private $nk1 = [];
    private $pv1;
    private $pv2;
    private $obx = [];
    private $al1 = [];
    private $dg1 = [];
    private $drg;
    private $pr1 = []; //
    private $gt1 = [];
    private $in1 = [];


    /**
     * RegisterPatientQuery constructor.
     */
    public function __construct($pid = null, $pv1 = null)
    {
        $this->msh = new MSH();
        $this->msh->setMessageType('ADT^A04');
        $this->msh->setMessageControlID(time());
        $this->msh->setDateTimeofMessage(date('YmdH:i:s'));
        $this->msh->setSendingApplication('');
        $this->msh->setSendingFacility('');
        $this->msh->setProcessingID('');

        $this->evn = new EVN();
        $this->evn->setEventTypeCode('A04');
        $this->evn->setRecordedDateTime(date('c'));
        $this->evn->setEventFacility('');
        $this->pid = $pid;
        $this->pv1 = $pv1;
    }


    public function setEvent(EVN $evn)
    {
        $this->evn = $evn;
    }

    public function setPatientId(PID $pid)
    {
        $this->pid = $pid;
    }

    public function setPatientVisit(PV1 $pv1)
    {
        $this->pv1 = $pv1;
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