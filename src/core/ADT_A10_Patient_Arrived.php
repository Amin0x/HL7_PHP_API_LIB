<?php


namespace amin0x\nabidh;


class ADT_A10_Patient_Arrived extends ADTBase implements IMessage
{

    /**
     * ADT_A10_Patient_Arrived constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function __toString(): string
    {
        return '';
    }
}