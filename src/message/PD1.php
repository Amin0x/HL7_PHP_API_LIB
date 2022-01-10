<?php
namespace nabidh;

class PD1 implements Segment {

    private $LivingDependency = '';
    private $LivingArrangement = '';
    private $PatientPrimaryFacility = '';
    private $PatientPrimaryCareProviderNameIDNo = '';
    private $StudentIndicator = '';
    private $Handicap = '';
    private $LivingWillCode = '';
    private $OrganDonorCode = '';
    private $SeparateBill = '';
    private $DuplicatePatient = '';
    private $PublicityCode = '';
    private $ProtectionIndicator = '';
    private $ProtectionIndicatorEffectiveDate = '';
    private $PlaceofWorship = '';
    private $AdvanceDirectiveCodeImmunizationRegistryStatus = '';
    private $ImmunizationRegistryStatusEffectiveDate = '';
    private $PublicityCodeEffectiveDate = '';
    private $MilitaryBranch = '';
    private $MilitaryRankGrade = '';
    private $MilitaryStatus = '';

    /**
     * MessagePD1 constructor.
     * @param string $LivingDependency
     * @param string $LivingArrangement
     * @param string $PatientPrimaryFacility
     * @param string $PatientPrimaryCareProviderNameIDNo
     * @param string $StudentIndicator
     */
    public function __construct(string $LivingDependency, string $LivingArrangement, string $PatientPrimaryFacility, string $PatientPrimaryCareProviderNameIDNo, string $StudentIndicator)
    {
        $this->LivingDependency = $LivingDependency;
        $this->LivingArrangement = $LivingArrangement;
        $this->PatientPrimaryFacility = $PatientPrimaryFacility;
        $this->PatientPrimaryCareProviderNameIDNo = $PatientPrimaryCareProviderNameIDNo;
        $this->StudentIndicator = $StudentIndicator;
    }

    /**
     * @return string
     */
    public function getLivingDependency(): string
    {
        return $this->LivingDependency;
    }

    /**
     * @param string $LivingDependency
     */
    public function setLivingDependency(string $LivingDependency): void
    {
        $this->LivingDependency = $LivingDependency;
    }

    /**
     * @return string
     */
    public function getLivingArrangement(): string
    {
        return $this->LivingArrangement;
    }

    /**
     * @param string $LivingArrangement
     */
    public function setLivingArrangement(string $LivingArrangement): void
    {
        $this->LivingArrangement = $LivingArrangement;
    }

    /**
     * @return string
     */
    public function getPatientPrimaryFacility(): string
    {
        return $this->PatientPrimaryFacility;
    }

    /**
     * @param string $PatientPrimaryFacility
     */
    public function setPatientPrimaryFacility(string $PatientPrimaryFacility): void
    {
        $this->PatientPrimaryFacility = $PatientPrimaryFacility;
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
    public function getStudentIndicator(): string
    {
        return $this->StudentIndicator;
    }

    /**
     * @param string $StudentIndicator
     */
    public function setStudentIndicator(string $StudentIndicator): void
    {
        $this->StudentIndicator = $StudentIndicator;
    }

    /**
     * @return string
     */
    public function getHandicap(): string
    {
        return $this->Handicap;
    }

    /**
     * @param string $Handicap
     */
    public function setHandicap(string $Handicap): void
    {
        $this->Handicap = $Handicap;
    }

    /**
     * @return string
     */
    public function getLivingWillCode(): string
    {
        return $this->LivingWillCode;
    }

    /**
     * @param string $LivingWillCode
     */
    public function setLivingWillCode(string $LivingWillCode): void
    {
        $this->LivingWillCode = $LivingWillCode;
    }

    /**
     * @return string
     */
    public function getOrganDonorCode(): string
    {
        return $this->OrganDonorCode;
    }

    /**
     * @param string $OrganDonorCode
     */
    public function setOrganDonorCode(string $OrganDonorCode): void
    {
        $this->OrganDonorCode = $OrganDonorCode;
    }

    /**
     * @return string
     */
    public function getSeparateBill(): string
    {
        return $this->SeparateBill;
    }

    /**
     * @param string $SeparateBill
     */
    public function setSeparateBill(string $SeparateBill): void
    {
        $this->SeparateBill = $SeparateBill;
    }

    /**
     * @return string
     */
    public function getDuplicatePatient(): string
    {
        return $this->DuplicatePatient;
    }

    /**
     * @param string $DuplicatePatient
     */
    public function setDuplicatePatient(string $DuplicatePatient): void
    {
        $this->DuplicatePatient = $DuplicatePatient;
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
    public function getPlaceofWorship(): string
    {
        return $this->PlaceofWorship;
    }

    /**
     * @param string $PlaceofWorship
     */
    public function setPlaceofWorship(string $PlaceofWorship): void
    {
        $this->PlaceofWorship = $PlaceofWorship;
    }

    /**
     * @return string
     */
    public function getAdvanceDirectiveCodeImmunizationRegistryStatus(): string
    {
        return $this->AdvanceDirectiveCodeImmunizationRegistryStatus;
    }

    /**
     * @param string $AdvanceDirectiveCodeImmunizationRegistryStatus
     */
    public function setAdvanceDirectiveCodeImmunizationRegistryStatus(string $AdvanceDirectiveCodeImmunizationRegistryStatus): void
    {
        $this->AdvanceDirectiveCodeImmunizationRegistryStatus = $AdvanceDirectiveCodeImmunizationRegistryStatus;
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
    public function getMilitaryBranch(): string
    {
        return $this->MilitaryBranch;
    }

    /**
     * @param string $MilitaryBranch
     */
    public function setMilitaryBranch(string $MilitaryBranch): void
    {
        $this->MilitaryBranch = $MilitaryBranch;
    }

    /**
     * @return string
     */
    public function getMilitaryRankGrade(): string
    {
        return $this->MilitaryRankGrade;
    }

    /**
     * @param string $MilitaryRankGrade
     */
    public function setMilitaryRankGrade(string $MilitaryRankGrade): void
    {
        $this->MilitaryRankGrade = $MilitaryRankGrade;
    }

    /**
     * @return string
     */
    public function getMilitaryStatus(): string
    {
        return $this->MilitaryStatus;
    }

    /**
     * @param string $MilitaryStatus
     */
    public function setMilitaryStatus(string $MilitaryStatus): void
    {
        $this->MilitaryStatus = $MilitaryStatus;
    }

    public function toString()
    {
        $fields = 'PD1|'
        .$this->LivingDependency . '|'
        .$this->LivingArrangement . '|'
        .$this->PatientPrimaryFacility . '|'
        .$this->PatientPrimaryCareProviderNameIDNo . '|'
        .$this->StudentIndicator . '|'
        .$this->Handicap . '|'
        .$this->LivingWillCode . '|'
        .$this->OrganDonorCode . '|'
        .$this->SeparateBill . '|'
        .$this->DuplicatePatient . '|'
        .$this->PublicityCode . '|'
        .$this->ProtectionIndicator . '|'
        .$this->ProtectionIndicatorEffectiveDate . '|'
        .$this->PlaceofWorship . '|'
        .$this->AdvanceDirectiveCodeImmunizationRegistryStatus . '|'
        .$this->ImmunizationRegistryStatusEffectiveDate . '|'
        .$this->PublicityCodeEffectiveDate . '|'
        .$this->MilitaryBranch . '|'
        .$this->MilitaryRankGrade . '|'
        .$this->MilitaryStatus . '\r';

        return $fields;
    }


}