<?php
namespace amin0x\nabidh;

class NK1 implements Segment {
    
    private $SetID_NK1 = '';
    private $Name = '';
    private $Relationship = '';
    private $Address = '';
    private $PhoneNumber = '';
    private $BusinessPhoneNumber = '';
    private $ContactRole = '';
    private $StartDate = '';
    private $EndDate = '';
    private $OrganizationName_NK1 = '';
    private $ContactPersonName = '';
    private $ContactPersonTelephoneNumber = '';
    private $ContactPersonAddress = '';


    /**
     * @return string
     */
    public function getSetIDNK1(): string
    {
        return $this->SetID_NK1;
    }

    /**
     * @param string $SetID_NK1
     */
    public function setSetIDNK1(string $SetID_NK1): void
    {
        $this->SetID_NK1 = $SetID_NK1;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     */
    public function setName(string $Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return string
     */
    public function getRelationship(): string
    {
        return $this->Relationship;
    }

    /**
     * @param string $Relationship
     */
    public function setRelationship(string $Relationship): void
    {
        $this->Relationship = $Relationship;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     */
    public function setAddress(string $Address): void
    {
        $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     */
    public function setPhoneNumber(string $PhoneNumber): void
    {
        $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return string
     */
    public function getBusinessPhoneNumber(): string
    {
        return $this->BusinessPhoneNumber;
    }

    /**
     * @param string $BusinessPhoneNumber
     */
    public function setBusinessPhoneNumber(string $BusinessPhoneNumber): void
    {
        $this->BusinessPhoneNumber = $BusinessPhoneNumber;
    }

    /**
     * @return string
     */
    public function getContactRole(): string
    {
        return $this->ContactRole;
    }

    /**
     * @param string $ContactRole
     */
    public function setContactRole(string $ContactRole): void
    {
        $this->ContactRole = $ContactRole;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    /**
     * @param string $StartDate
     */
    public function setStartDate(string $StartDate): void
    {
        $this->StartDate = $StartDate;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->EndDate;
    }

    /**
     * @param string $EndDate
     */
    public function setEndDate(string $EndDate): void
    {
        $this->EndDate = $EndDate;
    }

    /**
     * @return string
     */
    public function getOrganizationNameNK1(): string
    {
        return $this->OrganizationName_NK1;
    }

    /**
     * @param string $OrganizationName_NK1
     */
    public function setOrganizationNameNK1(string $OrganizationName_NK1): void
    {
        $this->OrganizationName_NK1 = $OrganizationName_NK1;
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
    public function getContactPersonAddress(): string
    {
        return $this->ContactPersonAddress;
    }

    /**
     * @param string $ContactPersonAddress
     */
    public function setContactPersonAddress(string $ContactPersonAddress): void
    {
        $this->ContactPersonAddress = $ContactPersonAddress;
    }


    public function __toString()
    {
        $fields = [];
        $fields = 'NK1';
        $fields[] = $this->SetID_NK1;
        $fields[] = $this->Name;
        $fields[] = $this->Relationship;
        $fields[] = $this->Address;
        $fields[] = $this->PhoneNumber;
        $fields[] = $this->BusinessPhoneNumber;
        $fields[] = $this->ContactRole;
        $fields[] = $this->StartDate;
        $fields[] = $this->EndDate;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->OrganizationName_NK1;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->ContactPersonName;
        $fields[] = $this->ContactPersonTelephoneNumber;
        $fields[] = $this->ContactPersonAddress;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';

        return implode('|', $fields).'\r';
    }
}