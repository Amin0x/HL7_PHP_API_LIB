<?php


namespace amin0x\nabidh;


class ADT_A01_Admit_Patient extends ADTBase implements IMessage
{
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
        parent::__construct();

        $this->getMsh()->setMessageType('ADT^A01');
        $this->getEvn()->setEventTypeCode($this->getMsh()->getMessageType());
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
        if(isset($this->nk1[$index])){
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
        if(isset($this->nk1[$index])){
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
        if(isset($this->al1[$index])){
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
        if(isset($this->dg1[$index])){
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
        if(isset($this->pr1[$index])){
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
        if(isset($this->gt1[$index])){
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
        if($index >= 0 && $index < count($this->in1)){
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

    public function __toString(): string
    {

        $str = (string) $this->getMsh();
        $str .= $this->getPid();
        $str .= $this->getEvn();
        $str .= $this->getPv1();
        $str .= $this->pd1 != null? $this->pd1 : '';

        foreach ($this->nk1 as $item) {
            $str .= $item .'\r';
        }
        $str .= $this->pv2 != null ? $this->pv2 : '';
        foreach ($this->obx as $item) {
            $str .= $item ;
        }
        foreach ($this->al1 as $item) {
            $str .= $item ;
        }
        foreach ($this->dg1 as $item) {
            $str .= $item;
        }

        $str .= $this->drg != null ? $this->drg : '';
        foreach ($this->pr1 as $item) {
            $str .= $item;
        }
        foreach ($this->gt1 as $item) {
            $str .= $item;
        }
        foreach ($this->in1 as $item) {
            $str .= $item;
        }

        return $str;
    }


}