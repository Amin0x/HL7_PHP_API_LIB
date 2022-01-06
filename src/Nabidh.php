<?php
namespace nabidh;

use http\Exception\InvalidArgumentException;

class Nabidh {
    
    public function getPatienInfo($patient) 
    {
        # code...
    }

    //ADT 
    public function patientAdmitting($patient, $obx = null, $evn = null, $pdp = null)
    {
        # code...
    }

    public function patientDischarge($patient)
    {
        # code...
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     **/
    public function patientTransfer(Patient $patient = null)
    {
        # code...
    }
   
    //end ADT 


    /**
     * ADT^A01 Base Structure - A01
     *
     * Admit patient notification (This event is sent as a result of a patient undergoing the admission process)
     *
     * @param $patientIdentification  PID
     * @param null $patientVisit PV1 array
     * @param null $PR1
     * @param null $insurance
     */
    public function AdmitPatientNotification($patientIdentification, $patientVisit = null, $PR1 = null, $insurance = null)
    {
        # code...
    }
    //ADT^A01 Base Structure - A04
    //Register a patient
    public function registerPatient(Patient $patient, PatientVisit $patientVisit)
    {
        if (empty($patient) || empty($patientVisit)){
            throw new InvalidArgumentException();
        }


    }

    public function registerPatientQ(RegisterPatientFactory $registerPatientQuery)
    {
        if (empty($query)){
            throw new InvalidArgumentException();
        }
    }
    //ADT^A01 Base Structure - A08
    //ADT^A01 Base Structure - A13
    //ADT^A02 Base Structure - A02
    //ADT^A03 Base Structure - A03
    //ADT^A05 Base Structure - A05
    //ADT^A05 Base Structure - A28
    //ADT^A05 Base Structure - A31
    //ADT^A06 Base Structure - A06
    //ADT^A06 Base Structure - A07
    //ADT^A09 Base Structure - A09
    //ADT^A09 Base Structure - A10
    //ADT^A09 Base Structure - A11
    //ADT^A12 Base Structure - A12
    //ADT^A21 Base Structure - A23
    public function deletePatientRecord(Type $var = null)
    {
        # code...
    }
    //ADT^A21 Base Structure - A25
    //ADT^A21 Base Structure - A27
    //ADT^A30 Base Structure - A30
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
}