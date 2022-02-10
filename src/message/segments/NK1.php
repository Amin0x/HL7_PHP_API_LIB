<?php
namespace amin0x\nabidh;

class NK1 implements Segment {
    
    private $ID = '';
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
     * NK1 constructor.
     * @param string $ID
     */
    public function __construct(string $ID)
    {
        $this->ID = $ID;
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
    public function getName(): XPN|string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     */
    public function setName(XPN $Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return string
     */
    public function getRelationship(): CE
    {
        return $this->Relationship;
    }

    /**
     * @param string $Relationship
     */
    public function setRelationship(CE $Relationship): void
    {
        $this->Relationship = $Relationship;
    }

    /**
     * @return string
     */
    public function getAddress(): XAD
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     */
    public function setAddress(XAD $Address): void
    {
        $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): XTN
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     */
    public function setPhoneNumber(XTN $PhoneNumber): void
    {
        $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return string
     */
    public function getBusinessPhoneNumber(): XTN
    {
        return $this->BusinessPhoneNumber;
    }

    /**
     * @param string $BusinessPhoneNumber
     */
    public function setBusinessPhoneNumber(XTN $BusinessPhoneNumber): void
    {
        $this->BusinessPhoneNumber = $BusinessPhoneNumber;
    }

    /**
     * @return string
     */
    public function getContactRole(): CE|string
    {
        return $this->ContactRole;
    }

    /**
     * @param string $ContactRole
     */
    public function setContactRole(CE $ContactRole): void
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
    public function getOrganizationNameNK1(): XON
    {
        return $this->OrganizationName_NK1;
    }

    /**
     * @param string $OrganizationName_NK1
     */
    public function setOrganizationNameNK1(XON $OrganizationName_NK1): void
    {
        $this->OrganizationName_NK1 = $OrganizationName_NK1;
    }

    /**
     * @return string
     */
    public function getContactPersonName(): XPN
    {
        return $this->ContactPersonName;
    }

    /**
     * @param string $ContactPersonName
     */
    public function setContactPersonName(XPN $ContactPersonName): void
    {
        $this->ContactPersonName = $ContactPersonName;
    }

    /**
     * @return string
     */
    public function getContactPersonTelephoneNumber(): XTN
    {
        return $this->ContactPersonTelephoneNumber;
    }

    /**
     * @param string $ContactPersonTelephoneNumber
     */
    public function setContactPersonTelephoneNumber(XTN $ContactPersonTelephoneNumber): void
    {
        $this->ContactPersonTelephoneNumber = $ContactPersonTelephoneNumber;
    }

    /**
     * @return string
     */
    public function getContactPersonAddress(): XAD
    {
        return $this->ContactPersonAddress;
    }

    /**
     * @param string $ContactPersonAddress
     */
    public function setContactPersonAddress(XAD $ContactPersonAddress): void
    {
        $this->ContactPersonAddress = $ContactPersonAddress;
    }


    public function __toString()
    {
        $fields = [];
        $fields = 'NK1';
        $fields[] = $this->ID;
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