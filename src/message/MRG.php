<?php

class MRG {

private $PriorPatientIdentifierList = '';
private $PriorAlternatePatientID = '';
private $PriorPatientAccountNumber = '';
private $PriorPatientID = '';
private $PriorVisitNumber = '';
private $PriorAlternateVisitID = '';
private $PriorPatientName = '';

    /**
     * MRG constructor.
     * @param string $PriorPatientIdentifierList
     * @param string $PriorAlternatePatientID
     * @param string $PriorPatientAccountNumber
     * @param string $PriorPatientID
     * @param string $PriorVisitNumber
     * @param string $PriorAlternateVisitID
     * @param string $PriorPatientName
     */
    public function __construct(string $PriorPatientIdentifierList, string $PriorAlternatePatientID, string $PriorPatientAccountNumber, string $PriorPatientID, string $PriorVisitNumber, string $PriorAlternateVisitID, string $PriorPatientName)
    {
        $this->PriorPatientIdentifierList = $PriorPatientIdentifierList;
        $this->PriorAlternatePatientID = $PriorAlternatePatientID;
        $this->PriorPatientAccountNumber = $PriorPatientAccountNumber;
        $this->PriorPatientID = $PriorPatientID;
        $this->PriorVisitNumber = $PriorVisitNumber;
        $this->PriorAlternateVisitID = $PriorAlternateVisitID;
        $this->PriorPatientName = $PriorPatientName;
    }

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
    public function getPriorAlternatePatientID(): string
    {
        return $this->PriorAlternatePatientID;
    }

    /**
     * @param string $PriorAlternatePatientID
     */
    public function setPriorAlternatePatientID(string $PriorAlternatePatientID): void
    {
        $this->PriorAlternatePatientID = $PriorAlternatePatientID;
    }

    /**
     * @return string
     */
    public function getPriorPatientAccountNumber(): string
    {
        return $this->PriorPatientAccountNumber;
    }

    /**
     * @param string $PriorPatientAccountNumber
     */
    public function setPriorPatientAccountNumber(string $PriorPatientAccountNumber): void
    {
        $this->PriorPatientAccountNumber = $PriorPatientAccountNumber;
    }

    /**
     * @return string
     */
    public function getPriorPatientID(): string
    {
        return $this->PriorPatientID;
    }

    /**
     * @param string $PriorPatientID
     */
    public function setPriorPatientID(string $PriorPatientID): void
    {
        $this->PriorPatientID = $PriorPatientID;
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

    /**
     * @return string
     */
    public function getPriorAlternateVisitID(): string
    {
        return $this->PriorAlternateVisitID;
    }

    /**
     * @param string $PriorAlternateVisitID
     */
    public function setPriorAlternateVisitID(string $PriorAlternateVisitID): void
    {
        $this->PriorAlternateVisitID = $PriorAlternateVisitID;
    }

    /**
     * @return string
     */
    public function getPriorPatientName(): string
    {
        return $this->PriorPatientName;
    }

    /**
     * @param string $PriorPatientName
     */
    public function setPriorPatientName(string $PriorPatientName): void
    {
        $this->PriorPatientName = $PriorPatientName;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}