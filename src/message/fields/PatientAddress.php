<?php


namespace amin0x\nabidh;


class PatientAddress
{
    private $City = '';
    private $State = '';
    private $Zip = '';
    private $Country = '';
    private $AddressTypeCode = '';

    /**
     * PatientAddress constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param mixed $City
     */
    public function setCity($City): void
    {
        $this->City = $City;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param mixed $State
     */
    public function setState($State): void
    {
        $this->State = $State;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->Zip;
    }

    /**
     * @param mixed $Zip
     */
    public function setZip($Zip): void
    {
        $this->Zip = $Zip;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param mixed $Country
     */
    public function setCountry($Country): void
    {
        $this->Country = $Country;
    }

    /**
     * @return mixed
     */
    public function getAddressTypeCode()
    {
        return $this->AddressTypeCode;
    }

    /**
     * @param mixed $AddressTypeCode
     */
    public function setAddressTypeCode($AddressTypeCode): void
    {
        $this->AddressTypeCode = $AddressTypeCode;
    }

    public function __toString()
    {
        return "^^$this->City^$this->State^$this->Zip^$this->Country^$this->AddressTypeCode";
    }


}