<?php
namespace amin0x\nabidh;

class RXO implements Segment
{

    private $RequestedGiveCode;
    private $RequestedGiveAmountMinimum;
    private $RequestedGiveAmountMaximum;
    private $RequestedGiveUnits;
    private $RequestedDosageForm;
    private $ProviderTreatmentInstructions;
    private $ProviderAdministrationInstructions;
    private $NumberOfRefills;
    private $OrderingProviderNumber;
    private $RequestedGivePer;
    private $RequestedGiveStrength;
    private $RequestedGiveStrengthUnits;
    private $Indication;
    private $RequestedGiveRateAmount;
    private $RequestedGiveRateUnits;
    private $RequestedDrugStrengthVolume;
    private $RequestedDrugStrengthVolumeUnits;

    /**
     * RXO constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return CE|string
     */
    public function getRequestedGiveCode(): CE|string
    {
        return $this->RequestedGiveCode;
    }

    /**
     * @param mixed $RequestedGiveCode
     */
    public function setRequestedGiveCode(CE $RequestedGiveCode): void
    {
        $this->RequestedGiveCode = $RequestedGiveCode;
    }

    /**
     * @return mixed
     */
    public function getRequestedGiveAmountMinimum()
    {
        return $this->RequestedGiveAmountMinimum;
    }

    /**
     * @param mixed $RequestedGiveAmountMinimum
     */
    public function setRequestedGiveAmountMinimum($RequestedGiveAmountMinimum): void
    {
        $this->RequestedGiveAmountMinimum = $RequestedGiveAmountMinimum;
    }

    /**
     * @return mixed
     */
    public function getRequestedGiveAmountMaximum()
    {
        return $this->RequestedGiveAmountMaximum;
    }

    /**
     * @param mixed $RequestedGiveAmountMaximum
     */
    public function setRequestedGiveAmountMaximum($RequestedGiveAmountMaximum): void
    {
        $this->RequestedGiveAmountMaximum = $RequestedGiveAmountMaximum;
    }

    /**
     * @return CE|string
     */
    public function getRequestedGiveUnits(): CE|string
    {
        return $this->RequestedGiveUnits;
    }

    /**
     * @param mixed $RequestedGiveUnits
     */
    public function setRequestedGiveUnits(CE $RequestedGiveUnits): void
    {
        $this->RequestedGiveUnits = $RequestedGiveUnits;
    }

    /**
     * @return CE|string
     */
    public function getRequestedDosageForm(): CE|string
    {
        return $this->RequestedDosageForm;
    }

    /**
     * @param mixed $RequestedDosageForm
     */
    public function setRequestedDosageForm(CE $RequestedDosageForm): void
    {
        $this->RequestedDosageForm = $RequestedDosageForm;
    }

    /**
     * @return CE|string
     */
    public function getProviderTreatmentInstructions(): CE|string
    {
        return $this->ProviderTreatmentInstructions;
    }

    /**
     * @param mixed $ProviderTreatmentInstructions
     */
    public function setProviderTreatmentInstructions(CE $ProviderTreatmentInstructions): void
    {
        $this->ProviderTreatmentInstructions = $ProviderTreatmentInstructions;
    }

    /**
     * @return CE|string
     */
    public function getProviderAdministrationInstructions(): CE|string
    {
        return $this->ProviderAdministrationInstructions;
    }

    /**
     * @param mixed $ProviderAdministrationInstructions
     */
    public function setProviderAdministrationInstructions(CE $ProviderAdministrationInstructions): void
    {
        $this->ProviderAdministrationInstructions = $ProviderAdministrationInstructions;
    }

    /**
     * @return mixed
     */
    public function getNumberOfRefills()
    {
        return $this->NumberOfRefills;
    }

    /**
     * @param mixed $NumberOfRefills
     */
    public function setNumberOfRefills($NumberOfRefills): void
    {
        $this->NumberOfRefills = $NumberOfRefills;
    }

    /**
     * @return XCN|string
     */
    public function getOrderingProviderNumber(): XCN|string
    {
        return $this->OrderingProviderNumber;
    }

    /**
     * @param mixed $OrderingProviderNumber
     */
    public function setOrderingProviderNumber(XCN $OrderingProviderNumber): void
    {
        $this->OrderingProviderNumber = $OrderingProviderNumber;
    }

    /**
     * @return mixed
     */
    public function getRequestedGivePer()
    {
        return $this->RequestedGivePer;
    }

    /**
     * @param mixed $RequestedGivePer
     */
    public function setRequestedGivePer($RequestedGivePer): void
    {
        $this->RequestedGivePer = $RequestedGivePer;
    }

    /**
     * @return mixed
     */
    public function getRequestedGiveStrength()
    {
        return $this->RequestedGiveStrength;
    }

    /**
     * @param mixed $RequestedGiveStrength
     */
    public function setRequestedGiveStrength($RequestedGiveStrength): void
    {
        $this->RequestedGiveStrength = $RequestedGiveStrength;
    }

    /**
     * @return mixed
     */
    public function getRequestedGiveStrengthUnits()
    {
        return $this->RequestedGiveStrengthUnits;
    }

    /**
     * @param mixed $RequestedGiveStrengthUnits
     */
    public function setRequestedGiveStrengthUnits($RequestedGiveStrengthUnits): void
    {
        $this->RequestedGiveStrengthUnits = $RequestedGiveStrengthUnits;
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
    public function getRequestedGiveRateAmount()
    {
        return $this->RequestedGiveRateAmount;
    }

    /**
     * @param mixed $RequestedGiveRateAmount
     */
    public function setRequestedGiveRateAmount($RequestedGiveRateAmount): void
    {
        $this->RequestedGiveRateAmount = $RequestedGiveRateAmount;
    }

    /**
     * @return CE|string
     */
    public function getRequestedGiveRateUnits():CE|string
    {
        return $this->RequestedGiveRateUnits;
    }

    /**
     * @param mixed $RequestedGiveRateUnits
     */
    public function setRequestedGiveRateUnits(CE $RequestedGiveRateUnits): void
    {
        $this->RequestedGiveRateUnits = $RequestedGiveRateUnits;
    }

    /**
     * @return mixed
     */
    public function getRequestedDrugStrengthVolume(): string
    {
        return $this->RequestedDrugStrengthVolume;
    }

    /**
     * @param mixed $RequestedDrugStrengthVolume
     */
    public function setRequestedDrugStrengthVolume(string $RequestedDrugStrengthVolume): void
    {
        $this->RequestedDrugStrengthVolume = $RequestedDrugStrengthVolume;
    }

    /**
     * @return mixed
     */
    public function getRequestedDrugStrengthVolumeUnits(): string
    {
        return $this->RequestedDrugStrengthVolumeUnits;
    }

    /**
     * @param mixed $RequestedDrugStrengthVolumeUnits
     */
    public function setRequestedDrugStrengthVolumeUnits(string $RequestedDrugStrengthVolumeUnits): void
    {
        $this->RequestedDrugStrengthVolumeUnits = $RequestedDrugStrengthVolumeUnits;
    }

    public function __toString()
    {
        $fields = [];
        $fields[] = 'RXO';
        $fields[] = $this->RequestedGiveCode;
        $fields[] = $this->RequestedGiveAmountMinimum;
        $fields[] = $this->RequestedGiveAmountMaximum;
        $fields[] = $this->RequestedGiveUnits;
        $fields[] = $this->RequestedDosageForm;
        $fields[] = $this->ProviderTreatmentInstructions;
        $fields[] = $this->ProviderAdministrationInstructions;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->NumberOfRefills;
        $fields[] = $this->OrderingProviderNumber;
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->RequestedGivePer;
        $fields[] = $this->RequestedGiveStrength;
        $fields[] = $this->RequestedGiveStrengthUnits;
        $fields[] = $this->Indication;
        $fields[] = $this->RequestedGiveRateAmount;
        $fields[] = $this->RequestedGiveRateUnits;
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->RequestedDrugStrengthVolume;
        $fields[] = $this->RequestedDrugStrengthVolumeUnits;
        $fields[] = '';
        $fields[] = '';

        return implode('|', $fields) . '\r';
    }

}