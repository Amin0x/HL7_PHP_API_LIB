<?php
namespace nabidh;

class DG1 {

    private $SetID_DG1 = '';
    private $DiagnosisCodingMethod = '';
    private $DiagnosisCodeDG1 = '';
    private $DiagnosisDescription = '';
    private $DiagnosisDateTime = '';
    private $DiagnosisType = '';
    private $MajorDiagnosticCategory = '';
    private $DiagnosticRelatedGroup = '';
    private $DRGApprovalIndicator = '';
    private $DRGGrouperReviewCode = '';
    private $OutlierType = '';
    private $OutlierDays = '';
    private $OutlierCost = '';
    private $GrouperVersionAndType = '';
    private $DiagnosisPriority = '';
    private $DiagnosingClinician = '';
    private $DiagnosisClassification = '';
    private $ConfidentialIndicator = '';
    private $AttestationDateTime = '';
    private $DiagnosisIdentifier = '';
    private $DiagnosisActionCode = '';

    /**
     * @return string
     */
    public function getSetIDDG1(): string
    {
        return $this->SetID_DG1;
    }

    /**
     * @param string $SetID_DG1
     */
    public function setSetIDDG1(string $SetID_DG1): void
    {
        $this->SetID_DG1 = $SetID_DG1;
    }

    /**
     * @return string
     */
    public function getDiagnosisCodingMethod(): string
    {
        return $this->DiagnosisCodingMethod;
    }

    /**
     * @param string $DiagnosisCodingMethod
     */
    public function setDiagnosisCodingMethod(string $DiagnosisCodingMethod): void
    {
        $this->DiagnosisCodingMethod = $DiagnosisCodingMethod;
    }

    /**
     * @return string
     */
    public function getDiagnosisCodeDG1(): string
    {
        return $this->DiagnosisCodeDG1;
    }

    /**
     * @param string $DiagnosisCodeDG1
     */
    public function setDiagnosisCodeDG1(string $DiagnosisCodeDG1): void
    {
        $this->DiagnosisCodeDG1 = $DiagnosisCodeDG1;
    }

    /**
     * @return string
     */
    public function getDiagnosisDescription(): string
    {
        return $this->DiagnosisDescription;
    }

    /**
     * @param string $DiagnosisDescription
     */
    public function setDiagnosisDescription(string $DiagnosisDescription): void
    {
        $this->DiagnosisDescription = $DiagnosisDescription;
    }

    /**
     * @return string
     */
    public function getDiagnosisDateTime(): string
    {
        return $this->DiagnosisDateTime;
    }

    /**
     * @param string $DiagnosisDateTime
     */
    public function setDiagnosisDateTime(string $DiagnosisDateTime): void
    {
        $this->DiagnosisDateTime = $DiagnosisDateTime;
    }

    /**
     * @return string
     */
    public function getDiagnosisType(): string
    {
        return $this->DiagnosisType;
    }

    /**
     * @param string $DiagnosisType
     */
    public function setDiagnosisType(string $DiagnosisType): void
    {
        $this->DiagnosisType = $DiagnosisType;
    }

    /**
     * @return string
     */
    public function getMajorDiagnosticCategory(): string
    {
        return $this->MajorDiagnosticCategory;
    }

    /**
     * @param string $MajorDiagnosticCategory
     */
    public function setMajorDiagnosticCategory(string $MajorDiagnosticCategory): void
    {
        $this->MajorDiagnosticCategory = $MajorDiagnosticCategory;
    }

    /**
     * @return string
     */
    public function getDiagnosticRelatedGroup(): string
    {
        return $this->DiagnosticRelatedGroup;
    }

    /**
     * @param string $DiagnosticRelatedGroup
     */
    public function setDiagnosticRelatedGroup(string $DiagnosticRelatedGroup): void
    {
        $this->DiagnosticRelatedGroup = $DiagnosticRelatedGroup;
    }

    /**
     * @return string
     */
    public function getDRGApprovalIndicator(): string
    {
        return $this->DRGApprovalIndicator;
    }

    /**
     * @param string $DRGApprovalIndicator
     */
    public function setDRGApprovalIndicator(string $DRGApprovalIndicator): void
    {
        $this->DRGApprovalIndicator = $DRGApprovalIndicator;
    }

    /**
     * @return string
     */
    public function getDRGGrouperReviewCode(): string
    {
        return $this->DRGGrouperReviewCode;
    }

    /**
     * @param string $DRGGrouperReviewCode
     */
    public function setDRGGrouperReviewCode(string $DRGGrouperReviewCode): void
    {
        $this->DRGGrouperReviewCode = $DRGGrouperReviewCode;
    }

    /**
     * @return string
     */
    public function getOutlierType(): string
    {
        return $this->OutlierType;
    }

    /**
     * @param string $OutlierType
     */
    public function setOutlierType(string $OutlierType): void
    {
        $this->OutlierType = $OutlierType;
    }

    /**
     * @return string
     */
    public function getOutlierDays(): string
    {
        return $this->OutlierDays;
    }

    /**
     * @param string $OutlierDays
     */
    public function setOutlierDays(string $OutlierDays): void
    {
        $this->OutlierDays = $OutlierDays;
    }

    /**
     * @return string
     */
    public function getOutlierCost(): string
    {
        return $this->OutlierCost;
    }

    /**
     * @param string $OutlierCost
     */
    public function setOutlierCost(string $OutlierCost): void
    {
        $this->OutlierCost = $OutlierCost;
    }

    /**
     * @return string
     */
    public function getGrouperVersionAndType(): string
    {
        return $this->GrouperVersionAndType;
    }

    /**
     * @param string $GrouperVersionAndType
     */
    public function setGrouperVersionAndType(string $GrouperVersionAndType): void
    {
        $this->GrouperVersionAndType = $GrouperVersionAndType;
    }

    /**
     * @return string
     */
    public function getDiagnosisPriority(): string
    {
        return $this->DiagnosisPriority;
    }

    /**
     * @param string $DiagnosisPriority
     */
    public function setDiagnosisPriority(string $DiagnosisPriority): void
    {
        $this->DiagnosisPriority = $DiagnosisPriority;
    }

    /**
     * @return string
     */
    public function getDiagnosingClinician(): string
    {
        return $this->DiagnosingClinician;
    }

    /**
     * @param string $DiagnosingClinician
     */
    public function setDiagnosingClinician(string $DiagnosingClinician): void
    {
        $this->DiagnosingClinician = $DiagnosingClinician;
    }

    /**
     * @return string
     */
    public function getDiagnosisClassification(): string
    {
        return $this->DiagnosisClassification;
    }

    /**
     * @param string $DiagnosisClassification
     */
    public function setDiagnosisClassification(string $DiagnosisClassification): void
    {
        $this->DiagnosisClassification = $DiagnosisClassification;
    }

    /**
     * @return string
     */
    public function getConfidentialIndicator(): string
    {
        return $this->ConfidentialIndicator;
    }

    /**
     * @param string $ConfidentialIndicator
     */
    public function setConfidentialIndicator(string $ConfidentialIndicator): void
    {
        $this->ConfidentialIndicator = $ConfidentialIndicator;
    }

    /**
     * @return string
     */
    public function getAttestationDateTime(): string
    {
        return $this->AttestationDateTime;
    }

    /**
     * @param string $AttestationDateTime
     */
    public function setAttestationDateTime(string $AttestationDateTime): void
    {
        $this->AttestationDateTime = $AttestationDateTime;
    }

    /**
     * @return string
     */
    public function getDiagnosisIdentifier(): string
    {
        return $this->DiagnosisIdentifier;
    }

    /**
     * @param string $DiagnosisIdentifier
     */
    public function setDiagnosisIdentifier(string $DiagnosisIdentifier): void
    {
        $this->DiagnosisIdentifier = $DiagnosisIdentifier;
    }

    /**
     * @return string
     */
    public function getDiagnosisActionCode(): string
    {
        return $this->DiagnosisActionCode;
    }

    /**
     * @param string $DiagnosisActionCode
     */
    public function setDiagnosisActionCode(string $DiagnosisActionCode): void
    {
        $this->DiagnosisActionCode = $DiagnosisActionCode;
    }

    public function toString()
    {
        $fields = 'DG1' . '|'
        .$this->SetID_DG1 . '|'
        .$this->DiagnosisCodingMethod . '|'
        .$this->DiagnosisCodeDG1 . '|'
        .$this->DiagnosisDescription . '|'
        .$this->DiagnosisDateTime . '|'
        .$this->DiagnosisType . '|'
        .$this->MajorDiagnosticCategory . '|'
        .$this->DiagnosticRelatedGroup . '|'
        .$this->DRGApprovalIndicator . '|'
        .$this->DRGGrouperReviewCode . '|'
        .$this->OutlierType . '|'
        .$this->OutlierDays . '|'
        .$this->OutlierCost . '|'
        .$this->GrouperVersionAndType . '|'
        .$this->DiagnosisPriority . '|'
        .$this->DiagnosingClinician . '|'
        .$this->DiagnosisClassification . '|'
        .$this->ConfidentialIndicator . '|'
        .$this->AttestationDateTime . '|'
        .$this->DiagnosisIdentifier . '|'
        .$this->DiagnosisActionCode . '\r';

        return $fields;
    }

}