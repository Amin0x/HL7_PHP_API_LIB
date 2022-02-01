<?php
namespace amin0x\nabidh;

use InvalidArgumentException;

class Nabidh {


    /**
     * ADT^A01 Base Structure - A01
     *
     * Admit patient notification (This event is sent as a result of a patient undergoing the admission process)
     *
     * @param $patient
     * @param null $patientVisit PV1 array
     * @param null $PR1
     * @param null $insurance
     */
    public function AdmitPatientNotification($patient, $patientVisit = null, $PR1 = null, $insurance = null)
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
     * @param ADT_A01_Admit_Patient $admitPatient
     */
    public function AdmitPatientNotificationEx(ADT_A01_Admit_Patient  $admitPatient)
    {
        if (empty($admitPatient)){
            throw new InvalidArgumentException();
        }

        $this->send($admitPatient, 'ADT_A01');

    }



    public function registerPatient(ADT_A04_Register_Patient $registerPatient)
    {
        if (empty($registerPatient)){
            throw new InvalidArgumentException();
        }

        $this->send($registerPatient, 'ADT_A04');
    }


    /**
     * ADT^A01 Base Structure - A08
     * @param $patient
     * @param $patientVisit
     */
    public function updatePatientInformation()
    {

    }


    /**
     * ADT^A01 Base Structure - A13
     * @param $patient
     * @param $patientVisit
     */
    public function cancelDischargeEvent($patient, $patientVisit)
    {

    }


    /**
     * ADT^A02 Base Structure - A02
     * @param $patient
     * @param $patientVisit
     */
    public function patientTransferEvent(ADT_A02_Patient_Transfer $patientTransfer)    {

        $this->send($patientTransfer, 'ADT_A02');
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
    public function updatePatientInformation2()
    {

    }
    //ADT^A06 Base Structure - A06
    //ADT^A06 Base Structure - A07
    //
    /**
     * ADT^A09 Base Structure - A09
     *
     */
    public function patientDepartedTracking(ADT_A09_Patient_Departed $patientDeparted)
    {

    }


    /**
     *
     * ADT^A09 Base Structure - A10
     */
    public function patientArrivedTracking(ADT_A10_Patient_Arrived $patientArrived)
    {

    }


    /**
     * ADT^A09 Base Structure - A11
     *
     */
    public function cancelAdmitPatientNotification(ADT_A11_Cancel_Admit $cancelAdmit)
    {

    }

    //ADT^A12 Base Structure - A12

    /**
     * ADT^A21 Base Structure - A23
     * @param null $var
     */
    public function deletePatientRecord(ADT_A23_Delete_Patient_Record $deletePatientRecord)
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
    public function mergePatientInformation(ADT_A30_Merge_Patient_Information $mergePatientInformation)
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

    private function send(IMessage $msg, string $endPoint)
    {

        try {
            $endPoint = $msg->getMsh()->getMessageType();
            $str = $msg->__toString();
            $headers = [];
            $ch = curl_init('https://example.com/' . $endPoint);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $str);//curl_setopt($ch, , );
            $res = curl_exec($ch);
        } catch (\Exception $e) {
            return false;
        }

        if($res === false){
            return false;
        }

        return true;
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

        $pid->setPatientIdentifierList($patient['id'] ?? '', $patient['passport_number'] ?? '');

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


}