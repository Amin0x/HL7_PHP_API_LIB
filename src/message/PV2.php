<?php

class PV2 {    

    private $PriorPendingLocation = '';
    private $AccommodationCode = '';
    private $AdmitReason = '';
    private $TransferReason = '';
    private $PatientValuables = '';
    private $PatientValuablesLocation = '';
    private $VisitUserCode = '';
    private $ExpectedAdmitDateTime = '';
    private $ExpectedDischargeDateTime = '';
    private $EstimatedLengthInpatientStay = '';
    private $ActualLengthInpatientStay = '';
    private $VisitDescription = '';
    private $ReferralSourceCode = '';
    private $PreviousServiceDate = '';
    private $EmploymentIllnessRelatedIndicator = '';
    private $PurgeStatusCode = '';
    private $PurgeStatusDate = '';
    private $SpecialProgramCode = '';
    private $RetentionIndicator = '';
    private $ExpectedNumberInsurancePlans = '';
    private $VisitPublicityCode = '';
    private $VisitProtectionIndicator = '';
    private $ClinicOrganizationName = '';
    private $PatientStatusCode = '';
    private $VisitPriorityCode = '';
    private $PreviousTreatmentDate = '';
    private $ExpectedDischargeDisposition = '';
    private $SignatureOnFileDate = '';
    private $FirstSimilarIllnessDate = '';
    private $PatientChargeAdjustmentCode = '';
    private $RecurringServiceCode = '';
    private $BillingMediaCode = '';
    private $ExpectedSurgeryDateTime = '';
    private $MilitaryPartnershipCode = '';
    private $MilitaryNonAvailabilityCode = '';
    private $NewbornBabyIndicator = '';
    private $BabyDetainedIndicator = '';
    private $ModeOfArrivalCode = '';
    private $RecreationalDrugUseCode = '';
    private $AdmissionLevelCareCode = '';
    private $PrecautionCode = '';
    private $PatientConditionCode = '';
    private $LivingWillCode = '';
    private $OrganDonorCode = '';
    private $AdvanceDirectiveCode = '';
    private $PatientStatusEffectiveDate = '';
    private $ExpectedLOAReturnDateTime = '';
    private $ExpectedPreadmissionTestingDateTime = '';
    private $NotifyClergyCode = '';

    /**
     * PV2 constructor.
     * @param string $PriorPendingLocation
     * @param string $AccommodationCode
     * @param string $AdmitReason
     * @param string $TransferReason
     * @param string $PatientValuables
     * @param string $PatientValuablesLocation
     * @param string $VisitUserCode
     */
    public function __construct(string $PriorPendingLocation, string $AccommodationCode, string $AdmitReason, string $TransferReason, string $PatientValuables, string $PatientValuablesLocation, string $VisitUserCode)
    {
        $this->PriorPendingLocation = $PriorPendingLocation;
        $this->AccommodationCode = $AccommodationCode;
        $this->AdmitReason = $AdmitReason;
        $this->TransferReason = $TransferReason;
        $this->PatientValuables = $PatientValuables;
        $this->PatientValuablesLocation = $PatientValuablesLocation;
        $this->VisitUserCode = $VisitUserCode;
    }

    /**
     * @return string
     */
    public function getPriorPendingLocation(): string
    {
        return $this->PriorPendingLocation;
    }

    /**
     * @param string $PriorPendingLocation
     */
    public function setPriorPendingLocation(string $PriorPendingLocation): void
    {
        $this->PriorPendingLocation = $PriorPendingLocation;
    }

    /**
     * @return string
     */
    public function getAccommodationCode(): string
    {
        return $this->AccommodationCode;
    }

    /**
     * @param string $AccommodationCode
     */
    public function setAccommodationCode(string $AccommodationCode): void
    {
        $this->AccommodationCode = $AccommodationCode;
    }

    /**
     * @return string
     */
    public function getAdmitReason(): string
    {
        return $this->AdmitReason;
    }

    /**
     * @param string $AdmitReason
     */
    public function setAdmitReason(string $AdmitReason): void
    {
        $this->AdmitReason = $AdmitReason;
    }

    /**
     * @return string
     */
    public function getTransferReason(): string
    {
        return $this->TransferReason;
    }

    /**
     * @param string $TransferReason
     */
    public function setTransferReason(string $TransferReason): void
    {
        $this->TransferReason = $TransferReason;
    }

    /**
     * @return string
     */
    public function getPatientValuables(): string
    {
        return $this->PatientValuables;
    }

    /**
     * @param string $PatientValuables
     */
    public function setPatientValuables(string $PatientValuables): void
    {
        $this->PatientValuables = $PatientValuables;
    }

    /**
     * @return string
     */
    public function getPatientValuablesLocation(): string
    {
        return $this->PatientValuablesLocation;
    }

    /**
     * @param string $PatientValuablesLocation
     */
    public function setPatientValuablesLocation(string $PatientValuablesLocation): void
    {
        $this->PatientValuablesLocation = $PatientValuablesLocation;
    }

    /**
     * @return string
     */
    public function getVisitUserCode(): string
    {
        return $this->VisitUserCode;
    }

    /**
     * @param string $VisitUserCode
     */
    public function setVisitUserCode(string $VisitUserCode): void
    {
        $this->VisitUserCode = $VisitUserCode;
    }

    /**
     * @return string
     */
    public function getExpectedAdmitDateTime(): string
    {
        return $this->ExpectedAdmitDateTime;
    }

    /**
     * @param string $ExpectedAdmitDateTime
     */
    public function setExpectedAdmitDateTime(string $ExpectedAdmitDateTime): void
    {
        $this->ExpectedAdmitDateTime = $ExpectedAdmitDateTime;
    }

    /**
     * @return string
     */
    public function getExpectedDischargeDateTime(): string
    {
        return $this->ExpectedDischargeDateTime;
    }

    /**
     * @param string $ExpectedDischargeDateTime
     */
    public function setExpectedDischargeDateTime(string $ExpectedDischargeDateTime): void
    {
        $this->ExpectedDischargeDateTime = $ExpectedDischargeDateTime;
    }

    /**
     * @return string
     */
    public function getEstimatedLengthInpatientStay(): string
    {
        return $this->EstimatedLengthInpatientStay;
    }

    /**
     * @param string $EstimatedLengthInpatientStay
     */
    public function setEstimatedLengthInpatientStay(string $EstimatedLengthInpatientStay): void
    {
        $this->EstimatedLengthInpatientStay = $EstimatedLengthInpatientStay;
    }

    /**
     * @return string
     */
    public function getActualLengthInpatientStay(): string
    {
        return $this->ActualLengthInpatientStay;
    }

    /**
     * @param string $ActualLengthInpatientStay
     */
    public function setActualLengthInpatientStay(string $ActualLengthInpatientStay): void
    {
        $this->ActualLengthInpatientStay = $ActualLengthInpatientStay;
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

    /**
     * @return string
     */
    public function getReferralSourceCode(): string
    {
        return $this->ReferralSourceCode;
    }

    /**
     * @param string $ReferralSourceCode
     */
    public function setReferralSourceCode(string $ReferralSourceCode): void
    {
        $this->ReferralSourceCode = $ReferralSourceCode;
    }

    /**
     * @return string
     */
    public function getPreviousServiceDate(): string
    {
        return $this->PreviousServiceDate;
    }

    /**
     * @param string $PreviousServiceDate
     */
    public function setPreviousServiceDate(string $PreviousServiceDate): void
    {
        $this->PreviousServiceDate = $PreviousServiceDate;
    }

    /**
     * @return string
     */
    public function getEmploymentIllnessRelatedIndicator(): string
    {
        return $this->EmploymentIllnessRelatedIndicator;
    }

    /**
     * @param string $EmploymentIllnessRelatedIndicator
     */
    public function setEmploymentIllnessRelatedIndicator(string $EmploymentIllnessRelatedIndicator): void
    {
        $this->EmploymentIllnessRelatedIndicator = $EmploymentIllnessRelatedIndicator;
    }

    /**
     * @return string
     */
    public function getPurgeStatusCode(): string
    {
        return $this->PurgeStatusCode;
    }

    /**
     * @param string $PurgeStatusCode
     */
    public function setPurgeStatusCode(string $PurgeStatusCode): void
    {
        $this->PurgeStatusCode = $PurgeStatusCode;
    }

    /**
     * @return string
     */
    public function getPurgeStatusDate(): string
    {
        return $this->PurgeStatusDate;
    }

    /**
     * @param string $PurgeStatusDate
     */
    public function setPurgeStatusDate(string $PurgeStatusDate): void
    {
        $this->PurgeStatusDate = $PurgeStatusDate;
    }

    /**
     * @return string
     */
    public function getSpecialProgramCode(): string
    {
        return $this->SpecialProgramCode;
    }

    /**
     * @param string $SpecialProgramCode
     */
    public function setSpecialProgramCode(string $SpecialProgramCode): void
    {
        $this->SpecialProgramCode = $SpecialProgramCode;
    }

    /**
     * @return string
     */
    public function getRetentionIndicator(): string
    {
        return $this->RetentionIndicator;
    }

    /**
     * @param string $RetentionIndicator
     */
    public function setRetentionIndicator(string $RetentionIndicator): void
    {
        $this->RetentionIndicator = $RetentionIndicator;
    }

    /**
     * @return string
     */
    public function getExpectedNumberInsurancePlans(): string
    {
        return $this->ExpectedNumberInsurancePlans;
    }

    /**
     * @param string $ExpectedNumberInsurancePlans
     */
    public function setExpectedNumberInsurancePlans(string $ExpectedNumberInsurancePlans): void
    {
        $this->ExpectedNumberInsurancePlans = $ExpectedNumberInsurancePlans;
    }

    /**
     * @return string
     */
    public function getVisitPublicityCode(): string
    {
        return $this->VisitPublicityCode;
    }

    /**
     * @param string $VisitPublicityCode
     */
    public function setVisitPublicityCode(string $VisitPublicityCode): void
    {
        $this->VisitPublicityCode = $VisitPublicityCode;
    }

    /**
     * @return string
     */
    public function getVisitProtectionIndicator(): string
    {
        return $this->VisitProtectionIndicator;
    }

    /**
     * @param string $VisitProtectionIndicator
     */
    public function setVisitProtectionIndicator(string $VisitProtectionIndicator): void
    {
        $this->VisitProtectionIndicator = $VisitProtectionIndicator;
    }

    /**
     * @return string
     */
    public function getClinicOrganizationName(): string
    {
        return $this->ClinicOrganizationName;
    }

    /**
     * @param string $ClinicOrganizationName
     */
    public function setClinicOrganizationName(string $ClinicOrganizationName): void
    {
        $this->ClinicOrganizationName = $ClinicOrganizationName;
    }

    /**
     * @return string
     */
    public function getPatientStatusCode(): string
    {
        return $this->PatientStatusCode;
    }

    /**
     * @param string $PatientStatusCode
     */
    public function setPatientStatusCode(string $PatientStatusCode): void
    {
        $this->PatientStatusCode = $PatientStatusCode;
    }

    /**
     * @return string
     */
    public function getVisitPriorityCode(): string
    {
        return $this->VisitPriorityCode;
    }

    /**
     * @param string $VisitPriorityCode
     */
    public function setVisitPriorityCode(string $VisitPriorityCode): void
    {
        $this->VisitPriorityCode = $VisitPriorityCode;
    }

    /**
     * @return string
     */
    public function getPreviousTreatmentDate(): string
    {
        return $this->PreviousTreatmentDate;
    }

    /**
     * @param string $PreviousTreatmentDate
     */
    public function setPreviousTreatmentDate(string $PreviousTreatmentDate): void
    {
        $this->PreviousTreatmentDate = $PreviousTreatmentDate;
    }

    /**
     * @return string
     */
    public function getExpectedDischargeDisposition(): string
    {
        return $this->ExpectedDischargeDisposition;
    }

    /**
     * @param string $ExpectedDischargeDisposition
     */
    public function setExpectedDischargeDisposition(string $ExpectedDischargeDisposition): void
    {
        $this->ExpectedDischargeDisposition = $ExpectedDischargeDisposition;
    }

    /**
     * @return string
     */
    public function getSignatureOnFileDate(): string
    {
        return $this->SignatureOnFileDate;
    }

    /**
     * @param string $SignatureOnFileDate
     */
    public function setSignatureOnFileDate(string $SignatureOnFileDate): void
    {
        $this->SignatureOnFileDate = $SignatureOnFileDate;
    }

    /**
     * @return string
     */
    public function getFirstSimilarIllnessDate(): string
    {
        return $this->FirstSimilarIllnessDate;
    }

    /**
     * @param string $FirstSimilarIllnessDate
     */
    public function setFirstSimilarIllnessDate(string $FirstSimilarIllnessDate): void
    {
        $this->FirstSimilarIllnessDate = $FirstSimilarIllnessDate;
    }

    /**
     * @return string
     */
    public function getPatientChargeAdjustmentCode(): string
    {
        return $this->PatientChargeAdjustmentCode;
    }

    /**
     * @param string $PatientChargeAdjustmentCode
     */
    public function setPatientChargeAdjustmentCode(string $PatientChargeAdjustmentCode): void
    {
        $this->PatientChargeAdjustmentCode = $PatientChargeAdjustmentCode;
    }

    /**
     * @return string
     */
    public function getRecurringServiceCode(): string
    {
        return $this->RecurringServiceCode;
    }

    /**
     * @param string $RecurringServiceCode
     */
    public function setRecurringServiceCode(string $RecurringServiceCode): void
    {
        $this->RecurringServiceCode = $RecurringServiceCode;
    }

    /**
     * @return string
     */
    public function getBillingMediaCode(): string
    {
        return $this->BillingMediaCode;
    }

    /**
     * @param string $BillingMediaCode
     */
    public function setBillingMediaCode(string $BillingMediaCode): void
    {
        $this->BillingMediaCode = $BillingMediaCode;
    }

    /**
     * @return string
     */
    public function getExpectedSurgeryDateTime(): string
    {
        return $this->ExpectedSurgeryDateTime;
    }

    /**
     * @param string $ExpectedSurgeryDateTime
     */
    public function setExpectedSurgeryDateTime(string $ExpectedSurgeryDateTime): void
    {
        $this->ExpectedSurgeryDateTime = $ExpectedSurgeryDateTime;
    }

    /**
     * @return string
     */
    public function getMilitaryPartnershipCode(): string
    {
        return $this->MilitaryPartnershipCode;
    }

    /**
     * @param string $MilitaryPartnershipCode
     */
    public function setMilitaryPartnershipCode(string $MilitaryPartnershipCode): void
    {
        $this->MilitaryPartnershipCode = $MilitaryPartnershipCode;
    }

    /**
     * @return string
     */
    public function getMilitaryNonAvailabilityCode(): string
    {
        return $this->MilitaryNonAvailabilityCode;
    }

    /**
     * @param string $MilitaryNonAvailabilityCode
     */
    public function setMilitaryNonAvailabilityCode(string $MilitaryNonAvailabilityCode): void
    {
        $this->MilitaryNonAvailabilityCode = $MilitaryNonAvailabilityCode;
    }

    /**
     * @return string
     */
    public function getNewbornBabyIndicator(): string
    {
        return $this->NewbornBabyIndicator;
    }

    /**
     * @param string $NewbornBabyIndicator
     */
    public function setNewbornBabyIndicator(string $NewbornBabyIndicator): void
    {
        $this->NewbornBabyIndicator = $NewbornBabyIndicator;
    }

    /**
     * @return string
     */
    public function getBabyDetainedIndicator(): string
    {
        return $this->BabyDetainedIndicator;
    }

    /**
     * @param string $BabyDetainedIndicator
     */
    public function setBabyDetainedIndicator(string $BabyDetainedIndicator): void
    {
        $this->BabyDetainedIndicator = $BabyDetainedIndicator;
    }

    /**
     * @return string
     */
    public function getModeOfArrivalCode(): string
    {
        return $this->ModeOfArrivalCode;
    }

    /**
     * @param string $ModeOfArrivalCode
     */
    public function setModeOfArrivalCode(string $ModeOfArrivalCode): void
    {
        $this->ModeOfArrivalCode = $ModeOfArrivalCode;
    }

    /**
     * @return string
     */
    public function getRecreationalDrugUseCode(): string
    {
        return $this->RecreationalDrugUseCode;
    }

    /**
     * @param string $RecreationalDrugUseCode
     */
    public function setRecreationalDrugUseCode(string $RecreationalDrugUseCode): void
    {
        $this->RecreationalDrugUseCode = $RecreationalDrugUseCode;
    }

    /**
     * @return string
     */
    public function getAdmissionLevelCareCode(): string
    {
        return $this->AdmissionLevelCareCode;
    }

    /**
     * @param string $AdmissionLevelCareCode
     */
    public function setAdmissionLevelCareCode(string $AdmissionLevelCareCode): void
    {
        $this->AdmissionLevelCareCode = $AdmissionLevelCareCode;
    }

    /**
     * @return string
     */
    public function getPrecautionCode(): string
    {
        return $this->PrecautionCode;
    }

    /**
     * @param string $PrecautionCode
     */
    public function setPrecautionCode(string $PrecautionCode): void
    {
        $this->PrecautionCode = $PrecautionCode;
    }

    /**
     * @return string
     */
    public function getPatientConditionCode(): string
    {
        return $this->PatientConditionCode;
    }

    /**
     * @param string $PatientConditionCode
     */
    public function setPatientConditionCode(string $PatientConditionCode): void
    {
        $this->PatientConditionCode = $PatientConditionCode;
    }

    /**
     * @return string
     */
    public function getLivingWillCode(): string
    {
        return $this->LivingWillCode;
    }

    /**
     * @param string $LivingWillCode
     */
    public function setLivingWillCode(string $LivingWillCode): void
    {
        $this->LivingWillCode = $LivingWillCode;
    }

    /**
     * @return string
     */
    public function getOrganDonorCode(): string
    {
        return $this->OrganDonorCode;
    }

    /**
     * @param string $OrganDonorCode
     */
    public function setOrganDonorCode(string $OrganDonorCode): void
    {
        $this->OrganDonorCode = $OrganDonorCode;
    }

    /**
     * @return string
     */
    public function getAdvanceDirectiveCode(): string
    {
        return $this->AdvanceDirectiveCode;
    }

    /**
     * @param string $AdvanceDirectiveCode
     */
    public function setAdvanceDirectiveCode(string $AdvanceDirectiveCode): void
    {
        $this->AdvanceDirectiveCode = $AdvanceDirectiveCode;
    }

    /**
     * @return string
     */
    public function getPatientStatusEffectiveDate(): string
    {
        return $this->PatientStatusEffectiveDate;
    }

    /**
     * @param string $PatientStatusEffectiveDate
     */
    public function setPatientStatusEffectiveDate(string $PatientStatusEffectiveDate): void
    {
        $this->PatientStatusEffectiveDate = $PatientStatusEffectiveDate;
    }

    /**
     * @return string
     */
    public function getExpectedLOAReturnDateTime(): string
    {
        return $this->ExpectedLOAReturnDateTime;
    }

    /**
     * @param string $ExpectedLOAReturnDateTime
     */
    public function setExpectedLOAReturnDateTime(string $ExpectedLOAReturnDateTime): void
    {
        $this->ExpectedLOAReturnDateTime = $ExpectedLOAReturnDateTime;
    }

    /**
     * @return string
     */
    public function getExpectedPreadmissionTestingDateTime(): string
    {
        return $this->ExpectedPreadmissionTestingDateTime;
    }

    /**
     * @param string $ExpectedPreadmissionTestingDateTime
     */
    public function setExpectedPreadmissionTestingDateTime(string $ExpectedPreadmissionTestingDateTime): void
    {
        $this->ExpectedPreadmissionTestingDateTime = $ExpectedPreadmissionTestingDateTime;
    }

    /**
     * @return string
     */
    public function getNotifyClergyCode(): string
    {
        return $this->NotifyClergyCode;
    }

    /**
     * @param string $NotifyClergyCode
     */
    public function setNotifyClergyCode(string $NotifyClergyCode): void
    {
        $this->NotifyClergyCode = $NotifyClergyCode;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}