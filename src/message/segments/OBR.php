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
private $ObservationEndDateTime = '';
private $CollectionVolume = '';
private $CollectionIdentifier = '';
private $SpecimenActionCode = '';
private $DangerCode = '';
private $RelevantClinicalInformation = '';
private $SpecimenReceivedDateTime = '';
private $SpecimenSourceNameorCode = '';
private $OrderingProvider = '';
private $OrderCallbackPhoneNumber = '';
private $PlacerField1 = '';
private $PlacerField2 = '';
private $FillerField1 = '';
private $FillerField2 = '';
private $ResultsRptStatusChngDateTime = '';
private $ChargetoPractice = '';
private $DiagnosticServiceSectionID = '';
private $ResultStatus = '';
private $ParentResult = '';
private $QuantityTiming = '';
private $ResultCopiesTo = '';
private $Parent = '';
private $TransportationMode = '';
private $ReasonforStudy = '';
private $PrincipalResultInterpreter = '';
private $AssistantResultInterpreter = '';
private $Technician = '';
private $Transcriptionist = '';
private $ScheduledDateTime = '';
private $NumberofSampleContainers = '';
private $TransportLogisticsofCollectedSample = '';
private $CollectorComment = '';
private $TransportArrangementResponsibility = '';
private $TransportArranged = '';
private $EscortRequired = '';
private $PlannedPatientTransportComment = '';
private $ProcedureCode = '';
private $ProcedureCodeModifier = '';
private $PlacerSupplementalServiceInformation = '';
private $FillerSupplementalServiceInformation = '';
private $MedicallyNecessaryDuplicateProcedureReason = '';
private $ResultHandling = '';
private $ParentUniversalServiceIdentifier = '';

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
    public function getObservationEndDateTime(): string
    {
        return $this->ObservationEndDateTime;
    }

    /**
     * @param string $ObservationEndDateTime
     */
    public function setObservationEndDateTime(string $ObservationEndDateTime): void
    {
        $this->ObservationEndDateTime = $ObservationEndDateTime;
    }

    /**
     * @return string
     */
    public function getCollectionVolume(): string
    {
        return $this->CollectionVolume;
    }

    /**
     * @param string $CollectionVolume
     */
    public function setCollectionVolume(string $CollectionVolume): void
    {
        $this->CollectionVolume = $CollectionVolume;
    }

    /**
     * @return string
     */
    public function getCollectionIdentifier(): string
    {
        return $this->CollectionIdentifier;
    }

    /**
     * @param string $CollectionIdentifier
     */
    public function setCollectionIdentifier(string $CollectionIdentifier): void
    {
        $this->CollectionIdentifier = $CollectionIdentifier;
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
    public function getDangerCode(): string
    {
        return $this->DangerCode;
    }

    /**
     * @param string $DangerCode
     */
    public function setDangerCode(string $DangerCode): void
    {
        $this->DangerCode = $DangerCode;
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
    public function getPlacerField1(): string
    {
        return $this->PlacerField1;
    }

    /**
     * @param string $PlacerField1
     */
    public function setPlacerField1(string $PlacerField1): void
    {
        $this->PlacerField1 = $PlacerField1;
    }

    /**
     * @return string
     */
    public function getPlacerField2(): string
    {
        return $this->PlacerField2;
    }

    /**
     * @param string $PlacerField2
     */
    public function setPlacerField2(string $PlacerField2): void
    {
        $this->PlacerField2 = $PlacerField2;
    }

    /**
     * @return string
     */
    public function getFillerField1(): string
    {
        return $this->FillerField1;
    }

    /**
     * @param string $FillerField1
     */
    public function setFillerField1(string $FillerField1): void
    {
        $this->FillerField1 = $FillerField1;
    }

    /**
     * @return string
     */
    public function getFillerField2(): string
    {
        return $this->FillerField2;
    }

    /**
     * @param string $FillerField2
     */
    public function setFillerField2(string $FillerField2): void
    {
        $this->FillerField2 = $FillerField2;
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
    public function getChargetoPractice(): string
    {
        return $this->ChargetoPractice;
    }

    /**
     * @param string $ChargetoPractice
     */
    public function setChargetoPractice(string $ChargetoPractice): void
    {
        $this->ChargetoPractice = $ChargetoPractice;
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
    public function getTransportationMode(): string
    {
        return $this->TransportationMode;
    }

    /**
     * @param string $TransportationMode
     */
    public function setTransportationMode(string $TransportationMode): void
    {
        $this->TransportationMode = $TransportationMode;
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

    /**
     * @return string
     */
    public function getAssistantResultInterpreter(): string
    {
        return $this->AssistantResultInterpreter;
    }

    /**
     * @param string $AssistantResultInterpreter
     */
    public function setAssistantResultInterpreter(string $AssistantResultInterpreter): void
    {
        $this->AssistantResultInterpreter = $AssistantResultInterpreter;
    }

    /**
     * @return string
     */
    public function getTechnician(): string
    {
        return $this->Technician;
    }

    /**
     * @param string $Technician
     */
    public function setTechnician(string $Technician): void
    {
        $this->Technician = $Technician;
    }

    /**
     * @return string
     */
    public function getTranscriptionist(): string
    {
        return $this->Transcriptionist;
    }

    /**
     * @param string $Transcriptionist
     */
    public function setTranscriptionist(string $Transcriptionist): void
    {
        $this->Transcriptionist = $Transcriptionist;
    }

    /**
     * @return string
     */
    public function getScheduledDateTime(): string
    {
        return $this->ScheduledDateTime;
    }

    /**
     * @param string $ScheduledDateTime
     */
    public function setScheduledDateTime(string $ScheduledDateTime): void
    {
        $this->ScheduledDateTime = $ScheduledDateTime;
    }

    /**
     * @return string
     */
    public function getNumberofSampleContainers(): string
    {
        return $this->NumberofSampleContainers;
    }

    /**
     * @param string $NumberofSampleContainers
     */
    public function setNumberofSampleContainers(string $NumberofSampleContainers): void
    {
        $this->NumberofSampleContainers = $NumberofSampleContainers;
    }

    /**
     * @return string
     */
    public function getTransportLogisticsofCollectedSample(): string
    {
        return $this->TransportLogisticsofCollectedSample;
    }

    /**
     * @param string $TransportLogisticsofCollectedSample
     */
    public function setTransportLogisticsofCollectedSample(string $TransportLogisticsofCollectedSample): void
    {
        $this->TransportLogisticsofCollectedSample = $TransportLogisticsofCollectedSample;
    }

    /**
     * @return string
     */
    public function getCollectorComment(): string
    {
        return $this->CollectorComment;
    }

    /**
     * @param string $CollectorComment
     */
    public function setCollectorComment(string $CollectorComment): void
    {
        $this->CollectorComment = $CollectorComment;
    }

    /**
     * @return string
     */
    public function getTransportArrangementResponsibility(): string
    {
        return $this->TransportArrangementResponsibility;
    }

    /**
     * @param string $TransportArrangementResponsibility
     */
    public function setTransportArrangementResponsibility(string $TransportArrangementResponsibility): void
    {
        $this->TransportArrangementResponsibility = $TransportArrangementResponsibility;
    }

    /**
     * @return string
     */
    public function getTransportArranged(): string
    {
        return $this->TransportArranged;
    }

    /**
     * @param string $TransportArranged
     */
    public function setTransportArranged(string $TransportArranged): void
    {
        $this->TransportArranged = $TransportArranged;
    }

    /**
     * @return string
     */
    public function getEscortRequired(): string
    {
        return $this->EscortRequired;
    }

    /**
     * @param string $EscortRequired
     */
    public function setEscortRequired(string $EscortRequired): void
    {
        $this->EscortRequired = $EscortRequired;
    }

    /**
     * @return string
     */
    public function getPlannedPatientTransportComment(): string
    {
        return $this->PlannedPatientTransportComment;
    }

    /**
     * @param string $PlannedPatientTransportComment
     */
    public function setPlannedPatientTransportComment(string $PlannedPatientTransportComment): void
    {
        $this->PlannedPatientTransportComment = $PlannedPatientTransportComment;
    }

    /**
     * @return string
     */
    public function getProcedureCode(): string
    {
        return $this->ProcedureCode;
    }

    /**
     * @param string $ProcedureCode
     */
    public function setProcedureCode(string $ProcedureCode): void
    {
        $this->ProcedureCode = $ProcedureCode;
    }

    /**
     * @return string
     */
    public function getProcedureCodeModifier(): string
    {
        return $this->ProcedureCodeModifier;
    }

    /**
     * @param string $ProcedureCodeModifier
     */
    public function setProcedureCodeModifier(string $ProcedureCodeModifier): void
    {
        $this->ProcedureCodeModifier = $ProcedureCodeModifier;
    }

    /**
     * @return string
     */
    public function getPlacerSupplementalServiceInformation(): string
    {
        return $this->PlacerSupplementalServiceInformation;
    }

    /**
     * @param string $PlacerSupplementalServiceInformation
     */
    public function setPlacerSupplementalServiceInformation(string $PlacerSupplementalServiceInformation): void
    {
        $this->PlacerSupplementalServiceInformation = $PlacerSupplementalServiceInformation;
    }

    /**
     * @return string
     */
    public function getFillerSupplementalServiceInformation(): string
    {
        return $this->FillerSupplementalServiceInformation;
    }

    /**
     * @param string $FillerSupplementalServiceInformation
     */
    public function setFillerSupplementalServiceInformation(string $FillerSupplementalServiceInformation): void
    {
        $this->FillerSupplementalServiceInformation = $FillerSupplementalServiceInformation;
    }

    /**
     * @return string
     */
    public function getMedicallyNecessaryDuplicateProcedureReason(): string
    {
        return $this->MedicallyNecessaryDuplicateProcedureReason;
    }

    /**
     * @param string $MedicallyNecessaryDuplicateProcedureReason
     */
    public function setMedicallyNecessaryDuplicateProcedureReason(string $MedicallyNecessaryDuplicateProcedureReason): void
    {
        $this->MedicallyNecessaryDuplicateProcedureReason = $MedicallyNecessaryDuplicateProcedureReason;
    }

    /**
     * @return string
     */
    public function getResultHandling(): string
    {
        return $this->ResultHandling;
    }

    /**
     * @param string $ResultHandling
     */
    public function setResultHandling(string $ResultHandling): void
    {
        $this->ResultHandling = $ResultHandling;
    }

    /**
     * @return string
     */
    public function getParentUniversalServiceIdentifier(): string
    {
        return $this->ParentUniversalServiceIdentifier;
    }

    /**
     * @param string $ParentUniversalServiceIdentifier
     */
    public function setParentUniversalServiceIdentifier(string $ParentUniversalServiceIdentifier): void
    {
        $this->ParentUniversalServiceIdentifier = $ParentUniversalServiceIdentifier;
    }

    public function __toString()
    {
        return '';
    }


}