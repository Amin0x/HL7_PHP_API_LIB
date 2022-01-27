<?php


namespace amin0x\nabidh;


class VXU_ORC_Group
{
    private ORC $orc;
    private array $tq1 = [];
    private RXA $rxa;
    private ?RXR $rxr = null;
    private array $OBX_GROUP = [];

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
     * @return array
     */
    public function getTq1(): array
    {
        return $this->tq1;
    }

    /**
     * @param array $tq1
     */
    public function setTq1(array $tq1): void
    {
        $this->tq1 = $tq1;
    }

    /**
     * @return RXA
     */
    public function getRxa(): RXA
    {
        return $this->rxa;
    }

    /**
     * @param RXA $rxa
     */
    public function setRxa(RXA $rxa): void
    {
        $this->rxa = $rxa;
    }

    /**
     * @return RXR|null
     */
    public function getRxr(): ?RXR
    {
        return $this->rxr;
    }

    /**
     * @param RXR|null $rxr
     */
    public function setRxr(?RXR $rxr): void
    {
        $this->rxr = $rxr;
    }

    /**
     * @return array
     */
    public function getOBXGROUP(): array
    {
        return $this->OBX_GROUP;
    }

    /**
     * @param array $OBX_GROUP
     */
    public function setOBXGROUP(array $OBX_GROUP): void
    {
        $this->OBX_GROUP = $OBX_GROUP;
    }


}