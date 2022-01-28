<?php
namespace amin0x\nabidh;

class RXC implements Segment {

    private $GiveSubIdCounter;
    private $AdministrationSubIdCounter;
    private $TimeStartOfAdministration;
    private $TimeEndOfAdministration;
    private $AdministeredCode;
    private $AdministeredAmount;
    private $AdministeredUnits;
    private $AdministeredDosageForm;
    private $AdministrationNotes;
    private $AdministraingProvider;
    private $AdministeredAtLocation;
    private $AdministeredPer;
    private $AdministeredStrength;
    private $AdministeredStrengthUnits;
    private $SubstanceLotNumber;
    private $SubstanceExpirationDate;
    private $SubstanceManufacturerName;
    private $SubstanceRefusalReason;
    private $Indication;
    private $CompletionStatus;
    private $SystemEntryTime;
    private $AdministeredDrugStrengthVolume;
    private $AdministeredDrugStrengthVolumeUnits;

    /**
     * @return mixed
     */
    public function getGiveSubIdCounter()
    {
        return $this->GiveSubIdCounter;
    }

    /**
     * @param mixed $GiveSubIdCounter
     */
    public function setGiveSubIdCounter($GiveSubIdCounter): void
    {
        $this->GiveSubIdCounter = $GiveSubIdCounter;
    }

    /**
     * @return mixed
     */
    public function getAdministrationSubIdCounter()
    {
        return $this->AdministrationSubIdCounter;
    }

    /**
     * @param mixed $AdministrationSubIdCounter
     */
    public function setAdministrationSubIdCounter($AdministrationSubIdCounter): void
    {
        $this->AdministrationSubIdCounter = $AdministrationSubIdCounter;
    }

    /**
     * @return mixed
     */
    public function getTimeStartOfAdministration()
    {
        return $this->TimeStartOfAdministration;
    }

    /**
     * @param mixed $TimeStartOfAdministration
     */
    public function setTimeStartOfAdministration($TimeStartOfAdministration): void
    {
        $this->TimeStartOfAdministration = $TimeStartOfAdministration;
    }

    /**
     * @return mixed
     */
    public function getTimeEndOfAdministration()
    {
        return $this->TimeEndOfAdministration;
    }

    /**
     * @param mixed $TimeEndOfAdministration
     */
    public function setTimeEndOfAdministration($TimeEndOfAdministration): void
    {
        $this->TimeEndOfAdministration = $TimeEndOfAdministration;
    }

    /**
     * @return mixed
     */
    public function getAdministeredCode()
    {
        return $this->AdministeredCode;
    }

    /**
     * @param mixed $AdministeredCode
     */
    public function setAdministeredCode($AdministeredCode): void
    {
        $this->AdministeredCode = $AdministeredCode;
    }

    /**
     * @return mixed
     */
    public function getAdministeredAmount()
    {
        return $this->AdministeredAmount;
    }

    /**
     * @param mixed $AdministeredAmount
     */
    public function setAdministeredAmount($AdministeredAmount): void
    {
        $this->AdministeredAmount = $AdministeredAmount;
    }

    /**
     * @return mixed
     */
    public function getAdministeredUnits()
    {
        return $this->AdministeredUnits;
    }

    /**
     * @param mixed $AdministeredUnits
     */
    public function setAdministeredUnits($AdministeredUnits): void
    {
        $this->AdministeredUnits = $AdministeredUnits;
    }

    /**
     * @return mixed
     */
    public function getAdministeredDosageForm()
    {
        return $this->AdministeredDosageForm;
    }

    /**
     * @param mixed $AdministeredDosageForm
     */
    public function setAdministeredDosageForm($AdministeredDosageForm): void
    {
        $this->AdministeredDosageForm = $AdministeredDosageForm;
    }

    /**
     * @return mixed
     */
    public function getAdministrationNotes()
    {
        return $this->AdministrationNotes;
    }

    /**
     * @param mixed $AdministrationNotes
     */
    public function setAdministrationNotes($AdministrationNotes): void
    {
        $this->AdministrationNotes = $AdministrationNotes;
    }

    /**
     * @return mixed
     */
    public function getAdministraingProvider()
    {
        return $this->AdministraingProvider;
    }

    /**
     * @param mixed $AdministraingProvider
     */
    public function setAdministraingProvider($AdministraingProvider): void
    {
        $this->AdministraingProvider = $AdministraingProvider;
    }

    /**
     * @return mixed
     */
    public function getAdministeredAtLocation()
    {
        return $this->AdministeredAtLocation;
    }

    /**
     * @param mixed $AdministeredAtLocation
     */
    public function setAdministeredAtLocation($AdministeredAtLocation): void
    {
        $this->AdministeredAtLocation = $AdministeredAtLocation;
    }

    /**
     * @return mixed
     */
    public function getAdministeredPer()
    {
        return $this->AdministeredPer;
    }

    /**
     * @param mixed $AdministeredPer
     */
    public function setAdministeredPer($AdministeredPer): void
    {
        $this->AdministeredPer = $AdministeredPer;
    }

    /**
     * @return mixed
     */
    public function getAdministeredStrength()
    {
        return $this->AdministeredStrength;
    }

    /**
     * @param mixed $AdministeredStrength
     */
    public function setAdministeredStrength($AdministeredStrength): void
    {
        $this->AdministeredStrength = $AdministeredStrength;
    }

    /**
     * @return mixed
     */
    public function getAdministeredStrengthUnits()
    {
        return $this->AdministeredStrengthUnits;
    }

    /**
     * @param mixed $AdministeredStrengthUnits
     */
    public function setAdministeredStrengthUnits($AdministeredStrengthUnits): void
    {
        $this->AdministeredStrengthUnits = $AdministeredStrengthUnits;
    }

    /**
     * @return mixed
     */
    public function getSubstanceLotNumber()
    {
        return $this->SubstanceLotNumber;
    }

    /**
     * @param mixed $SubstanceLotNumber
     */
    public function setSubstanceLotNumber($SubstanceLotNumber): void
    {
        $this->SubstanceLotNumber = $SubstanceLotNumber;
    }

    /**
     * @return mixed
     */
    public function getSubstanceExpirationDate()
    {
        return $this->SubstanceExpirationDate;
    }

    /**
     * @param mixed $SubstanceExpirationDate
     */
    public function setSubstanceExpirationDate($SubstanceExpirationDate): void
    {
        $this->SubstanceExpirationDate = $SubstanceExpirationDate;
    }

    /**
     * @return mixed
     */
    public function getSubstanceManufacturerName()
    {
        return $this->SubstanceManufacturerName;
    }

    /**
     * @param mixed $SubstanceManufacturerName
     */
    public function setSubstanceManufacturerName($SubstanceManufacturerName): void
    {
        $this->SubstanceManufacturerName = $SubstanceManufacturerName;
    }

    /**
     * @return mixed
     */
    public function getSubstanceRefusalReason()
    {
        return $this->SubstanceRefusalReason;
    }

    /**
     * @param mixed $SubstanceRefusalReason
     */
    public function setSubstanceRefusalReason($SubstanceRefusalReason): void
    {
        $this->SubstanceRefusalReason = $SubstanceRefusalReason;
    }

    /**
     * @return mixed
     */
    public function getIndication()
    {
        return $this->Indication;
    }

    /**
     * @param mixed $Indication
     */
    public function setIndication($Indication): void
    {
        $this->Indication = $Indication;
    }

    /**
     * @return mixed
     */
    public function getCompletionStatus()
    {
        return $this->CompletionStatus;
    }

    /**
     * @param mixed $CompletionStatus
     */
    public function setCompletionStatus($CompletionStatus): void
    {
        $this->CompletionStatus = $CompletionStatus;
    }

    /**
     * @return mixed
     */
    public function getSystemEntryTime()
    {
        return $this->SystemEntryTime;
    }

    /**
     * @param mixed $SystemEntryTime
     */
    public function setSystemEntryTime($SystemEntryTime): void
    {
        $this->SystemEntryTime = $SystemEntryTime;
    }

    /**
     * @return mixed
     */
    public function getAdministeredDrugStrengthVolume()
    {
        return $this->AdministeredDrugStrengthVolume;
    }

    /**
     * @param mixed $AdministeredDrugStrengthVolume
     */
    public function setAdministeredDrugStrengthVolume($AdministeredDrugStrengthVolume): void
    {
        $this->AdministeredDrugStrengthVolume = $AdministeredDrugStrengthVolume;
    }

    /**
     * @return mixed
     */
    public function getAdministeredDrugStrengthVolumeUnits()
    {
        return $this->AdministeredDrugStrengthVolumeUnits;
    }

    /**
     * @param mixed $AdministeredDrugStrengthVolumeUnits
     */
    public function setAdministeredDrugStrengthVolumeUnits($AdministeredDrugStrengthVolumeUnits): void
    {
        $this->AdministeredDrugStrengthVolumeUnits = $AdministeredDrugStrengthVolumeUnits;
    }


}