<?php
namespace amin0x\nabidh;

use http\Exception\InvalidArgumentException;

class Nabidh {


    /**
     * ADT^A01 Base Structure - A01
     *
     * Admit patient notification (This event is sent as a result of a patient undergoing the admission process)
     *
     * @param Patient $patient
     * @param null $patientVisit PV1 array
     * @param null $PR1
     * @param null $insurance
     */
    public function AdmitPatientNotification(Patient $patient, $patientVisit = null, $PR1 = null, $insurance = null)
    {
        $msg = new Message();

        $msg->setHeader(Nabidh::creatMessageHeader('ADT^A01'));

        $pid = new PID();
        $pid->setNationality($patient->nationality);
        $pid->setLastUpdateDateTime(date('r'));
        $pid->setDateTimeofBirth($patient->dateOfBirth);
        $pid->setPatientName($patient->first_name, $patient->mid_name, $patient->last_name);
        $pid->setPatientIdentifierList($patient->id);
        $pid->setAdministrativeSex($patient->administrative_sex);
        $pid->setPatientAddress($patient->city, $patient->state, $patient->zip, $patient->country);
        $msg->addSegment($pid);

        $evn = new EVN();
        $evn->setEventTypeCode('A01');
        $evn->setEventFacility('');
        $evn->setRecordedDateTime('');
        $msg->addSegment($evn);

        $pv1 = self::createPV1($patientVisit);

        $msg->addSegment($pv1);
        $this->send($msg);
    }

    /**
     * ADT^A01 Base Structure - A01
     *
     * Admit patient notification (This event is sent as a result of a patient undergoing the admission process)
     *
     * @param ADT_A01_Admit_Patient $admit_Patient
     */
    public function AdmitPatientNotificationEx(ADT_A01_Admit_Patient  $admit_Patient)
    {
        $message = new Message();

        $this->addSegment($message, $admit_Patient->getMsh());
        $this->addSegment($message, $admit_Patient->getPid());
        $this->addSegment($message, $admit_Patient->getEvn());
        $this->addSegment($message, $admit_Patient->getPv1());
        $this->addSegment($message, $admit_Patient->getPd1());
        $this->addSegment($message, $admit_Patient->getNk1());
        $this->addSegment($message, $admit_Patient->getPv2());
        $this->addSegment($message, $admit_Patient->getObx());
        $this->addSegment($message, $admit_Patient->getAl1());
        $this->addSegment($message, $admit_Patient->getDg1());
        $this->addSegment($message, $admit_Patient->getDrg());
        $this->addSegment($message, $admit_Patient->getPr1());
        $this->addSegment($message, $admit_Patient->getGt1());
        $this->addSegment($message, $admit_Patient->getIn1());

    }


    /**
     * ADT^A01 Base Structure - A04
     * Register a patient
     * @param Patient $patient
     * @param PatientVisit $patientVisit
     */
    public function registerPatient(Patient $patient, PatientVisit $patientVisit)
    {
        if (empty($patient) || empty($patientVisit)){
            throw new InvalidArgumentException();
        }

        $msg = new Message();


        $msg->setHeader(Nabidh::creatMessageHeader());

        $pid = self::createPID($patient);
        $msg->addSegment($pid);

        $evn = Nabidh::createEVN('A08', '', '');
        $msg->addSegment($evn);

        $pv1 = self::createPV1($patientVisit);

        $msg->addSegment($pv1);
        $this->send($msg);
    }

    /**
     * ADT^A01 Base Structure - A04
     * Register a patient
     * @param ADT_A04_Register_Patient $registerPatientQuery
     * @param $patientVisit
     * @param $patient
     */
    public function registerPatientQ(ADT_A04_Register_Patient $registerPatient)
    {
        if (empty($registerPatientQuery)){
            throw new InvalidArgumentException();
        }

        $msg = new Message();
        $msg->setHeader(Nabidh::creatMessageHeader());

        $pid = self::createPID($patient);
        $msg->addSegment($pid);

        $evn = Nabidh::createEVN('A08', '', '');
        $msg->addSegment($evn);

        $pv1 = self::createPV1($patientVisit);

        $msg->addSegment($pv1);
        $this->send($msg);
    }


    /**
     * ADT^A01 Base Structure - A08
     * @param $patient
     * @param $patientVisit
     */
    public function updatePatientInformation($patient, $patientVisit)
    {
        $msg = new Message();

        $msg->setHeader(Nabidh::creatMessageHeader());

        $pid = self::createPID($patient);
        $msg->addSegment($pid);

        $evn = Nabidh::createEVN('A08', '', '');
        $msg->addSegment($evn);

        $pv1 = self::createPV1($patientVisit);

        $msg->addSegment($pv1);
        $this->send($msg);
    }


    /**
     * ADT^A01 Base Structure - A13
     * @param $patient
     * @param $patientVisit
     */
    public function cancelDischargeEvent($patient, $patientVisit)
    {
        $msg = new Message();
        $msg->setHeader(Nabidh::creatMessageHeader());

        $pid = self::createPID($patient);
        $msg->addSegment($pid);

        $evn = Nabidh::createEVN('A08', '', '');
        $msg->addSegment($evn);

        $pv1 = self::createPV1($patientVisit);

        $msg->addSegment($pv1);
        $this->send($msg);
    }


    /**
     * ADT^A02 Base Structure - A02
     * @param $patient
     * @param $patientVisit
     */
    public function patientTransferEvent($patient, $patientVisit)
    {
        $msg = new Message();
        $msg->setHeader(Nabidh::creatMessageHeader());

        $pid = self::createPID($patient);
        $msg->addSegment($pid);

        $evn = Nabidh::createEVN('A08', '', '');
        $msg->addSegment($evn);

        $pv1 = self::createPV1($patientVisit);
        $msg->addSegment($pv1);

        $this->send($msg);
    }


    /**
     * ADT^A03 Base Structure - A03
     * Discharge event (This event signals the end of a patient’s stay in a healthcare facility)
     */
    public function dischargeEvent()
    {

    }


    /**
     * ADT^A05 Base Structure - A05
     */
    public function preAdmitPatient()
    {

    }


    /**
     * ADT^A05 Base Structure - A28
     */
    public function addPatientInformation()
    {

    }


    /**
     * ADT^A05 Base Structure - A31
     */
    public function updatePatientInformation()
    {

    }
    //ADT^A06 Base Structure - A06
    //ADT^A06 Base Structure - A07
    //
    /**
     * ADT^A09 Base Structure - A09
     *
     */
    public function patientDepartedTracking()
    {

    }


    /**
     *
     * ADT^A09 Base Structure - A10
     */
    public function patientArrivedTracking()
    {

    }


    /**
     * ADT^A09 Base Structure - A11
     *
     */
    public function cancelAdmitPatientNotification()
    {

    }
    //ADT^A12 Base Structure - A12

    /**
     * ADT^A21 Base Structure - A23
     * @param null $var
     */
    public function deletePatientRecord($var = null)
    {
        # code...
    }
    //ADT^A21 Base Structure - A25
    //ADT^A21 Base Structure - A27

    /**
     * ADT^A30 Base Structure - A30
     * @param $pid
     * @param $mrg
     * @param null $pd1
     */
    public function mergePatientInformation($pid, $mrg, $pd1 = null)
    {
        # code...
    }
    //ADT^A30 Base Structure - A47
    //ADT^A39 Base Structure - A39
    //ADT^A39 Base Structure - A40
    //ADT^A45 Base Structure - A45
    //ORM^O01 Base Structure - O01
    //RDE^O11 Base Structure – O11
    //OMP^O09 Structure Base – O09
    //ORU^R01 Base Structure – R01
    //MDM^T01 Base Structure– T11
    //MDM^T02 Base Structure– T02
    //MDM^T02 Base Structure– T04
    //MDM^T02 Base Structure– T08
    //VXU^V04 Base Structure – V04
    private function send(Message $msg)
    {
        $str = $msg->toString();
        $ch = curl_init('https://example.com/ADT');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, []);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $str);
        curl_setopt($ch, , );
    }

    private static function creatMessageHeader($type)
    {
        $msh = new MSH();
        $msh->setMessageType($type);
        $msh->setVersionID('2.5');
        $msh->setSendingFacility('');
        $msh->setSendingApplication('');
        $msh->setMessageControlID(time());
        $msh->setProcessingID('');
        $msh->setReceivingFacility('DHA');
        $msh->setReceivingApplication('NABIDH');
        $msh->setEncodingCharacters('^~\&');
        $msh->setDateTimeofMessage(date('r'));

        return $msh;
    }

    private function addSegment($message, $segment)
    {
        if (is_array($segment)){
            foreach ($segment as $item) {
                $message->addSegment($item);
            }

            return;
        }

        $message->addSegment($segment);
    }

    /**
     * @param string $type
     * @param string $eventFacility
     * @param string $recordedAt
     * @return EVN
     */
    private static function createEVN(string $type, string $eventFacility, string $recordedAt): EVN
    {
        $evn = new EVN();
        $evn->setEventTypeCode('A04');
        $evn->setRecordedDateTime($recordedAt);
        $evn->setEventFacility($eventFacility);
        return $evn;
    }

    /**
     * @param $patient
     * @return PID
     */
    private static function createPID($patient): PID
    {
        $pid = new PID();
        $pid->setNationality($patient->nationality);
        $pid->setLastUpdateDateTime(date('r'));
        $pid->setDateTimeofBirth('');
        $pid->setPatientName($patient->first_name, $patient->mid_name, $patient->last_name);
        $pid->setPatientIdentifierList($patient->id, $patient->passport_number);
        $pid->setAdministrativeSex($patient->administrative_sex);
        $pid->setPatientAddress($patient->city, $patient->state, $patient->zip, $patient->country);
        return $pid;
    }

    /**
     * @param $patientVisit
     * @return PV1
     */
    private static function createPV1($patientVisit): PV1
    {
        $pv1 = new PV1();
        $pv1->setAdmitDateTime($patientVisit->admit_date_time);
        $pv1->setVisitNumber($patientVisit->visit_number);
        $pv1->setHospitalService($patientVisit->hospital_service);
        $pv1->setPatientClass($patientVisit->patient_class);
        $pv1->setAssignedPatientLocation($patientVisit->assigned_patient_location);
        $pv1->setAdmissionType($patientVisit->admission_type);
        $pv1->setAttendingDoctor($patientVisit->attend_doctor);
        return $pv1;
    }
}