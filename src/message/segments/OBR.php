<?php
namespace amin0x\nabidh;

class OBR implements Segment {


    private $SetID_OBR = '';
    private $PlacerOrderNumber = '';
    private $FillerOrderNumber = '';
    private $UniversalServiceIdentifier = '';
    private $Priority_OBR = '';
    private $RequestedDateTime = '';
    private $ObservationDateTime = '';
    private $SpecimenActionCode = '';
    private $RelevantClinicalInformation = '';
    private $SpecimenReceivedDateTime = '';
    private $SpecimenSourceNameorCode = '';
    private $OrderingProvider = '';
    private $OrderCallbackPhoneNumber = '';
    private $ResultsRptStatusChngDateTime = '';
    private $DiagnosticServiceSectionID = '';
    private $ResultStatus = '';
    private $ParentResult = '';
    private $QuantityTiming = '';
    private $ResultCopiesTo = '';
    private $Parent = '';
    private $ReasonforStudy = '';
    private $PrincipalResultInterpreter = '';


    /**
     * OBR constructor.
     * @param string $SetID_OBR
     */
    public function __construct(string $SetID_OBR)
    {
        $this->SetID_OBR = $SetID_OBR;
    }

    /**
     * @return string
     */
    public function getSetIDOBR(): string
    {
        return $this->SetID_OBR;
    }

    /**
     * @param string $SetID_OBR
     */
    public function setSetIDOBR(string $SetID_OBR): void
    {
        $this->SetID_OBR = $SetID_OBR;
    }

    /**
     * @return string
     */
    public function getPlacerOrderNumber(): string
    {
        return $this->PlacerOrderNumber;
    }

    /**
     * @param string $PlacerOrderNumber
     */
    public function setPlacerOrderNumber(string $PlacerOrderNumber): void
    {
        $this->PlacerOrderNumber = $PlacerOrderNumber;
    }

    /**
     * @return string
     */
    public function getFillerOrderNumber(): string
    {
        return $this->FillerOrderNumber;
    }

    /**
     * @param string $FillerOrderNumber
     */
    public function setFillerOrderNumber(string $FillerOrderNumber): void
    {
        $this->FillerOrderNumber = $FillerOrderNumber;
    }

    /**
     * @return string
     */
    public function getUniversalServiceIdentifier(): string
    {
        return $this->UniversalServiceIdentifier;
    }

    /**
     * @param string $UniversalServiceIdentifier
     */
    public function setUniversalServiceIdentifier(string $UniversalServiceIdentifier): void
    {
        $this->UniversalServiceIdentifier = $UniversalServiceIdentifier;
    }

    /**
     * @return string
     */
    public function getPriorityOBR(): string
    {
        return $this->Priority_OBR;
    }

    /**
     * @param string $Priority_OBR
     */
    public function setPriorityOBR(string $Priority_OBR): void
    {
        $this->Priority_OBR = $Priority_OBR;
    }

    /**
     * @return string
     */
    public function getRequestedDateTime(): string
    {
        return $this->RequestedDateTime;
    }

    /**
     * @param string $RequestedDateTime
     */
    public function setRequestedDateTime(string $RequestedDateTime): void
    {
        $this->RequestedDateTime = $RequestedDateTime;
    }

    /**
     * @return string
     */
    public function getObservationDateTime(): string
    {
        return $this->ObservationDateTime;
    }

    /**
     * @param string $ObservationDateTime
     */
    public function setObservationDateTime(string $ObservationDateTime): void
    {
        $this->ObservationDateTime = $ObservationDateTime;
    }

    /**
     * @return string
     */
    public function getSpecimenActionCode(): string
    {
        return $this->SpecimenActionCode;
    }

    /**
     * @param string $SpecimenActionCode
     */
    public function setSpecimenActionCode(string $SpecimenActionCode): void
    {
        $this->SpecimenActionCode = $SpecimenActionCode;
    }

    /**
     * @return string
     */
    public function getRelevantClinicalInformation(): string
    {
        return $this->RelevantClinicalInformation;
    }

    /**
     * @param string $RelevantClinicalInformation
     */
    public function setRelevantClinicalInformation(string $RelevantClinicalInformation): void
    {
        $this->RelevantClinicalInformation = $RelevantClinicalInformation;
    }

    /**
     * @return string
     */
    public function getSpecimenReceivedDateTime(): string
    {
        return $this->SpecimenReceivedDateTime;
    }

    /**
     * @param string $SpecimenReceivedDateTime
     */
    public function setSpecimenReceivedDateTime(string $SpecimenReceivedDateTime): void
    {
        $this->SpecimenReceivedDateTime = $SpecimenReceivedDateTime;
    }

    /**
     * @return string
     */
    public function getSpecimenSourceNameorCode(): string
    {
        return $this->SpecimenSourceNameorCode;
    }

    /**
     * @param string $SpecimenSourceNameorCode
     */
    public function setSpecimenSourceNameorCode(string $SpecimenSourceNameorCode): void
    {
        $this->SpecimenSourceNameorCode = $SpecimenSourceNameorCode;
    }

    /**
     * @return string
     */
    public function getOrderingProvider(): string
    {
        return $this->OrderingProvider;
    }

    /**
     * @param string $OrderingProvider
     */
    public function setOrderingProvider(string $OrderingProvider): void
    {
        $this->OrderingProvider = $OrderingProvider;
    }

    /**
     * @return string
     */
    public function getOrderCallbackPhoneNumber(): string
    {
        return $this->OrderCallbackPhoneNumber;
    }

    /**
     * @param string $OrderCallbackPhoneNumber
     */
    public function setOrderCallbackPhoneNumber(string $OrderCallbackPhoneNumber): void
    {
        $this->OrderCallbackPhoneNumber = $OrderCallbackPhoneNumber;
    }

    /**
     * @return string
     */
    public function getResultsRptStatusChngDateTime(): string
    {
        return $this->ResultsRptStatusChngDateTime;
    }

    /**
     * @param string $ResultsRptStatusChngDateTime
     */
    public function setResultsRptStatusChngDateTime(string $ResultsRptStatusChngDateTime): void
    {
        $this->ResultsRptStatusChngDateTime = $ResultsRptStatusChngDateTime;
    }

    /**
     * @return string
     */
    public function getDiagnosticServiceSectionID(): string
    {
        return $this->DiagnosticServiceSectionID;
    }

    /**
     * @param string $DiagnosticServiceSectionID
     */
    public function setDiagnosticServiceSectionID(string $DiagnosticServiceSectionID): void
    {
        $this->DiagnosticServiceSectionID = $DiagnosticServiceSectionID;
    }

    /**
     * @return string
     */
    public function getResultStatus(): string
    {
        return $this->ResultStatus;
    }

    /**
     * @param string $ResultStatus
     */
    public function setResultStatus(string $ResultStatus): void
    {
        $this->ResultStatus = $ResultStatus;
    }

    /**
     * @return string
     */
    public function getParentResult(): string
    {
        return $this->ParentResult;
    }

    /**
     * @param string $ParentResult
     */
    public function setParentResult(string $ParentResult): void
    {
        $this->ParentResult = $ParentResult;
    }

    /**
     * @return string
     */
    public function getQuantityTiming(): string
    {
        return $this->QuantityTiming;
    }

    /**
     * @param string $QuantityTiming
     */
    public function setQuantityTiming(string $QuantityTiming): void
    {
        $this->QuantityTiming = $QuantityTiming;
    }

    /**
     * @return string
     */
    public function getResultCopiesTo(): string
    {
        return $this->ResultCopiesTo;
    }

    /**
     * @param string $ResultCopiesTo
     */
    public function setResultCopiesTo(string $ResultCopiesTo): void
    {
        $this->ResultCopiesTo = $ResultCopiesTo;
    }

    /**
     * @return string
     */
    public function getParent(): string
    {
        return $this->Parent;
    }

    /**
     * @param string $Parent
     */
    public function setParent(string $Parent): void
    {
        $this->Parent = $Parent;
    }

    /**
     * @return string
     */
    public function getReasonforStudy(): string
    {
        return $this->ReasonforStudy;
    }

    /**
     * @param string $ReasonforStudy
     */
    public function setReasonforStudy(string $ReasonforStudy): void
    {
        $this->ReasonforStudy = $ReasonforStudy;
    }

    /**
     * @return string
     */
    public function getPrincipalResultInterpreter(): string
    {
        return $this->PrincipalResultInterpreter;
    }

    /**
     * @param string $PrincipalResultInterpreter
     */
    public function setPrincipalResultInterpreter(string $PrincipalResultInterpreter): void
    {
        $this->PrincipalResultInterpreter = $PrincipalResultInterpreter;
    }

    public function __toString()
    {
        $fields = [];
        $fields[] = 'OBR';
        $fields[] = $this->SetID_OBR;
        $fields[] = $this->PlacerOrderNumber;
        $fields[] = $this->FillerOrderNumber;
        $fields[] = $this->UniversalServiceIdentifier;
        $fields[] = $this->Priority_OBR;
        $fields[] = $this->RequestedDateTime;
        $fields[] = $this->ObservationDateTime;
        $fields[] = $this->SpecimenActionCode;
        $fields[] = $this->RelevantClinicalInformation;
        $fields[] = $this->SpecimenReceivedDateTime;
        $fields[] = $this->SpecimenSourceNameorCode;
        $fields[] = $this->OrderingProvider;
        $fields[] = $this->OrderCallbackPhoneNumber;
        $fields[] = $this->ResultsRptStatusChngDateTime;
        $fields[] = $this->DiagnosticServiceSectionID;
        $fields[] = $this->ResultStatus;
        $fields[] = $this->ParentResult;
        $fields[] = $this->QuantityTiming;
        $fields[] = $this->ResultCopiesTo;
        $fields[] = $this->Parent;
        $fields[] = $this->ReasonforStudy;
        $fields[] = $this->PrincipalResultInterpreter;

        return implode('|', $fields) . '\r';
    }


}