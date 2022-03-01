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
     * @return XPN|string
     */
    public function getName(): XPN|string
    {
        return $this->Name;
    }

    /**
     * @param XPN $Name
     */
    public function setName(XPN $Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return CE|string
     */
    public function getRelationship(): CE|string
    {
        return $this->Relationship;
    }

    /**
     * @param CE $Relationship
     */
    public function setRelationship(CE $Relationship): void
    {
        $this->Relationship = $Relationship;
    }

    /**
     * @return XAD|string
     */
    public function getAddress(): XAD|string
    {
        return $this->Address;
    }

    /**
     * @param XAD $Address
     */
    public function setAddress(XAD $Address): void
    {
        $this->Address = $Address;
    }

    /**
     * @return XTN|string
     */
    public function getPhoneNumber(): XTN|string
    {
        return $this->PhoneNumber;
    }

    /**
     * @param XTN $PhoneNumber
     */
    public function setPhoneNumber(XTN $PhoneNumber): void
    {
        $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return XTN|string
     */
    public function getBusinessPhoneNumber(): XTN|string
    {
        return $this->BusinessPhoneNumber;
    }

    /**
     * @param XTN $BusinessPhoneNumber
     */
    public function setBusinessPhoneNumber(XTN $BusinessPhoneNumber): void
    {
        $this->BusinessPhoneNumber = $BusinessPhoneNumber;
    }

    /**
     * @return CE|string
     */
    public function getContactRole(): CE|string
    {
        return $this->ContactRole;
    }

    /**
     * @param CE $ContactRole
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
     * @return XON|string
     */
    public function getOrganizationNameNK1(): XON|string
    {
        return $this->OrganizationName_NK1;
    }

    /**
     * @param XON $OrganizationName_NK1
     */
    public function setOrganizationNameNK1(XON $OrganizationName_NK1): void
    {
        $this->OrganizationName_NK1 = $OrganizationName_NK1;
    }

    /**
     * @return XPN|string
     */
    public function getContactPersonName(): XPN|string
    {
        return $this->ContactPersonName;
    }

    /**
     * @param XPN $ContactPersonName
     */
    public function setContactPersonName(XPN $ContactPersonName): void
    {
        $this->ContactPersonName = $ContactPersonName;
    }

    /**
     * @return XTN|string
     */
    public function getContactPersonTelephoneNumber(): XTN|string
    {
        return $this->ContactPersonTelephoneNumber;
    }

    /**
     * @param XTN $ContactPersonTelephoneNumber
     */
    public function setContactPersonTelephoneNumber(XTN $ContactPersonTelephoneNumber): void
    {
        $this->ContactPersonTelephoneNumber = $ContactPersonTelephoneNumber;
    }

    /**
     * @return XAD|string
     */
    public function getContactPersonAddress(): XAD|string
    {
        return $this->ContactPersonAddress;
    }

    /**
     * @param XAD $ContactPersonAddress
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