<?php
namespace amin0x\nabidh;

class PV1 implements Segment {
    

    private $SetID_PV1 = '';
    private $PatientClass = '';
    private $AssignedPatientLocation = null;
    private $AdmissionType = '';
    private $PreadmitNumber = '';
    private $PriorPatientLocation = '';
    private $AttendingDoctor = '';
    private $ReferringDoctor = '';
    private $ConsultingDoctor = '';
    private $HospitalService = '';
    private $AdmitSource = '';
    private $AdmittingDoctor = '';
    private $PatientType = '';
    private $VisitNumber = '';
    private $DischargeDisposition = '';
    private $DischargedtoLocation = '';
    private $AdmitDateTime = '';
    private $DischargeDateTime = '';


    /**
     * PV1 constructor.
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
     * @return PL
     */
    public function getAssignedPatientLocation(): PL
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
     * @param PL $AssignedPatientLocation
     */
    public function setAssignedPatientLocation(PL $AssignedPatientLocation): void
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

    public function __toString()
    {
        $out = [];
        $out[] = 'PV1';
        $out[] = $this->SetID_PV1;
        $out[] = $this->PatientClass;
        $out[] = $this->AssignedPatientLocation;
        $out[] = $this->AdmissionType;
        $out[] = $this->PreadmitNumber;
        $out[] = $this->PriorPatientLocation;
        $out[] = $this->AttendingDoctor;
        $out[] = $this->ReferringDoctor;
        $out[] = $this->ConsultingDoctor;
        $out[] = $this->HospitalService;
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = $this->AdmitSource;
        $out[] = '';
        $out[] = '';
        $out[] = $this->AdmittingDoctor;
        $out[] = $this->PatientType;
        $out[] = $this->VisitNumber;
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = $this->DischargeDisposition;
        $out[] = $this->DischargedtoLocation;
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = $this->AdmitDateTime;
        $out[] = $this->DischargeDateTime;
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';
        $out[] = '';

        return implode('|', $out).'\r';
    }


}