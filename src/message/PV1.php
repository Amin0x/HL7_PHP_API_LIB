<?php
namespace nabidh;

class PV1 implements Segment {
    

    private $SetID_PV1 = '';
    private $PatientClass = '';
    private $AssignedPatientLocation = '';
    private $AdmissionType = '';
    private $PreadmitNumber = '';
    private $PriorPatientLocation = '';
    private $AttendingDoctor = '';
    private $ReferringDoctor = '';
    private $ConsultingDoctor = '';
    private $HospitalService = '';
    private $TemporaryLocation = '';
    private $PreadmitTestIndicator = '';
    private $ReAdmissionIndicator = '';
    private $AdmitSource = '';
    private $AmbulatoryStatus = '';
    private $VIPIndicator = '';
    private $AdmittingDoctor = '';
    private $PatientType = '';
    private $VisitNumber = '';
    private $FinancialClass = '';
    private $ChargePriceIndicator = '';
    private $CourtesyCode = '';
    private $CreditRating = '';
    private $ContractCode = '';
    private $ContractEffectiveDate = '';
    private $ContractAmount = '';
    private $ContractPeriod = '';
    private $InterestCode = '';
    private $TransfertoBadDebtCode = '';
    private $TransfertoBadDebtDate = '';
    private $BadDebtAgencyCode = '';
    private $BadDebtTransferAmount = '';
    private $BadDebtRecoveryAmount = '';
    private $DeleteAccountIndicator = '';
    private $DeleteAccountDate = '';
    private $DischargeDisposition = '';
    private $DischargedtoLocation = '';
    private $DietType = '';
    private $ServicingFacility = '';
    private $BedStatus = '';
    private $AccountStatus = '';
    private $PendingLocation = '';
    private $PriorTemporaryLocation = '';
    private $AdmitDateTime = '';
    private $DischargeDateTime = '';
    private $CurrentPatientBalance = '';
    private $TotalCharges = '';
    private $TotalAdjustments = '';
    private $TotalPayments = '';
    private $AlternateVisitID = '';
    private $VisitIndicator = '';
    private $OtherHealthcareProvider = '';

    /**
     * PV1 constructor.
     * @param string $SetID_PV1
     * @param string $PatientClass
     * @param string $AssignedPatientLocation
     * @param string $AdmissionType
     * @param string $PreadmitNumber
     * @param string $PriorPatientLocation
     * @param string $AttendingDoctor
     * @param string $ReferringDoctor
     * @param string $ConsultingDoctor
     */
    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getSetIDPV1(): string
    {
        return $this->SetID_PV1;
    }

    /**
     * @param string $SetID_PV1
     */
    public function setSetIDPV1(string $SetID_PV1): void
    {
        $this->SetID_PV1 = $SetID_PV1;
    }

    /**
     * @return string
     */
    public function getPatientClass(): string
    {
        return $this->PatientClass;
    }

    /**
     * @param string $PatientClass
     */
    public function setPatientClass(string $PatientClass): void
    {
        $this->PatientClass = $PatientClass;
    }

    /**
     * @return string
     */
    public function getAssignedPatientLocation(): string
    {
        return $this->AssignedPatientLocation;
    }

    /**
     * Only the PointofCare, Room, and Bed fields are
     * PV1.3.1 PointOfCare is used (optional) but optional
     * PV1.3.2 Room is used (optional)
     * PV1.3.3 Bed is used (optional)
     * PV1.3.4 Facility is used (mandatory) and it should be Sheryan Facility Id 7 digits
     * PV1.3.9 LocationDescription is used (mandatory) and it should be the exact same name as in Sheryan
     *
     * @param string $AssignedPatientLocation
     */
    public function setAssignedPatientLocation(string $AssignedPatientLocation): void
    {
        $this->AssignedPatientLocation = $AssignedPatientLocation;
    }

    /**
     * @return string
     */
    public function getAdmissionType(): string
    {
        return $this->AdmissionType;
    }

    /**
     * Allowed values are A, C, E, L, N, R, U, O Please refer to table NAB007.
     * @param string $AdmissionType
     */
    public function setAdmissionType(string $AdmissionType): void
    {
        $this->AdmissionType = $AdmissionType;
    }

    /**
     * @return string
     */
    public function getPreadmitNumber(): string
    {
        return $this->PreadmitNumber;
    }

    /**
     * @param string $PreadmitNumber
     */
    public function setPreadmitNumber(string $PreadmitNumber): void
    {
        $this->PreadmitNumber = $PreadmitNumber;
    }

    /**
     * @return string
     */
    public function getPriorPatientLocation(): string
    {
        return $this->PriorPatientLocation;
    }

    /**
     * @param string $PriorPatientLocation
     */
    public function setPriorPatientLocation(string $PriorPatientLocation): void
    {
        $this->PriorPatientLocation = $PriorPatientLocation;
    }

    /**
     * @return string
     */
    public function getAttendingDoctor(): string
    {
        return $this->AttendingDoctor;
    }

    /**
     * For Example, 8 Digits SheryanID^Family/LastName^First/GivenName^MiddleName^^ Dr.^^^SHERYAN
     * @param string $AttendingDoctor
     */
    public function setAttendingDoctor(string $AttendingDoctor): void
    {
        $this->AttendingDoctor = $AttendingDoctor;
    }

    /**
     * @return string
     */
    public function getReferringDoctor(): string
    {
        return $this->ReferringDoctor;
    }

    /**
     * @param string $ReferringDoctor
     */
    public function setReferringDoctor(string $ReferringDoctor): void
    {
        $this->ReferringDoctor = $ReferringDoctor;
    }

    /**
     * @return string
     */
    public function getConsultingDoctor(): string
    {
        return $this->ConsultingDoctor;
    }

    /**
     * @param string $ConsultingDoctor
     */
    public function setConsultingDoctor(string $ConsultingDoctor): void
    {
        $this->ConsultingDoctor = $ConsultingDoctor;
    }

    /**
     * @return string
     */
    public function getHospitalService(): string
    {
        return $this->HospitalService;
    }

    /**
     * Please provide the code as per table NAB008.
     * @param string $HospitalService
     */
    public function setHospitalService(string $HospitalService): void
    {
        $this->HospitalService = $HospitalService;
    }

    /**
     * @return string
     */
    public function getTemporaryLocation(): string
    {
        return $this->TemporaryLocation;
    }

    /**
     * @param string $TemporaryLocation
     */
    public function setTemporaryLocation(string $TemporaryLocation): void
    {
        $this->TemporaryLocation = $TemporaryLocation;
    }

    /**
     * @return string
     */
    public function getPreadmitTestIndicator(): string
    {
        return $this->PreadmitTestIndicator;
    }

    /**
     * @param string $PreadmitTestIndicator
     */
    public function setPreadmitTestIndicator(string $PreadmitTestIndicator): void
    {
        $this->PreadmitTestIndicator = $PreadmitTestIndicator;
    }

    /**
     * @return string
     */
    public function getReAdmissionIndicator(): string
    {
        return $this->ReAdmissionIndicator;
    }

    /**
     * @param string $ReAdmissionIndicator
     */
    public function setReAdmissionIndicator(string $ReAdmissionIndicator): void
    {
        $this->ReAdmissionIndicator = $ReAdmissionIndicator;
    }

    /**
     * @return string
     */
    public function getAdmitSource(): string
    {
        return $this->AdmitSource;
    }

    /**
     * @param string $AdmitSource
     */
    public function setAdmitSource(string $AdmitSource): void
    {
        $this->AdmitSource = $AdmitSource;
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

    /**
     * @return string
     */
    public function getAdmittingDoctor(): string
    {
        return $this->AdmittingDoctor;
    }

    /**
     * @param string $AdmittingDoctor
     */
    public function setAdmittingDoctor(string $AdmittingDoctor): void
    {
        $this->AdmittingDoctor = $AdmittingDoctor;
    }

    /**
     * @return string
     */
    public function getPatientType(): string
    {
        return $this->PatientType;
    }

    /**
     * @param string $PatientType
     */
    public function setPatientType(string $PatientType): void
    {
        $this->PatientType = $PatientType;
    }

    /**
     * @return string
     */
    public function getVisitNumber(): string
    {
        return $this->VisitNumber;
    }

    /**
     * Only PV1.19.1 is used, please provide single value id number of the encounter.
     * The encounter number should not be more than 50 chars.
     *
     * @param string $VisitNumber
     */
    public function setVisitNumber(string $VisitNumber): void
    {
        $this->VisitNumber = $VisitNumber;
    }

    /**
     * @return string
     */
    public function getFinancialClass(): string
    {
        return $this->FinancialClass;
    }

    /**
     * @param string $FinancialClass
     */
    public function setFinancialClass(string $FinancialClass): void
    {
        $this->FinancialClass = $FinancialClass;
    }

    /**
     * @return string
     */
    public function getChargePriceIndicator(): string
    {
        return $this->ChargePriceIndicator;
    }

    /**
     * @param string $ChargePriceIndicator
     */
    public function setChargePriceIndicator(string $ChargePriceIndicator): void
    {
        $this->ChargePriceIndicator = $ChargePriceIndicator;
    }

    /**
     * @return string
     */
    public function getCourtesyCode(): string
    {
        return $this->CourtesyCode;
    }

    /**
     * @param string $CourtesyCode
     */
    public function setCourtesyCode(string $CourtesyCode): void
    {
        $this->CourtesyCode = $CourtesyCode;
    }

    /**
     * @return string
     */
    public function getCreditRating(): string
    {
        return $this->CreditRating;
    }

    /**
     * @param string $CreditRating
     */
    public function setCreditRating(string $CreditRating): void
    {
        $this->CreditRating = $CreditRating;
    }

    /**
     * @return string
     */
    public function getContractCode(): string
    {
        return $this->ContractCode;
    }

    /**
     * @param string $ContractCode
     */
    public function setContractCode(string $ContractCode): void
    {
        $this->ContractCode = $ContractCode;
    }

    /**
     * @return string
     */
    public function getContractEffectiveDate(): string
    {
        return $this->ContractEffectiveDate;
    }

    /**
     * @param string $ContractEffectiveDate
     */
    public function setContractEffectiveDate(string $ContractEffectiveDate): void
    {
        $this->ContractEffectiveDate = $ContractEffectiveDate;
    }

    /**
     * @return string
     */
    public function getContractAmount(): string
    {
        return $this->ContractAmount;
    }

    /**
     * @param string $ContractAmount
     */
    public function setContractAmount(string $ContractAmount): void
    {
        $this->ContractAmount = $ContractAmount;
    }

    /**
     * @return string
     */
    public function getContractPeriod(): string
    {
        return $this->ContractPeriod;
    }

    /**
     * @param string $ContractPeriod
     */
    public function setContractPeriod(string $ContractPeriod): void
    {
        $this->ContractPeriod = $ContractPeriod;
    }

    /**
     * @return string
     */
    public function getInterestCode(): string
    {
        return $this->InterestCode;
    }

    /**
     * @param string $InterestCode
     */
    public function setInterestCode(string $InterestCode): void
    {
        $this->InterestCode = $InterestCode;
    }

    /**
     * @return string
     */
    public function getTransfertoBadDebtCode(): string
    {
        return $this->TransfertoBadDebtCode;
    }

    /**
     * @param string $TransfertoBadDebtCode
     */
    public function setTransfertoBadDebtCode(string $TransfertoBadDebtCode): void
    {
        $this->TransfertoBadDebtCode = $TransfertoBadDebtCode;
    }

    /**
     * @return string
     */
    public function getTransfertoBadDebtDate(): string
    {
        return $this->TransfertoBadDebtDate;
    }

    /**
     * @param string $TransfertoBadDebtDate
     */
    public function setTransfertoBadDebtDate(string $TransfertoBadDebtDate): void
    {
        $this->TransfertoBadDebtDate = $TransfertoBadDebtDate;
    }

    /**
     * @return string
     */
    public function getBadDebtAgencyCode(): string
    {
        return $this->BadDebtAgencyCode;
    }

    /**
     * @param string $BadDebtAgencyCode
     */
    public function setBadDebtAgencyCode(string $BadDebtAgencyCode): void
    {
        $this->BadDebtAgencyCode = $BadDebtAgencyCode;
    }

    /**
     * @return string
     */
    public function getBadDebtTransferAmount(): string
    {
        return $this->BadDebtTransferAmount;
    }

    /**
     * @param string $BadDebtTransferAmount
     */
    public function setBadDebtTransferAmount(string $BadDebtTransferAmount): void
    {
        $this->BadDebtTransferAmount = $BadDebtTransferAmount;
    }

    /**
     * @return string
     */
    public function getBadDebtRecoveryAmount(): string
    {
        return $this->BadDebtRecoveryAmount;
    }

    /**
     * @param string $BadDebtRecoveryAmount
     */
    public function setBadDebtRecoveryAmount(string $BadDebtRecoveryAmount): void
    {
        $this->BadDebtRecoveryAmount = $BadDebtRecoveryAmount;
    }

    /**
     * @return string
     */
    public function getDeleteAccountIndicator(): string
    {
        return $this->DeleteAccountIndicator;
    }

    /**
     * @param string $DeleteAccountIndicator
     */
    public function setDeleteAccountIndicator(string $DeleteAccountIndicator): void
    {
        $this->DeleteAccountIndicator = $DeleteAccountIndicator;
    }

    /**
     * @return string
     */
    public function getDeleteAccountDate(): string
    {
        return $this->DeleteAccountDate;
    }

    /**
     * @param string $DeleteAccountDate
     */
    public function setDeleteAccountDate(string $DeleteAccountDate): void
    {
        $this->DeleteAccountDate = $DeleteAccountDate;
    }

    /**
     * @return string
     */
    public function getDischargeDisposition(): string
    {
        return $this->DischargeDisposition;
    }

    /**
     * @param string $DischargeDisposition
     */
    public function setDischargeDisposition(string $DischargeDisposition): void
    {
        $this->DischargeDisposition = $DischargeDisposition;
    }

    /**
     * @return string
     */
    public function getDischargedtoLocation(): string
    {
        return $this->DischargedtoLocation;
    }

    /**
     * @param string $DischargedtoLocation
     */
    public function setDischargedtoLocation(string $DischargedtoLocation): void
    {
        $this->DischargedtoLocation = $DischargedtoLocation;
    }

    /**
     * @return string
     */
    public function getDietType(): string
    {
        return $this->DietType;
    }

    /**
     * @param string $DietType
     */
    public function setDietType(string $DietType): void
    {
        $this->DietType = $DietType;
    }

    /**
     * @return string
     */
    public function getServicingFacility(): string
    {
        return $this->ServicingFacility;
    }

    /**
     * @param string $ServicingFacility
     */
    public function setServicingFacility(string $ServicingFacility): void
    {
        $this->ServicingFacility = $ServicingFacility;
    }

    /**
     * @return string
     */
    public function getBedStatus(): string
    {
        return $this->BedStatus;
    }

    /**
     * @param string $BedStatus
     */
    public function setBedStatus(string $BedStatus): void
    {
        $this->BedStatus = $BedStatus;
    }

    /**
     * @return string
     */
    public function getAccountStatus(): string
    {
        return $this->AccountStatus;
    }

    /**
     * @param string $AccountStatus
     */
    public function setAccountStatus(string $AccountStatus): void
    {
        $this->AccountStatus = $AccountStatus;
    }

    /**
     * @return string
     */
    public function getPendingLocation(): string
    {
        return $this->PendingLocation;
    }

    /**
     * @param string $PendingLocation
     */
    public function setPendingLocation(string $PendingLocation): void
    {
        $this->PendingLocation = $PendingLocation;
    }

    /**
     * @return string
     */
    public function getPriorTemporaryLocation(): string
    {
        return $this->PriorTemporaryLocation;
    }

    /**
     * @param string $PriorTemporaryLocation
     */
    public function setPriorTemporaryLocation(string $PriorTemporaryLocation): void
    {
        $this->PriorTemporaryLocation = $PriorTemporaryLocation;
    }

    /**
     * @return string
     */
    public function getAdmitDateTime(): string
    {
        return $this->AdmitDateTime;
    }

    /**
     * If no value, system will used date/time of message transmission.
     * @param string $AdmitDateTime
     */
    public function setAdmitDateTime(string $AdmitDateTime): void
    {
        $this->AdmitDateTime = $AdmitDateTime;
    }

    /**
     * @return string
     */
    public function getDischargeDateTime(): string
    {
        return $this->DischargeDateTime;
    }

    /**
     * @param string $DischargeDateTime
     */
    public function setDischargeDateTime(string $DischargeDateTime): void
    {
        $this->DischargeDateTime = $DischargeDateTime;
    }

    /**
     * @return string
     */
    public function getCurrentPatientBalance(): string
    {
        return $this->CurrentPatientBalance;
    }

    /**
     * @param string $CurrentPatientBalance
     */
    public function setCurrentPatientBalance(string $CurrentPatientBalance): void
    {
        $this->CurrentPatientBalance = $CurrentPatientBalance;
    }

    /**
     * @return string
     */
    public function getTotalCharges(): string
    {
        return $this->TotalCharges;
    }

    /**
     * @param string $TotalCharges
     */
    public function setTotalCharges(string $TotalCharges): void
    {
        $this->TotalCharges = $TotalCharges;
    }

    /**
     * @return string
     */
    public function getTotalAdjustments(): string
    {
        return $this->TotalAdjustments;
    }

    /**
     * @param string $TotalAdjustments
     */
    public function setTotalAdjustments(string $TotalAdjustments): void
    {
        $this->TotalAdjustments = $TotalAdjustments;
    }

    /**
     * @return string
     */
    public function getTotalPayments(): string
    {
        return $this->TotalPayments;
    }

    /**
     * @param string $TotalPayments
     */
    public function setTotalPayments(string $TotalPayments): void
    {
        $this->TotalPayments = $TotalPayments;
    }

    /**
     * @return string
     */
    public function getAlternateVisitID(): string
    {
        return $this->AlternateVisitID;
    }

    /**
     * @param string $AlternateVisitID
     */
    public function setAlternateVisitID(string $AlternateVisitID): void
    {
        $this->AlternateVisitID = $AlternateVisitID;
    }

    /**
     * @return string
     */
    public function getVisitIndicator(): string
    {
        return $this->VisitIndicator;
    }

    /**
     * @param string $VisitIndicator
     */
    public function setVisitIndicator(string $VisitIndicator): void
    {
        $this->VisitIndicator = $VisitIndicator;
    }

    /**
     * @return string
     */
    public function getOtherHealthcareProvider(): string
    {
        return $this->OtherHealthcareProvider;
    }

    /**
     * @param string $OtherHealthcareProvider
     */
    public function setOtherHealthcareProvider(string $OtherHealthcareProvider): void
    {
        $this->OtherHealthcareProvider = $OtherHealthcareProvider;
    }

    public function toString()
    {
        $out = 'PV1' . '|'
        .$this->SetID_PV1 . '|'
        .$this->PatientClass . '|'
        .$this->AssignedPatientLocation . '|'
        .$this->AdmissionType . '|'
        .$this->PreadmitNumber . '|'
        .$this->PriorPatientLocation . '|'
        .$this->AttendingDoctor . '|'
        .$this->ReferringDoctor . '|'
        .$this->ConsultingDoctor . '|'
        .$this->HospitalService . '|'
        .$this->TemporaryLocation . '|'
        .$this->PreadmitTestIndicator . '|'
        .$this->ReAdmissionIndicator . '|'
        .$this->AdmitSource . '|'
        .$this->AmbulatoryStatus . '|'
        .$this->VIPIndicator . '|'
        .$this->AdmittingDoctor . '|'
        .$this->PatientType . '|'
        .$this->VisitNumber . '|'
        .$this->FinancialClass . '|'
        .$this->ChargePriceIndicator . '|'
        .$this->CourtesyCode . '|'
        .$this->CreditRating . '|'
        .$this->ContractCode . '|'
        .$this->ContractEffectiveDate . '|'
        .$this->ContractAmount . '|'
        .$this->ContractPeriod . '|'
        .$this->InterestCode . '|'
        .$this->TransfertoBadDebtCode . '|'
        .$this->TransfertoBadDebtDate . '|'
        .$this->BadDebtAgencyCode . '|'
        .$this->BadDebtTransferAmount . '|'
        .$this->BadDebtRecoveryAmount . '|'
        .$this->DeleteAccountIndicator . '|'
        .$this->DeleteAccountDate . '|'
        .$this->DischargeDisposition . '|'
        .$this->DischargedtoLocation . '|'
        .$this->DietType . '|'
        .$this->ServicingFacility . '|'
        .$this->BedStatus . '|'
        .$this->AccountStatus . '|'
        .$this->PendingLocation . '|'
        .$this->PriorTemporaryLocation . '|'
        .$this->AdmitDateTime . '|'
        .$this->DischargeDateTime . '|'
        .$this->CurrentPatientBalance . '|'
        .$this->TotalCharges . '|'
        .$this->TotalAdjustments . '|'
        .$this->TotalPayments . '|'
        .$this->AlternateVisitID . '|'
        .$this->VisitIndicator . '|'
        .$this->OtherHealthcareProvider . '\r';

        return $out;
    }


}