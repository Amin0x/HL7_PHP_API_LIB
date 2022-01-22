<?php


namespace amin0x\nabidh;


class CX
{
    private $IdNumber = '';
    private $CheckDigit = '';
    private $CheckDigitScheme = '';
    private $AssigningAuthority = '';
    private $IdentifierTypeCode = '';
    private $AssigningFacility = '';
    private $EffectiveDate = '';
    private $ExpirationDate = '';
    private $AssigningJurisdiction = '';
    private $AssigningAgencyOrDepartment = '';

    /**
     * @return string
     */
    public function getIdNumber(): string
    {
        return $this->IdNumber;
    }

    /**
     * @param string $IdNumber
     */
    public function setIdNumber(string $IdNumber): void
    {
        $this->IdNumber = $IdNumber;
    }

    /**
     * @return string
     */
    public function getCheckDigit(): string
    {
        return $this->CheckDigit;
    }

    /**
     * @param string $CheckDigit
     */
    public function setCheckDigit(string $CheckDigit): void
    {
        $this->CheckDigit = $CheckDigit;
    }

    /**
     * @return string
     */
    public function getCheckDigitScheme(): string
    {
        return $this->CheckDigitScheme;
    }

    /**
     * @param string $CheckDigitScheme
     */
    public function setCheckDigitScheme(string $CheckDigitScheme): void
    {
        $this->CheckDigitScheme = $CheckDigitScheme;
    }

    /**
     * @return string
     */
    public function getAssigningAuthority(): string
    {
        return $this->AssigningAuthority;
    }

    /**
     * @param string $AssigningAuthority
     */
    public function setAssigningAuthority(string $AssigningAuthority): void
    {
        $this->AssigningAuthority = $AssigningAuthority;
    }

    /**
     * @return string
     */
    public function getIdentifierTypeCode(): string
    {
        return $this->IdentifierTypeCode;
    }

    /**
     * @param string $IdentifierTypeCode
     */
    public function setIdentifierTypeCode(string $IdentifierTypeCode): void
    {
        $this->IdentifierTypeCode = $IdentifierTypeCode;
    }

    /**
     * @return string
     */
    public function getAssigningFacility(): string
    {
        return $this->AssigningFacility;
    }

    /**
     * @param string $AssigningFacility
     */
    public function setAssigningFacility(string $AssigningFacility): void
    {
        $this->AssigningFacility = $AssigningFacility;
    }

    /**
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->EffectiveDate;
    }

    /**
     * @param string $EffectiveDate
     */
    public function setEffectiveDate(string $EffectiveDate): void
    {
        $this->EffectiveDate = $EffectiveDate;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->ExpirationDate;
    }

    /**
     * @param string $ExpirationDate
     */
    public function setExpirationDate(string $ExpirationDate): void
    {
        $this->ExpirationDate = $ExpirationDate;
    }

    /**
     * @return string
     */
    public function getAssigningJurisdiction(): string
    {
        return $this->AssigningJurisdiction;
    }

    /**
     * @param string $AssigningJurisdiction
     */
    public function setAssigningJurisdiction(string $AssigningJurisdiction): void
    {
        $this->AssigningJurisdiction = $AssigningJurisdiction;
    }

    /**
     * @return string
     */
    public function getAssigningAgencyOrDepartment(): string
    {
        return $this->AssigningAgencyOrDepartment;
    }

    /**
     * @param string $AssigningAgencyOrDepartment
     */
    public function setAssigningAgencyOrDepartment(string $AssigningAgencyOrDepartment): void
    {
        $this->AssigningAgencyOrDepartment = $AssigningAgencyOrDepartment;
    }


}