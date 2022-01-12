<?php
namespace amin0x\nabidh;

class PR1 implements Segment {

    

    private $SetID_PR1 = '';
    private $ProcedureCodingMethod = '';
    private $ProcedureCode = '';
    private $ProcedureDescription = '';
    private $ProcedureDateTime = '';
    private $ProcedureFunctionalType = '';
    private $ProcedureMinutes = '';
    private $Anesthesiologist = '';
    private $AnesthesiaCode = '';
    private $AnesthesiaMinutes = '';
    private $Surgeon = '';
    private $ProcedurePractitioner = '';
    private $ConsentCode = '';
    private $ProcedurePriority = '';
    private $AssociatedDiagnosisCode = '';
    private $ProcedureCodeModifier = '';
    private $ProcedureDRGType = '';
    private $TissueTypeCode = '';
    private $ProcedureIdentifier = '';
    private $ProcedureActionCode = '';

    /**
     * PR1 constructor.
     * @param string $SetID_PR1
     * @param string $ProcedureCodingMethod
     * @param string $ProcedureCode
     * @param string $ProcedureDescription
     * @param string $ProcedureDateTime
     * @param string $ProcedureFunctionalType
     * @param string $ProcedureMinutes
     */
    public function __construct(string $SetID_PR1, string $ProcedureCodingMethod, string $ProcedureCode, string $ProcedureDescription, string $ProcedureDateTime, string $ProcedureFunctionalType, string $ProcedureMinutes)
    {
        $this->SetID_PR1 = $SetID_PR1;
        $this->ProcedureCodingMethod = $ProcedureCodingMethod;
        $this->ProcedureCode = $ProcedureCode;
        $this->ProcedureDescription = $ProcedureDescription;
        $this->ProcedureDateTime = $ProcedureDateTime;
        $this->ProcedureFunctionalType = $ProcedureFunctionalType;
        $this->ProcedureMinutes = $ProcedureMinutes;
    }

    /**
     * @return string
     */
    public function getSetIDPR1(): string
    {
        return $this->SetID_PR1;
    }

    /**
     * @param string $SetID_PR1
     */
    public function setSetIDPR1(string $SetID_PR1): void
    {
        $this->SetID_PR1 = $SetID_PR1;
    }

    /**
     * @return string
     */
    public function getProcedureCodingMethod(): string
    {
        return $this->ProcedureCodingMethod;
    }

    /**
     * @param string $ProcedureCodingMethod
     */
    public function setProcedureCodingMethod(string $ProcedureCodingMethod): void
    {
        $this->ProcedureCodingMethod = $ProcedureCodingMethod;
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
    public function getProcedureDescription(): string
    {
        return $this->ProcedureDescription;
    }

    /**
     * @param string $ProcedureDescription
     */
    public function setProcedureDescription(string $ProcedureDescription): void
    {
        $this->ProcedureDescription = $ProcedureDescription;
    }

    /**
     * @return string
     */
    public function getProcedureDateTime(): string
    {
        return $this->ProcedureDateTime;
    }

    /**
     * @param string $ProcedureDateTime
     */
    public function setProcedureDateTime(string $ProcedureDateTime): void
    {
        $this->ProcedureDateTime = $ProcedureDateTime;
    }

    /**
     * @return string
     */
    public function getProcedureFunctionalType(): string
    {
        return $this->ProcedureFunctionalType;
    }

    /**
     * @param string $ProcedureFunctionalType
     */
    public function setProcedureFunctionalType(string $ProcedureFunctionalType): void
    {
        $this->ProcedureFunctionalType = $ProcedureFunctionalType;
    }

    /**
     * @return string
     */
    public function getProcedureMinutes(): string
    {
        return $this->ProcedureMinutes;
    }

    /**
     * @param string $ProcedureMinutes
     */
    public function setProcedureMinutes(string $ProcedureMinutes): void
    {
        $this->ProcedureMinutes = $ProcedureMinutes;
    }

    /**
     * @return string
     */
    public function getAnesthesiologist(): string
    {
        return $this->Anesthesiologist;
    }

    /**
     * @param string $Anesthesiologist
     */
    public function setAnesthesiologist(string $Anesthesiologist): void
    {
        $this->Anesthesiologist = $Anesthesiologist;
    }

    /**
     * @return string
     */
    public function getAnesthesiaCode(): string
    {
        return $this->AnesthesiaCode;
    }

    /**
     * @param string $AnesthesiaCode
     */
    public function setAnesthesiaCode(string $AnesthesiaCode): void
    {
        $this->AnesthesiaCode = $AnesthesiaCode;
    }

    /**
     * @return string
     */
    public function getAnesthesiaMinutes(): string
    {
        return $this->AnesthesiaMinutes;
    }

    /**
     * @param string $AnesthesiaMinutes
     */
    public function setAnesthesiaMinutes(string $AnesthesiaMinutes): void
    {
        $this->AnesthesiaMinutes = $AnesthesiaMinutes;
    }

    /**
     * @return string
     */
    public function getSurgeon(): string
    {
        return $this->Surgeon;
    }

    /**
     * @param string $Surgeon
     */
    public function setSurgeon(string $Surgeon): void
    {
        $this->Surgeon = $Surgeon;
    }

    /**
     * @return string
     */
    public function getProcedurePractitioner(): string
    {
        return $this->ProcedurePractitioner;
    }

    /**
     * @param string $ProcedurePractitioner
     */
    public function setProcedurePractitioner(string $ProcedurePractitioner): void
    {
        $this->ProcedurePractitioner = $ProcedurePractitioner;
    }

    /**
     * @return string
     */
    public function getConsentCode(): string
    {
        return $this->ConsentCode;
    }

    /**
     * @param string $ConsentCode
     */
    public function setConsentCode(string $ConsentCode): void
    {
        $this->ConsentCode = $ConsentCode;
    }

    /**
     * @return string
     */
    public function getProcedurePriority(): string
    {
        return $this->ProcedurePriority;
    }

    /**
     * @param string $ProcedurePriority
     */
    public function setProcedurePriority(string $ProcedurePriority): void
    {
        $this->ProcedurePriority = $ProcedurePriority;
    }

    /**
     * @return string
     */
    public function getAssociatedDiagnosisCode(): string
    {
        return $this->AssociatedDiagnosisCode;
    }

    /**
     * @param string $AssociatedDiagnosisCode
     */
    public function setAssociatedDiagnosisCode(string $AssociatedDiagnosisCode): void
    {
        $this->AssociatedDiagnosisCode = $AssociatedDiagnosisCode;
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
    public function getProcedureDRGType(): string
    {
        return $this->ProcedureDRGType;
    }

    /**
     * @param string $ProcedureDRGType
     */
    public function setProcedureDRGType(string $ProcedureDRGType): void
    {
        $this->ProcedureDRGType = $ProcedureDRGType;
    }

    /**
     * @return string
     */
    public function getTissueTypeCode(): string
    {
        return $this->TissueTypeCode;
    }

    /**
     * @param string $TissueTypeCode
     */
    public function setTissueTypeCode(string $TissueTypeCode): void
    {
        $this->TissueTypeCode = $TissueTypeCode;
    }

    /**
     * @return string
     */
    public function getProcedureIdentifier(): string
    {
        return $this->ProcedureIdentifier;
    }

    /**
     * @param string $ProcedureIdentifier
     */
    public function setProcedureIdentifier(string $ProcedureIdentifier): void
    {
        $this->ProcedureIdentifier = $ProcedureIdentifier;
    }

    /**
     * @return string
     */
    public function getProcedureActionCode(): string
    {
        return $this->ProcedureActionCode;
    }

    /**
     * @param string $ProcedureActionCode
     */
    public function setProcedureActionCode(string $ProcedureActionCode): void
    {
        $this->ProcedureActionCode = $ProcedureActionCode;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}