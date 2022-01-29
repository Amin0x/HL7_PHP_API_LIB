<?php
namespace amin0x\nabidh;

class MRG implements Segment {

    private $PriorPatientIdentifierList = '';
    private $PriorVisitNumber = '';


    /**
     * @return string
     */
    public function getPriorPatientIdentifierList(): string
    {
        return $this->PriorPatientIdentifierList;
    }

    /**
     * @param string $PriorPatientIdentifierList
     */
    public function setPriorPatientIdentifierList(string $PriorPatientIdentifierList): void
    {
        $this->PriorPatientIdentifierList = $PriorPatientIdentifierList;
    }

    /**
     * @return string
     */
    public function getPriorVisitNumber(): string
    {
        return $this->PriorVisitNumber;
    }

    /**
     * @param string $PriorVisitNumber
     */
    public function setPriorVisitNumber(string $PriorVisitNumber): void
    {
        $this->PriorVisitNumber = $PriorVisitNumber;
    }

    public function __toString()
    {
        $str = [];
        $str[] = 'MRG';
        $str[] = $this->PriorPatientIdentifierList;
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = $this->PriorVisitNumber;
        $str[] = '';
        $str[] = '';

        return implode( '|', $str) . '\r';
    }


}