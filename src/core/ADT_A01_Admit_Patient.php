<?php


namespace amin0x\nabidh;


class ADT_A01_Admit_Patient
{
    private MSH $msh;
    private PID $pid;
    private EVN $evn;
    private PV1 $pv1;
    private $pd1 = null;
    private $nk1 = [];
    private $pv2 = null;
    private $obx = [];
    private $al1 = [];
    private $dg1 = [];
    private $drg = null;
    private $pr1 = [];
    private $gt1 = [];
    private $in1 = [];

    /**
     * ADT_A01_Admit_Patient constructor.
     */
    public function __construct()
    {
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
     * @return array
     */
    public function getNk1(): array
    {
        return $this->nk1;
    }

    /**
     * @param array $nk1
     */
    public function setNk1(array $nk1): void
    {
        $this->nk1 = $nk1;
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
     * @return array
     */
    public function getObx(): array
    {
        return $this->obx;
    }

    /**
     * @param array $obx
     */
    public function setObx(array $obx): void
    {
        $this->obx = $obx;
    }

    /**
     * @return array
     */
    public function getAl1(): array
    {
        return $this->al1;
    }

    /**
     * @param array $al1
     */
    public function setAl1(array $al1): void
    {
        $this->al1 = $al1;
    }

    /**
     * @return array
     */
    public function getDg1(): array
    {
        return $this->dg1;
    }

    /**
     * @param array $dg1
     */
    public function setDg1(array $dg1): void
    {
        $this->dg1 = $dg1;
    }

    /**
     * @return null
     */
    public function getDrg()
    {
        return $this->drg;
    }

    /**
     * @param null $drg
     */
    public function setDrg($drg): void
    {
        $this->drg = $drg;
    }

    /**
     * @return array
     */
    public function getPr1(): array
    {
        return $this->pr1;
    }

    /**
     * @param array $pr1
     */
    public function setPr1(array $pr1): void
    {
        $this->pr1 = $pr1;
    }

    /**
     * @return array
     */
    public function getGt1(): array
    {
        return $this->gt1;
    }

    /**
     * @param array $gt1
     */
    public function setGt1(array $gt1): void
    {
        $this->gt1 = $gt1;
    }

    /**
     * @return array
     */
    public function getIn1(): array
    {
        return $this->in1;
    }

    /**
     * @param array $in1
     */
    public function setIn1(array $in1): void
    {
        $this->in1 = $in1;
    }



}