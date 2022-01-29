<?php


namespace amin0x\nabidh;


class ADT_A11_Cancel_Admit extends ADTBase
{

    private $pd1 = null;
    private $pv2 = null;
    private $db1 = [];
    private $obx = [];
    private $dg1 = [];

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
     * @return array
     */
    public function getDb1(int $index): array
    {
        return $this->db1[$index];
    }

    /**
     * @param array $db1
     */
    public function setDb1($db1): void
    {
        $this->db1[] = $db1;
    }

    public function __toString()
    {
        return '';
    }

}