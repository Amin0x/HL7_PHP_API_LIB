<?php



namespace nabidh;

require_once 'config/config.php';

class Nabidh2
{
    public function createRegisterPatientMessage()
    {
        return $this->createMessage('ADT^A04');
    }

    public function createPatientVisitMessage()
    {
        return $this->createMessage('ADT^A10');
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

    public function createMessage(string $msgType)
    {
        if(empty($msgType)){
            return false;
        }

        $message = new Message();
        $msh = new MSH();
        $msh->setSendingApplication($config['sending_application']);
        $msh->setSendingFacility($config['sending_facility']);
        $msh->setVersionID($config['version_id']);
        $msh->setProcessingID($config['processing_id']);
        $msh->setReceivingApplication($config['receiving_application']);
        $msh->setReceivingFacility($config['receiving_facility']);
        $message->addSegment($msh);

        return $message;
    }

    public function insertRegisterPatientMessageSegments(Message $message, PID $pid, EVN $evn, PV1 $pv1)
    {
        if ($message->getHeader()->getMessageType() != 'ADT^A10'){
            return false;
        }

        return true;
    }

    public function addPatientIdSegment(Message $message, PID $pid)
    {
        if (empty($message) || empty($pid)){
            return false;
        }

        $message->addSegment($pid);

        return true;
    }

    public function addPatientId(Message $message, Patient $patient)
    {
        if (empty($message) || empty($patient)){
            return false;
        }

        $pid = new PID();


        $this->addPatientIdSegment($message, $pid);


        return true;
    }

    public function addEvent(Message $message, EVN $evn)
    {

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
}