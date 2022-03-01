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
     * @return XCN|string
     */
    public function getPatientPrimaryCareProviderNameIDNo(): XCN|string
    {
        return $this->PatientPrimaryCareProviderNameIDNo;
    }

    /**
     * @param XCN $PatientPrimaryCareProviderNameIDNo
     */
    public function setPatientPrimaryCareProviderNameIDNo(XCN $PatientPrimaryCareProviderNameIDNo): void
    {
        $this->PatientPrimaryCareProviderNameIDNo = $PatientPrimaryCareProviderNameIDNo;
    }

    /**
     * @return CE|string
     */
    public function getPublicityCode(): CE|string
    {
        return $this->PublicityCode;
    }

    /**
     * @param CE $PublicityCode
     */
    public function setPublicityCode(CE $PublicityCode): void
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
        if (in_array($ImmunizationRegistryStatus, ['I', 'A'])){
            $this->ImmunizationRegistryStatus = $ImmunizationRegistryStatus;
            return;
        }

        $this->ImmunizationRegistryStatus = '';
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