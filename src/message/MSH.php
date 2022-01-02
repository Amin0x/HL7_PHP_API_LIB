<?php

require_once('../config/config.php');

class MSH {
    private $FieldSeparator = '|';
    private $EncodingCharacters  = '^~\&';
    private $SendingApplication = '';
    private $SendingFacility = ''; //EMR to send the NABIDH provided code in this field.
    private $ReceivingApplication = 'NABIDH';
    private $ReceivingFacility = 'DHA';
    private $DateTimeofMessage  = '';
    private $MessageType = '';
    private $MessageControlID  = ''; //This should be unique id and this will be used to identify duplicate messages.
    private $ProcessingID  = ''; //‘P’: Production, ‘T’: Testing, ‘D’: Development
    private $VersionID  = '2.5';
    private $CharacterSet = '';

    /**
     * MSH constructor.
     * @param string $FieldSeparator
     * @param string $EncodingCharacters
     * @param string $SendingApplication
     * @param string $SendingFacility
     * @param string $ReceivingApplication
     * @param string $ReceivingFacility
     * @param string $DateTimeofMessage
     * @param string $MessageType
     * @param string $MessageControlID
     * @param string $ProcessingID
     * @param string $VersionID
     * @param string $CharacterSet
     */
    public function __construct()
    {
        $this->FieldSeparator = '|';
        $this->EncodingCharacters = '^~\&';
        $this->SendingApplication = $config['source_application'];
        $this->SendingFacility = $config['SendingFacility'];
        $this->ReceivingApplication = 'NABIDH';
        $this->ReceivingFacility = 'DHA';
        $this->DateTimeofMessage = '';
        $this->MessageType = '';
        $this->MessageControlID = '';
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


    public function getSendingApplication()
    {
        return $this->SendingApplication;
    }

    public function setSendingApplication($sendinApp){
        $this->SendingApplication = $sendinApp;
    }

    public function getSendingFacility($SendingFacility)
    {
        $this->SendingFacility = $SendingFacility;
    }

    public function setSendingFacility()
    {
        # code...
    }

    public function getDateTimeofMessage()
    {
        # code...
    }

    public function setDateTimeofMessage()
    {
        # code...
    }
}
