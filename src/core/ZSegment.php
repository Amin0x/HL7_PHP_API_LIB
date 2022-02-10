<?php


namespace amin0x\nabidh;


abstract class ZSegment
{

    private ZSC|null $ZSC = null;
    private array $ZFH = [];
    private array $ZSH = [];

    /**
     * @param null $ZSC
     */
    public function setZSC($ZSC): void
    {
        $this->ZSC = $ZSC;
    }

    /**
     * @return array
     */
    public function getZFH(): array
    {
        return $this->ZFH;
    }

    /**
     * @return null
     */
    public function getZSC()
    {
        return $this->ZSC;
    }

    /**
     * @param array $ZSH
     */
    public function setZSH(array $ZSH): void
    {
        $this->ZSH = $ZSH;
    }

    /**
     * @return array
     */
    public function getZSH(): array
    {
        return $this->ZSH;
    }

    /**
     * @param array $ZFH
     */
    public function setZFH(array $ZFH): void
    {
        $this->ZFH = $ZFH;
    }
}