<?php
namespace amin0x\nabidh;

use BadMethodCallException;

class ORC implements Segment {

    private $OrderControl = '';
    private $PlacerOrderNumber = '';
    private $FillerOrderNumber = '';
    private $OrderStatus = '';
    private $QualityTiming = '';
    private $DateTimeTransaction = '';
    private $EnteredBy = '';
    private $VerifiedBy = '';
    private $OrderingProvider = '';
    private $EntererLocation = '';
    private $CallBackPhoneNumber = '';
    private $OrderingFacilityName = '';
    private $OrderingFacilityAddress = '';
    private $OrderingFacilityPhoneNumber = '';
    private $ConfidentialityCode = '';
    private $OrderType = '';


    /**
     * ORC constructor.
     */
    public function __construct()
    {

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
        if (!empty($OrderControl)) {
            $this->OrderControl = getOrderControlTable($OrderControl)->getIdentifier() ;
            return;
        }

        $this->OrderControl = $OrderControl;
    }

    /**
     * @return string
     */
    public function getPlacerOrderNumber(): EI|string
    {
        return $this->PlacerOrderNumber;
    }

    /**
     * @param string $PlacerOrderNumber
     */
    public function setPlacerOrderNumber(EI $PlacerOrderNumber): void
    {
        $this->PlacerOrderNumber = $PlacerOrderNumber;
    }

    /**
     * @return string
     */
    public function getFillerOrderNumber(): EI|string
    {
        return $this->FillerOrderNumber;
    }

    /**
     * @param string $FillerOrderNumber
     */
    public function setFillerOrderNumber(EI $FillerOrderNumber): void
    {
        $this->FillerOrderNumber = $FillerOrderNumber;
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
    public function getQualityTiming(): TQ|string
    {
        return $this->QualityTiming;
    }

    /**
     * @param string $QualityTiming
     */
    public function setQualityTiming(TQ $QualityTiming): void
    {
        $this->QualityTiming = $QualityTiming;
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
    public function getEnteredBy(): XCN|string
    {
        return $this->EnteredBy;
    }

    /**
     * @param string $EnteredBy
     */
    public function setEnteredBy(XCN $EnteredBy): void
    {
        $this->EnteredBy = $EnteredBy;
    }

    /**
     * @return string
     */
    public function getVerifiedBy(): XCN|string
    {
        return $this->VerifiedBy;
    }

    /**
     * @param string $VerifiedBy
     */
    public function setVerifiedBy(XCN $VerifiedBy): void
    {
        $this->VerifiedBy = $VerifiedBy;
    }

    /**
     * @return string
     */
    public function getOrderingProvider(): XCN|string
    {
        return $this->OrderingProvider;
    }

    /**
     * @param string $OrderingProvider
     */
    public function setOrderingProvider(XCN $OrderingProvider): void
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
    public function getCallBackPhoneNumber(): XTN|string
    {
        return $this->CallBackPhoneNumber;
    }

    /**
     * @param string $CallBackPhoneNumber
     */
    public function setCallBackPhoneNumber(XTN $CallBackPhoneNumber): void
    {
        $this->CallBackPhoneNumber = $CallBackPhoneNumber;
    }

    /**
     * @return string
     */
    public function getOrderingFacilityName(): XON|string
    {
        return $this->OrderingFacilityName;
    }

    /**
     * @param string $OrderingFacilityName
     */
    public function setOrderingFacilityName(XON $OrderingFacilityName): void
    {
        $this->OrderingFacilityName = $OrderingFacilityName;
    }

    /**
     * @return string
     */
    public function getOrderingFacilityAddress(): XAD|string
    {
        return $this->OrderingFacilityAddress;
    }

    /**
     * @param string $OrderingFacilityAddress
     */
    public function setOrderingFacilityAddress(XAD $OrderingFacilityAddress): void
    {
        $this->OrderingFacilityAddress = $OrderingFacilityAddress;
    }

    /**
     * @return string
     */
    public function getOrderingFacilityPhoneNumber(): XTN|string
    {
        return $this->OrderingFacilityPhoneNumber;
    }

    /**
     * @param string $OrderingFacilityPhoneNumber
     */
    public function setOrderingFacilityPhoneNumber(XTN $OrderingFacilityPhoneNumber): void
    {
        $this->OrderingFacilityPhoneNumber = $OrderingFacilityPhoneNumber;
    }

    /**
     * @return string
     */
    public function getConfidentialityCode(): CE|string
    {
        return $this->ConfidentialityCode;
    }

    /**
     * @param string $ConfidentialityCode
     */
    public function setConfidentialityCode(CE $ConfidentialityCode): void
    {
        $this->ConfidentialityCode = $ConfidentialityCode;
    }

    /**
     * @return string
     */
    public function getOrderType(): CE|string
    {
        return $this->OrderType;
    }

    /**
     * @param string $OrderType
     */
    public function setOrderType(CE $OrderType): void
    {
        $this->OrderType = $OrderType;
    }

    public function __toString()
    {
        $fields = [];
        $fields[] = 'ORC';
        $fields[] = $this->OrderControl;
        $fields[] = $this->PlacerOrderNumber;
        $fields[] = $this->FillerOrderNumber;
        $fields[] = $this->OrderStatus;
        $fields[] = $this->QualityTiming;
        $fields[] = $this->DateTimeTransaction;
        $fields[] = $this->EnteredBy;
        $fields[] = $this->VerifiedBy;
        $fields[] = $this->OrderingProvider;
        $fields[] = $this->EntererLocation;
        $fields[] = $this->CallBackPhoneNumber;
        $fields[] = $this->OrderingFacilityName;
        $fields[] = $this->OrderingFacilityAddress;
        $fields[] = $this->OrderingFacilityPhoneNumber;
        $fields[] = $this->ConfidentialityCode;
        $fields[] = $this->OrderType;

        return implode('|', $fields) . '\r';
    }


}