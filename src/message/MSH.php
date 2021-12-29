<?php

class MessageMSH {
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
}
