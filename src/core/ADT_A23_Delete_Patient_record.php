<?php


namespace amin0x\nabidh;


class ADT_A23_Delete_Patient_record extends ADTBase
{
    private ?PD1 $pd1 = null;
    private ?PV2 $pv2 = null;
    private array $db1 = [];
    private array $obx = [];

    /**
     * ADT_A23_Delete_Patient_record constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return PD1|null
     */
    public function getPd1(): ?PD1
    {
        return $this->pd1;
    }

    /**
     * @param PD1|null $pd1
     */
    public function setPd1(?PD1 $pd1): void
    {
        $this->pd1 = $pd1;
    }

    /**
     * @return PV2|null
     */
    public function getPv2(): ?PV2
    {
        return $this->pv2;
    }

    /**
     * @param PV2|null $pv2
     */
    public function setPv2(?PV2 $pv2): void
    {
        $this->pv2 = $pv2;
    }


    public function getDb1(int $index)
    {
        return $this->db1[$index];
    }


    public function setDb1($db1): void
    {
        array_push($this->db1, $db1);
    }

    public function getObx(int $index)
    {
        return $this->obx[$index];
    }


    public function setObx($obx): void
    {
        array_push($this->db1, $obx);
    }

    public function __toString()
    {
        return '';
    }
}