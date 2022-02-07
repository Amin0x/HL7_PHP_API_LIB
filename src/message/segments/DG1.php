<?php
namespace amin0x\nabidh;

class DG1 {

    private $SetID_DG1 = '';
    private $DiagnosisCodingMethod = '';
    private $DiagnosisCodeDG1 = '';
    private $DiagnosisDescription = '';
    private $DiagnosisDateTime = '';
    private $DiagnosisType = '';
    private $DiagnosisPriority = '';
    private $DiagnosingClinician = '';
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
        $this->DiagnosisCodingMethod = new CE('', $DiagnosisCodingMethod, '');
    }

    /**
     * @return string
     */
    public function getDiagnosisCodeDG1(): CE|string
    {
        return $this->DiagnosisCodeDG1;
    }

    /**
     * @param string $DiagnosisCodeDG1
     */
    public function setDiagnosisCodeDG1(CE $DiagnosisCodeDG1): void
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
    public function getDiagnosingClinician(): XCN|string
    {
        return $this->DiagnosingClinician;
    }

    /**
     * @param string $DiagnosingClinician
     */
    public function setDiagnosingClinician(XCN $DiagnosingClinician): void
    {
        $this->DiagnosingClinician = $DiagnosingClinician;
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

    public function __toString()
    {
        $str = [];
        $str[] = 'DG1';
        $str[] = $this->SetID_DG1;
        $str[] = $this->DiagnosisCodingMethod;
        $str[] = $this->DiagnosisCodeDG1;
        $str[] = $this->DiagnosisDescription;
        $str[] = $this->DiagnosisDateTime;
        $str[] = $this->DiagnosisType;
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = $this->DiagnosisPriority;
        $str[] = $this->DiagnosingClinician;
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = '';
        $str[] = $this->DiagnosisActionCode;

        return implode('|', $str).'\r';
    }

}