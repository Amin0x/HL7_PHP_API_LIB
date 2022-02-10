<?php


namespace amin0x\nabidh;


abstract class MDMT02
{
    private MSH $MSH;
    private PID $PID;
    private ?EVN $EVN;
    private PV1 $PV1;
    private array $MDM_ORC_GROUP = [];
    private TXA $TXA;
    private array $OBX_group = [];

    /**
     * MDMT02Base constructor.
     */
    public function __construct()
    {
        $this->MSH = new MSH();
        $this->PID = new PID();
        $this->PV1 = new PV1();
        $this->TXA = new TXA(1);
        $this->EVN = null;
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
    public function getEVN(): ?EVN
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
     * @return TXA
     */
    public function getTXA(): TXA
    {
        return $this->TXA;
    }

    /**
     * @param TXA $TXA
     */
    public function setTXA(TXA $TXA): void
    {
        $this->TXA = $TXA;
    }

    /**
     * @return array
     */
    public function getOBXGroup(): array
    {
        return $this->OBX_group;
    }

    /**
     * @param array $OBX_group
     */
    public function setOBXGroup(array $OBX_group): void
    {
        $this->OBX_group = $OBX_group;
    }

    /**
     * @param $index
     * @return array
     */
    public function getMDMORCGROUP($index = false): MDM_ORC_GROUP|array|null
    {
        if ($index === false)
        {
            return $this->MDM_ORC_GROUP;
        }

        $count = count($this->MDM_ORC_GROUP);
        if ($index < 0  || $index > $count)
            return null;

        return $this->MDM_ORC_GROUP[$index];
    }

    /**
     * @return array
     */
    public function getMDMORCGROUPAll(): array
    {
        return $this->MDM_ORC_GROUP;
    }

    /**
     * @param array $MDM_ORC_GROUP
     */
    public function setMDMORCGROUP(MDM_ORC_GROUP $MDM_ORC_GROUP, $index = false): void
    {
        if ($index === false)
        {
            array_push($this->MDM_ORC_GROUP, $MDM_ORC_GROUP);
            return;
        }

        $count = count($this->MDM_ORC_GROUP);

        if ( $index >= 0 && $index <= $count )
            $this->MDM_ORC_GROUP[$index] = $MDM_ORC_GROUP;

    }
}