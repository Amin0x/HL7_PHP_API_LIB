<?php

class PatientDischargeQuery {
    
    private $msh;
    private $evn;
    private $pdi;
    private $pd1 = null;
    private array $rol = [];
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

    public function setPatientName(string $name) : PatientDischargeQuery
    {
        return $this;
    }

    public function setPatientPhone(string $name): PatientDischargeQuery
    {
        return $this;
    }

    public function setPatientPassportId(string $name): PatientDischargeQuery
    {
        return $this;
    }

    public function setPatientName2(string $name): PatientDischargeQuery
    {
        return $this;
    }

    public function setPatientPhone2(string $name): PatientDischargeQuery
    {
        return $this;
    }

    public function setPatientPassportId2(string $name): PatientDischargeQuery
    {
        return $this;
    }
}