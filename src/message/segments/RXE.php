<?php
namespace amin0x\nabidh;

use BadMethodCallException;

class RXE implements Segment {

    private $QuantityTiming;
    private $GiveCode;
    private $GiveAmountMinimum;
    private $GiveAmountMaximum;
    private $GiveUnits;
    private $GiveDosageForm;
    private $ProviderAdministrationInstructions;
    private $NumberOfRefills;
    private $OrderingProviderNumber;
    private $PrescriptionNumber;
    private $GivePer;
    private $GiveRateAmount;
    private $GiveRateUnits;
    private $GiveStrength;
    private $GiveStrengthUnits;
    private $GiveIndication;
    private $GiveDrugStrengthVolume;
    private $GiveDrugStrengthUnits;

    /**
     * @return mixed
     */
    public function getQuantityTiming()
    {
        return $this->QuantityTiming;
    }

    /**
     * @param mixed $QuantityTiming
     */
    public function setQuantityTiming($QuantityTiming): void
    {
        $this->QuantityTiming = $QuantityTiming;
    }

    /**
     * @return mixed
     */
    public function getGiveCode()
    {
        return $this->GiveCode;
    }

    /**
     * @param mixed $GiveCode
     */
    public function setGiveCode($GiveCode): void
    {
        $this->GiveCode = $GiveCode;
    }

    /**
     * @return mixed
     */
    public function getGiveAmountMinimum()
    {
        return $this->GiveAmountMinimum;
    }

    /**
     * @param mixed $GiveAmountMinimum
     */
    public function setGiveAmountMinimum($GiveAmountMinimum): void
    {
        $this->GiveAmountMinimum = $GiveAmountMinimum;
    }

    /**
     * @return mixed
     */
    public function getGiveAmountMaximum()
    {
        return $this->GiveAmountMaximum;
    }

    /**
     * @param mixed $GiveAmountMaximum
     */
    public function setGiveAmountMaximum($GiveAmountMaximum): void
    {
        $this->GiveAmountMaximum = $GiveAmountMaximum;
    }

    /**
     * @return mixed
     */
    public function getGiveUnits()
    {
        return $this->GiveUnits;
    }

    /**
     * @param mixed $GiveUnits
     */
    public function setGiveUnits($GiveUnits): void
    {
        $this->GiveUnits = $GiveUnits;
    }

    /**
     * @return mixed
     */
    public function getGiveDosageForm()
    {
        return $this->GiveDosageForm;
    }

    /**
     * @param mixed $GiveDosageForm
     */
    public function setGiveDosageForm($GiveDosageForm): void
    {
        $this->GiveDosageForm = $GiveDosageForm;
    }

    /**
     * @return mixed
     */
    public function getProviderAdministrationInstructions()
    {
        return $this->ProviderAdministrationInstructions;
    }

    /**
     * @param mixed $ProviderAdministrationInstructions
     */
    public function setProviderAdministrationInstructions($ProviderAdministrationInstructions): void
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
     * @return mixed
     */
    public function getOrderingProviderNumber()
    {
        return $this->OrderingProviderNumber;
    }

    /**
     * @param mixed $OrderingProviderNumber
     */
    public function setOrderingProviderNumber($OrderingProviderNumber): void
    {
        $this->OrderingProviderNumber = $OrderingProviderNumber;
    }

    /**
     * @return mixed
     */
    public function getPrescriptionNumber()
    {
        return $this->PrescriptionNumber;
    }

    /**
     * @param mixed $PrescriptionNumber
     */
    public function setPrescriptionNumber($PrescriptionNumber): void
    {
        $this->PrescriptionNumber = $PrescriptionNumber;
    }

    /**
     * @return mixed
     */
    public function getGivePer()
    {
        return $this->GivePer;
    }

    /**
     * @param mixed $GivePer
     */
    public function setGivePer($GivePer): void
    {
        $this->GivePer = $GivePer;
    }

    /**
     * @return mixed
     */
    public function getGiveRateAmount()
    {
        return $this->GiveRateAmount;
    }

    /**
     * @param mixed $GiveRateAmount
     */
    public function setGiveRateAmount($GiveRateAmount): void
    {
        $this->GiveRateAmount = $GiveRateAmount;
    }

    /**
     * @return mixed
     */
    public function getGiveRateUnits()
    {
        return $this->GiveRateUnits;
    }

    /**
     * @param mixed $GiveRateUnits
     */
    public function setGiveRateUnits($GiveRateUnits): void
    {
        $this->GiveRateUnits = $GiveRateUnits;
    }

    /**
     * @return mixed
     */
    public function getGiveStrength()
    {
        return $this->GiveStrength;
    }

    /**
     * @param mixed $GiveStrength
     */
    public function setGiveStrength($GiveStrength): void
    {
        $this->GiveStrength = $GiveStrength;
    }

    /**
     * @return mixed
     */
    public function getGiveStrengthUnits()
    {
        return $this->GiveStrengthUnits;
    }

    /**
     * @param mixed $GiveStrengthUnits
     */
    public function setGiveStrengthUnits($GiveStrengthUnits): void
    {
        $this->GiveStrengthUnits = $GiveStrengthUnits;
    }

    /**
     * @return mixed
     */
    public function getGiveIndication()
    {
        return $this->GiveIndication;
    }

    /**
     * @param mixed $GiveIndication
     */
    public function setGiveIndication($GiveIndication): void
    {
        $this->GiveIndication = $GiveIndication;
    }

    /**
     * @return mixed
     */
    public function getGiveDrugStrengthVolume()
    {
        return $this->GiveDrugStrengthVolume;
    }

    /**
     * @param mixed $GiveDrugStrengthVolume
     */
    public function setGiveDrugStrengthVolume($GiveDrugStrengthVolume): void
    {
        $this->GiveDrugStrengthVolume = $GiveDrugStrengthVolume;
    }

    /**
     * @return mixed
     */
    public function getGiveDrugStrengthUnits()
    {
        return $this->GiveDrugStrengthUnits;
    }

    /**
     * @param mixed $GiveDrugStrengthUnits
     */
    public function setGiveDrugStrengthUnits($GiveDrugStrengthUnits): void
    {
        $this->GiveDrugStrengthUnits = $GiveDrugStrengthUnits;
    }

    public function __toString()
    {
        $fields = [];
        $fields[] = 'RXE';
        $fields[] = $this->QuantityTiming;
        $fields[] = $this->GiveCode;
        $fields[] = $this->GiveAmountMinimum;
        $fields[] = $this->GiveAmountMaximum;
        $fields[] = $this->GiveUnits;
        $fields[] = $this->GiveDosageForm;
        $fields[] = $this->ProviderAdministrationInstructions;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->NumberOfRefills;
        $fields[] = $this->OrderingProviderNumber;
        $fields[] = '';
        $fields[] = $this->PrescriptionNumber;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->GivePer;
        $fields[] = $this->GiveRateAmount;
        $fields[] = $this->GiveRateUnits;
        $fields[] = $this->GiveStrength;
        $fields[] = $this->GiveStrengthUnits;
        $fields[] = $this->GiveIndication;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->GiveDrugStrengthVolume;
        $fields[] = $this->GiveDrugStrengthUnits;
        $fields[] = ''; $fields[] = ''; $fields[] = ''; $fields[] = ''; $fields[] = '';
        $fields[] = ''; $fields[] = ''; $fields[] = ''; $fields[] = ''; $fields[] = '';

        return implode('|', $fields) . '\r';
    }

}