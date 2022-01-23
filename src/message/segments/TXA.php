<?php
namespace amin0x\nabidh;
class TXA implements Segment {
    
    private $SetID_TXA = '';
    private $DocumentType = '';
    private $DocumentContentPresentation = '';
    private $ActivityDateTime = '';
    private $PrimaryActivityProviderCodeName = '';
    private $OriginationDateTime = '';
    private $TranscriptionDateTime = '';
    private $EditDateTime = '';
    private $OriginatorCodeName = '';
    private $AssignedDocumentAuthenticator = '';
    private $TranscriptionistCodeName = '';
    private $UniqueDocumentNumber = '';
    private $ParentDocumentNumber = '';
    private $PlacerOrderNumber = '';
    private $FillerOrderNumber = '';
    private $UniqueDocumentFileName = '';
    private $DocumentCompletionStatus = '';
    private $DocumentConfidentialityStatus = '';
    private $DocumentAvailabilityStatus = '';
    private $DocumentStorageStatus = '';
    private $DocumentChangeReason = '';
    private $AuthenticationPersonTimeStamp = '';
    private $DistributedCopies_CodeAndNameOfRecipients = '';

    /**
     * @return string
     */
    public function getSetIDTXA(): string
    {
        return $this->SetID_TXA;
    }

    /**
     * @param string $SetID_TXA
     */
    public function setSetIDTXA(string $SetID_TXA): void
    {
        $this->SetID_TXA = $SetID_TXA;
    }

    /**
     * @return string
     */
    public function getDocumentType(): string
    {
        return $this->DocumentType;
    }

    /**
     * @param string $DocumentType
     */
    public function setDocumentType(string $DocumentType): void
    {
        $this->DocumentType = $DocumentType;
    }

    /**
     * @return string
     */
    public function getDocumentContentPresentation(): string
    {
        return $this->DocumentContentPresentation;
    }

    /**
     * @param string $DocumentContentPresentation
     */
    public function setDocumentContentPresentation(string $DocumentContentPresentation): void
    {
        $this->DocumentContentPresentation = $DocumentContentPresentation;
    }

    /**
     * @return string
     */
    public function getActivityDateTime(): string
    {
        return $this->ActivityDateTime;
    }

    /**
     * @param string $ActivityDateTime
     */
    public function setActivityDateTime(string $ActivityDateTime): void
    {
        $this->ActivityDateTime = $ActivityDateTime;
    }

    /**
     * @return string
     */
    public function getPrimaryActivityProviderCodeName(): string
    {
        return $this->PrimaryActivityProviderCodeName;
    }

    /**
     * @param string $PrimaryActivityProviderCodeName
     */
    public function setPrimaryActivityProviderCodeName(string $PrimaryActivityProviderCodeName): void
    {
        $this->PrimaryActivityProviderCodeName = $PrimaryActivityProviderCodeName;
    }

    /**
     * @return string
     */
    public function getOriginationDateTime(): string
    {
        return $this->OriginationDateTime;
    }

    /**
     * @param string $OriginationDateTime
     */
    public function setOriginationDateTime(string $OriginationDateTime): void
    {
        $this->OriginationDateTime = $OriginationDateTime;
    }

    /**
     * @return string
     */
    public function getTranscriptionDateTime(): string
    {
        return $this->TranscriptionDateTime;
    }

    /**
     * @param string $TranscriptionDateTime
     */
    public function setTranscriptionDateTime(string $TranscriptionDateTime): void
    {
        $this->TranscriptionDateTime = $TranscriptionDateTime;
    }

    /**
     * @return string
     */
    public function getEditDateTime(): string
    {
        return $this->EditDateTime;
    }

    /**
     * @param string $EditDateTime
     */
    public function setEditDateTime(string $EditDateTime): void
    {
        $this->EditDateTime = $EditDateTime;
    }

    /**
     * @return string
     */
    public function getOriginatorCodeName(): string
    {
        return $this->OriginatorCodeName;
    }

    /**
     * @param string $OriginatorCodeName
     */
    public function setOriginatorCodeName(string $OriginatorCodeName): void
    {
        $this->OriginatorCodeName = $OriginatorCodeName;
    }

    /**
     * @return string
     */
    public function getAssignedDocumentAuthenticator(): string
    {
        return $this->AssignedDocumentAuthenticator;
    }

    /**
     * @param string $AssignedDocumentAuthenticator
     */
    public function setAssignedDocumentAuthenticator(string $AssignedDocumentAuthenticator): void
    {
        $this->AssignedDocumentAuthenticator = $AssignedDocumentAuthenticator;
    }

    /**
     * @return string
     */
    public function getTranscriptionistCodeName(): string
    {
        return $this->TranscriptionistCodeName;
    }

    /**
     * @param string $TranscriptionistCodeName
     */
    public function setTranscriptionistCodeName(string $TranscriptionistCodeName): void
    {
        $this->TranscriptionistCodeName = $TranscriptionistCodeName;
    }

    /**
     * @return string
     */
    public function getUniqueDocumentNumber(): string
    {
        return $this->UniqueDocumentNumber;
    }

    /**
     * @param string $UniqueDocumentNumber
     */
    public function setUniqueDocumentNumber(string $UniqueDocumentNumber): void
    {
        $this->UniqueDocumentNumber = $UniqueDocumentNumber;
    }

    /**
     * @return string
     */
    public function getParentDocumentNumber(): string
    {
        return $this->ParentDocumentNumber;
    }

    /**
     * @param string $ParentDocumentNumber
     */
    public function setParentDocumentNumber(string $ParentDocumentNumber): void
    {
        $this->ParentDocumentNumber = $ParentDocumentNumber;
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
    public function getUniqueDocumentFileName(): string
    {
        return $this->UniqueDocumentFileName;
    }

    /**
     * @param string $UniqueDocumentFileName
     */
    public function setUniqueDocumentFileName(string $UniqueDocumentFileName): void
    {
        $this->UniqueDocumentFileName = $UniqueDocumentFileName;
    }

    /**
     * @return string
     */
    public function getDocumentCompletionStatus(): string
    {
        return $this->DocumentCompletionStatus;
    }

    /**
     * @param string $DocumentCompletionStatus
     */
    public function setDocumentCompletionStatus(string $DocumentCompletionStatus): void
    {
        $this->DocumentCompletionStatus = $DocumentCompletionStatus;
    }

    /**
     * @return string
     */
    public function getDocumentConfidentialityStatus(): string
    {
        return $this->DocumentConfidentialityStatus;
    }

    /**
     * @param string $DocumentConfidentialityStatus
     */
    public function setDocumentConfidentialityStatus(string $DocumentConfidentialityStatus): void
    {
        $this->DocumentConfidentialityStatus = $DocumentConfidentialityStatus;
    }

    /**
     * @return string
     */
    public function getDocumentAvailabilityStatus(): string
    {
        return $this->DocumentAvailabilityStatus;
    }

    /**
     * @param string $DocumentAvailabilityStatus
     */
    public function setDocumentAvailabilityStatus(string $DocumentAvailabilityStatus): void
    {
        $this->DocumentAvailabilityStatus = $DocumentAvailabilityStatus;
    }

    /**
     * @return string
     */
    public function getDocumentStorageStatus(): string
    {
        return $this->DocumentStorageStatus;
    }

    /**
     * @param string $DocumentStorageStatus
     */
    public function setDocumentStorageStatus(string $DocumentStorageStatus): void
    {
        $this->DocumentStorageStatus = $DocumentStorageStatus;
    }

    /**
     * @return string
     */
    public function getDocumentChangeReason(): string
    {
        return $this->DocumentChangeReason;
    }

    /**
     * @param string $DocumentChangeReason
     */
    public function setDocumentChangeReason(string $DocumentChangeReason): void
    {
        $this->DocumentChangeReason = $DocumentChangeReason;
    }

    /**
     * @return string
     */
    public function getAuthenticationPersonTimeStamp(): string
    {
        return $this->AuthenticationPersonTimeStamp;
    }

    /**
     * @param string $AuthenticationPersonTimeStamp
     */
    public function setAuthenticationPersonTimeStamp(string $AuthenticationPersonTimeStamp): void
    {
        $this->AuthenticationPersonTimeStamp = $AuthenticationPersonTimeStamp;
    }

    /**
     * @return string
     */
    public function getDistributedCopiesCodeAndNameOfRecipients(): string
    {
        return $this->DistributedCopies_CodeAndNameOfRecipients;
    }

    /**
     * @param string $DistributedCopies_CodeAndNameOfRecipients
     */
    public function setDistributedCopiesCodeAndNameOfRecipients(string $DistributedCopies_CodeAndNameOfRecipients): void
    {
        $this->DistributedCopies_CodeAndNameOfRecipients = $DistributedCopies_CodeAndNameOfRecipients;
    }

}