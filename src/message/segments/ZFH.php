<?php
namespace amin0x\nabidh;
class ZFH implements Segment {
    
    private $ID = '';
    private $FamilyMember = '';
    private $Diagnosis = '';
    private $NoteText = '';
    private $Status = '';
    private $FromTime = '';
    private $ToTime = '';
    private $EnteredBy = '';

    /**
     * ZFH constructor.
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
    public function getFamilyMember(): CE|string
    {
        return $this->FamilyMember;
    }

    /**
     * @param string $FamilyMember
     */
    public function setFamilyMember(CE $FamilyMember): void
    {
        $this->FamilyMember = $FamilyMember;
    }

    /**
     * @return string
     */
    public function getDiagnosis(): CE|string
    {
        return $this->Diagnosis;
    }

    /**
     * @param string $Diagnosis
     */
    public function setDiagnosis(CE $Diagnosis): void
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
     * @return CE|string
     */
    public function getEnteredBy(): CE|string
    {
        return $this->EnteredBy;
    }

    /**
     * @param CE $EnteredBy
     */
    public function setEnteredBy(CE $EnteredBy): void
    {
        $this->EnteredBy = $EnteredBy;
    }

    public function __toString()
    {
        $str = $this->ID . '|';
        $str .= $this->FamilyMember . '|';
        $str .= $this->Diagnosis . '|';
        $str .= $this->NoteText . '|';
        $str .= $this->Status . '|';
        $str .= $this->FromTime . '|';
        $str .= $this->ToTime . '|';
        $str .= $this->EnteredBy;

        return $str . '\r';
    }
}