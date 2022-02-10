<?php
namespace amin0x\nabidh;

class PR1 implements Segment {

    private $ID = '';
    private $ProcedureCode = '';
    private $ProcedureDescription = '';
    private $ProcedureDateTime = '';
    private $Surgeon = '';
    private $ProcedurePriority = '';
    private $ProcedureIdentifier = '';
    private $ProcedureActionCode = '';

    /**
     * PR1 constructor.
     */
    public function __construct($ID)
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
    public function getProcedureCode(): CE|string
    {
        return $this->ProcedureCode;
    }

    /**
     * @param string $ProcedureCode
     */
    public function setProcedureCode(CE $ProcedureCode): void
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
    public function getSurgeon(): XCN|string
    {
        return $this->Surgeon;
    }

    /**
     * @param string $Surgeon
     */
    public function setSurgeon(XCN $Surgeon): void
    {
        $this->Surgeon = $Surgeon;
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
        $fields = [];
        $fields[] = 'PR1';
        $fields[] = $this->ID;
        $fields[] = '';
        $fields[] = $this->ProcedureCode;
        $fields[] = $this->ProcedureDescription;
        $fields[] = $this->ProcedureDateTime;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->Surgeon;
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->ProcedurePriority;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->ProcedureIdentifier;
        $fields[] = $this->ProcedureActionCode;

        return implode('|', $fields).'\r';
    }


}