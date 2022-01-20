<?php

namespace amin0x\nabidh;


class MSH implements Segment
{
    private string $FieldSeparator;  // Field Separator ‘|’
    private string $EncodingCharacters;
    private string $SendingApplication; //Source application
    private string $SendingFacility; //EMR to send the NABIDH provided code in this field.
    private string $ReceivingApplication;
    private string $ReceivingFacility;
    private string $DateTimeOfMessage;
    private string $MessageType;
    private string $MessageControlID; //This should be unique id and this will be used to identify duplicate messages.
    private string $ProcessingID; //‘P’: Production, ‘T’: Testing, ‘D’: Development
    private string $VersionID;
    private string $CharacterSet;

    /**
     * MSH constructor.
     */
    public function __construct()
    {
        $this->FieldSeparator = '|';
        $this->EncodingCharacters = '^~\&';
        $this->SendingApplication = '';
        $this->SendingFacility = '';
        $this->ReceivingApplication = 'NABIDH';
        $this->ReceivingFacility = 'DHA';
        $this->DateTimeOfMessage = date('YmdHis');
        $this->MessageType = '';
        $this->MessageControlID = time();
        $this->ProcessingID = '';
        $this->VersionID = '2.5';
        $this->CharacterSet = 'UTF-8';
    }


    /**
     * @return string
     */
    public function getFieldSeparator(): string
    {
        return $this->FieldSeparator;
    }

    /**
     * @param string $FieldSeparator
     */
    public function setFieldSeparator(string $FieldSeparator): void
    {
        $this->FieldSeparator = $FieldSeparator;
    }

    /**
     * @return string
     */
    public function getEncodingCharacters(): string
    {
        return $this->EncodingCharacters;
    }

    /**
     * @param string $EncodingCharacters
     */
    public function setEncodingCharacters(string $EncodingCharacters): void
    {
        $this->EncodingCharacters = $EncodingCharacters;
    }

    /**
     * @return string
     */
    public function getReceivingApplication(): string
    {
        return $this->ReceivingApplication;
    }

    /**
     * @param string $ReceivingApplication
     */
    public function setReceivingApplication(string $ReceivingApplication): void
    {
        $this->ReceivingApplication = $ReceivingApplication;
    }

    /**
     * @return string
     */
    public function getReceivingFacility(): string
    {
        return $this->ReceivingFacility;
    }

    /**
     * @param string $ReceivingFacility
     */
    public function setReceivingFacility(string $ReceivingFacility): void
    {
        $this->ReceivingFacility = $ReceivingFacility;
    }

    /**
     * @return string
     */
    public function getMessageType(): string
    {
        return $this->MessageType;
    }

    /**
     * @param string $MessageType
     */
    public function setMessageType(string $MessageType): void
    {
        $this->MessageType = $MessageType;
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
    public function getProcessingID(): string
    {
        return $this->ProcessingID;
    }

    /**
     * @param string $ProcessingID
     */
    public function setProcessingID(string $ProcessingID): void
    {
        $this->ProcessingID = $ProcessingID;
    }

    /**
     * @return string
     */
    public function getVersionID(): string
    {
        return $this->VersionID;
    }

    /**
     * @param string $VersionID
     */
    public function setVersionID(string $VersionID): void
    {
        $this->VersionID = $VersionID;
    }

    /**
     * @return string
     */
    public function getCharacterSet(): string
    {
        return $this->CharacterSet;
    }

    /**
     * @param string $CharacterSet
     */
    public function setCharacterSet(string $CharacterSet): void
    {
        $this->CharacterSet = $CharacterSet;
    }

    /**
     * @return string
     */
    public function getSendingApplication()
    {
        return $this->SendingApplication;
    }

    /**
     * Source application name
     * @param $sendinApp
     */
    public function setSendingApplication($sendinApp)
    {
        $this->SendingApplication = $sendinApp;
    }

    /**
     * @return mixed
     */
    public function getSendingFacility()
    {
        return $this->SendingFacility;
    }

    /**
     * @param mixed $SendingFacility
     */
    public function setSendingFacility($SendingFacility): void
    {
        $this->SendingFacility = $SendingFacility;
    }

    /**
     * @return string
     */
    public function getDateTimeofMessage(): string
    {
        return $this->DateTimeOfMessage;
    }

    /**
     * @param string $DateTimeofMessage
     */
    public function setDateTimeofMessage(string $DateTimeofMessage): void
    {
        $this->DateTimeOfMessage = $DateTimeofMessage;
    }

    public function toString(): string
    {
        $fields = 'MSH'.'|' //1
            .$this->EncodingCharacters . '|'    //2
            .$this->SendingApplication . '|'    //3
            .$this->SendingFacility . '|'   //4
            .$this->ReceivingApplication . '|'  //5
            .$this->ReceivingFacility . '|' //6
            .$this->DateTimeOfMessage . '|'  //7
            .'|'   //8
            .$this->MessageType . '|'   //9
            .$this->MessageControlID . '|'  //10
            .$this->ProcessingID . '|'  //11
            .$this->VersionID . '|' //12
            .'|'    //13
            .'|'    //14
            .'|'    //15
            .'|'    //16
            .'|'    //17
            .$this->CharacterSet  //18
            .'\r';

        return $fields;
    }

}
