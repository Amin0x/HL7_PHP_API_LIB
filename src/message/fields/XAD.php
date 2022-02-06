<?php


namespace amin0x\nabidh;


final class XAD extends Field
{

    /**
     * PatientAddress constructor.
     */
    public function __construct($City = '',$State = '',$Zip = '',$Country = '',$AddressTypeCode = '')
    {
        $this->setElementValue(1, $City);
        $this->setElementValue(2, $State);
        $this->setElementValue(3, $Country);
        $this->setElementValue(4, $Zip);
        $this->setElementValue(5, $AddressTypeCode);
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->getElementValue(1);
    }

    /**
     * @param mixed $City
     */
    public function setCity($City): void
    {
        $this->setElementValue(1, $City);
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->getElementValue(2);
    }

    /**
     * @param mixed $State
     */
    public function setState($State): void
    {
        $this->setElementValue(2, $State);
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->getElementValue(4);
    }

    /**
     * @param mixed $Zip
     */
    public function setZip($Zip): void
    {
        $this->setElementValue(4, $Zip);
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->getElementValue(3);

    }

    /**
     * @param mixed $Country
     */
    public function setCountry($Country): void
    {
        $this->setElementValue(3, $Country);
    }

    /**
     * @return mixed
     */
    public function getAddressTypeCode()
    {
        return $this->getElementValue(5);
    }

    /**
     * @param mixed $AddressTypeCode
     */
    public function setAddressTypeCode($AddressTypeCode): void
    {
        $this->setElementValue(5, $AddressTypeCode);
    }

    public function __toString()
    {
        return parent::__toString();
    }


}