<?php


namespace amin0x\nabidh;


class PPR_PC2_Update_Probalem extends PPR_PC1_Add_Probalem implements IMessage
{

    /**
     * PPR_PC2_Update_Probalem constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->getMessageHeader()->setMessageType('PPR^PC2');
    }

    public function __toString(): string
    {
        return parent::__toString();
    }
}