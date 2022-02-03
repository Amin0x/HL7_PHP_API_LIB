<?php


namespace amin0x\nabidh;


class PPR_PC1_Add_Probalem implements IMessage
{
    private  MSH $MessageHeader;
    private  PID $PatientIdentification;
    private  PV1_GROUP|null $PATIENT_VISIT = null;
    private  array $PROBLEM = [];

    /**
     * PPR_PC1_Add_Probalem constructor.
     */
    public function __construct()
    {
        $this->MessageHeader = new MSH();
        $this->PatientIdentification = new PID();
    }

    public function __toString(): string
    {
        $str = '';
        $str .= $this->MessageHeader;
        $str .= $this->PatientIdentification;
        $str .= $this->PatientIdentification;

        foreach ($this->PatientIdentification as $item) {
            $str .= $item;
        }

        return '';
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
     * @return PV1_GROUP|null
     */
    public function getPATIENTVISIT(): ?PV1_GROUP
    {
        return $this->PATIENT_VISIT;
    }

    /**
     * @param PV1_GROUP|null $PATIENT_VISIT
     */
    public function setPATIENTVISIT(?PV1_GROUP $PATIENT_VISIT): void
    {
        $this->PATIENT_VISIT = $PATIENT_VISIT;
    }

    /**
     * @return array
     */
    public function getPROBLEM(): array
    {
        return $this->PROBLEM;
    }

    /**
     * @param array $PROBLEM
     */
    public function setPROBLEM(array $PROBLEM): void
    {
        $this->PROBLEM = $PROBLEM;
    }


}