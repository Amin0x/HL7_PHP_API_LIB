<?php


namespace amin0x\nabidh;


abstract class ADTA01
{
    private MSH $MSH;
    private PID $PID;
    private EVN $EVN;
    private PV1 $PV1;
    private ZSC|null $ZSC;
    private array $ZFH;
    private array $ZSH;


    public function __construct()
    {
        $this->MSH = new MSH();
        $this->PID = new PID();
        $this->EVN = new EVN();
        $this->PV1 = new PV1();
        $this->ZSC = null;
        $this->ZFH = [];
        $this->ZSH = [];
    }

    /**
     * @return MSH
     */
    public function getMSH(): MSH
    {
        return $this->MSH;
    }

    /**
     * @param MSH $MSH
     */
    public function setMSH(MSH $MSH): void
    {
        $this->MSH = $MSH;
    }

    /**
     * @return PID
     */
    public function getPID(): PID
    {
        return $this->PID;
    }

    /**
     * @param PID $PID
     */
    public function setPID(PID $PID): void
    {
        $this->PID = $PID;
    }

    /**
     * @return EVN
     */
    public function getEVN(): EVN
    {
        return $this->EVN;
    }

    /**
     * @param EVN $EVN
     */
    public function setEVN(EVN $EVN): void
    {
        $this->EVN = $EVN;
    }

    /**
     * @return PV1
     */
    public function getPV1(): PV1
    {
        return $this->PV1;
    }

    /**
     * @param PV1 $PV1
     */
    public function setPV1(PV1 $PV1): void
    {
        $this->PV1 = $PV1;
    }


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