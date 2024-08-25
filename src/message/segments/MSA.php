<?php
namespace amin0x\nabidh;

class MSA implements Segment {
    
    private $AcknowledgmentCode = '';
    private $MessageControlID = '';
    private $TextMessage = '';
    private $ExpectedSequenceNumber = '';
    private $DelayedAcknowledgmentType = '';
    private $ErrorCondition = '';

public function __constructor($AcknowledgmentCode, $MessageControlID, $TextMessage, $ExpectedSequenceNumber, $DelayedAcknowledgmentType, $ErrorCondition){
parent::__construct();
$this->AcknowledgmentCode = $AcknowledgmentCode;
$this->MessageControlID = $MessageControlID;
$this->TextMessage = $TextMessage;
$this->ExpectedSequenceNumber = $ExpectedSequenceNumber;
$this->DelayedAcknowledgmentType = $DelayedAcknowledgmentType;
$this->ErrorCondition = $ErrorCondition;

}
    /**
     * @return string
     */
    public function getAcknowledgmentCode(): string
    {
        return $this->AcknowledgmentCode;
    }

    /**
     * @param string $AcknowledgmentCode
     */
    public function setAcknowledgmentCode(string $AcknowledgmentCode): void
    {
        $this->AcknowledgmentCode = $AcknowledgmentCode;
    }

    /**
     * @return string
     */
    public function getMessageControlID(): string
    {
        return $this->MessageControlID;
    }

    /**
     * @param string $MessageControlID
     */
    public function setMessageControlID(string $MessageControlID): void
    {
        $this->MessageControlID = $MessageControlID;
    }

    /**
     * @return string
     */
    public function getTextMessage(): string
    {
        return $this->TextMessage;
    }

    /**
     * @param string $TextMessage
     */
    public function setTextMessage(string $TextMessage): void
    {
        $this->TextMessage = $TextMessage;
    }

    /**
     * @return string
     */
    public function getExpectedSequenceNumber(): string
    {
        return $this->ExpectedSequenceNumber;
    }

    /**
     * @param string $ExpectedSequenceNumber
     */
    public function setExpectedSequenceNumber(string $ExpectedSequenceNumber): void
    {
        $this->ExpectedSequenceNumber = $ExpectedSequenceNumber;
    }

    /**
     * @return string
     */
    public function getDelayedAcknowledgmentType(): string
    {
        return $this->DelayedAcknowledgmentType;
    }

    /**
     * @param string $DelayedAcknowledgmentType
     */
    public function setDelayedAcknowledgmentType(string $DelayedAcknowledgmentType): void
    {
        $this->DelayedAcknowledgmentType = $DelayedAcknowledgmentType;
    }

    /**
     * @return string
     */
    public function getErrorCondition(): string
    {
        return $this->ErrorCondition;
    }

    /**
     * @param string $ErrorCondition
     */
    public function setErrorCondition(string $ErrorCondition): void
    {
        $this->ErrorCondition = $ErrorCondition;
    }

    public function __toString()
    {
        $fields = [];
        $fields[] = 'MSA';
        $fields[] = $this->AcknowledgmentCode;
        $fields[] = $this->MessageControlID;
        $fields[] = $this->TextMessage;
        $fields[] = $this->ExpectedSequenceNumber;
        $fields[] = $this->DelayedAcknowledgmentType;
        $fields[] = $this->ErrorCondition;

        return implode('|', $fields) . '\r';
    }

}