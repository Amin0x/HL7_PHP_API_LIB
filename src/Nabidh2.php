<?php



namespace amin0x\nabidh;



class Nabidh2
{
    public function createMessage(string $msgType): bool|Message
    {
        if(empty($msgType)){
            return false;
        }

        $config = include 'config/config.php';
        $message = new Message();
        $msh = new MSH();
        $msh->setSendingApplication($config['sending_application']);
        $msh->setSendingFacility($config['sending_facility']);
        $msh->setVersionID($config['version_id']);
        $msh->setProcessingID($config['processing_id']);
        $msh->setReceivingApplication($config['receiving_application']);
        $msh->setReceivingFacility($config['receiving_facility']);
        $msh->setMessageType($msgType);
        $message->addSegment($msh);

        return $message;
    }

    /**
     * ADT^A01 Base Structure - A01
     *
     * Admit patient notification (This event is sent as a result of a patient undergoing the admission process)
     *
     * @param array $patient
     * @return Message|false
     */
    public function createAdmitPatientNotificationMessage(array $patient)
    {
        $msg = $this->createMessage('ADT^A01');

        $pid = self::createPID($patient);
        $msg->addSegment($pid);

        $evn = new EVN();
        $evn->setEventTypeCode('ADT^A01');
        $evn->setEventFacility('');
        $evn->setRecordedDateTime('');
        $msg->addSegment($evn);

        $pv1 = self::createPV1($patient);
        $msg->addSegment($pv1);

        return $msg;
    }

    public function createRegisterPatientMessage(array $reg)
    {
        $msg = $this->createMessage('ADT^A04');
        $msg->addSegment(self::createEVN('A04', $reg['event_facility'], $reg['event_recorded_at']));
        $msg->addSegment(self::createPID($reg));
        $msg->addSegment(self::createPV1($reg));
        return $msg;
    }

    public function createPatientVisitMessage()
    {
        $msg = $this->createMessage('ADT^A10');
        return $msg;
    }

    public function createCanclePatientVisitMessage()
    {
        return $this->createMessage('');
    }

    public function createPatientTransferMessage()
    {
        return $this->createMessage('ADT^A02');
    }

    public function createChangeOutpatientToInpatientMessage()
    {
        return $this->createMessage('ADT^A06');
    }

    public function createChangeInpatientToOutpatientMessage()
    {
        return $this->createMessage('ADT^A07');
    }

    public function createMergePatientIdMessage()
    {
        return $this->createMessage('ADT^A39');
    }

    public function createPharmacyTreatmentOrderMessage()
    {
        return $this->createMessage('ORM^O01');
    }

    public function createObservationMessage()
    {
        return $this->createMessage('ORU^R01');
    }

    public function addSegment(Message $message, Segment $segment)
    {
        if (strtoupper(get_class($segment)) == MSH::class){
            $message->setHeader($segment);
            return;
        }

        $message->addSegment($segment);
    }

    public function addGroup(Message $message, $group)
    {
        if (strtoupper(get_class($group)) == ADT_INSURANCE::class){
            foreach ($group->getArray() as $item) {
                $message->addSegment($item);
            }

            return;
        }

        if (strtoupper(get_class($group)) == ADT_PROCEDURE::class){
            foreach ($group->getArray() as $item) {
                $message->addSegment($item);
            }
        }
    }

    public static function creatMessageHeader($type): MSH
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
     * @param array $patient
     * @return PID
     */
    private static function createPID(array $patient): PID
    {
        $pid = new PID();

        if (isset($patient['nationality'])) {
            $pid->setNationality($patient['nationality']);
        }

        $pid->setLastUpdateDateTime($patient['last_update_date_time'] ?? date('r'));

        if (isset($patient['date_time_of_birth'])) {
            $pid->setDateTimeofBirth($patient['date_time_of_birth']);
        }

        if (isset($patient['first_name']) && isset($patient['mid_name']) && isset($patient['last_name'])) {
            $pid->setPatientName($patient['first_name'], $patient['mid_name'], $patient['last_name']);
        }

        //$pid->addPatientIdentifierList($patient['id'] ?? '', $patient['passport_number'] ?? '');

        if (isset($patient['administrative_sex'])) {
            $pid->setAdministrativeSex($patient['administrative_sex']);
        }

        if (isset($patient['city']) && isset($patient['state']) && isset($patient['country'])) {
            $pid->setPatientAddress($patient['city'], $patient['state'], $patient['zip'], $patient['country']);
        }

        return $pid;
    }

    /**
     * @param array $patientVisit
     * @return PV1
     */
    private static function createPV1(array $patientVisit): PV1
    {
        $pv1 = new PV1();

        if(isset($patientVisit['admit_date_time']))
            $pv1->setAdmitDateTime($patientVisit['admit_date_time']);

        if(isset($patientVisit['visit_number']))
            $pv1->setVisitNumber($patientVisit['visit_number']);

        if(isset($patientVisit['hospital_service']))
            $pv1->setHospitalService($patientVisit['hospital_service']);

        if(isset($patientVisit['patient_class']))
            $pv1->setPatientClass($patientVisit['patient_class']);

        if(isset($patientVisit['assigned_patient_location']))
            $pv1->setAssignedPatientLocation($patientVisit['assigned_patient_location']);

        if(isset($patientVisit['admission_type']))
            $pv1->setAdmissionType($patientVisit['admission_type']);

        if(isset($patientVisit['attend_doctor']))
            $pv1->setAttendingDoctor($patientVisit['attend_doctor']);

        return $pv1;
    }

    public function sendMessage(Message $msg, string $endPoint): bool|ACK_Response
    {

        try {
            //$endPoint = $msg->getMSH()->getMessageType();
            $str = $msg->toString();
            $headers = [];
            $ch = curl_init($endPoint);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $str);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $res = curl_exec($ch);
        } catch (\Exception $e) {
            return false;
        }

        if($res === false){
            return false;
        }

        $msa = new ACK_Response($str);

        return $msa;
    }

}