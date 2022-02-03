<?php


namespace amin0x\nabidh;


class PRB implements Segment
{
    private $ActionCode = '';
    private $ActionDateTime = '';
    private $ProblemID = '';
    private $ProblemInstanceID = '';
    private $ProblemManagementDiscipline = '';

    /**
     * @return string
     */
    public function getActionCode(): string
    {
        return $this->ActionCode;
    }

    /**
     * @param string $ActionCode
     */
    public function setActionCode(string $ActionCode): void
    {
        $this->ActionCode = $ActionCode;
    }

    /**
     * @return string
     */
    public function getActionDateTime(): string
    {
        return $this->ActionDateTime;
    }

    /**
     * @param string $ActionDateTime
     */
    public function setActionDateTime(string $ActionDateTime): void
    {
        $this->ActionDateTime = $ActionDateTime;
    }

    /**
     * @return string
     */
    public function getProblemID(): string
    {
        return $this->ProblemID;
    }

    /**
     * @param string $ProblemID
     */
    public function setProblemID(string $ProblemID): void
    {
        $this->ProblemID = $ProblemID;
    }

    /**
     * @return string
     */
    public function getProblemInstanceID(): string
    {
        return $this->ProblemInstanceID;
    }

    /**
     * @param string $ProblemInstanceID
     */
    public function setProblemInstanceID(string $ProblemInstanceID): void
    {
        $this->ProblemInstanceID = $ProblemInstanceID;
    }

    /**
     * @return string
     */
    public function getProblemManagementDiscipline(): string
    {
        return $this->ProblemManagementDiscipline;
    }

    /**
     * @param string $ProblemManagementDiscipline
     */
    public function setProblemManagementDiscipline(string $ProblemManagementDiscipline): void
    {
        $this->ProblemManagementDiscipline = $ProblemManagementDiscipline;
    }


}