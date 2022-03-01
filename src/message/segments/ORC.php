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
     * @return EI|string
     */
    public function getPlacerOrderNumber(): EI|string
    {
        return $this->PlacerOrderNumber;
    }

    /**
     * @param EI $PlacerOrderNumber
     */
    public function setPlacerOrderNumber(EI $PlacerOrderNumber): void
    {
        $this->PlacerOrderNumber = $PlacerOrderNumber;
    }

    /**
     * @return EI|string
     */
    public function getFillerOrderNumber(): EI|string
    {
        return $this->FillerOrderNumber;
    }

    /**
     * @param EI $FillerOrderNumber
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
     * @return TQ|string
     */
    public function getQualityTiming(): TQ|string
    {
        return $this->QualityTiming;
    }

    /**
     * @param TQ $QualityTiming
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
     * @return XCN|string
     */
    public function getEnteredBy(): XCN|string
    {
        return $this->EnteredBy;
    }

    /**
     * @param XCN $EnteredBy
     */
    public function setEnteredBy(XCN $EnteredBy): void
    {
        $this->EnteredBy = $EnteredBy;
    }

    /**
     * @return XCN|string
     */
    public function getVerifiedBy(): XCN|string
    {
        return $this->VerifiedBy;
    }

    /**
     * @param XCN $VerifiedBy
     */
    public function setVerifiedBy(XCN $VerifiedBy): void
    {
        $this->VerifiedBy = $VerifiedBy;
    }

    /**
     * @return XCN|string
     */
    public function getOrderingProvider(): XCN|string
    {
        return $this->OrderingProvider;
    }

    /**
     * @param XCN $OrderingProvider
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
     * @return XTN|string
     */
    public function getCallBackPhoneNumber(): XTN|string
    {
        return $this->CallBackPhoneNumber;
    }

    /**
     * @param XTN $CallBackPhoneNumber
     */
    public function setCallBackPhoneNumber(XTN $CallBackPhoneNumber): void
    {
        $this->CallBackPhoneNumber = $CallBackPhoneNumber;
    }

    /**
     * @return XON|string
     */
    public function getOrderingFacilityName(): XON|string
    {
        return $this->OrderingFacilityName;
    }

    /**
     * @param XON $OrderingFacilityName
     */
    public function setOrderingFacilityName(XON $OrderingFacilityName): void
    {
        $this->OrderingFacilityName = $OrderingFacilityName;
    }

    /**
     * @return XAD|string
     */
    public function getOrderingFacilityAddress(): XAD|string
    {
        return $this->OrderingFacilityAddress;
    }

    /**
     * @param XAD $OrderingFacilityAddress
     */
    public function setOrderingFacilityAddress(XAD $OrderingFacilityAddress): void
    {
        $this->OrderingFacilityAddress = $OrderingFacilityAddress;
    }

    /**
     * @return XTN|string
     */
    public function getOrderingFacilityPhoneNumber(): XTN|string
    {
        return $this->OrderingFacilityPhoneNumber;
    }

    /**
     * @param XTN $OrderingFacilityPhoneNumber
     */
    public function setOrderingFacilityPhoneNumber(XTN $OrderingFacilityPhoneNumber): void
    {
        $this->OrderingFacilityPhoneNumber = $OrderingFacilityPhoneNumber;
    }

    /**
     * @return CE|string
     */
    public function getConfidentialityCode(): CE|string
    {
        return $this->ConfidentialityCode;
    }

    /**
     * @param CE $ConfidentialityCode
     */
    public function setConfidentialityCode(CE $ConfidentialityCode): void
    {
        $this->ConfidentialityCode = $ConfidentialityCode;
    }

    /**
     * @return CE|string
     */
    public function getOrderType(): CE|string
    {
        return $this->OrderType;
    }

    /**
     * @param CE $OrderType
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