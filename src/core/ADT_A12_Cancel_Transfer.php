<?php


namespace amin0x\nabidh;


class ADT_A12_Cancel_Transfer extends ADTA01 implements IMessage
{
    private $PD1 = null;
    private $PV2 = null;
    private $OBX = [];
    private $DG1 = [];

    public function __construct()
    {
        parent::__construct();
        $this->getMessageHeader()->setMessageType('ADT^A12');
        $this->getEventType()->setEventTypeCode('A12');
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
        if(count($this->OBX) > 0 && $index < count($this->OBX)){
            return $this->OBX[$index];
        }

        return null;
    }

    /**
     * @param OBX $obx
     */
    public function addObx(OBX $obx): void
    {
        array_push($this->OBX, $obx);
    }


    /**
     * @param int $index
     * @return DG1|null
     */
    public function getDG1(int $index): ?DG1
    {
        if(count($this->DG1) > 0 && $index < count($this->DG1)){
            return $this->DG1[$index];
        }

        return null;
    }

    /**
     * @param DG1 $dg1
     */
    public function addDg1(DG1 $dg1): void
    {
        array_push($this->DG1, $dg1);
    }

    public function __toString(): string
    {
        return '';
    }
}