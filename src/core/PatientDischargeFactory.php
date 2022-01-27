<?php
namespace amin0x\nabidh;

class PatientDischargeFactory {

    private $name;
    private $phone;
    private $email;
    private $address;
    private $city;
    private $state;
    private $country;
    private $id;
    private $passprot = [];
    private $sex;
    private $nationality = null;
    private $observations = [];
    private $allegory = [];
    private $diagnoses = [];
    private $drogs = null;
    private $pr1;
    private $gt1 = [];
    private $insurances = [];

    private $message = null;

    /**
     * PatientDischargeQuery constructor.
     */
    public function __construct()
    {

    }

    public function withPatientInfo(PID $pid)
    {
        $this->pid = $pid;
    }

    public function withInsurance(IN1 $in1)
    {
        $this->in1 = $in1;
    }

    public function withPatientAditionalInfo(PD1 $pd1){
        $this->pd1 = $pd1;
    }

    public function withPatientName(string $name) : PatientDischargeFactory
    {
        return $this;
    }

    public function withPatientPhone(string $name): PatientDischargeFactory
    {
        return $this;
    }

    public function withPatientPassportId(string $name): PatientDischargeFactory
    {
        return $this;
    }

    public function withPatientName2(string $name): PatientDischargeFactory
    {
        return $this;
    }

    public function withPatientPhone2(string $name): PatientDischargeFactory
    {
        return $this;
    }

    public function withPatientPassportId2(string $name): PatientDischargeFactory
    {
        return $this;
    }

    public function build(){

    }
}