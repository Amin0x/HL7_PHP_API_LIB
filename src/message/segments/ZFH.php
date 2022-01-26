<?php
namespace amin0x\nabidh;
class ZFH implements Segment {
    
    private $SetID_ZFH = '';
    private $FamilyMember = '';
    private $Diagnosis = '';
    private $NoteText = '';
    private $Status = '';
    private $FromTime = '';
    private $ToTime = '';
    private $EnteredBy = '';

    /**
     * @return string
     */
    public function getSetIDZFH(): string
    {
        return $this->SetID_ZFH;
    }

    /**
     * @param string $SetID_ZFH
     */
    public function setSetIDZFH(string $SetID_ZFH): void
    {
        $this->SetID_ZFH = $SetID_ZFH;
    }

    /**
     * @return string
     */
    public function getFamilyMember(): string
    {
        return $this->FamilyMember;
    }

    /**
     * @param string $FamilyMember
     */
    public function setFamilyMember(string $FamilyMember): void
    {
        $this->FamilyMember = $FamilyMember;
    }

    /**
     * @return string
     */
    public function getDiagnosis(): string
    {
        return $this->Diagnosis;
    }

    /**
     * @param string $Diagnosis
     */
    public function setDiagnosis(string $Diagnosis): void
    {
        $this->Diagnosis = $Diagnosis;
    }

    /**
     * @return string
     */
    public function getNoteText(): string
    {
        return $this->NoteText;
    }

    /**
     * @param string $NoteText
     */
    public function setNoteText(string $NoteText): void
    {
        $this->NoteText = $NoteText;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     */
    public function setStatus(string $Status): void
    {
        $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getFromTime(): string
    {
        return $this->FromTime;
    }

    /**
     * @param string $FromTime
     */
    public function setFromTime(string $FromTime): void
    {
        $this->FromTime = $FromTime;
    }

    /**
     * @return string
     */
    public function getToTime(): string
    {
        return $this->ToTime;
    }

    /**
     * @param string $ToTime
     */
    public function setToTime(string $ToTime): void
    {
        $this->ToTime = $ToTime;
    }

    /**
     * @return string
     */
    public function getEnteredBy(): string
    {
        return $this->EnteredBy;
    }

    /**
     * @param string $EnteredBy
     */
    public function setEnteredBy(string $EnteredBy): void
    {
        $this->EnteredBy = $EnteredBy;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }
}