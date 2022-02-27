<?php


namespace amin0x\nabidh;


class ADT_A02_Patient_Transfer extends ADTA01 implements IMessage
{

    private $PD1 = null;
    private $PV2 = null;
    private $OBX = [];

    public function __construct()
    {
        parent::__construct();

        $this->getMSH()->setMessageType('ADT^A02');
        $this->getEVN()->setEventTypeCode('A02');

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
        if($index >= 0 && $index < count($this->OBX)){
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

    public function __toString(): string
    {
        $str = implode('',[
            $this->getMSH(),
            $this->getEVN(),
            $this->getPID(),
            $this->getPV1(),
            $this->PD1,
            ...$this->OBX,
        ]);

        return $str;
    }
}