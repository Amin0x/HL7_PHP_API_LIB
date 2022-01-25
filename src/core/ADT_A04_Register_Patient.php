<?php
namespace amin0x\nabidh;

class ADT_A04_Register_Patient
{
    private $msh;
    private $evn;
    private $pid;
    private $pd1;
    private $nk1 = [];
    private $pv1;
    private $pv2;
    private $obx = [];
    private $al1 = [];
    private $dg1 = [];
    private $drg;
    private $pr1 = []; //
    private $gt1 = [];
    private $in1 = [];


    /**
     * RegisterPatientQuery constructor.
     */
    public function __construct($pid = null, $pv1 = null)
    {
        $config = include dirname(__FILE__).'/../config/config.php';
        $this->msh = new MSH();
        $this->msh->setMessageType('ADT^A04');
        $this->msh->setMessageControlID(time());
        $this->msh->setDateTimeofMessage(date('YmdHis'));
        $this->msh->setSendingApplication('');
        $this->msh->setSendingFacility('');
        $this->msh->setProcessingID('');

        $this->evn = new EVN();
        $this->evn->setEventTypeCode('A04');
        $this->evn->setRecordedDateTime(date('c'));
        $this->evn->setEventFacility('');
        $this->pid = new PID();
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
     * @param int $index
     * @return NK1|null
     */
    public function getNk1(int $index): ?NK1
    {
        if(count($this->nk1) > 0 && $index < count($this->nk1)){
            return $this->nk1[$index];
        }

        return null;
    }

    /**
     * @param NK1 $nk1
     */
    public function addNk1(NK1 $nk1): void
    {
        array_push($this->nk1, $nk1);
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
     * @return AL1|null
     */
    public function getAl1(int $index): ?AL1
    {
        if(count($this->al1) > 0 && $index < count($this->al1)){
            return $this->al1[$index];
        }

        return null;
    }

    /**
     * @param array $al1
     */
    public function addAl1(AL1 $al1): void
    {
        array_push($this->al1, $al1);
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
     * @param int $index
     * @return PR1|null
     */
    public function getPr1(int $index): ?PR1
    {
        if(count($this->pr1) > 0 && $index < count($this->pr1)){
            return $this->pr1[$index];
        }

        return null;
    }

    /**
     * @param PR1 $pr1
     */
    public function addPr1(PR1 $pr1): void
    {
        array_push($this->pr1, $pr1);
    }

    /**
     * @param int $index
     * @return GT1|null
     */
    public function getGt1(int $index): ?GT1
    {
        if(count($this->gt1) > 0 && $index < count($this->gt1)){
            return $this->gt1[$index];
        }

        return null;
    }

    /**
     * @param GT1 $gt1
     */
    public function addGt1(GT1 $gt1): void
    {
        array_push($this->gt1, $gt1);
    }

    /**
     * @param int $index
     * @return IN1|null
     */
    public function getIn1(int $index): ?IN1
    {
        if(count($this->in1) > 0 && $index < count($this->in1)){
            return $this->in1[$index];
        }

        return null;
    }

    /**
     * @param IN1 $in1
     */
    public function addIn1(IN1 $in1): void
    {
        array_push($this->in1, $in1);
    }




}