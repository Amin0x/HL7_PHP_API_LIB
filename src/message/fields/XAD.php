<?php


namespace amin0x\nabidh;


final class XAD extends Field
{

    /**
     * PatientAddress constructor.
     */
    public function __construct($City = '',$State = '',$Zip = '',$Country = '',$AddressTypeCode = '')
    {
        $this->setCity($City);
        $this->setState($State);
        $this->setCountry($Country);
        $this->setZip($Zip);
        $this->setAddressTypeCode($AddressTypeCode);
    }

    public function getStreetAddress()
    {
        return $this->getElementValue(1);
    }

    public function setStreetAddress($StreetAddress)
    {
        $this->setElementValue(1, $StreetAddress);
    }

    public function getOtherDesignation()
    {
        return $this->getElementValue(2);
    }

    public function setOtherDesignation($OtherDesignation)
    {
        $this->setElementValue(2, $OtherDesignation);
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->getElementValue(3);
    }

    /**
     * @param mixed $City
     */
    public function setCity($City): void
    {
        $this->setElementValue(3, $City);
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->getElementValue(4);
    }

    /**
     * @param mixed $State
     */
    public function setState($State): void
    {
        $this->setElementValue(4, $State);
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->getElementValue(5);
    }

    /**
     * @param mixed $Zip
     */
    public function setZip($Zip): void
    {
        $this->setElementValue(5, $Zip);
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->getElementValue(6);

    }

    /**
     * @param mixed $Country
     */
    public function setCountry($Country): void
    {
        $this->setElementValue(6, $Country);
    }

    /**
     * @return mixed
     */
    public function getAddressTypeCode()
    {
        return $this->getElementValue(7);
    }

    /**
     * @param mixed $AddressTypeCode
     */
    public function setAddressTypeCode($AddressTypeCode): void
    {
        $this->setElementValue(7, $AddressTypeCode);
    }

    public function __toString()
    {
        return parent::__toString();
    }


}