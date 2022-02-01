<?php


namespace amin0x\nabidh;


class ADT_A30_Merge_Patient_Information implements IMessage
{
    private MSH $msh;
    private EVN $evn;
    private PID $pid;
    private ?PD1 $pd1 = null;
    private MRG $mrg;

    /**
     * ADT_A47_Change_Patient_Identifier_List constructor.
     */
    public function __construct()
    {
        $this->msh = new MSH();
        $this->evn = new EVN();
        $this->pid = new PID();
        $this->mrg = new MRG();
        $this->getMsh()->setMessageType('ADT_A30');
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
     * @return PD1|null
     */
    public function getPd1(): ?PD1
    {
        return $this->pd1;
    }

    /**
     * @param PD1|null $pd1
     */
    public function setPd1(?PD1 $pd1): void
    {
        $this->pd1 = $pd1;
    }

    /**
     * @return MRG
     */
    public function getMrg(): MRG
    {
        return $this->mrg;
    }

    /**
     * @param MRG $mrg
     */
    public function setMrg(MRG $mrg): void
    {
        $this->mrg = $mrg;
    }

    public function __toString(): string
    {
        $str = $this->msh . $this->evn . $this->pid;
        if ($this->pd1 != null)
            $str .= $this->pd1;

        $str .= $this->mrg;
        return $str;
    }
}