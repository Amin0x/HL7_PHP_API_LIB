<?php
namespace amin0x\nabidh;

class RXA extends RXE {

    /**
     * RXA constructor.
     */
    public function __construct()
    {
    }

    public function __toString()
    {
        return 'RXA' . ltrim(parent::__toString(), 'RXE');
    }
}