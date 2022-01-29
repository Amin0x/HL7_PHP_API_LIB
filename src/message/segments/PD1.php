<?php
namespace amin0x\nabidh;

class PD1 implements Segment {

    private $PatientPrimaryCareProviderNameIDNo = '';
    private $PublicityCode = '';
    private $ProtectionIndicator = '';
    private $ProtectionIndicatorEffectiveDate = '';
    private $ImmunizationRegistryStatus = '';
    private $ImmunizationRegistryStatusEffectiveDate = '';
    private $PublicityCodeEffectiveDate = '';

    /**
     * MessagePD1 constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getPatientPrimaryCareProviderNameIDNo(): string
    {
        return $this->PatientPrimaryCareProviderNameIDNo;
    }

    /**
     * @param string $PatientPrimaryCareProviderNameIDNo
     */
    public function setPatientPrimaryCareProviderNameIDNo(string $PatientPrimaryCareProviderNameIDNo): void
    {
        $this->PatientPrimaryCareProviderNameIDNo = $PatientPrimaryCareProviderNameIDNo;
    }

    /**
     * @return string
     */
    public function getPublicityCode(): string
    {
        return $this->PublicityCode;
    }

    /**
     * @param string $PublicityCode
     */
    public function setPublicityCode(string $PublicityCode): void
    {
        $this->PublicityCode = $PublicityCode;
    }

    /**
     * @return string
     */
    public function getProtectionIndicator(): string
    {
        return $this->ProtectionIndicator;
    }

    /**
     * @param string $ProtectionIndicator
     */
    public function setProtectionIndicator(string $ProtectionIndicator): void
    {
        $this->ProtectionIndicator = $ProtectionIndicator;
    }

    /**
     * @return string
     */
    public function getProtectionIndicatorEffectiveDate(): string
    {
        return $this->ProtectionIndicatorEffectiveDate;
    }

    /**
     * @param string $ProtectionIndicatorEffectiveDate
     */
    public function setProtectionIndicatorEffectiveDate(string $ProtectionIndicatorEffectiveDate): void
    {
        $this->ProtectionIndicatorEffectiveDate = $ProtectionIndicatorEffectiveDate;
    }

    /**
     * @return string
     */
    public function getImmunizationRegistryStatusEffectiveDate(): string
    {
        return $this->ImmunizationRegistryStatusEffectiveDate;
    }

    /**
     * @param string $ImmunizationRegistryStatusEffectiveDate
     */
    public function setImmunizationRegistryStatusEffectiveDate(string $ImmunizationRegistryStatusEffectiveDate): void
    {
        $this->ImmunizationRegistryStatusEffectiveDate = $ImmunizationRegistryStatusEffectiveDate;
    }

    /**
     * @return string
     */
    public function getPublicityCodeEffectiveDate(): string
    {
        return $this->PublicityCodeEffectiveDate;
    }

    /**
     * @param string $PublicityCodeEffectiveDate
     */
    public function setPublicityCodeEffectiveDate(string $PublicityCodeEffectiveDate): void
    {
        $this->PublicityCodeEffectiveDate = $PublicityCodeEffectiveDate;
    }

    /**
     * @return string
     */
    public function getImmunizationRegistryStatus(): string
    {
        return $this->ImmunizationRegistryStatus;
    }

    /**
     * @param string $ImmunizationRegistryStatus
     */
    public function setImmunizationRegistryStatus(string $ImmunizationRegistryStatus): void
    {
        $this->ImmunizationRegistryStatus = $ImmunizationRegistryStatus;
    }


    public function __toString()
    {
        $fields = [];
        $fields[] = 'PD1';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->PatientPrimaryCareProviderNameIDNo;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->PublicityCode;
        $fields[] = $this->ProtectionIndicator;
        $fields[] = $this->ProtectionIndicatorEffectiveDate;
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->ImmunizationRegistryStatus;
        $fields[] = $this->ImmunizationRegistryStatusEffectiveDate;
        $fields[] = $this->PublicityCodeEffectiveDate;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';

        return implode('|', $fields).'\r';
    }


}