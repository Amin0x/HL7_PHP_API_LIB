<?php
namespace amin0x\nabidh;

class GT1 {

    private $SetID_GT1 = '';
    private $GuarantorNumber = '';
    private $GuarantorName = '';
    private $GuarantorAddress = '';
    private $GuarantorPhNumHome = '';
    private $GuarantorPhNumBusiness = '';
    private $GuarantorDateTimeOfBirth = '';
    private $GuarantorAdministrativeSex = '';
    private $GuarantorType = '';
    private $GuarantorRelationshipGuarantorSSN = '';
    private $GuarantorDateBegin = '';
    private $GuarantorDateEnd = '';
    private $GuarantorEmployerName = '';
    private $GuarantorEmployerAddress = '';
    private $GuarantorEmployerPhoneNumber = '';
    private $GuarantorEmploymentStatus = '';
    private $GuarantorEmployerIDNumber = '';
    private $GuarantorHireEffectiveDate = '';
    private $EmploymentStopDate = '';
    private $JobTitle = '';
    private $JobCodeClass = '';
    private $GuarantorEmployerOrganizationName = '';


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

    public function __toString()
    {
        $str = [];
        $str = 'GT1';
        $str[] = $this->SetID_GT1;
        $str[] = $this->GuarantorNumber;
        $str[] = $this->GuarantorName;
        $str[] = '';
        $str[] = $this->GuarantorAddress;
        $str[] = $this->GuarantorPhNumHome;
        $str[] = $this->GuarantorPhNumBusiness;
        $str[] = $this->GuarantorDateTimeOfBirth;
        $str[] = $this->GuarantorAdministrativeSex;
        $str[] = $this->GuarantorType;
        $str[] = $this->GuarantorRelationshipGuarantorSSN;
        $str[] = $this->GuarantorDateBegin;
        $str[] = $this->GuarantorDateEnd;
        $str[] = '';
        $str[] = $this->GuarantorEmployerName;
        $str[] = $this->GuarantorEmployerAddress;
        $str[] = $this->GuarantorEmployerPhoneNumber;
        $str[] = '';
        $str[] = $this->GuarantorEmploymentStatus;
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = $this->GuarantorEmployerIDNumber;
        $str[] = '';
        $str[] = $this->GuarantorHireEffectiveDate;
        $str[] = $this->EmploymentStopDate;
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = $this->JobTitle;
        $str[] = $this->JobCodeClass;
        $str[] = $this->GuarantorEmployerOrganizationName;
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';

        return implode('|', $str).'\r';
    }


}