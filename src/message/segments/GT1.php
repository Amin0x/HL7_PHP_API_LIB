<?php
namespace amin0x\nabidh;

class GT1 {

    private $ID = '';
    private $GuarantorNumber = '';
    private $GuarantorName = '';
    private $GuarantorAddress = '';
    private $GuarantorPhNumHome = '';
    private $GuarantorPhNumBusiness = '';
    private $GuarantorDateTimeOfBirth = '';
    private $GuarantorAdministrativeSex = '';
    private $GuarantorType = '';
    private $GuarantorRelationship = '';
    private $GuarantorSSN = '';
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
     * @param string $ID
     */
    public function __construct(string $ID)
    {
        $this->ID = $ID;
        $this->GuarantorAdministrativeSex = 'U';
    }

    /**
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     */
    public function setID(string $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getGuarantorNumber(): CX|string
    {
        return $this->GuarantorNumber;
    }

    /**
     * @param string $GuarantorNumber
     */
    public function setGuarantorNumber(string $GuarantorNumber): void
    {
        if (!empty($GuarantorNumber)) {
            $this->GuarantorNumber = new CX($GuarantorNumber, 'FACILITYCODE', 'MRN');
            return;
        }

        $this->GuarantorNumber = '';
    }

    /**
     * @return string
     */
    public function getGuarantorName(): XPN|string
    {
        return $this->GuarantorName;
    }

    /**
     * @param string $GuarantorName
     */
    public function setGuarantorName(XPN $GuarantorName): void
    {
        $this->GuarantorName = $GuarantorName;
    }

    /**
     * @return string
     */
    public function getGuarantorAddress(): XAD|string
    {
        return $this->GuarantorAddress;
    }

    /**
     * @param string $GuarantorAddress
     */
    public function setGuarantorAddress(XAD $GuarantorAddress): void
    {
        $this->GuarantorAddress = $GuarantorAddress;
    }

    /**
     * @return string
     */
    public function getGuarantorPhNumHome(): XTN|string
    {
        return $this->GuarantorPhNumHome;
    }

    /**
     * @param string $GuarantorPhNumHome
     */
    public function setGuarantorPhNumHome(XTN $GuarantorPhNumHome): void
    {
        $this->GuarantorPhNumHome = $GuarantorPhNumHome;
    }

    /**
     * @return string
     */
    public function getGuarantorPhNumBusiness(): XTN|string
    {
        return $this->GuarantorPhNumBusiness;
    }

    /**
     * @param string $GuarantorPhNumBusiness
     */
    public function setGuarantorPhNumBusiness(XTN $GuarantorPhNumBusiness): void
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
        if (in_array($GuarantorAdministrativeSex, [ 'F', 'M', 'U'])){
            $this->GuarantorAdministrativeSex = $GuarantorAdministrativeSex;
            return;
        }

        $this->GuarantorAdministrativeSex = 'U';
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
    public function getGuarantorRelationship(): string
    {
        return $this->GuarantorRelationship;
    }

    /**
     * @param string $GuarantorRelationship
     */
    public function setGuarantorRelationship(string $GuarantorRelationship): void
    {
        $this->GuarantorRelationship = getRelationshipTable($GuarantorRelationship);
    }

    /**
     * @return string
     */
    public function getGuarantorSSN(): string
    {
        return $this->GuarantorSSN;
    }

    /**
     * @param string $GuarantorSSN
     */
    public function setGuarantorSSN(string $GuarantorSSN): void
    {
        $this->GuarantorSSN = $GuarantorSSN;
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
    public function getGuarantorEmployerName(): XPN|string
    {
        return $this->GuarantorEmployerName;
    }

    /**
     * @param string $GuarantorEmployerName
     */
    public function setGuarantorEmployerName(XPN $GuarantorEmployerName): void
    {
        $this->GuarantorEmployerName = $GuarantorEmployerName;
    }

    /**
     * @return string
     */
    public function getGuarantorEmployerAddress(): XAD|string
    {
        return $this->GuarantorEmployerAddress;
    }

    /**
     * @param string $GuarantorEmployerAddress
     */
    public function setGuarantorEmployerAddress(XAD $GuarantorEmployerAddress): void
    {
        $this->GuarantorEmployerAddress = $GuarantorEmployerAddress;
    }

    /**
     * @return string
     */
    public function getGuarantorEmployerPhoneNumber(): XTN|string
    {
        return $this->GuarantorEmployerPhoneNumber;
    }

    /**
     * @param string $GuarantorEmployerPhoneNumber
     */
    public function setGuarantorEmployerPhoneNumber(XTN $GuarantorEmployerPhoneNumber): void
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
    public function getGuarantorEmployerOrganizationName(): XON|string
    {
        return $this->GuarantorEmployerOrganizationName;
    }

    /**
     * @param string $GuarantorEmployerOrganizationName
     */
    public function setGuarantorEmployerOrganizationName(XON $GuarantorEmployerOrganizationName): void
    {
        $this->GuarantorEmployerOrganizationName = $GuarantorEmployerOrganizationName;
    }

    public function __toString()
    {
        $str = [];
        $str[] = 'GT1';
        $str[] = $this->ID;
        $str[] = $this->GuarantorNumber;
        $str[] = $this->GuarantorName;
        $str[] = '';
        $str[] = $this->GuarantorAddress;
        $str[] = $this->GuarantorPhNumHome;
        $str[] = $this->GuarantorPhNumBusiness;
        $str[] = $this->GuarantorDateTimeOfBirth;
        $str[] = $this->GuarantorAdministrativeSex;
        $str[] = $this->GuarantorType;
        $str[] = $this->GuarantorRelationship;
        $str[] = $this->GuarantorSSN;
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