<?php

class TQ1{


    private $SetID_TQ1 = '';
    private $Quantity = '';
    private $RepeatPattern = '';
    private $ExplicitTime = '';
    private $RelativeTimeandUnits = '';
    private $ServiceDuration = '';
    private $StartDateTime = '';
    private $EndDateTime = '';
    private $Priority = '';
    private $ConditionText = '';
    private $TextInstruction = '';
    private $Conjunction = '';
    private $OccurrenceDuration = '';
    private $TotalOccurrences = '';

    /**
     * TQ1 constructor.
     * @param string $SetID_TQ1
     * @param string $Quantity
     * @param string $RepeatPattern
     * @param string $ExplicitTime
     * @param string $RelativeTimeandUnits
     * @param string $ServiceDuration
     */
    public function __construct(string $SetID_TQ1, string $Quantity, string $RepeatPattern, string $ExplicitTime, string $RelativeTimeandUnits, string $ServiceDuration)
    {
        $this->SetID_TQ1 = $SetID_TQ1;
        $this->Quantity = $Quantity;
        $this->RepeatPattern = $RepeatPattern;
        $this->ExplicitTime = $ExplicitTime;
        $this->RelativeTimeandUnits = $RelativeTimeandUnits;
        $this->ServiceDuration = $ServiceDuration;
    }

    /**
     * @return string
     */
    public function getSetIDTQ1(): string
    {
        return $this->SetID_TQ1;
    }

    /**
     * @param string $SetID_TQ1
     */
    public function setSetIDTQ1(string $SetID_TQ1): void
    {
        $this->SetID_TQ1 = $SetID_TQ1;
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
    public function getExplicitTime(): string
    {
        return $this->ExplicitTime;
    }

    /**
     * @param string $ExplicitTime
     */
    public function setExplicitTime(string $ExplicitTime): void
    {
        $this->ExplicitTime = $ExplicitTime;
    }

    /**
     * @return string
     */
    public function getRelativeTimeandUnits(): string
    {
        return $this->RelativeTimeandUnits;
    }

    /**
     * @param string $RelativeTimeandUnits
     */
    public function setRelativeTimeandUnits(string $RelativeTimeandUnits): void
    {
        $this->RelativeTimeandUnits = $RelativeTimeandUnits;
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

    /**
     * @return string
     */
    public function getConjunction(): string
    {
        return $this->Conjunction;
    }

    /**
     * @param string $Conjunction
     */
    public function setConjunction(string $Conjunction): void
    {
        $this->Conjunction = $Conjunction;
    }

    /**
     * @return string
     */
    public function getOccurrenceDuration(): string
    {
        return $this->OccurrenceDuration;
    }

    /**
     * @param string $OccurrenceDuration
     */
    public function setOccurrenceDuration(string $OccurrenceDuration): void
    {
        $this->OccurrenceDuration = $OccurrenceDuration;
    }

    /**
     * @return string
     */
    public function getTotalOccurrences(): string
    {
        return $this->TotalOccurrences;
    }

    /**
     * @param string $TotalOccurrences
     */
    public function setTotalOccurrences(string $TotalOccurrences): void
    {
        $this->TotalOccurrences = $TotalOccurrences;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}