<?php


namespace amin0x\nabidh;


class  ADT_A47_Change_Patient_Identifier_List  extends ADT_A30_Merge_Patient_Information implements IMessage
{

    /**
     * ADT_A30_Merge_patient_information constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->getMsh()->setMessageType('ADT_A47');
    }

    public function __toString(): string
    {
        return parent::__toString();
    }
}