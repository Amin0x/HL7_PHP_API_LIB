<?php


namespace amin0x\nabidh;


class ADT_A10_Patient_Arrived extends ADTA01 implements IMessage
{

    /**
     * ADT_A10_Patient_Arrived constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->getMessageHeader()->setMessageType('ADT^A10');
        $this->getEventType()->setEventTypeCode('A10');
    }

    public function __toString(): string
    {
        return '';
    }
}