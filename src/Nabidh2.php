<?php



namespace nabidh;

require_once 'config/config.php';

class Nabidh2
{
    public function createMessage(string $msgType)
    {

        if(empty($msgType) || !in_array($msgType, [
            'A01', 'A02', 'A03', 'A04'
            ])){
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

    public function addSegment(Segment $segment)
    {

    }

    public function addGroup($message, $group)
    {

    }
}