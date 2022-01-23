<?php
namespace amin0x\nabidh;

class IN1 implements Segment {

    private $SetID_IN1 = '';
    private $HealthPlanID = '';
    private $InsuranceCompanyID = '';
    private $InsuranceCompanyName = '';
    private $InsuranceCompanyAddress = '';
    private $InsuranceCoContactPerson = '';
    private $InsuranceCoPhoneNumber = '';
    private $GroupNumber = '';
    private $GroupName = '';
    private $InsuredGroupEmpID = '';
    private $InsuredGroupEmpName = '';
    private $PlanEffectiveDate = '';
    private $PlanExpirationDate = '';
    private $AuthorizationInformation = '';
    private $PlanType = '';
    private $NameOfInsured = '';
    private $InsuredRelationshipToPatient = '';
    private $InsuredDateOfBirth = '';
    private $InsuredAddress = '';
    private $AssignmentOfBenefits = '';
    private $CoordinationOfBenefits = '';
    private $CoordOfBenPriority = '';
    private $NoticeOfAdmissionFlag = '';
    private $NoticeOfAdmissionDate = '';
    private $ReportOfEligibilityFlag = '';
    private $ReportOfEligibilityDate = '';
    private $ReleaseInformationCode = '';
    private $PreAdmitCert_PAC = '';
    private $VerificationDateTime = '';
    private $VerificationBy = '';
    private $TypeOfAgreementCode = '';
    private $BillingStatus = '';
    private $LifetimeReserveDays = '';
    private $DelayBefore_L_R_Day = '';
    private $CompanyPlanCode = '';
    private $PolicyNumber = '';
    private $PolicyDeductible = '';
    private $PolicyLimitAmount = '';
    private $PolicyLimitDays = '';
    private $RoomRateSemiPrivate = '';
    private $RoomRatePrivate = '';
    private $InsuredEmploymentStatus = '';
    private $InsuredAdministrativeSex = '';
    private $InsuredEmployerAddress = '';
    private $VerificationStatus = '';
    private $PriorInsurancePlanID = '';
    private $CoverageType = '';
    private $Handicap = '';
    private $InsuredIDNumber = '';
    private $SignatureCode = '';
    private $SignatureCodeDate = '';
    private $InsuredBirthPlace = '';
    private $VIPIndicator = '';

    /**
     * IN1 constructor.
     * @param string $SetID_IN1
     */
    public function __construct(string $SetID_IN1)
    {
        $this->SetID_IN1 = $SetID_IN1;
    }

    /**
     * @return string
     */
    public function getSetIDIN1(): string
    {
        return $this->SetID_IN1;
    }

    /**
     * @param string $SetID_IN1
     */
    public function setSetIDIN1(string $SetID_IN1): void
    {
        $this->SetID_IN1 = $SetID_IN1;
    }

    /**
     * @return string
     */
    public function getHealthPlanID(): string
    {
        return $this->HealthPlanID;
    }

    /**
     * @param string $HealthPlanID
     */
    public function setHealthPlanID(string $HealthPlanID): void
    {
        $this->HealthPlanID = $HealthPlanID;
    }

    /**
     * @return string
     */
    public function getInsuranceCompanyID(): string
    {
        return $this->InsuranceCompanyID;
    }

    /**
     * @param string $InsuranceCompanyID
     */
    public function setInsuranceCompanyID(string $InsuranceCompanyID): void
    {
        $this->InsuranceCompanyID = $InsuranceCompanyID;
    }

    /**
     * @return string
     */
    public function getInsuranceCompanyName(): string
    {
        return $this->InsuranceCompanyName;
    }

    /**
     * @param string $InsuranceCompanyName
     */
    public function setInsuranceCompanyName(string $InsuranceCompanyName): void
    {
        $this->InsuranceCompanyName = $InsuranceCompanyName;
    }

    /**
     * @return string
     */
    public function getInsuranceCompanyAddress(): string
    {
        return $this->InsuranceCompanyAddress;
    }

    /**
     * @param string $InsuranceCompanyAddress
     */
    public function setInsuranceCompanyAddress(string $InsuranceCompanyAddress): void
    {
        $this->InsuranceCompanyAddress = $InsuranceCompanyAddress;
    }

    /**
     * @return string
     */
    public function getInsuranceCoContactPerson(): string
    {
        return $this->InsuranceCoContactPerson;
    }

    /**
     * @param string $InsuranceCoContactPerson
     */
    public function setInsuranceCoContactPerson(string $InsuranceCoContactPerson): void
    {
        $this->InsuranceCoContactPerson = $InsuranceCoContactPerson;
    }

    /**
     * @return string
     */
    public function getInsuranceCoPhoneNumber(): string
    {
        return $this->InsuranceCoPhoneNumber;
    }

    /**
     * @param string $InsuranceCoPhoneNumber
     */
    public function setInsuranceCoPhoneNumber(string $InsuranceCoPhoneNumber): void
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
    public function getInsuredGroupEmpID(): string
    {
        return $this->InsuredGroupEmpID;
    }

    /**
     * @param string $InsuredGroupEmpID
     */
    public function setInsuredGroupEmpID(string $InsuredGroupEmpID): void
    {
        $this->InsuredGroupEmpID = $InsuredGroupEmpID;
    }

    /**
     * @return string
     */
    public function getInsuredGroupEmpName(): string
    {
        return $this->InsuredGroupEmpName;
    }

    /**
     * @param string $InsuredGroupEmpName
     */
    public function setInsuredGroupEmpName(string $InsuredGroupEmpName): void
    {
        $this->InsuredGroupEmpName = $InsuredGroupEmpName;
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
    public function getAuthorizationInformation(): string
    {
        return $this->AuthorizationInformation;
    }

    /**
     * @param string $AuthorizationInformation
     */
    public function setAuthorizationInformation(string $AuthorizationInformation): void
    {
        $this->AuthorizationInformation = $AuthorizationInformation;
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
     * @return string
     */
    public function getNameOfInsured(): string
    {
        return $this->NameOfInsured;
    }

    /**
     * @param string $NameOfInsured
     */
    public function setNameOfInsured(string $NameOfInsured): void
    {
        $this->NameOfInsured = $NameOfInsured;
    }

    /**
     * @return string
     */
    public function getInsuredRelationshipToPatient(): string
    {
        return $this->InsuredRelationshipToPatient;
    }

    /**
     * @param string $InsuredRelationshipToPatient
     */
    public function setInsuredRelationshipToPatient(string $InsuredRelationshipToPatient): void
    {
        $this->InsuredRelationshipToPatient = $InsuredRelationshipToPatient;
    }

    /**
     * @return string
     */
    public function getInsuredDateOfBirth(): string
    {
        return $this->InsuredDateOfBirth;
    }

    /**
     * @param string $InsuredDateOfBirth
     */
    public function setInsuredDateOfBirth(string $InsuredDateOfBirth): void
    {
        $this->InsuredDateOfBirth = $InsuredDateOfBirth;
    }

    /**
     * @return string
     */
    public function getInsuredAddress(): string
    {
        return $this->InsuredAddress;
    }

    /**
     * @param string $InsuredAddress
     */
    public function setInsuredAddress(string $InsuredAddress): void
    {
        $this->InsuredAddress = $InsuredAddress;
    }

    /**
     * @return string
     */
    public function getAssignmentOfBenefits(): string
    {
        return $this->AssignmentOfBenefits;
    }

    /**
     * @param string $AssignmentOfBenefits
     */
    public function setAssignmentOfBenefits(string $AssignmentOfBenefits): void
    {
        $this->AssignmentOfBenefits = $AssignmentOfBenefits;
    }

    /**
     * @return string
     */
    public function getCoordinationOfBenefits(): string
    {
        return $this->CoordinationOfBenefits;
    }

    /**
     * @param string $CoordinationOfBenefits
     */
    public function setCoordinationOfBenefits(string $CoordinationOfBenefits): void
    {
        $this->CoordinationOfBenefits = $CoordinationOfBenefits;
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
    public function getNoticeOfAdmissionFlag(): string
    {
        return $this->NoticeOfAdmissionFlag;
    }

    /**
     * @param string $NoticeOfAdmissionFlag
     */
    public function setNoticeOfAdmissionFlag(string $NoticeOfAdmissionFlag): void
    {
        $this->NoticeOfAdmissionFlag = $NoticeOfAdmissionFlag;
    }

    /**
     * @return string
     */
    public function getNoticeOfAdmissionDate(): string
    {
        return $this->NoticeOfAdmissionDate;
    }

    /**
     * @param string $NoticeOfAdmissionDate
     */
    public function setNoticeOfAdmissionDate(string $NoticeOfAdmissionDate): void
    {
        $this->NoticeOfAdmissionDate = $NoticeOfAdmissionDate;
    }

    /**
     * @return string
     */
    public function getReportOfEligibilityFlag(): string
    {
        return $this->ReportOfEligibilityFlag;
    }

    /**
     * @param string $ReportOfEligibilityFlag
     */
    public function setReportOfEligibilityFlag(string $ReportOfEligibilityFlag): void
    {
        $this->ReportOfEligibilityFlag = $ReportOfEligibilityFlag;
    }

    /**
     * @return string
     */
    public function getReportOfEligibilityDate(): string
    {
        return $this->ReportOfEligibilityDate;
    }

    /**
     * @param string $ReportOfEligibilityDate
     */
    public function setReportOfEligibilityDate(string $ReportOfEligibilityDate): void
    {
        $this->ReportOfEligibilityDate = $ReportOfEligibilityDate;
    }

    /**
     * @return string
     */
    public function getReleaseInformationCode(): string
    {
        return $this->ReleaseInformationCode;
    }

    /**
     * @param string $ReleaseInformationCode
     */
    public function setReleaseInformationCode(string $ReleaseInformationCode): void
    {
        $this->ReleaseInformationCode = $ReleaseInformationCode;
    }

    /**
     * @return string
     */
    public function getPreAdmitCertPAC(): string
    {
        return $this->PreAdmitCert_PAC;
    }

    /**
     * @param string $PreAdmitCert_PAC
     */
    public function setPreAdmitCertPAC(string $PreAdmitCert_PAC): void
    {
        $this->PreAdmitCert_PAC = $PreAdmitCert_PAC;
    }

    /**
     * @return string
     */
    public function getVerificationDateTime(): string
    {
        return $this->VerificationDateTime;
    }

    /**
     * @param string $VerificationDateTime
     */
    public function setVerificationDateTime(string $VerificationDateTime): void
    {
        $this->VerificationDateTime = $VerificationDateTime;
    }

    /**
     * @return string
     */
    public function getVerificationBy(): string
    {
        return $this->VerificationBy;
    }

    /**
     * @param string $VerificationBy
     */
    public function setVerificationBy(string $VerificationBy): void
    {
        $this->VerificationBy = $VerificationBy;
    }

    /**
     * @return string
     */
    public function getTypeOfAgreementCode(): string
    {
        return $this->TypeOfAgreementCode;
    }

    /**
     * @param string $TypeOfAgreementCode
     */
    public function setTypeOfAgreementCode(string $TypeOfAgreementCode): void
    {
        $this->TypeOfAgreementCode = $TypeOfAgreementCode;
    }

    /**
     * @return string
     */
    public function getBillingStatus(): string
    {
        return $this->BillingStatus;
    }

    /**
     * @param string $BillingStatus
     */
    public function setBillingStatus(string $BillingStatus): void
    {
        $this->BillingStatus = $BillingStatus;
    }

    /**
     * @return string
     */
    public function getLifetimeReserveDays(): string
    {
        return $this->LifetimeReserveDays;
    }

    /**
     * @param string $LifetimeReserveDays
     */
    public function setLifetimeReserveDays(string $LifetimeReserveDays): void
    {
        $this->LifetimeReserveDays = $LifetimeReserveDays;
    }

    /**
     * @return string
     */
    public function getDelayBeforeLRDay(): string
    {
        return $this->DelayBefore_L_R_Day;
    }

    /**
     * @param string $DelayBefore_L_R_Day
     */
    public function setDelayBeforeLRDay(string $DelayBefore_L_R_Day): void
    {
        $this->DelayBefore_L_R_Day = $DelayBefore_L_R_Day;
    }

    /**
     * @return string
     */
    public function getCompanyPlanCode(): string
    {
        return $this->CompanyPlanCode;
    }

    /**
     * @param string $CompanyPlanCode
     */
    public function setCompanyPlanCode(string $CompanyPlanCode): void
    {
        $this->CompanyPlanCode = $CompanyPlanCode;
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

    /**
     * @return string
     */
    public function getPolicyDeductible(): string
    {
        return $this->PolicyDeductible;
    }

    /**
     * @param string $PolicyDeductible
     */
    public function setPolicyDeductible(string $PolicyDeductible): void
    {
        $this->PolicyDeductible = $PolicyDeductible;
    }

    /**
     * @return string
     */
    public function getPolicyLimitAmount(): string
    {
        return $this->PolicyLimitAmount;
    }

    /**
     * @param string $PolicyLimitAmount
     */
    public function setPolicyLimitAmount(string $PolicyLimitAmount): void
    {
        $this->PolicyLimitAmount = $PolicyLimitAmount;
    }

    /**
     * @return string
     */
    public function getPolicyLimitDays(): string
    {
        return $this->PolicyLimitDays;
    }

    /**
     * @param string $PolicyLimitDays
     */
    public function setPolicyLimitDays(string $PolicyLimitDays): void
    {
        $this->PolicyLimitDays = $PolicyLimitDays;
    }

    /**
     * @return string
     */
    public function getRoomRateSemiPrivate(): string
    {
        return $this->RoomRateSemiPrivate;
    }

    /**
     * @param string $RoomRateSemiPrivate
     */
    public function setRoomRateSemiPrivate(string $RoomRateSemiPrivate): void
    {
        $this->RoomRateSemiPrivate = $RoomRateSemiPrivate;
    }

    /**
     * @return string
     */
    public function getRoomRatePrivate(): string
    {
        return $this->RoomRatePrivate;
    }

    /**
     * @param string $RoomRatePrivate
     */
    public function setRoomRatePrivate(string $RoomRatePrivate): void
    {
        $this->RoomRatePrivate = $RoomRatePrivate;
    }

    /**
     * @return string
     */
    public function getInsuredEmploymentStatus(): string
    {
        return $this->InsuredEmploymentStatus;
    }

    /**
     * @param string $InsuredEmploymentStatus
     */
    public function setInsuredEmploymentStatus(string $InsuredEmploymentStatus): void
    {
        $this->InsuredEmploymentStatus = $InsuredEmploymentStatus;
    }

    /**
     * @return string
     */
    public function getInsuredAdministrativeSex(): string
    {
        return $this->InsuredAdministrativeSex;
    }

    /**
     * @param string $InsuredAdministrativeSex
     */
    public function setInsuredAdministrativeSex(string $InsuredAdministrativeSex): void
    {
        $this->InsuredAdministrativeSex = $InsuredAdministrativeSex;
    }

    /**
     * @return string
     */
    public function getInsuredEmployerAddress(): string
    {
        return $this->InsuredEmployerAddress;
    }

    /**
     * @param string $InsuredEmployerAddress
     */
    public function setInsuredEmployerAddress(string $InsuredEmployerAddress): void
    {
        $this->InsuredEmployerAddress = $InsuredEmployerAddress;
    }

    /**
     * @return string
     */
    public function getVerificationStatus(): string
    {
        return $this->VerificationStatus;
    }

    /**
     * @param string $VerificationStatus
     */
    public function setVerificationStatus(string $VerificationStatus): void
    {
        $this->VerificationStatus = $VerificationStatus;
    }

    /**
     * @return string
     */
    public function getPriorInsurancePlanID(): string
    {
        return $this->PriorInsurancePlanID;
    }

    /**
     * @param string $PriorInsurancePlanID
     */
    public function setPriorInsurancePlanID(string $PriorInsurancePlanID): void
    {
        $this->PriorInsurancePlanID = $PriorInsurancePlanID;
    }

    /**
     * @return string
     */
    public function getCoverageType(): string
    {
        return $this->CoverageType;
    }

    /**
     * @param string $CoverageType
     */
    public function setCoverageType(string $CoverageType): void
    {
        $this->CoverageType = $CoverageType;
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
    public function getInsuredIDNumber(): string
    {
        return $this->InsuredIDNumber;
    }

    /**
     * @param string $InsuredIDNumber
     */
    public function setInsuredIDNumber(string $InsuredIDNumber): void
    {
        $this->InsuredIDNumber = $InsuredIDNumber;
    }

    /**
     * @return string
     */
    public function getSignatureCode(): string
    {
        return $this->SignatureCode;
    }

    /**
     * @param string $SignatureCode
     */
    public function setSignatureCode(string $SignatureCode): void
    {
        $this->SignatureCode = $SignatureCode;
    }

    /**
     * @return string
     */
    public function getSignatureCodeDate(): string
    {
        return $this->SignatureCodeDate;
    }

    /**
     * @param string $SignatureCodeDate
     */
    public function setSignatureCodeDate(string $SignatureCodeDate): void
    {
        $this->SignatureCodeDate = $SignatureCodeDate;
    }

    /**
     * @return string
     */
    public function getInsuredBirthPlace(): string
    {
        return $this->InsuredBirthPlace;
    }

    /**
     * @param string $InsuredBirthPlace
     */
    public function setInsuredBirthPlace(string $InsuredBirthPlace): void
    {
        $this->InsuredBirthPlace = $InsuredBirthPlace;
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

    public function toString()
    {
        $str = 'IN1'.'|'
        .$this->SetID_IN1 . '|'
        .$this->HealthPlanID . '|'
        .$this->InsuranceCompanyID . '|'
        .$this->InsuranceCompanyName . '|'
        .$this->InsuranceCompanyAddress . '|'
        .$this->InsuranceCoContactPerson . '|'
        .$this->InsuranceCoPhoneNumber . '|'
        .$this->GroupNumber . '|'
        .$this->GroupName . '|'
        .$this->InsuredGroupEmpID . '|'
        .$this->InsuredGroupEmpName . '|'
        .$this->PlanEffectiveDate . '|'
        .$this->PlanExpirationDate . '|'
        .$this->AuthorizationInformation . '|'
        .$this->PlanType . '|'
        .$this->NameOfInsured . '|'
        .$this->InsuredRelationshipToPatient . '|'
        .$this->InsuredDateOfBirth . '|'
        .$this->InsuredAddress . '|'
        .$this->AssignmentOfBenefits . '|'
        .$this->CoordinationOfBenefits . '|'
        .$this->CoordOfBenPriority . '|'
        .$this->NoticeOfAdmissionFlag . '|'
        .$this->NoticeOfAdmissionDate . '|'
        .$this->ReportOfEligibilityFlag . '|'
        .$this->ReportOfEligibilityDate . '|'
        .$this->ReleaseInformationCode . '|'
        .$this->PreAdmitCert_PAC . '|'
        .$this->VerificationDateTime . '|'
        .$this->VerificationBy . '|'
        .$this->TypeOfAgreementCode . '|'
        .$this->BillingStatus . '|'
        .$this->LifetimeReserveDays . '|'
        .$this->DelayBefore_L_R_Day . '|'
        .$this->CompanyPlanCode . '|'
        .$this->PolicyNumber . '|'
        .$this->PolicyDeductible . '|'
        .$this->PolicyLimitAmount . '|'
        .$this->PolicyLimitDays . '|'
        .$this->RoomRateSemiPrivate . '|'
        .$this->RoomRatePrivate . '|'
        .$this->InsuredEmploymentStatus . '|'
        .$this->InsuredAdministrativeSex . '|'
        .$this->InsuredEmployerAddress . '|'
        .$this->VerificationStatus . '|'
        .$this->PriorInsurancePlanID . '|'
        .$this->CoverageType . '|'
        .$this->Handicap . '|'
        .$this->InsuredIDNumber . '|'
        .$this->SignatureCode . '|'
        .$this->SignatureCodeDate . '|'
        .$this->InsuredBirthPlace . '|'
        .$this->VIPIndicator;

        return rtrim($str, '|');
    }


}