<?php
namespace amin0x\nabidh;

class RXA implements Segment {

    private $QuantityTiming = '';
    private $GiveCode = '';
    private $GiveAmountMinimum = '';
    private $GiveAmountMaximum = '';
    private $GiveUnits = '';
    private $GiveDosageForm = '';
    private $ProviderAdministrationInstructions = '';
    private $DeliverToInstructions = '';
    private $SubstitutionStatus = '';
    private $DispenseAmount = '';
    private $DispenseUnits = '';
    private $NumberofRefills = '';
    private $OrderingProviderDEANumber = '';
    private $PharmacistTreatmentSupplierVerifierID = '';
    private $PrescriptionNumber = '';
    private $NumberofRefillsRemaining = '';
    private $NumberofRefillsDosesDispensed = '';
    private $DateTimeofMostRecentRefillorDoseDispensed = '';
    private $TotalDailyDose = '';
    private $NeedsHumanReview = '';
    private $PharmacyTreatmentSupplierSpecialDispensingInstructions = '';
    private $GivePerTimeUnit = '';
    private $GiveRateAmount = '';
    private $GiveRateUnits = '';
    private $GiveStrength = '';
    private $GiveStrengthUnits = '';
    private $GiveIndication = '';
    private $DispensePackageSize = '';
    private $DispensePackageSizeUnit = '';
    private $DispensePackageMethod = '';
    private $SupplementaryCode = '';
    private $OriginalOrderDateTime = '';
    private $GiveDrugStrengthVolume = '';
    private $GiveDrugStrengthVolumeUnits = '';
    private $ControlledSubstanceSchedule = '';
    private $FormularyStatus = '';
    private $PharmaceuticalSubstanceAlternative = '';
    private $PharmacyofMostRecentFill = '';
    private $InitialDispenseAmount = '';
    private $DispensingPharmacy = '';
    private $DispensingPharmacyAddress = '';
    private $DeliverToPatientLocation = '';
    private $DeliverToAddress = '';
    private $PharmacyOrderType = '';

    /**
     * @return string
     */
    public function getQuantityTiming(): string
    {
        return $this->QuantityTiming;
    }

    /**
     * @param string $QuantityTiming
     */
    public function setQuantityTiming(string $QuantityTiming): void
    {
        $this->QuantityTiming = $QuantityTiming;
    }

    /**
     * @return string
     */
    public function getGiveCode(): string
    {
        return $this->GiveCode;
    }

    /**
     * @param string $GiveCode
     */
    public function setGiveCode(string $GiveCode): void
    {
        $this->GiveCode = $GiveCode;
    }

    /**
     * @return string
     */
    public function getGiveAmountMinimum(): string
    {
        return $this->GiveAmountMinimum;
    }

    /**
     * @param string $GiveAmountMinimum
     */
    public function setGiveAmountMinimum(string $GiveAmountMinimum): void
    {
        $this->GiveAmountMinimum = $GiveAmountMinimum;
    }

    /**
     * @return string
     */
    public function getGiveAmountMaximum(): string
    {
        return $this->GiveAmountMaximum;
    }

    /**
     * @param string $GiveAmountMaximum
     */
    public function setGiveAmountMaximum(string $GiveAmountMaximum): void
    {
        $this->GiveAmountMaximum = $GiveAmountMaximum;
    }

    /**
     * @return string
     */
    public function getGiveUnits(): string
    {
        return $this->GiveUnits;
    }

    /**
     * @param string $GiveUnits
     */
    public function setGiveUnits(string $GiveUnits): void
    {
        $this->GiveUnits = $GiveUnits;
    }

    /**
     * @return string
     */
    public function getGiveDosageForm(): string
    {
        return $this->GiveDosageForm;
    }

    /**
     * @param string $GiveDosageForm
     */
    public function setGiveDosageForm(string $GiveDosageForm): void
    {
        $this->GiveDosageForm = $GiveDosageForm;
    }

    /**
     * @return string
     */
    public function getProviderAdministrationInstructions(): string
    {
        return $this->ProviderAdministrationInstructions;
    }

    /**
     * @param string $ProviderAdministrationInstructions
     */
    public function setProviderAdministrationInstructions(string $ProviderAdministrationInstructions): void
    {
        $this->ProviderAdministrationInstructions = $ProviderAdministrationInstructions;
    }

    /**
     * @return string
     */
    public function getDeliverToInstructions(): string
    {
        return $this->DeliverToInstructions;
    }

    /**
     * @param string $DeliverToInstructions
     */
    public function setDeliverToInstructions(string $DeliverToInstructions): void
    {
        $this->DeliverToInstructions = $DeliverToInstructions;
    }

    /**
     * @return string
     */
    public function getSubstitutionStatus(): string
    {
        return $this->SubstitutionStatus;
    }

    /**
     * @param string $SubstitutionStatus
     */
    public function setSubstitutionStatus(string $SubstitutionStatus): void
    {
        $this->SubstitutionStatus = $SubstitutionStatus;
    }

    /**
     * @return string
     */
    public function getDispenseAmount(): string
    {
        return $this->DispenseAmount;
    }

    /**
     * @param string $DispenseAmount
     */
    public function setDispenseAmount(string $DispenseAmount): void
    {
        $this->DispenseAmount = $DispenseAmount;
    }

    /**
     * @return string
     */
    public function getDispenseUnits(): string
    {
        return $this->DispenseUnits;
    }

    /**
     * @param string $DispenseUnits
     */
    public function setDispenseUnits(string $DispenseUnits): void
    {
        $this->DispenseUnits = $DispenseUnits;
    }

    /**
     * @return string
     */
    public function getNumberofRefills(): string
    {
        return $this->NumberofRefills;
    }

    /**
     * @param string $NumberofRefills
     */
    public function setNumberofRefills(string $NumberofRefills): void
    {
        $this->NumberofRefills = $NumberofRefills;
    }

    /**
     * @return string
     */
    public function getOrderingProviderDEANumber(): string
    {
        return $this->OrderingProviderDEANumber;
    }

    /**
     * @param string $OrderingProviderDEANumber
     */
    public function setOrderingProviderDEANumber(string $OrderingProviderDEANumber): void
    {
        $this->OrderingProviderDEANumber = $OrderingProviderDEANumber;
    }

    /**
     * @return string
     */
    public function getPharmacistTreatmentSupplierVerifierID(): string
    {
        return $this->PharmacistTreatmentSupplierVerifierID;
    }

    /**
     * @param string $PharmacistTreatmentSupplierVerifierID
     */
    public function setPharmacistTreatmentSupplierVerifierID(string $PharmacistTreatmentSupplierVerifierID): void
    {
        $this->PharmacistTreatmentSupplierVerifierID = $PharmacistTreatmentSupplierVerifierID;
    }

    /**
     * @return string
     */
    public function getPrescriptionNumber(): string
    {
        return $this->PrescriptionNumber;
    }

    /**
     * @param string $PrescriptionNumber
     */
    public function setPrescriptionNumber(string $PrescriptionNumber): void
    {
        $this->PrescriptionNumber = $PrescriptionNumber;
    }

    /**
     * @return string
     */
    public function getNumberofRefillsRemaining(): string
    {
        return $this->NumberofRefillsRemaining;
    }

    /**
     * @param string $NumberofRefillsRemaining
     */
    public function setNumberofRefillsRemaining(string $NumberofRefillsRemaining): void
    {
        $this->NumberofRefillsRemaining = $NumberofRefillsRemaining;
    }

    /**
     * @return string
     */
    public function getNumberofRefillsDosesDispensed(): string
    {
        return $this->NumberofRefillsDosesDispensed;
    }

    /**
     * @param string $NumberofRefillsDosesDispensed
     */
    public function setNumberofRefillsDosesDispensed(string $NumberofRefillsDosesDispensed): void
    {
        $this->NumberofRefillsDosesDispensed = $NumberofRefillsDosesDispensed;
    }

    /**
     * @return string
     */
    public function getDateTimeofMostRecentRefillorDoseDispensed(): string
    {
        return $this->DateTimeofMostRecentRefillorDoseDispensed;
    }

    /**
     * @param string $DateTimeofMostRecentRefillorDoseDispensed
     */
    public function setDateTimeofMostRecentRefillorDoseDispensed(string $DateTimeofMostRecentRefillorDoseDispensed): void
    {
        $this->DateTimeofMostRecentRefillorDoseDispensed = $DateTimeofMostRecentRefillorDoseDispensed;
    }

    /**
     * @return string
     */
    public function getTotalDailyDose(): string
    {
        return $this->TotalDailyDose;
    }

    /**
     * @param string $TotalDailyDose
     */
    public function setTotalDailyDose(string $TotalDailyDose): void
    {
        $this->TotalDailyDose = $TotalDailyDose;
    }

    /**
     * @return string
     */
    public function getNeedsHumanReview(): string
    {
        return $this->NeedsHumanReview;
    }

    /**
     * @param string $NeedsHumanReview
     */
    public function setNeedsHumanReview(string $NeedsHumanReview): void
    {
        $this->NeedsHumanReview = $NeedsHumanReview;
    }

    /**
     * @return string
     */
    public function getPharmacyTreatmentSupplierSpecialDispensingInstructions(): string
    {
        return $this->PharmacyTreatmentSupplierSpecialDispensingInstructions;
    }

    /**
     * @param string $PharmacyTreatmentSupplierSpecialDispensingInstructions
     */
    public function setPharmacyTreatmentSupplierSpecialDispensingInstructions(string $PharmacyTreatmentSupplierSpecialDispensingInstructions): void
    {
        $this->PharmacyTreatmentSupplierSpecialDispensingInstructions = $PharmacyTreatmentSupplierSpecialDispensingInstructions;
    }

    /**
     * @return string
     */
    public function getGivePerTimeUnit(): string
    {
        return $this->GivePerTimeUnit;
    }

    /**
     * @param string $GivePerTimeUnit
     */
    public function setGivePerTimeUnit(string $GivePerTimeUnit): void
    {
        $this->GivePerTimeUnit = $GivePerTimeUnit;
    }

    /**
     * @return string
     */
    public function getGiveRateAmount(): string
    {
        return $this->GiveRateAmount;
    }

    /**
     * @param string $GiveRateAmount
     */
    public function setGiveRateAmount(string $GiveRateAmount): void
    {
        $this->GiveRateAmount = $GiveRateAmount;
    }

    /**
     * @return string
     */
    public function getGiveRateUnits(): string
    {
        return $this->GiveRateUnits;
    }

    /**
     * @param string $GiveRateUnits
     */
    public function setGiveRateUnits(string $GiveRateUnits): void
    {
        $this->GiveRateUnits = $GiveRateUnits;
    }

    /**
     * @return string
     */
    public function getGiveStrength(): string
    {
        return $this->GiveStrength;
    }

    /**
     * @param string $GiveStrength
     */
    public function setGiveStrength(string $GiveStrength): void
    {
        $this->GiveStrength = $GiveStrength;
    }

    /**
     * @return string
     */
    public function getGiveStrengthUnits(): string
    {
        return $this->GiveStrengthUnits;
    }

    /**
     * @param string $GiveStrengthUnits
     */
    public function setGiveStrengthUnits(string $GiveStrengthUnits): void
    {
        $this->GiveStrengthUnits = $GiveStrengthUnits;
    }

    /**
     * @return string
     */
    public function getGiveIndication(): string
    {
        return $this->GiveIndication;
    }

    /**
     * @param string $GiveIndication
     */
    public function setGiveIndication(string $GiveIndication): void
    {
        $this->GiveIndication = $GiveIndication;
    }

    /**
     * @return string
     */
    public function getDispensePackageSize(): string
    {
        return $this->DispensePackageSize;
    }

    /**
     * @param string $DispensePackageSize
     */
    public function setDispensePackageSize(string $DispensePackageSize): void
    {
        $this->DispensePackageSize = $DispensePackageSize;
    }

    /**
     * @return string
     */
    public function getDispensePackageSizeUnit(): string
    {
        return $this->DispensePackageSizeUnit;
    }

    /**
     * @param string $DispensePackageSizeUnit
     */
    public function setDispensePackageSizeUnit(string $DispensePackageSizeUnit): void
    {
        $this->DispensePackageSizeUnit = $DispensePackageSizeUnit;
    }

    /**
     * @return string
     */
    public function getDispensePackageMethod(): string
    {
        return $this->DispensePackageMethod;
    }

    /**
     * @param string $DispensePackageMethod
     */
    public function setDispensePackageMethod(string $DispensePackageMethod): void
    {
        $this->DispensePackageMethod = $DispensePackageMethod;
    }

    /**
     * @return string
     */
    public function getSupplementaryCode(): string
    {
        return $this->SupplementaryCode;
    }

    /**
     * @param string $SupplementaryCode
     */
    public function setSupplementaryCode(string $SupplementaryCode): void
    {
        $this->SupplementaryCode = $SupplementaryCode;
    }

    /**
     * @return string
     */
    public function getOriginalOrderDateTime(): string
    {
        return $this->OriginalOrderDateTime;
    }

    /**
     * @param string $OriginalOrderDateTime
     */
    public function setOriginalOrderDateTime(string $OriginalOrderDateTime): void
    {
        $this->OriginalOrderDateTime = $OriginalOrderDateTime;
    }

    /**
     * @return string
     */
    public function getGiveDrugStrengthVolume(): string
    {
        return $this->GiveDrugStrengthVolume;
    }

    /**
     * @param string $GiveDrugStrengthVolume
     */
    public function setGiveDrugStrengthVolume(string $GiveDrugStrengthVolume): void
    {
        $this->GiveDrugStrengthVolume = $GiveDrugStrengthVolume;
    }

    /**
     * @return string
     */
    public function getGiveDrugStrengthVolumeUnits(): string
    {
        return $this->GiveDrugStrengthVolumeUnits;
    }

    /**
     * @param string $GiveDrugStrengthVolumeUnits
     */
    public function setGiveDrugStrengthVolumeUnits(string $GiveDrugStrengthVolumeUnits): void
    {
        $this->GiveDrugStrengthVolumeUnits = $GiveDrugStrengthVolumeUnits;
    }

    /**
     * @return string
     */
    public function getControlledSubstanceSchedule(): string
    {
        return $this->ControlledSubstanceSchedule;
    }

    /**
     * @param string $ControlledSubstanceSchedule
     */
    public function setControlledSubstanceSchedule(string $ControlledSubstanceSchedule): void
    {
        $this->ControlledSubstanceSchedule = $ControlledSubstanceSchedule;
    }

    /**
     * @return string
     */
    public function getFormularyStatus(): string
    {
        return $this->FormularyStatus;
    }

    /**
     * @param string $FormularyStatus
     */
    public function setFormularyStatus(string $FormularyStatus): void
    {
        $this->FormularyStatus = $FormularyStatus;
    }

    /**
     * @return string
     */
    public function getPharmaceuticalSubstanceAlternative(): string
    {
        return $this->PharmaceuticalSubstanceAlternative;
    }

    /**
     * @param string $PharmaceuticalSubstanceAlternative
     */
    public function setPharmaceuticalSubstanceAlternative(string $PharmaceuticalSubstanceAlternative): void
    {
        $this->PharmaceuticalSubstanceAlternative = $PharmaceuticalSubstanceAlternative;
    }

    /**
     * @return string
     */
    public function getPharmacyofMostRecentFill(): string
    {
        return $this->PharmacyofMostRecentFill;
    }

    /**
     * @param string $PharmacyofMostRecentFill
     */
    public function setPharmacyofMostRecentFill(string $PharmacyofMostRecentFill): void
    {
        $this->PharmacyofMostRecentFill = $PharmacyofMostRecentFill;
    }

    /**
     * @return string
     */
    public function getInitialDispenseAmount(): string
    {
        return $this->InitialDispenseAmount;
    }

    /**
     * @param string $InitialDispenseAmount
     */
    public function setInitialDispenseAmount(string $InitialDispenseAmount): void
    {
        $this->InitialDispenseAmount = $InitialDispenseAmount;
    }

    /**
     * @return string
     */
    public function getDispensingPharmacy(): string
    {
        return $this->DispensingPharmacy;
    }

    /**
     * @param string $DispensingPharmacy
     */
    public function setDispensingPharmacy(string $DispensingPharmacy): void
    {
        $this->DispensingPharmacy = $DispensingPharmacy;
    }

    /**
     * @return string
     */
    public function getDispensingPharmacyAddress(): string
    {
        return $this->DispensingPharmacyAddress;
    }

    /**
     * @param string $DispensingPharmacyAddress
     */
    public function setDispensingPharmacyAddress(string $DispensingPharmacyAddress): void
    {
        $this->DispensingPharmacyAddress = $DispensingPharmacyAddress;
    }

    /**
     * @return string
     */
    public function getDeliverToPatientLocation(): string
    {
        return $this->DeliverToPatientLocation;
    }

    /**
     * @param string $DeliverToPatientLocation
     */
    public function setDeliverToPatientLocation(string $DeliverToPatientLocation): void
    {
        $this->DeliverToPatientLocation = $DeliverToPatientLocation;
    }

    /**
     * @return string
     */
    public function getDeliverToAddress(): string
    {
        return $this->DeliverToAddress;
    }

    /**
     * @param string $DeliverToAddress
     */
    public function setDeliverToAddress(string $DeliverToAddress): void
    {
        $this->DeliverToAddress = $DeliverToAddress;
    }

    /**
     * @return string
     */
    public function getPharmacyOrderType(): string
    {
        return $this->PharmacyOrderType;
    }

    /**
     * @param string $PharmacyOrderType
     */
    public function setPharmacyOrderType(string $PharmacyOrderType): void
    {
        $this->PharmacyOrderType = $PharmacyOrderType;
    }

    public function __toString()
    {
        return '';
    }

}