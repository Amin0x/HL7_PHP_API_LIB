<?php


namespace amin0x\nabidh;


class ADT_ORC_GROUP
{
    private ORC $orc;
    private RXO $rxo;
    private $nte = [];

    /**
     * @return ORC
     */
    public function getOrc(): ORC
    {
        return $this->orc;
    }

    /**
     * @param ORC $orc
     */
    public function setOrc(ORC $orc): void
    {
        $this->orc = $orc;
    }

    /**
     * @return RXO
     */
    public function getRxo(): RXO
    {
        return $this->rxo;
    }

    /**
     * @param RXO $rxo
     */
    public function setRxo(RXO $rxo): void
    {
        $this->rxo = $rxo;
    }

    /**
     * @param int $index
     * @return NTE|null
     */
    public function getNte(int $index): ?NTE
    {
        if(count($this->nte) > 0 && $index < count($this->nte)){
            return $this->nte[$index];
        }

        return null;
    }

    /**
     * @param NTE $nte
     */
    public function addNte(NTE $nte): void
    {
        array_push($this->nte, $nte);
    }


}