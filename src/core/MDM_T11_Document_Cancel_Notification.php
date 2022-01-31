<?php


namespace amin0x\nabidh;


class MDM_T11_Document_Cancel_Notification extends ADTBase
{

    private TXA $txa;

    /**
     * @return TXA
     */
    public function getTxa(): TXA
    {
        return $this->txa;
    }

    /**
     * @param TXA $txa
     */
    public function setTxa(TXA $txa): void
    {
        $this->txa = $txa;
    }

}