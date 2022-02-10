<?php


namespace amin0x\nabidh;


class ADT_A01_Admit_Patient extends ADTA01 implements IMessage
{
    private $PD1 = null;
    private $NK1 = [];
    private $PV2 = null;
    private $OBX = [];
    private $AL1 = [];
    private $DG1 = [];
    private $DRG = null;
    private $PR1 = [];
    private $GT1 = [];
    private $IN1 = [];


    /**
     * ADT_A01_Admit_Patient constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->getMessageHeader()->setMessageType('ADT^A01');
        $this->getEventType()->setEventTypeCode('A01');
    }

    /**
     * @return null
     */
    public function getPD1()
    {
        return $this->PD1;
    }

    /**
     * @param null $PD1
     */
    public function setPD1($PD1): void
    {
        $this->PD1 = $PD1;
    }

    /**
     * @param int $index
     * @return NK1|null
     */
    public function getNK1(int $index): ?NK1
    {
        if(isset($this->NK1[$index])){
            return $this->NK1[$index];
        }

        return null;
    }

    /**
     * @param NK1 $nk1
     */
    public function addNK1(NK1 $nk1): void
    {
        array_push($this->NK1, $nk1);
    }

    /**
     * @return null
     */
    public function getPV2()
    {
        return $this->PV2;
    }

    /**
     * @param null $PV2
     */
    public function setPV2($PV2): void
    {
        $this->PV2 = $PV2;
    }

    /**
     * @param int $index
     * @return OBX|null
     */
    public function getOBX(int $index): ?OBX
    {
        if(isset($this->NK1[$index])){
            return $this->OBX[$index];
        }

        return null;
    }

    /**
     * @param OBX $obx
     */
    public function addOBX(OBX $obx): void
    {
        array_push($this->OBX, $obx);
    }

    /**
     * @param int $index
     * @return AL1|null
     */
    public function getAL1(int $index): ?AL1
    {
        if(isset($this->AL1[$index])){
            return $this->AL1[$index];
        }

        return null;
    }

    /**
     * @param AL1 $al1
     */
    public function addAL1(AL1 $al1): void
    {
        array_push($this->AL1, $al1);
    }

    /**
     * @param int $index
     * @return DG1|null
     */
    public function getDG1(int $index): ?DG1
    {
        if(isset($this->DG1[$index])){
            return $this->DG1[$index];
        }

        return null;
    }

    /**
     * @param DG1 $dg1
     */
    public function addDG1(DG1 $dg1): void
    {
        array_push($this->DG1, $dg1);
    }

    /**
     * @return DRG
     */
    public function getDRG(): DRG
    {
        return $this->DRG;
    }

    /**
     * @param DRG $DRG
     */
    public function setDRG(DRG $DRG): void
    {
        $this->DRG = $DRG;
    }

    /**
     * @param int $index
     * @return PR1|null
     */
    public function getPR1(int $index): ?PR1
    {
        if(isset($this->PR1[$index])){
            return $this->PR1[$index];
        }

        return null;
    }

    /**
     * @param PR1 $pr1
     */
    public function addPR1(PR1 $pr1): void
    {
        array_push($this->PR1, $pr1);
    }

    /**
     * @param int $index
     * @return GT1|null
     */
    public function getGT1(int $index): ?GT1
    {
        if(isset($this->GT1[$index])){
            return $this->GT1[$index];
        }

        return null;
    }

    /**
     * @param GT1 $gt1
     */
    public function addGT1(GT1 $gt1): void
    {
        array_push($this->GT1, $gt1);
    }

    /**
     * @param int $index
     * @return IN1|null
     */
    public function getIN1(int $index): ?IN1
    {
        if($index >= 0 && $index < count($this->IN1)){
            return $this->IN1[$index];
        }

        return null;
    }

    /**
     * @param IN1 $in1
     */
    public function addIN1(IN1 $in1): void
    {
        array_push($this->IN1, $in1);
    }

    public function __toString(): string
    {

        $str = (string) $this->getMessageHeader();
        $str .= $this->getPatientIdentification();
        $str .= $this->getEventType();
        $str .= $this->getPatientVisit();
        $str .= $this->PD1 != null? $this->PD1 : '';

        foreach ($this->NK1 as $item) {
            $str .= $item .'\r';
        }
        $str .= $this->PV2 != null ? $this->PV2 : '';
        foreach ($this->OBX as $item) {
            $str .= $item ;
        }

        foreach ($this->AL1 as $item) {
            $str .= $item ;
        }
        foreach ($this->DG1 as $item) {
            $str .= $item;
        }

        $str .= $this->DRG != null ? $this->DRG : '';
        foreach ($this->PR1 as $item) {
            $str .= $item;
        }
        foreach ($this->GT1 as $item) {
            $str .= $item;
        }
        foreach ($this->IN1 as $item) {
            $str .= $item;
        }

        $str .= $this->getZSC() != null? $this->getZSC() : '';

        foreach ($this->getZSH() as $item) {
            $str .= $item;
        }
        foreach ($this->getZFH() as $item) {
            $str .= $item;
        }
        return $str;
    }


}