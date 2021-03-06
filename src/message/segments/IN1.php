<?php
namespace amin0x\nabidh;

class IN1 implements Segment {

    private $ID = '';
    private $HealthPlanID = '';
    private $InsuranceCompanyID = '';
    private $InsuranceCompanyName = '';
    private $InsuranceCompanyAddress = '';
    private $InsuranceCoContactPerson = '';
    private $InsuranceCoPhoneNumber = '';
    private $GroupNumber = '';
    private $GroupName = '';
    private $PlanEffectiveDate = '';
    private $PlanExpirationDate = '';
    private $PlanType = '';
    private $NameOfInsured = '';
    private $InsuredRelationshipToPatient = '';
    private $InsuredAddress = '';
    private $CoordOfBenPriority = '';
    private $PolicyNumber = '';


    /**
     * IN1 constructor.
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
     * @return CE|string
     */
    public function getHealthPlanID(): CE|string
    {
        return $this->HealthPlanID;
    }

    /**
     * @param CE $HealthPlanID
     */
    public function setHealthPlanID(CE $HealthPlanID): void
    {
        $this->HealthPlanID = $HealthPlanID;
    }

    /**
     * @return CX|string
     */
    public function getInsuranceCompanyID(): CX|string
    {
        return $this->InsuranceCompanyID;
    }

    /**
     * @param CX $InsuranceCompanyID
     */
    public function setInsuranceCompanyID(CX $InsuranceCompanyID): void
    {
        $this->InsuranceCompanyID = $InsuranceCompanyID;
    }

    /**
     * @return XON|string
     */
    public function getInsuranceCompanyName(): XON|string
    {
        return $this->InsuranceCompanyName;
    }

    /**
     * @param XON $InsuranceCompanyName
     */
    public function setInsuranceCompanyName(XON $InsuranceCompanyName): void
    {
        $this->InsuranceCompanyName = $InsuranceCompanyName;
    }

    /**
     * @return XAD|string
     */
    public function getInsuranceCompanyAddress(): XAD|string
    {
        return $this->InsuranceCompanyAddress;
    }

    /**
     * @param XAD $InsuranceCompanyAddress
     */
    public function setInsuranceCompanyAddress(XAD $InsuranceCompanyAddress): void
    {
        $this->InsuranceCompanyAddress = $InsuranceCompanyAddress;
    }

    /**
     * @return XPN|string
     */
    public function getInsuranceCoContactPerson(): XPN|string
    {
        return $this->InsuranceCoContactPerson;
    }

    /**
     * @param XPN $InsuranceCoContactPerson
     */
    public function setInsuranceCoContactPerson(XPN $InsuranceCoContactPerson): void
    {
        $this->InsuranceCoContactPerson = $InsuranceCoContactPerson;
    }

    /**
     * @return XTN|string
     */
    public function getInsuranceCoPhoneNumber(): XTN|string
    {
        return $this->InsuranceCoPhoneNumber;
    }

    /**
     * @param XTN $InsuranceCoPhoneNumber
     */
    public function setInsuranceCoPhoneNumber(XTN $InsuranceCoPhoneNumber): void
    {
        $this->InsuranceCoPhoneNumber = $InsuranceCoPhoneNumber;
    }

    /**
     * @return string
     */
    public function getGroupNumber(): string
    {
        return $this->GroupNumber;
    }

    /**
     * @param string $GroupNumber
     */
    public function setGroupNumber(string $GroupNumber): void
    {
        $this->GroupNumber = $GroupNumber;
    }

    /**
     * @return string
     */
    public function getGroupName(): string
    {
        return $this->GroupName;
    }

    /**
     * @param string $GroupName
     */
    public function setGroupName(string $GroupName): void
    {
        $this->GroupName = $GroupName;
    }

    /**
     * @return string
     */
    public function getPlanEffectiveDate(): string
    {
        return $this->PlanEffectiveDate;
    }

    /**
     * @param string $PlanEffectiveDate
     */
    public function setPlanEffectiveDate(string $PlanEffectiveDate): void
    {
        $this->PlanEffectiveDate = $PlanEffectiveDate;
    }

    /**
     * @return string
     */
    public function getPlanExpirationDate(): string
    {
        return $this->PlanExpirationDate;
    }

    /**
     * @param string $PlanExpirationDate
     */
    public function setPlanExpirationDate(string $PlanExpirationDate): void
    {
        $this->PlanExpirationDate = $PlanExpirationDate;
    }

    /**
     * @return string
     */
    public function getPlanType(): string
    {
        return $this->PlanType;
    }

    /**
     * @param string $PlanType
     */
    public function setPlanType(string $PlanType): void
    {
        $this->PlanType = $PlanType;
    }

    /**
     * @return XPN|string
     */
    public function getNameOfInsured(): XPN|string
    {
        return $this->NameOfInsured;
    }

    /**
     * @param XPN $NameOfInsured
     */
    public function setNameOfInsured(XPN $NameOfInsured): void
    {
        $this->NameOfInsured = $NameOfInsured;
    }

    /**
     * @return CE|string
     */
    public function getInsuredRelationshipToPatient(): CE|string
    {
        return $this->InsuredRelationshipToPatient;
    }

    /**
     * @param string $InsuredRelationshipToPatient
     */
    public function setInsuredRelationshipToPatient(string $InsuredRelationshipToPatient): void
    {
        $this->InsuredRelationshipToPatient = getRelationshipTable($InsuredRelationshipToPatient);
    }

    /**
     * @return XAD|string
     */
    public function getInsuredAddress(): XAD|string
    {
        return $this->InsuredAddress;
    }

    /**
     * @param XAD $InsuredAddress
     */
    public function setInsuredAddress(XAD $InsuredAddress): void
    {
        $this->InsuredAddress = $InsuredAddress;
    }

    /**
     * @return string
     */
    public function getCoordOfBenPriority(): string
    {
        return $this->CoordOfBenPriority;
    }

    /**
     * @param string $CoordOfBenPriority
     */
    public function setCoordOfBenPriority(string $CoordOfBenPriority): void
    {
        $this->CoordOfBenPriority = $CoordOfBenPriority;
    }

    /**
     * @return string
     */
    public function getPolicyNumber(): string
    {
        return $this->PolicyNumber;
    }

    /**
     * @param string $PolicyNumber
     */
    public function setPolicyNumber(string $PolicyNumber): void
    {
        $this->PolicyNumber = $PolicyNumber;
    }

    public function __toString()
    {
        $str[] = 'IN1';
        $str[] = $this->ID ;
        $str[] = $this->HealthPlanID ;
        $str[] = $this->InsuranceCompanyID ;
        $str[] = $this->InsuranceCompanyName ;
        $str[] = $this->InsuranceCompanyAddress ;
        $str[] = $this->InsuranceCoContactPerson ;
        $str[] = $this->InsuranceCoPhoneNumber ;
        $str[] = $this->GroupNumber ;
        $str[] = $this->GroupName ;
        $str[] = '';
        $str[] = '';
        $str[] = $this->PlanEffectiveDate ;
        $str[] = $this->PlanExpirationDate ;
        $str[] = '';
        $str[] = $this->PlanType ;
        $str[] = $this->NameOfInsured ;
        $str[] = $this->InsuredRelationshipToPatient ;
        $str[] = '';
        $str[] = $this->InsuredAddress ;
        $str[] = '';
        $str[] = '';
        $str[] = $this->CoordOfBenPriority ;
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
        $str[] = $this->PolicyNumber ;
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
        $str[] = '';

        return implode('|', $str) . '\r';
    }


}