<?php
namespace amin0x\nabidh;

class DRG {

    private $DiagnosticRelatedGroup = '';
    private $DRGAssignedDateTime = '';
    private $DRGApprovalIndicator = '';
    private $DRGGrouperReviewCode = '';
    private $OutlierType = '';
    private $OutlierDays = '';
    private $OutlierCost = '';
    private $DRGPayor = '';
    private $OutlierReimbursement = '';
    private $ConfidentialIndicator = '';
    private $DRGTransferType = '';

    /**
     * @return CE|string
     */
    public function getDiagnosticRelatedGroup(): CE|string
    {
        return $this->DiagnosticRelatedGroup;
    }

    /**
     * @param CE $DiagnosticRelatedGroup
     */
    public function setDiagnosticRelatedGroup(CE $DiagnosticRelatedGroup): void
    {
        $this->DiagnosticRelatedGroup = $DiagnosticRelatedGroup;
    }

    /**
     * @return string
     */
    public function getDRGAssignedDateTime(): string
    {
        return $this->DRGAssignedDateTime;
    }

    /**
     * @param string $DRGAssignedDateTime
     */
    public function setDRGAssignedDateTime(string $DRGAssignedDateTime): void
    {
        $this->DRGAssignedDateTime = $DRGAssignedDateTime;
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
     * @return CE|string
     */
    public function getOutlierType(): CE|string
    {
        return $this->OutlierType;
    }

    /**
     * @param CE $OutlierType
     */
    public function setOutlierType(CE $OutlierType): void
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
     * @return CP|string
     */
    public function getOutlierCost(): CP|string
    {
        return $this->OutlierCost;
    }

    /**
     * @param CP $OutlierCost
     */
    public function setOutlierCost(CP $OutlierCost): void
    {
        $this->OutlierCost = $OutlierCost;
    }

    /**
     * @return string
     */
    public function getDRGPayor(): string
    {
        return $this->DRGPayor;
    }

    /**
     * @param string $DRGPayor
     */
    public function setDRGPayor(string $DRGPayor): void
    {
        $this->DRGPayor = $DRGPayor;
    }

    /**
     * @return CP|string
     */
    public function getOutlierReimbursement(): CP|string
    {
        return $this->OutlierReimbursement;
    }

    /**
     * @param CP $OutlierReimbursement
     */
    public function setOutlierReimbursement(CP $OutlierReimbursement): void
    {
        $this->OutlierReimbursement = $OutlierReimbursement;
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
    public function getDRGTransferType(): string
    {
        return $this->DRGTransferType;
    }

    /**
     * @param string $DRGTransferType
     */
    public function setDRGTransferType(string $DRGTransferType): void
    {
        $this->DRGTransferType = $DRGTransferType;
    }

    public function __toString()
    {
        $str = 'DRG' . '|'
        .$this->DiagnosticRelatedGroup . '|'
        .$this->DRGAssignedDateTime . '|'
        .$this->DRGApprovalIndicator . '|'
        .$this->DRGGrouperReviewCode . '|'
        .$this->OutlierType . '|'
        .$this->OutlierDays . '|'
        .$this->OutlierCost . '|'
        .$this->DRGPayor . '|'
        .$this->OutlierReimbursement . '|'
        .$this->ConfidentialIndicator . '|'
        .$this->DRGTransferType . '|';

        return rtrim($str, '|');
    }

}