<?php

class EVN {

    private $EventTypeCode = '';
    private $RecordedDateTime = '';
    private $EventFacility = '';

    /**
     * EVN constructor.
     * @param string $EventTypeCode
     * @param string $RecordedDateTime
     * @param string $EventFacility
     */
    public function __construct(string $EventTypeCode, string $RecordedDateTime, string $EventFacility)
    {
        $this->EventTypeCode = $EventTypeCode;
        $this->RecordedDateTime = $RecordedDateTime;
        $this->EventFacility = $EventFacility;
    }

    /**
     * @return string
     */
    public function getEventTypeCode(): string
    {
        return $this->EventTypeCode;
    }

    /**
     * @param string $EventTypeCode
     */
    public function setEventTypeCode(string $EventTypeCode): void
    {
        $this->EventTypeCode = $EventTypeCode;
    }

    /**
     * @return string
     */
    public function getRecordedDateTime(): string
    {
        return $this->RecordedDateTime;
    }

    /**
     * @param string $RecordedDateTime
     */
    public function setRecordedDateTime(string $RecordedDateTime): void
    {
        $this->RecordedDateTime = $RecordedDateTime;
    }

    /**
     * @return string
     */
    public function getEventFacility(): string
    {
        return $this->EventFacility;
    }

    /**
     * @param string $EventFacility
     */
    public function setEventFacility(string $EventFacility): void
    {
        $this->EventFacility = $EventFacility;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}