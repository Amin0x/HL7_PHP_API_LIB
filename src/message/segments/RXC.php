<?php
namespace amin0x\nabidh;

use BadMethodCallException;

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
    private $AdministrationProvider;
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
    public function getAdministeredCode(): CE|string
    {
        return $this->AdministeredCode;
    }

    /**
     * @param mixed $AdministeredCode
     */
    public function setAdministeredCode(CE $AdministeredCode): void
    {
        $this->AdministeredCode = $AdministeredCode;
    }

    /**
     * @return mixed
     */
    public function getAdministeredAmount(): string
    {
        return $this->AdministeredAmount;
    }

    /**
     * @param mixed $AdministeredAmount
     */
    public function setAdministeredAmount(string $AdministeredAmount): void
    {
        $this->AdministeredAmount = $AdministeredAmount;
    }

    /**
     * @return mixed
     */
    public function getAdministeredUnits(): CE|string
    {
        return $this->AdministeredUnits;
    }

    /**
     * @param mixed $AdministeredUnits
     */
    public function setAdministeredUnits(CE $AdministeredUnits): void
    {
        $this->AdministeredUnits = $AdministeredUnits;
    }

    /**
     * @return mixed
     */
    public function getAdministeredDosageForm(): CE|string
    {
        return $this->AdministeredDosageForm;
    }

    /**
     * @param mixed $AdministeredDosageForm
     */
    public function setAdministeredDosageForm(CE $AdministeredDosageForm): void
    {
        $this->AdministeredDosageForm = $AdministeredDosageForm;
    }

    /**
     * @return mixed
     */
    public function getAdministrationNotes(): CE|string
    {
        return $this->AdministrationNotes;
    }

    /**
     * @param mixed $AdministrationNotes
     */
    public function setAdministrationNotes(CE $AdministrationNotes): void
    {
        $this->AdministrationNotes = $AdministrationNotes;
    }

    /**
     * @return mixed
     */
    public function getAdministrationProvider(): XCN|string
    {
        return $this->AdministrationProvider;
    }

    /**
     * @param mixed $AdministrationProvider
     */
    public function setAdministrationProvider(XCN $AdministrationProvider): void
    {
        $this->AdministrationProvider = $AdministrationProvider;
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
    public function getAdministeredStrengthUnits(): CE|string
    {
        return $this->AdministeredStrengthUnits;
    }

    /**
     * @param mixed $AdministeredStrengthUnits
     */
    public function setAdministeredStrengthUnits(CE $AdministeredStrengthUnits): void
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
    public function getSubstanceManufacturerName(): CE|string
    {
        return $this->SubstanceManufacturerName;
    }

    /**
     * @param mixed $SubstanceManufacturerName
     */
    public function setSubstanceManufacturerName(CE $SubstanceManufacturerName): void
    {
        $this->SubstanceManufacturerName = $SubstanceManufacturerName;
    }

    /**
     * @return mixed
     */
    public function getSubstanceRefusalReason(): CE|string
    {
        return $this->SubstanceRefusalReason;
    }

    /**
     * @param mixed $SubstanceRefusalReason
     */
    public function setSubstanceRefusalReason(CE $SubstanceRefusalReason): void
    {
        $this->SubstanceRefusalReason = $SubstanceRefusalReason;
    }

    /**
     * @return mixed
     */
    public function getIndication(): CE|string
    {
        return $this->Indication;
    }

    /**
     * @param mixed $Indication
     */
    public function setIndication(CE $Indication): void
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
    public function getAdministeredDrugStrengthVolumeUnits(): CE|string
    {
        return $this->AdministeredDrugStrengthVolumeUnits;
    }

    /**
     * @param mixed $AdministeredDrugStrengthVolumeUnits
     */
    public function setAdministeredDrugStrengthVolumeUnits(CE $AdministeredDrugStrengthVolumeUnits): void
    {
        $this->AdministeredDrugStrengthVolumeUnits = $AdministeredDrugStrengthVolumeUnits;
    }


    public function __toString()
    {
        $fields = [];
        $fields[] = 'RXC';
        $fields[] = $this->GiveSubIdCounter;
        $fields[] = $this->AdministrationSubIdCounter;
        $fields[] = $this->TimeStartOfAdministration;
        $fields[] = $this->TimeEndOfAdministration;
        $fields[] = $this->AdministeredCode;
        $fields[] = $this->AdministeredAmount;
        $fields[] = $this->AdministeredUnits;
        $fields[] = $this->AdministeredDosageForm;
        $fields[] = $this->AdministrationNotes;
        $fields[] = $this->AdministrationProvider;
        $fields[] = $this->AdministeredAtLocation;
        $fields[] = $this->AdministeredPer;
        $fields[] = $this->AdministeredStrength;
        $fields[] = $this->AdministeredStrengthUnits;
        $fields[] = $this->SubstanceLotNumber;
        $fields[] = $this->SubstanceExpirationDate;
        $fields[] = $this->SubstanceManufacturerName;
        $fields[] = $this->SubstanceRefusalReason;
        $fields[] = $this->Indication;
        $fields[] = $this->CompletionStatus;
        $fields[] = '';
        $fields[] = $this->SystemEntryTime;
        $fields[] = $this->AdministeredDrugStrengthVolume;
        $fields[] = $this->AdministeredDrugStrengthVolumeUnits;
        $fields[] = '';
        $fields[] = '';

        return implode('|', $fields) . '\r';
    }
}