<?php


namespace amin0x\nabidh;


class ADT_A11_Cancel_Admit
{
    private MSH $msh;
    private PID $pid;
    private EVN $evn;
    private PV1 $pv1;
    private $pd1 = null;
    private $pv2 = null;
    private $obx = [];
    private $dg1 = [];

    public function __construct()
    {
        $this->msh = new MSH();
        $this->pid = new PID();
        $this->evn = new EVN();
        $this->pv1 = new PV1();
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
     * @return null
     */
    public function getPd1()
    {
        return $this->pd1;
    }

    /**
     * @param null $pd1
     */
    public function setPd1($pd1): void
    {
        $this->pd1 = $pd1;
    }


    /**
     * @return null
     */
    public function getPv2()
    {
        return $this->pv2;
    }

    /**
     * @param null $pv2
     */
    public function setPv2($pv2): void
    {
        $this->pv2 = $pv2;
    }

    /**
     * @param int $index
     * @return OBX|null
     */
    public function getObx(int $index): ?OBX
    {
        if(count($this->obx) > 0 && $index < count($this->obx)){
            return $this->obx[$index];
        }

        return null;
    }

    /**
     * @param OBX $obx
     */
    public function addObx(OBX $obx): void
    {
        array_push($this->obx, $obx);
    }


    /**
     * @param int $index
     * @return DG1|null
     */
    public function getDg1(int $index): ?DG1
    {
        if(count($this->dg1) > 0 && $index < count($this->dg1)){
            return $this->dg1[$index];
        }

        return null;
    }

    /**
     * @param DG1 $dg1
     */
    public function addDg1(DG1 $dg1): void
    {
        array_push($this->dg1, $dg1);
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}