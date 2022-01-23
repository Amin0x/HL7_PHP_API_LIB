<?php
namespace amin0x\nabidh;

class ORC implements Segment {
    

    private $OrderControl = '';
    private $PlacerOrderNumber = '';
    private $FillerOrderNumber = '';
    private $PlacerGroupNumber = '';
    private $OrderStatus = '';
    private $ResponseFlag = '';
    private $QualityTiming = '';
    private $Parent = '';
    private $DateTimeTransaction = '';
    private $EnteredBy = '';
    private $VerifiedBy = '';
    private $OrderingProvider = '';
    private $EntererLocation = '';
    private $CallBackPhoneNumber = '';
    private $OrderEffectiveDateTime = '';
    private $OrderControlCodeReason = '';
    private $EnteringOrganization = '';
    private $EnteringDevice = '';
    private $ActionBy = '';
    private $AdvancedBeneficiaryNoticeCode = '';
    private $OrderingFacilityName = '';
    private $OrderingFacilityAddress = '';
    private $OrderingFacilityPhoneNumber = '';
    private $OrderingProviderAddress = '';
    private $OrderStatusModifier = '';
    private $AdvancedBeneficiaryNoticeOverrideReason = '';
    private $FillerExpectedAvailabilityDateTime = '';
    private $ConfidentialityCode = '';
    private $OrderType = '';
    private $EntererAuthorizationMode = '';
    private $ParentUniversalServiceIdentifier = '';

    /**
     * ORC constructor.
     * @param string $OrderControl
     * @param string $PlacerOrderNumber
     * @param string $FillerOrderNumber
     * @param string $PlacerGroupNumber
     * @param string $OrderStatus
     */
    public function __construct(string $OrderControl, string $PlacerOrderNumber, string $FillerOrderNumber, string $PlacerGroupNumber, string $OrderStatus)
    {
        $this->OrderControl = $OrderControl;
        $this->PlacerOrderNumber = $PlacerOrderNumber;
        $this->FillerOrderNumber = $FillerOrderNumber;
        $this->PlacerGroupNumber = $PlacerGroupNumber;
        $this->OrderStatus = $OrderStatus;
    }

    /**
     * @return string
     */
    public function getOrderControl(): string
    {
        return $this->OrderControl;
    }

    /**
     * @param string $OrderControl
     */
    public function setOrderControl(string $OrderControl): void
    {
        $this->OrderControl = $OrderControl;
    }

    /**
     * @return string
     */
    public function getPlacerOrderNumber(): string
    {
        return $this->PlacerOrderNumber;
    }

    /**
     * @param string $PlacerOrderNumber
     */
    public function setPlacerOrderNumber(string $PlacerOrderNumber): void
    {
        $this->PlacerOrderNumber = $PlacerOrderNumber;
    }

    /**
     * @return string
     */
    public function getFillerOrderNumber(): string
    {
        return $this->FillerOrderNumber;
    }

    /**
     * @param string $FillerOrderNumber
     */
    public function setFillerOrderNumber(string $FillerOrderNumber): void
    {
        $this->FillerOrderNumber = $FillerOrderNumber;
    }

    /**
     * @return string
     */
    public function getPlacerGroupNumber(): string
    {
        return $this->PlacerGroupNumber;
    }

    /**
     * @param string $PlacerGroupNumber
     */
    public function setPlacerGroupNumber(string $PlacerGroupNumber): void
    {
        $this->PlacerGroupNumber = $PlacerGroupNumber;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->OrderStatus;
    }

    /**
     * @param string $OrderStatus
     */
    public function setOrderStatus(string $OrderStatus): void
    {
        $this->OrderStatus = $OrderStatus;
    }

    /**
     * @return string
     */
    public function getResponseFlag(): string
    {
        return $this->ResponseFlag;
    }

    /**
     * @param string $ResponseFlag
     */
    public function setResponseFlag(string $ResponseFlag): void
    {
        $this->ResponseFlag = $ResponseFlag;
    }

    /**
     * @return string
     */
    public function getQualityTiming(): string
    {
        return $this->QualityTiming;
    }

    /**
     * @param string $QualityTiming
     */
    public function setQualityTiming(string $QualityTiming): void
    {
        $this->QualityTiming = $QualityTiming;
    }

    /**
     * @return string
     */
    public function getParent(): string
    {
        return $this->Parent;
    }

    /**
     * @param string $Parent
     */
    public function setParent(string $Parent): void
    {
        $this->Parent = $Parent;
    }

    /**
     * @return string
     */
    public function getDateTimeTransaction(): string
    {
        return $this->DateTimeTransaction;
    }

    /**
     * @param string $DateTimeTransaction
     */
    public function setDateTimeTransaction(string $DateTimeTransaction): void
    {
        $this->DateTimeTransaction = $DateTimeTransaction;
    }

    /**
     * @return string
     */
    public function getEnteredBy(): string
    {
        return $this->EnteredBy;
    }

    /**
     * @param string $EnteredBy
     */
    public function setEnteredBy(string $EnteredBy): void
    {
        $this->EnteredBy = $EnteredBy;
    }

    /**
     * @return string
     */
    public function getVerifiedBy(): string
    {
        return $this->VerifiedBy;
    }

    /**
     * @param string $VerifiedBy
     */
    public function setVerifiedBy(string $VerifiedBy): void
    {
        $this->VerifiedBy = $VerifiedBy;
    }

    /**
     * @return string
     */
    public function getOrderingProvider(): string
    {
        return $this->OrderingProvider;
    }

    /**
     * @param string $OrderingProvider
     */
    public function setOrderingProvider(string $OrderingProvider): void
    {
        $this->OrderingProvider = $OrderingProvider;
    }

    /**
     * @return string
     */
    public function getEntererLocation(): string
    {
        return $this->EntererLocation;
    }

    /**
     * @param string $EntererLocation
     */
    public function setEntererLocation(string $EntererLocation): void
    {
        $this->EntererLocation = $EntererLocation;
    }

    /**
     * @return string
     */
    public function getCallBackPhoneNumber(): string
    {
        return $this->CallBackPhoneNumber;
    }

    /**
     * @param string $CallBackPhoneNumber
     */
    public function setCallBackPhoneNumber(string $CallBackPhoneNumber): void
    {
        $this->CallBackPhoneNumber = $CallBackPhoneNumber;
    }

    /**
     * @return string
     */
    public function getOrderEffectiveDateTime(): string
    {
        return $this->OrderEffectiveDateTime;
    }

    /**
     * @param string $OrderEffectiveDateTime
     */
    public function setOrderEffectiveDateTime(string $OrderEffectiveDateTime): void
    {
        $this->OrderEffectiveDateTime = $OrderEffectiveDateTime;
    }

    /**
     * @return string
     */
    public function getOrderControlCodeReason(): string
    {
        return $this->OrderControlCodeReason;
    }

    /**
     * @param string $OrderControlCodeReason
     */
    public function setOrderControlCodeReason(string $OrderControlCodeReason): void
    {
        $this->OrderControlCodeReason = $OrderControlCodeReason;
    }

    /**
     * @return string
     */
    public function getEnteringOrganization(): string
    {
        return $this->EnteringOrganization;
    }

    /**
     * @param string $EnteringOrganization
     */
    public function setEnteringOrganization(string $EnteringOrganization): void
    {
        $this->EnteringOrganization = $EnteringOrganization;
    }

    /**
     * @return string
     */
    public function getEnteringDevice(): string
    {
        return $this->EnteringDevice;
    }

    /**
     * @param string $EnteringDevice
     */
    public function setEnteringDevice(string $EnteringDevice): void
    {
        $this->EnteringDevice = $EnteringDevice;
    }

    /**
     * @return string
     */
    public function getActionBy(): string
    {
        return $this->ActionBy;
    }

    /**
     * @param string $ActionBy
     */
    public function setActionBy(string $ActionBy): void
    {
        $this->ActionBy = $ActionBy;
    }

    /**
     * @return string
     */
    public function getAdvancedBeneficiaryNoticeCode(): string
    {
        return $this->AdvancedBeneficiaryNoticeCode;
    }

    /**
     * @param string $AdvancedBeneficiaryNoticeCode
     */
    public function setAdvancedBeneficiaryNoticeCode(string $AdvancedBeneficiaryNoticeCode): void
    {
        $this->AdvancedBeneficiaryNoticeCode = $AdvancedBeneficiaryNoticeCode;
    }

    /**
     * @return string
     */
    public function getOrderingFacilityName(): string
    {
        return $this->OrderingFacilityName;
    }

    /**
     * @param string $OrderingFacilityName
     */
    public function setOrderingFacilityName(string $OrderingFacilityName): void
    {
        $this->OrderingFacilityName = $OrderingFacilityName;
    }

    /**
     * @return string
     */
    public function getOrderingFacilityAddress(): string
    {
        return $this->OrderingFacilityAddress;
    }

    /**
     * @param string $OrderingFacilityAddress
     */
    public function setOrderingFacilityAddress(string $OrderingFacilityAddress): void
    {
        $this->OrderingFacilityAddress = $OrderingFacilityAddress;
    }

    /**
     * @return string
     */
    public function getOrderingFacilityPhoneNumber(): string
    {
        return $this->OrderingFacilityPhoneNumber;
    }

    /**
     * @param string $OrderingFacilityPhoneNumber
     */
    public function setOrderingFacilityPhoneNumber(string $OrderingFacilityPhoneNumber): void
    {
        $this->OrderingFacilityPhoneNumber = $OrderingFacilityPhoneNumber;
    }

    /**
     * @return string
     */
    public function getOrderingProviderAddress(): string
    {
        return $this->OrderingProviderAddress;
    }

    /**
     * @param string $OrderingProviderAddress
     */
    public function setOrderingProviderAddress(string $OrderingProviderAddress): void
    {
        $this->OrderingProviderAddress = $OrderingProviderAddress;
    }

    /**
     * @return string
     */
    public function getOrderStatusModifier(): string
    {
        return $this->OrderStatusModifier;
    }

    /**
     * @param string $OrderStatusModifier
     */
    public function setOrderStatusModifier(string $OrderStatusModifier): void
    {
        $this->OrderStatusModifier = $OrderStatusModifier;
    }

    /**
     * @return string
     */
    public function getAdvancedBeneficiaryNoticeOverrideReason(): string
    {
        return $this->AdvancedBeneficiaryNoticeOverrideReason;
    }

    /**
     * @param string $AdvancedBeneficiaryNoticeOverrideReason
     */
    public function setAdvancedBeneficiaryNoticeOverrideReason(string $AdvancedBeneficiaryNoticeOverrideReason): void
    {
        $this->AdvancedBeneficiaryNoticeOverrideReason = $AdvancedBeneficiaryNoticeOverrideReason;
    }

    /**
     * @return string
     */
    public function getFillerExpectedAvailabilityDateTime(): string
    {
        return $this->FillerExpectedAvailabilityDateTime;
    }

    /**
     * @param string $FillerExpectedAvailabilityDateTime
     */
    public function setFillerExpectedAvailabilityDateTime(string $FillerExpectedAvailabilityDateTime): void
    {
        $this->FillerExpectedAvailabilityDateTime = $FillerExpectedAvailabilityDateTime;
    }

    /**
     * @return string
     */
    public function getConfidentialityCode(): string
    {
        return $this->ConfidentialityCode;
    }

    /**
     * @param string $ConfidentialityCode
     */
    public function setConfidentialityCode(string $ConfidentialityCode): void
    {
        $this->ConfidentialityCode = $ConfidentialityCode;
    }

    /**
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->OrderType;
    }

    /**
     * @param string $OrderType
     */
    public function setOrderType(string $OrderType): void
    {
        $this->OrderType = $OrderType;
    }

    /**
     * @return string
     */
    public function getEntererAuthorizationMode(): string
    {
        return $this->EntererAuthorizationMode;
    }

    /**
     * @param string $EntererAuthorizationMode
     */
    public function setEntererAuthorizationMode(string $EntererAuthorizationMode): void
    {
        $this->EntererAuthorizationMode = $EntererAuthorizationMode;
    }

    /**
     * @return string
     */
    public function getParentUniversalServiceIdentifier(): string
    {
        return $this->ParentUniversalServiceIdentifier;
    }

    /**
     * @param string $ParentUniversalServiceIdentifier
     */
    public function setParentUniversalServiceIdentifier(string $ParentUniversalServiceIdentifier): void
    {
        $this->ParentUniversalServiceIdentifier = $ParentUniversalServiceIdentifier;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}