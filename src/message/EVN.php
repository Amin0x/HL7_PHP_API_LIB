<?php
namespace amin0x\nabidh;

class EVN implements Segment {

    private $EventTypeCode = '';
    private $RecordedDateTime = '';
    private $EventFacility = '';


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

    public function toString()
    {
        $out = 'EVN' . '|' //0
            .$this->EventTypeCode . '|' //1
            .$this->RecordedDateTime . '|' //2
            .'|'    //3
            .'|'    //4
            .'|'    //5
            .'|'    //6
            .$this->EventFacility . '\r'; //7
    }


}