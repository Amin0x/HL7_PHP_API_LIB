<?php
namespace amin0x\nabidh;

class DG1 {

    private $ID = '';
    private $DiagnosisCodingMethod = '';
    private $DiagnosisCodeDG1 = '';
    private $DiagnosisDescription = '';
    private $DiagnosisDateTime = '';
    private $DiagnosisType = '';
    private $DiagnosisPriority = '';
    private $DiagnosingClinician = '';
    private $DiagnosisActionCode = '';

    /**
     * DG1 constructor.
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
     * @return XCN|string
     */
    public function getDiagnosingClinician(): XCN|string
    {
        return $this->DiagnosingClinician;
    }

    /**
     * @param XCN $DiagnosingClinician
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
        $str[] = $this->ID;
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