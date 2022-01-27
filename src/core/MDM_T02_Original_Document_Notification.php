<?php


namespace amin0x\nabidh;


class MDM_T02_Original_Document_Notification
{
    private MSH $msh;
    private PID $pid;
    private EVN $evn;
    private PV1 $pv1;
    private TXA $txa;
    private array $OBX_group = [];

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
    public function getEvn(): EVN
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


}