<?php
namespace amin0x\nabidh;

class OBR implements Segment {

    private $ID = '';
    private $PlacerOrderNumber = '';
    private $FillerOrderNumber = '';
    private $UniversalServiceIdentifier = '';
    private $Priority_OBR = '';
    private $RequestedDateTime = '';
    private $ObservationDateTime = '';
    private $SpecimenActionCode = '';
    private $RelevantClinicalInformation = '';
    private $SpecimenReceivedDateTime = '';
    private $SpecimenSource = '';
    private $OrderingProvider = '';
    private $OrderCallbackPhoneNumber = '';
    private $ResultsStatusCahngeDateTime = '';
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
     * @return EI|string
     */
    public function getPlacerOrderNumber(): EI|string
    {
        return $this->PlacerOrderNumber;
    }

    /**
     * @param EI $PlacerOrderNumber
     */
    public function setPlacerOrderNumber(EI $PlacerOrderNumber): void
    {
        $this->PlacerOrderNumber = $PlacerOrderNumber;
    }

    /**
     * @return EI|string
     */
    public function getFillerOrderNumber(): EI|string
    {
        return $this->FillerOrderNumber;
    }

    /**
     * @param EI $FillerOrderNumber
     */
    public function setFillerOrderNumber(EI $FillerOrderNumber): void
    {
        $this->FillerOrderNumber = $FillerOrderNumber;
    }

    /**
     * @return CE|string
     */
    public function getUniversalServiceIdentifier(): CE|string
    {
        return $this->UniversalServiceIdentifier;
    }

    /**
     * @param CE $UniversalServiceIdentifier
     */
    public function setUniversalServiceIdentifier(CE $UniversalServiceIdentifier): void
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
    public function getSpecimenSource(): string
    {
        return $this->SpecimenSource;
    }

    /**
     * @param string $SpecimenSource
     */
    public function setSpecimenSource(string $SpecimenSource): void
    {
        $this->SpecimenSource = $SpecimenSource;
    }

    /**
     * @return XCN|string
     */
    public function getOrderingProvider(): XCN|string
    {
        return $this->OrderingProvider;
    }

    /**
     * @param XCN $OrderingProvider
     */
    public function setOrderingProvider(XCN $OrderingProvider): void
    {
        $this->OrderingProvider = $OrderingProvider;
    }

    /**
     * @return XTN|string
     */
    public function getOrderCallbackPhoneNumber(): XTN|string
    {
        return $this->OrderCallbackPhoneNumber;
    }

    /**
     * @param XTN $OrderCallbackPhoneNumber
     */
    public function setOrderCallbackPhoneNumber(XTN $OrderCallbackPhoneNumber): void
    {
        $this->OrderCallbackPhoneNumber = $OrderCallbackPhoneNumber;
    }

    /**
     * @return string
     */
    public function getResultsStatusCahngeDateTime(): string
    {
        return $this->ResultsStatusCahngeDateTime;
    }

    /**
     * @param string $ResultsStatusCahngeDateTime
     */
    public function setResultsStatusCahngeDateTime(string $ResultsStatusCahngeDateTime): void
    {
        $this->ResultsStatusCahngeDateTime = $ResultsStatusCahngeDateTime;
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
     * @return PRL|string
     */
    public function getParentResult(): PRL|string
    {
        return $this->ParentResult;
    }

    /**
     * @param PRL $ParentResult
     */
    public function setParentResult(PRL $ParentResult): void
    {
        $this->ParentResult = $ParentResult;
    }

    /**
     * @return TQ|string
     */
    public function getQuantityTiming(): TQ|string
    {
        return $this->QuantityTiming;
    }

    /**
     * @param TQ $QuantityTiming
     */
    public function setQuantityTiming(TQ $QuantityTiming): void
    {
        $this->QuantityTiming = $QuantityTiming;
    }

    /**
     * @return XCN|string
     */
    public function getResultCopiesTo(): XCN|string
    {
        return $this->ResultCopiesTo;
    }

    /**
     * @param XCN $ResultCopiesTo
     */
    public function setResultCopiesTo(XCN $ResultCopiesTo): void
    {
        $this->ResultCopiesTo = $ResultCopiesTo;
    }

    /**
     * @return EIP|string
     */
    public function getParent(): EIP|string
    {
        return $this->Parent;
    }

    /**
     * @param EIP $Parent
     */
    public function setParent(EIP $Parent): void
    {
        $this->Parent = $Parent;
    }

    /**
     * @return CE|string
     */
    public function getReasonforStudy(): CE|string
    {
        return $this->ReasonforStudy;
    }

    /**
     * @param CE $ReasonforStudy
     */
    public function setReasonforStudy(CE $ReasonforStudy): void
    {
        $this->ReasonforStudy = $ReasonforStudy;
    }

    /**
     * @return XCN|string
     */
    public function getPrincipalResultInterpreter(): XCN|string
    {
        return $this->PrincipalResultInterpreter;
    }

    /**
     * @param XCN $PrincipalResultInterpreter
     */
    public function setPrincipalResultInterpreter(XCN $PrincipalResultInterpreter): void
    {
        $this->PrincipalResultInterpreter = $PrincipalResultInterpreter;
    }

    public function __toString()
    {
        $fields = [];
        $fields[] = 'OBR';
        $fields[] = $this->ID;
        $fields[] = $this->PlacerOrderNumber;
        $fields[] = $this->FillerOrderNumber;
        $fields[] = $this->UniversalServiceIdentifier;
        $fields[] = $this->Priority_OBR;
        $fields[] = $this->RequestedDateTime;
        $fields[] = $this->ObservationDateTime;
        $fields[] = $this->SpecimenActionCode;
        $fields[] = $this->RelevantClinicalInformation;
        $fields[] = $this->SpecimenReceivedDateTime;
        $fields[] = $this->SpecimenSource;
        $fields[] = $this->OrderingProvider;
        $fields[] = $this->OrderCallbackPhoneNumber;
        $fields[] = $this->ResultsStatusCahngeDateTime;
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