<?php


namespace amin0x\nabidh;


abstract class ADTA01 extends ZSegment
{
    private MSH $MessageHeader;
    private PID $PatientIdentification;
    private EVN $EventType;
    private PV1 $PatientVisit;

    public function __construct()
    {
        $this->MessageHeader = new MSH();
        $this->PatientIdentification = new PID();
        $this->EventType = new EVN();
        $this->PatientVisit = new PV1();
    }

    /**
     * @return MSH
     */
    public function getMessageHeader(): MSH
    {
        return $this->MessageHeader;
    }

    /**
     * @param MSH $MessageHeader
     */
    public function setMessageHeader(MSH $MessageHeader): void
    {
        $this->MessageHeader = $MessageHeader;
    }

    /**
     * @return PID
     */
    public function getPatientIdentification(): PID
    {
        return $this->PatientIdentification;
    }

    /**
     * @param PID $PatientIdentification
     */
    public function setPatientIdentification(PID $PatientIdentification): void
    {
        $this->PatientIdentification = $PatientIdentification;
    }

    /**
     * @return EVN
     */
    public function getEventType(): EVN
    {
        return $this->EventType;
    }

    /**
     * @param EVN $EventType
     */
    public function setEventType(EVN $EventType): void
    {
        $this->EventType = $EventType;
    }

    /**
     * @return PV1
     */
    public function getPatientVisit(): PV1
    {
        return $this->PatientVisit;
    }

    /**
     * @param PV1 $PatientVisit
     */
    public function setPatientVisit(PV1 $PatientVisit): void
    {
        $this->PatientVisit = $PatientVisit;
    }


}