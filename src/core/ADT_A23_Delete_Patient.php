<?php


namespace amin0x\nabidh;


class ADT_A23_Delete_Patient extends ADTBase
{
    private $pd1 = null;
    private $pv2 = null;
    private array $db1 = [];
    private array $obx = [];

    public function __construct()
    {
        parent::__construct();
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

    public function __toString()
    {
        $str = $this->getMsh();
        $str .= $this->getEvn();
        $str .= $this->getPid();
        $str .= $this->pd1 == null ?  '' : $this->pd1;
        $str .= $this->getPv1();
        $str .= $this->pv2 == null ? '' : $this->pv2;

        foreach ($this->db1 as $item) {
            $str .= $item;
        }

        foreach ($this->obx as $item) {
            $str .= $item;
        }

        return $str;
    }
}