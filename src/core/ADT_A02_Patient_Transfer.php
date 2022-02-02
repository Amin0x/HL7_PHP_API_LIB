<?php


namespace amin0x\nabidh;


class ADT_A02_Patient_Transfer extends ADTBase implements IMessage
{

    private $pd1 = null;
    private $pv2 = null;
    private $obx = [];

    public function __construct()
    {
        parent::__construct();

        $this->getMsh()->setMessageType('ADT^A02');
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
        if($index >= 0 && $index < count($this->obx)){
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

    public function __toString(): string
    {
        $str = implode('',[
            $this->getMsh(),
            $this->getEvn(),
            $this->getPid(),
            $this->getPv1(),
            $this->pd1,
            ...$this->obx,
        ]);

        return $str;
    }
}