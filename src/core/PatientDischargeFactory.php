<?php
namespace amin0x\nabidh;

class PatientDischargeFactory {
    
    private $msh;
    private $evn;
    private $pid;
    private $pd1 = null;
    private $rol = [];
    private $pv1;
    private $pv2 = null;
    private $obx = [];
    private $al1 = [];
    private $dg1 = [];
    private $drg = null;
    private $pr1;
    private $gt1 = [];
    private $in1;

    private $message = null;

    /**
     * PatientDischargeQuery constructor.
     */
    public function __construct()
    {
        $this->message = new Message();
        $msh = new MSH();
        $msh->setMessageType('ADP^A01');
        $this->message->addSegment($msh);

        $evn = new EVN();
        $evn->setEventTypeCode('');
        $evn->setRecordedDateTime('');
        $this->message->addSegment($evn);
        $pid = new PID();
        $pv1 = new PV1();
    }

    public function setPatientInfo(PID $pid)
    {
        $this->pid = $pid;
    }

    public function addInsurance(IN1 $in1)
    {
        $this->in1 = $in1;
    }

    public function setPatientAditionalInfo(PD1 $pd1){
        $this->pd1 = $pd1;
    }

    public function setPatientName(string $name) : PatientDischargeFactory
    {
        return $this;
    }

    public function setPatientPhone(string $name): PatientDischargeFactory
    {
        return $this;
    }

    public function setPatientPassportId(string $name): PatientDischargeFactory
    {
        return $this;
    }

    public function setPatientName2(string $name): PatientDischargeFactory
    {
        return $this;
    }

    public function setPatientPhone2(string $name): PatientDischargeFactory
    {
        return $this;
    }

    public function setPatientPassportId2(string $name): PatientDischargeFactory
    {
        return $this;
    }

    public function get(){

    }
}