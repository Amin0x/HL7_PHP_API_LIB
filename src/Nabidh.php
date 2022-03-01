<?php
namespace amin0x\nabidh;

use InvalidArgumentException;

class Nabidh {


    /**
     * ADT^A01 Base Structure - A01
     * Admit patient notification (This event is sent as a result of a patient undergoing the admission process)
     *
     * @param ADT_A01_Admit_Patient $message
     */
    public function sendAdmitPatientNotification(ADT_A01_Admit_Patient  $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A01');

    }

    public function sendRegisterPatient(ADT_A04_Register_Patient $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A04');
    }


    /**
     * ADT^A01 Base Structure - A08
     * @param ADT_A08_Update_Patient_Information $message
     */
    public function updatePatientInformation(ADT_A08_Update_Patient_Information $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A08');
    }


    /**
     * ADT^A01 Base Structure - A13
     * @param ADT_A13_Cancel_discharge_event $message
     */
    public function cancelDischargeEvent(ADT_A13_Cancel_discharge_event $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A13');
    }


    /**
     * ADT^A02 Base Structure - A02
     * @param ADT_A02_Patient_Transfer $message
     */
    public function patientTransferEvent(ADT_A02_Patient_Transfer $message): bool|ACK_Response
    {

        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A02');
    }


    /**
     * ADT^A03 Base Structure - A03
     * Discharge event (This event signals the end of a patient’s stay in a healthcare facility)
     *
     * @param ADT_A03_Discharge_Event $message
     */
    public function dischargeEvent(ADT_A03_Discharge_Event $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A13');
    }


    /**
     * ADT^A05 Base Structure - A05
     */
    public function preAdmitPatient($message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A05');
    }


    /**
     * ADT^A05 Base Structure - A28
     */
    public function addPatientInformation($message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A28');
    }


    /**
     * ADT^A05 Base Structure - A31
     */
    public function updatePatientInformation2(ADT_A31_Update_patient_information $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A28');
    }

    //ADT^A06 Base Structure - A06
    //ADT^A06 Base Structure - A07
    //
    /**
     * ADT^A09 Base Structure - A09
     *
     */
    public function patientDepartedTracking(ADT_A09_Patient_Departed $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A10');
    }


    /**
     *
     * ADT^A09 Base Structure - A10
     */
    public function patientArrivedTracking(ADT_A10_Patient_Arrived $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A10');
    }


    /**
     * ADT^A09 Base Structure - A11
     *
     */
    public function cancelAdmitPatientNotification(ADT_A11_Cancel_Admit $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A11');
    }

    //ADT^A12 Base Structure - A12
    public function sebdCancelPatientTransferEvent(ADT_A12_Cancel_Transfer $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A12');
    }

    /**
     * ADT^A21 Base Structure - A23
     * @param ADT_A23_Delete_Patient_Record $message
     */
    public function deletePatientRecord(ADT_A23_Delete_Patient_Record $message)
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A23');
    }

    //ADT^A21 Base Structure - A25
    //ADT^A21 Base Structure - A27

    /**
     * ADT^A30 Base Structure - A30
     * @param ADT_A30_Merge_Patient_Information $mergePatientInformation
     */
    public function mergePatientInformation(ADT_A30_Merge_Patient_Information $message): bool|ACK_Response
    {
        if (empty($message)){
            throw new InvalidArgumentException();
        }

        return $this->sendMessage($message, 'ADT_A30');
    }

    //ADT^A30 Base Structure - A47
    public function sendChangePatientIdentifierList(ADT_A47_Change_Patient_Identifier_List $message): bool|ACK_Response
    {
        return $this->sendMessage($message, 'ADT_A47');
    }

    //ADT^A39 Base Structure - A39
    public function sendMergePatientID(ADT_A39_Merge_Patient $message): bool|ACK_Response
    {
        return $this->sendMessage($message, 'ADT_A39');
    }

    //ADT^A39 Base Structure - A40
    //ADT^A45 Base Structure - A45
    //ORM^O01 Base Structure - O01
    //RDE^O11 Base Structure – O11
    //OMP^O09 Structure Base – O09
    //ORU^R01 Base Structure – R01

    //MDM^T01 Base Structure– T11
    public function sendDocumentCancelNotification(MDM_T11_Document_Cancel_Notification $message): bool|ACK_Response
    {
        return $this->sendMessage($message, 'MDM_T11');
    }

    //MDM^T02 Base Structure– T02
    public function sendOriginalDocumentAndContentNotification(MDM_T02_Original_Document_Notification $message): bool|ACK_Response
    {
        return  $this->sendMessage($message, 'MDM_T02');
    }

    //MDM^T02 Base Structure– T04
    //MDM^T02 Base Structure– T08

    //VXU^V04 Base Structure – V04
    public function sendUnsolicitedTransmissionVaccinationRecord(VXU_V04_Vaccination_Record_Message $message): bool|ACK_Response
    {
        return  $this->sendMessage($message, 'VXU_V04');
    }

    public function sendAddProbalem(PPR_PC1_Add_Probalem $message): bool|ACK_Response
    {
        return $this->sendMessage($message, 'PPR_PC1');
    }

    public function sendUpdateProbalem(PPR_PC2_Update_Probalem $message): bool|ACK_Response
    {
        return $this->sendMessage($message, 'PPR_PC2');
    }

    public function sendDeleteProbalem(PPR_PC3_Delete_Probalem $message): bool|ACK_Response
    {
        return $this->sendMessage($message, 'PPR_PC3');
    }

    public function sendMessage(IMessage $msg, string $endPoint): bool|ACK_Response
    {

        try {
            $endPoint = $msg->getMSH()->getMessageType();
            $str = $msg->__toString();
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