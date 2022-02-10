<?php


namespace amin0x\nabidh;


abstract class ADTA03
{
    private MSH $MSH;
    private EVN $EVN;
    private PID $PID;
    private PV1 $PV1;

    public function __construct()
    {
        $this->MSH = new MSH();
        $this->EVN = new EVN();
        $this->PID = new PID();
        $this->PV1  = new PV1();
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


}