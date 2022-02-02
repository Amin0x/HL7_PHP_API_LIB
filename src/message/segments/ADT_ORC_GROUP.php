<?php


namespace amin0x\nabidh;


class ADT_ORC_GROUP extends Group
{
    private ORC $orc;
    private RXO $rxo;
    private $nte = [];

    /**
     * ADT_ORC_GROUP constructor.
     * @param ORC $orc
     * @param RXO $rxo
     * @param array $nte
     */
    public function __construct(ORC $orc, RXO $rxo, array $nte = [])
    {
        $this->orc = $orc;
        $this->rxo = $rxo;
        $this->nte = $nte;
    }

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
        if(isset($this->nte[$index])){
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

    public function getNteArray()
    {
        return $this->nte;
    }

}