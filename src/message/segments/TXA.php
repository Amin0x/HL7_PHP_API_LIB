<?php
namespace amin0x\nabidh;
class TXA implements Segment {
    
    private $SetID_TXA = '';
    private $DocumentType = '';
    private $ActivityDateTime = '';
    private $PrimaryActivityProviderCodeName = '';
    private $TranscriptionDateTime = '';
    private $OriginatorCodeName = '';
    private $UniqueDocumentNumber = '';
    private $UniqueDocumentFileName = '';
    private $DocumentCompletionStatus = '';
    private $DocumentAvailabilityStatus = '';
    private $AuthenticationPersonTimeStamp = '';


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

    public function __toString()
    {
        $fields = [];
        $fields[] = 'TXA';
        $fields[] = $this->SetID_TXA;
        $fields[] = $this->DocumentType;
        $fields[] = '';
        $fields[] = $this->ActivityDateTime;
        $fields[] = $this->PrimaryActivityProviderCodeName;
        $fields[] = '';
        $fields[] = $this->TranscriptionDateTime;
        $fields[] = '';
        $fields[] = $this->OriginatorCodeName;
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->UniqueDocumentNumber;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->UniqueDocumentFileName;
        $fields[] = $this->DocumentCompletionStatus;
        $fields[] = '';
        $fields[] = $this->DocumentAvailabilityStatus;
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->AuthenticationPersonTimeStamp;
        $fields[] = '';

        return implode('|', $fields) . '\r';
    }

}