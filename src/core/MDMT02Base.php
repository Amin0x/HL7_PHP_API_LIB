<?php


namespace amin0x\nabidh;


class MDMT02Base
{
    private MSH $msh;
    private PID $pid;
    private ?EVN $evn;
    private PV1 $pv1;
    private array $MDM_ORC_GROUP = [];
    private TXA $txa;
    private array $OBX_group = [];

    /**
     * MDMT02Base constructor.
     */
    public function __construct()
    {
        $this->msh = new MSH();
        $this->pid = new PID();
        $this->pv1 = new PV1();
        $this->txa = new TXA();
        $this->evn = null;
    }

    /**
     * @return MSH
     */
    public function getMsh(): MSH
    {
        return $this->msh;
    }

    /**
     * @param MSH $msh
     */
    public function setMsh(MSH $msh): void
    {
        $this->msh = $msh;
    }

    /**
     * @return PID
     */
    public function getPid(): PID
    {
        return $this->pid;
    }

    /**
     * @param PID $pid
     */
    public function setPid(PID $pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @return EVN
     */
    public function getEvn(): ?EVN
    {
        return $this->evn;
    }

    /**
     * @param EVN $evn
     */
    public function setEvn(EVN $evn): void
    {
        $this->evn = $evn;
    }

    /**
     * @return PV1
     */
    public function getPv1(): PV1
    {
        return $this->pv1;
    }

    /**
     * @param PV1 $pv1
     */
    public function setPv1(PV1 $pv1): void
    {
        $this->pv1 = $pv1;
    }

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