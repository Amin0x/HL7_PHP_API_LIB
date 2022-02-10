<?php
namespace amin0x\nabidh;
use BadMethodCallException;

class TQ1 implements Segment {

    private $ID = '';
    private $Quantity = '';
    private $RepeatPattern = '';
    private $ServiceDuration = '';
    private $StartDateTime = '';
    private $EndDateTime = '';
    private $Priority = '';
    private $ConditionText = '';
    private $TextInstruction = '';


    /**
     * TQ1 constructor.
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
    public function getQuantity(): string
    {
        return $this->Quantity;
    }

    /**
     * @param string $Quantity
     */
    public function setQuantity(string $Quantity): void
    {
        $this->Quantity = $Quantity;
    }

    /**
     * @return string
     */
    public function getRepeatPattern(): string
    {
        return $this->RepeatPattern;
    }

    /**
     * @param string $RepeatPattern
     */
    public function setRepeatPattern(string $RepeatPattern): void
    {
        $this->RepeatPattern = $RepeatPattern;
    }

    /**
     * @return string
     */
    public function getServiceDuration(): string
    {
        return $this->ServiceDuration;
    }

    /**
     * @param string $ServiceDuration
     */
    public function setServiceDuration(string $ServiceDuration): void
    {
        $this->ServiceDuration = $ServiceDuration;
    }

    /**
     * @return string
     */
    public function getStartDateTime(): string
    {
        return $this->StartDateTime;
    }

    /**
     * @param string $StartDateTime
     */
    public function setStartDateTime(string $StartDateTime): void
    {
        $this->StartDateTime = $StartDateTime;
    }

    /**
     * @return string
     */
    public function getEndDateTime(): string
    {
        return $this->EndDateTime;
    }

    /**
     * @param string $EndDateTime
     */
    public function setEndDateTime(string $EndDateTime): void
    {
        $this->EndDateTime = $EndDateTime;
    }

    /**
     * @return string
     */
    public function getPriority(): string
    {
        return $this->Priority;
    }

    /**
     * @param string $Priority
     */
    public function setPriority(string $Priority): void
    {
        $this->Priority = $Priority;
    }

    /**
     * @return string
     */
    public function getConditionText(): string
    {
        return $this->ConditionText;
    }

    /**
     * @param string $ConditionText
     */
    public function setConditionText(string $ConditionText): void
    {
        $this->ConditionText = $ConditionText;
    }

    /**
     * @return string
     */
    public function getTextInstruction(): string
    {
        return $this->TextInstruction;
    }

    /**
     * @param string $TextInstruction
     */
    public function setTextInstruction(string $TextInstruction): void
    {
        $this->TextInstruction = $TextInstruction;
    }

    public function __toString()
    {
        $fields = [];
        $fields[] = 'TQ1';
        $fields[] = $this->ID;
        $fields[] = $this->Quantity;
        $fields[] = $this->RepeatPattern;
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->ServiceDuration;
        $fields[] = $this->StartDateTime;
        $fields[] = $this->EndDateTime;
        $fields[] = $this->Priority;
        $fields[] = $this->ConditionText;
        $fields[] = $this->TextInstruction;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';

        return implode('|', $fields) . '\r';
    }


}