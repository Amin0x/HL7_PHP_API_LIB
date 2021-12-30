<?php

class GT1 {

    

private $SetID_GT1 = '';
private $GuarantorNumber = '';
private $GuarantorName = '';
private $GuarantorSpouseName = '';
private $GuarantorAddress = '';
private $GuarantorPhNumHome = '';
private $GuarantorPhNumBusiness = '';
private $GuarantorDateTimeOfBirth = '';
private $GuarantorAdministrativeSex = '';
private $GuarantorType = '';
private $GuarantorRelationshipGuarantorSSN = '';
private $GuarantorDateBegin = '';
private $GuarantorDateEnd = '';
private $GuarantorPriority = '';
private $GuarantorEmployerName = '';
private $GuarantorEmployerAddress = '';
private $GuarantorEmployerPhoneNumber = '';
private $GuarantorEmployeeIDNumber = '';
private $GuarantorEmploymentStatus = '';
private $GuarantorOrganizationName = '';
private $GuarantorBillingHoldFlag = '';
private $GuarantorCreditRatingCode = '';
private $GuarantorDeathDateAndTime = '';
private $GuarantorDeathFlag = '';
private $GuarantorChargeAdjustmentCode = '';
private $GuarantorHouseholdAnnualIncome = '';
private $GuarantorHouseholdSize = '';
private $GuarantorEmployerIDNumber = '';
private $GuarantorMaritalStatusCode = '';
private $GuarantorHireEffectiveDate = '';
private $EmploymentStopDate = '';
private $LivingDependency = '';
private $AmbulatoryStatus = '';
private $Citizenship = '';
private $PrimaryLanguage = '';
private $LivingArrangement = '';
private $PublicityCode = '';
private $ProtectionIndicator = '';
private $StudentIndicator = '';
private $Religion = '';
private $MotherMaidenName = '';
private $Nationality = '';
private $EthnicGroup = '';
private $ContactPersonName = '';
private $ContactPersonTelephoneNumber = '';
private $ContactReason = '';
private $ContactRelationship = '';
private $JobTitle = '';
private $JobCodeClass = '';
private $GuarantorEmployerOrganizationName = '';
private $Handicap = '';
private $JobStatus = '';
private $GuarantorFinancialClass = '';
private $GuarantorRace = '';
private $GuarantorBirthPlace = '';
private $VIPIndicator = '';

    /**
     * GT1 constructor.
     * @param string $SetID_GT1
     */
    public function __construct(string $SetID_GT1)
    {
        $this->SetID_GT1 = $SetID_GT1;
    }

    /**
     * @return string
     */
    public function getSetIDGT1(): string
    {
        return $this->SetID_GT1;
    }

    /**
     * @param string $SetID_GT1
     */
    public function setSetIDGT1(string $SetID_GT1): void
    {
        $this->SetID_GT1 = $SetID_GT1;
    }

    /**
     * @return string
     */
    public function getGuarantorNumber(): string
    {
        return $this->GuarantorNumber;
    }

    /**
     * @param string $GuarantorNumber
     */
    public function setGuarantorNumber(string $GuarantorNumber): void
    {
        $this->GuarantorNumber = $GuarantorNumber;
    }

    /**
     * @return string
     */
    public function getGuarantorName(): string
    {
        return $this->GuarantorName;
    }

    /**
     * @param string $GuarantorName
     */
    public function setGuarantorName(string $GuarantorName): void
    {
        $this->GuarantorName = $GuarantorName;
    }

    /**
     * @return string
     */
    public function getGuarantorSpouseName(): string
    {
        return $this->GuarantorSpouseName;
    }

    /**
     * @param string $GuarantorSpouseName
     */
    public function setGuarantorSpouseName(string $GuarantorSpouseName): void
    {
        $this->GuarantorSpouseName = $GuarantorSpouseName;
    }

    /**
     * @return string
     */
    public function getGuarantorAddress(): string
    {
        return $this->GuarantorAddress;
    }

    /**
     * @param string $GuarantorAddress
     */
    public function setGuarantorAddress(string $GuarantorAddress): void
    {
        $this->GuarantorAddress = $GuarantorAddress;
    }

    /**
     * @return string
     */
    public function getGuarantorPhNumHome(): string
    {
        return $this->GuarantorPhNumHome;
    }

    /**
     * @param string $GuarantorPhNumHome
     */
    public function setGuarantorPhNumHome(string $GuarantorPhNumHome): void
    {
        $this->GuarantorPhNumHome = $GuarantorPhNumHome;
    }

    /**
     * @return string
     */
    public function getGuarantorPhNumBusiness(): string
    {
        return $this->GuarantorPhNumBusiness;
    }

    /**
     * @param string $GuarantorPhNumBusiness
     */
    public function setGuarantorPhNumBusiness(string $GuarantorPhNumBusiness): void
    {
        $this->GuarantorPhNumBusiness = $GuarantorPhNumBusiness;
    }

    /**
     * @return string
     */
    public function getGuarantorDateTimeOfBirth(): string
    {
        return $this->GuarantorDateTimeOfBirth;
    }

    /**
     * @param string $GuarantorDateTimeOfBirth
     */
    public function setGuarantorDateTimeOfBirth(string $GuarantorDateTimeOfBirth): void
    {
        $this->GuarantorDateTimeOfBirth = $GuarantorDateTimeOfBirth;
    }

    /**
     * @return string
     */
    public function getGuarantorAdministrativeSex(): string
    {
        return $this->GuarantorAdministrativeSex;
    }

    /**
     * @param string $GuarantorAdministrativeSex
     */
    public function setGuarantorAdministrativeSex(string $GuarantorAdministrativeSex): void
    {
        $this->GuarantorAdministrativeSex = $GuarantorAdministrativeSex;
    }

    /**
     * @return string
     */
    public function getGuarantorType(): string
    {
        return $this->GuarantorType;
    }

    /**
     * @param string $GuarantorType
     */
    public function setGuarantorType(string $GuarantorType): void
    {
        $this->GuarantorType = $GuarantorType;
    }

    /**
     * @return string
     */
    public function getGuarantorRelationshipGuarantorSSN(): string
    {
        return $this->GuarantorRelationshipGuarantorSSN;
    }

    /**
     * @param string $GuarantorRelationshipGuarantorSSN
     */
    public function setGuarantorRelationshipGuarantorSSN(string $GuarantorRelationshipGuarantorSSN): void
    {
        $this->GuarantorRelationshipGuarantorSSN = $GuarantorRelationshipGuarantorSSN;
    }

    /**
     * @return string
     */
    public function getGuarantorDateBegin(): string
    {
        return $this->GuarantorDateBegin;
    }

    /**
     * @param string $GuarantorDateBegin
     */
    public function setGuarantorDateBegin(string $GuarantorDateBegin): void
    {
        $this->GuarantorDateBegin = $GuarantorDateBegin;
    }

    /**
     * @return string
     */
    public function getGuarantorDateEnd(): string
    {
        return $this->GuarantorDateEnd;
    }

    /**
     * @param string $GuarantorDateEnd
     */
    public function setGuarantorDateEnd(string $GuarantorDateEnd): void
    {
        $this->GuarantorDateEnd = $GuarantorDateEnd;
    }

    /**
     * @return string
     */
    public function getGuarantorPriority(): string
    {
        return $this->GuarantorPriority;
    }

    /**
     * @param string $GuarantorPriority
     */
    public function setGuarantorPriority(string $GuarantorPriority): void
    {
        $this->GuarantorPriority = $GuarantorPriority;
    }

    /**
     * @return string
     */
    public function getGuarantorEmployerName(): string
    {
        return $this->GuarantorEmployerName;
    }

    /**
     * @param string $GuarantorEmployerName
     */
    public function setGuarantorEmployerName(string $GuarantorEmployerName): void
    {
        $this->GuarantorEmployerName = $GuarantorEmployerName;
    }

    /**
     * @return string
     */
    public function getGuarantorEmployerAddress(): string
    {
        return $this->GuarantorEmployerAddress;
    }

    /**
     * @param string $GuarantorEmployerAddress
     */
    public function setGuarantorEmployerAddress(string $GuarantorEmployerAddress): void
    {
        $this->GuarantorEmployerAddress = $GuarantorEmployerAddress;
    }

    /**
     * @return string
     */
    public function getGuarantorEmployerPhoneNumber(): string
    {
        return $this->GuarantorEmployerPhoneNumber;
    }

    /**
     * @param string $GuarantorEmployerPhoneNumber
     */
    public function setGuarantorEmployerPhoneNumber(string $GuarantorEmployerPhoneNumber): void
    {
        $this->GuarantorEmployerPhoneNumber = $GuarantorEmployerPhoneNumber;
    }

    /**
     * @return string
     */
    public function getGuarantorEmployeeIDNumber(): string
    {
        return $this->GuarantorEmployeeIDNumber;
    }

    /**
     * @param string $GuarantorEmployeeIDNumber
     */
    public function setGuarantorEmployeeIDNumber(string $GuarantorEmployeeIDNumber): void
    {
        $this->GuarantorEmployeeIDNumber = $GuarantorEmployeeIDNumber;
    }

    /**
     * @return string
     */
    public function getGuarantorEmploymentStatus(): string
    {
        return $this->GuarantorEmploymentStatus;
    }

    /**
     * @param string $GuarantorEmploymentStatus
     */
    public function setGuarantorEmploymentStatus(string $GuarantorEmploymentStatus): void
    {
        $this->GuarantorEmploymentStatus = $GuarantorEmploymentStatus;
    }

    /**
     * @return string
     */
    public function getGuarantorOrganizationName(): string
    {
        return $this->GuarantorOrganizationName;
    }

    /**
     * @param string $GuarantorOrganizationName
     */
    public function setGuarantorOrganizationName(string $GuarantorOrganizationName): void
    {
        $this->GuarantorOrganizationName = $GuarantorOrganizationName;
    }

    /**
     * @return string
     */
    public function getGuarantorBillingHoldFlag(): string
    {
        return $this->GuarantorBillingHoldFlag;
    }

    /**
     * @param string $GuarantorBillingHoldFlag
     */
    public function setGuarantorBillingHoldFlag(string $GuarantorBillingHoldFlag): void
    {
        $this->GuarantorBillingHoldFlag = $GuarantorBillingHoldFlag;
    }

    /**
     * @return string
     */
    public function getGuarantorCreditRatingCode(): string
    {
        return $this->GuarantorCreditRatingCode;
    }

    /**
     * @param string $GuarantorCreditRatingCode
     */
    public function setGuarantorCreditRatingCode(string $GuarantorCreditRatingCode): void
    {
        $this->GuarantorCreditRatingCode = $GuarantorCreditRatingCode;
    }

    /**
     * @return string
     */
    public function getGuarantorDeathDateAndTime(): string
    {
        return $this->GuarantorDeathDateAndTime;
    }

    /**
     * @param string $GuarantorDeathDateAndTime
     */
    public function setGuarantorDeathDateAndTime(string $GuarantorDeathDateAndTime): void
    {
        $this->GuarantorDeathDateAndTime = $GuarantorDeathDateAndTime;
    }

    /**
     * @return string
     */
    public function getGuarantorDeathFlag(): string
    {
        return $this->GuarantorDeathFlag;
    }

    /**
     * @param string $GuarantorDeathFlag
     */
    public function setGuarantorDeathFlag(string $GuarantorDeathFlag): void
    {
        $this->GuarantorDeathFlag = $GuarantorDeathFlag;
    }

    /**
     * @return string
     */
    public function getGuarantorChargeAdjustmentCode(): string
    {
        return $this->GuarantorChargeAdjustmentCode;
    }

    /**
     * @param string $GuarantorChargeAdjustmentCode
     */
    public function setGuarantorChargeAdjustmentCode(string $GuarantorChargeAdjustmentCode): void
    {
        $this->GuarantorChargeAdjustmentCode = $GuarantorChargeAdjustmentCode;
    }

    /**
     * @return string
     */
    public function getGuarantorHouseholdAnnualIncome(): string
    {
        return $this->GuarantorHouseholdAnnualIncome;
    }

    /**
     * @param string $GuarantorHouseholdAnnualIncome
     */
    public function setGuarantorHouseholdAnnualIncome(string $GuarantorHouseholdAnnualIncome): void
    {
        $this->GuarantorHouseholdAnnualIncome = $GuarantorHouseholdAnnualIncome;
    }

    /**
     * @return string
     */
    public function getGuarantorHouseholdSize(): string
    {
        return $this->GuarantorHouseholdSize;
    }

    /**
     * @param string $GuarantorHouseholdSize
     */
    public function setGuarantorHouseholdSize(string $GuarantorHouseholdSize): void
    {
        $this->GuarantorHouseholdSize = $GuarantorHouseholdSize;
    }

    /**
     * @return string
     */
    public function getGuarantorEmployerIDNumber(): string
    {
        return $this->GuarantorEmployerIDNumber;
    }

    /**
     * @param string $GuarantorEmployerIDNumber
     */
    public function setGuarantorEmployerIDNumber(string $GuarantorEmployerIDNumber): void
    {
        $this->GuarantorEmployerIDNumber = $GuarantorEmployerIDNumber;
    }

    /**
     * @return string
     */
    public function getGuarantorMaritalStatusCode(): string
    {
        return $this->GuarantorMaritalStatusCode;
    }

    /**
     * @param string $GuarantorMaritalStatusCode
     */
    public function setGuarantorMaritalStatusCode(string $GuarantorMaritalStatusCode): void
    {
        $this->GuarantorMaritalStatusCode = $GuarantorMaritalStatusCode;
    }

    /**
     * @return string
     */
    public function getGuarantorHireEffectiveDate(): string
    {
        return $this->GuarantorHireEffectiveDate;
    }

    /**
     * @param string $GuarantorHireEffectiveDate
     */
    public function setGuarantorHireEffectiveDate(string $GuarantorHireEffectiveDate): void
    {
        $this->GuarantorHireEffectiveDate = $GuarantorHireEffectiveDate;
    }

    /**
     * @return string
     */
    public function getEmploymentStopDate(): string
    {
        return $this->EmploymentStopDate;
    }

    /**
     * @param string $EmploymentStopDate
     */
    public function setEmploymentStopDate(string $EmploymentStopDate): void
    {
        $this->EmploymentStopDate = $EmploymentStopDate;
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
    public function getAmbulatoryStatus(): string
    {
        return $this->AmbulatoryStatus;
    }

    /**
     * @param string $AmbulatoryStatus
     */
    public function setAmbulatoryStatus(string $AmbulatoryStatus): void
    {
        $this->AmbulatoryStatus = $AmbulatoryStatus;
    }

    /**
     * @return string
     */
    public function getCitizenship(): string
    {
        return $this->Citizenship;
    }

    /**
     * @param string $Citizenship
     */
    public function setCitizenship(string $Citizenship): void
    {
        $this->Citizenship = $Citizenship;
    }

    /**
     * @return string
     */
    public function getPrimaryLanguage(): string
    {
        return $this->PrimaryLanguage;
    }

    /**
     * @param string $PrimaryLanguage
     */
    public function setPrimaryLanguage(string $PrimaryLanguage): void
    {
        $this->PrimaryLanguage = $PrimaryLanguage;
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
    public function getReligion(): string
    {
        return $this->Religion;
    }

    /**
     * @param string $Religion
     */
    public function setReligion(string $Religion): void
    {
        $this->Religion = $Religion;
    }

    /**
     * @return string
     */
    public function getMotherMaidenName(): string
    {
        return $this->MotherMaidenName;
    }

    /**
     * @param string $MotherMaidenName
     */
    public function setMotherMaidenName(string $MotherMaidenName): void
    {
        $this->MotherMaidenName = $MotherMaidenName;
    }

    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->Nationality;
    }

    /**
     * @param string $Nationality
     */
    public function setNationality(string $Nationality): void
    {
        $this->Nationality = $Nationality;
    }

    /**
     * @return string
     */
    public function getEthnicGroup(): string
    {
        return $this->EthnicGroup;
    }

    /**
     * @param string $EthnicGroup
     */
    public function setEthnicGroup(string $EthnicGroup): void
    {
        $this->EthnicGroup = $EthnicGroup;
    }

    /**
     * @return string
     */
    public function getContactPersonName(): string
    {
        return $this->ContactPersonName;
    }

    /**
     * @param string $ContactPersonName
     */
    public function setContactPersonName(string $ContactPersonName): void
    {
        $this->ContactPersonName = $ContactPersonName;
    }

    /**
     * @return string
     */
    public function getContactPersonTelephoneNumber(): string
    {
        return $this->ContactPersonTelephoneNumber;
    }

    /**
     * @param string $ContactPersonTelephoneNumber
     */
    public function setContactPersonTelephoneNumber(string $ContactPersonTelephoneNumber): void
    {
        $this->ContactPersonTelephoneNumber = $ContactPersonTelephoneNumber;
    }

    /**
     * @return string
     */
    public function getContactReason(): string
    {
        return $this->ContactReason;
    }

    /**
     * @param string $ContactReason
     */
    public function setContactReason(string $ContactReason): void
    {
        $this->ContactReason = $ContactReason;
    }

    /**
     * @return string
     */
    public function getContactRelationship(): string
    {
        return $this->ContactRelationship;
    }

    /**
     * @param string $ContactRelationship
     */
    public function setContactRelationship(string $ContactRelationship): void
    {
        $this->ContactRelationship = $ContactRelationship;
    }

    /**
     * @return string
     */
    public function getJobTitle(): string
    {
        return $this->JobTitle;
    }

    /**
     * @param string $JobTitle
     */
    public function setJobTitle(string $JobTitle): void
    {
        $this->JobTitle = $JobTitle;
    }

    /**
     * @return string
     */
    public function getJobCodeClass(): string
    {
        return $this->JobCodeClass;
    }

    /**
     * @param string $JobCodeClass
     */
    public function setJobCodeClass(string $JobCodeClass): void
    {
        $this->JobCodeClass = $JobCodeClass;
    }

    /**
     * @return string
     */
    public function getGuarantorEmployerOrganizationName(): string
    {
        return $this->GuarantorEmployerOrganizationName;
    }

    /**
     * @param string $GuarantorEmployerOrganizationName
     */
    public function setGuarantorEmployerOrganizationName(string $GuarantorEmployerOrganizationName): void
    {
        $this->GuarantorEmployerOrganizationName = $GuarantorEmployerOrganizationName;
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
    public function getJobStatus(): string
    {
        return $this->JobStatus;
    }

    /**
     * @param string $JobStatus
     */
    public function setJobStatus(string $JobStatus): void
    {
        $this->JobStatus = $JobStatus;
    }

    /**
     * @return string
     */
    public function getGuarantorFinancialClass(): string
    {
        return $this->GuarantorFinancialClass;
    }

    /**
     * @param string $GuarantorFinancialClass
     */
    public function setGuarantorFinancialClass(string $GuarantorFinancialClass): void
    {
        $this->GuarantorFinancialClass = $GuarantorFinancialClass;
    }

    /**
     * @return string
     */
    public function getGuarantorRace(): string
    {
        return $this->GuarantorRace;
    }

    /**
     * @param string $GuarantorRace
     */
    public function setGuarantorRace(string $GuarantorRace): void
    {
        $this->GuarantorRace = $GuarantorRace;
    }

    /**
     * @return string
     */
    public function getGuarantorBirthPlace(): string
    {
        return $this->GuarantorBirthPlace;
    }

    /**
     * @param string $GuarantorBirthPlace
     */
    public function setGuarantorBirthPlace(string $GuarantorBirthPlace): void
    {
        $this->GuarantorBirthPlace = $GuarantorBirthPlace;
    }

    /**
     * @return string
     */
    public function getVIPIndicator(): string
    {
        return $this->VIPIndicator;
    }

    /**
     * @param string $VIPIndicator
     */
    public function setVIPIndicator(string $VIPIndicator): void
    {
        $this->VIPIndicator = $VIPIndicator;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}