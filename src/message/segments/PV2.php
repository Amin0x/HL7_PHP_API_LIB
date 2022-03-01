<?php
namespace amin0x\nabidh;

class PV2 implements Segment {


    private $AdmitReason = '';
    private $VisitDescription = '';


    /**
     * PV2 constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return CE|string
     */
    public function getAdmitReason(): CE|string
    {
        return $this->AdmitReason;
    }

    /**
     * @param CE $AdmitReason
     */
    public function setAdmitReason(CE $AdmitReason): void
    {
        $this->AdmitReason = $AdmitReason;
    }

    /**
     * @return string
     */
    public function getVisitDescription(): string
    {
        return $this->VisitDescription;
    }

    /**
     * @param string $VisitDescription
     */
    public function setVisitDescription(string $VisitDescription): void
    {
        $this->VisitDescription = $VisitDescription;
    }


    public function __toString()
    {
        $fields = [];
        $fields[] = 'PV2';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->AdmitReason;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->VisitDescription;
        return implode('|', $fields).'\r';
    }


}