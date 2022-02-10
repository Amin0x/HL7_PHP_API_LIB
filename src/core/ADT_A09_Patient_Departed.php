<?php


namespace amin0x\nabidh;


class ADT_A09_Patient_Departed extends ADTA01 implements IMessage
{

    public function __construct()
    {
        parent::__construct();
        $this->getMessageHeader()->setMessageType('ADT^A09');
        $this->getEventType()->setEventTypeCode('A09');
    }

    public function __toString(): string
    {
        return '';
    }
}