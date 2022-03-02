<?php


namespace amin0x\nabidh;


class PPR_PC3_Delete_Probalem extends PPR_PC1_Add_Probalem implements IMessage
{

    /**
     * PPR_PC3_Delete_Probalem constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->getMSH()->setMessageType('PPR^PC3');
    }

    public function __toString(): string
    {
        return parent::__toString();
    }
}