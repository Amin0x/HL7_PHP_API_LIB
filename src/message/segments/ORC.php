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