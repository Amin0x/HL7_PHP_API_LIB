<?php


namespace amin0x\nabidh;


class ADT_A30_Merge_patient_information extends ADT_A47_Change_Patient_Identifier_List
{

    /**
     * ADT_A30_Merge_patient_information constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->getMsh()->setMessageType('ADT_A30');
    }

    public function __toString()
    {
        return parent::__toString();
    }
}