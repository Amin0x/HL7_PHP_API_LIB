<?php


namespace amin0x\nabidh;


class ORU_ORC_GROUP extends Group
{
    private ?ORC $orc = null;
    private OBR $obr;
    private array $nte = [];
    private array $tq1 = [];
    private ORU_OBX_GROUP $oru_obx_group;
    private array $spm = [];

    /**
     * @return ORC|null
     */
    public function getOrc(): ?ORC
    {
        return $this->orc;
    }

    /**
     * @param ORC|null $orc
     */
    public function setOrc(?ORC $orc): void
    {
        $this->orc = $orc;
    }

    /**
     * @return OBR
     */
    public function getObr(): OBR
    {
        return $this->obr;
    }

    /**
     * @param OBR $obr
     */
    public function setObr(OBR $obr): void
    {
        $this->obr = $obr;
    }

    /**
     * @param int $index
     * @return NTE|null
     */
    public function getNte(int $index): ?NTE
    {
        if(isset($this->nte[$index])){
            return $this->nte[$index];
        }

        return null;
    }

    /**
     * @param array $nte
     */
    public function setNte(NTE $nte): void
    {
        array_push($this->nte, $nte);
    }

    /**
     * @return array
     */
    public function getTq1(int $index): ?TQ1
    {
        if(count($this->tq1) > 0 && $index < count($this->tq1)){
            return $this->tq1[$index];
        }

        return null;
    }

    /**
     * @param array $tq1
     */
    public function setTq1(TQ1 $tq1): void
    {
        array_push($this->tq1, $tq1);
    }

    /**
     * @return ORU_OBX_GROUP
     */
    public function getOruObxGroup(): ORU_OBX_GROUP
    {
        return $this->oru_obx_group;
    }

    /**
     * @param ORU_OBX_GROUP $oru_obx_group
     */
    public function setOruObxGroup(ORU_OBX_GROUP $oru_obx_group): void
    {
        $this->oru_obx_group = $oru_obx_group;
    }

    /**
     * @return array
     */
    public function getSpm(int $index): ?SPM
    {
        if(isset($this->spm[$index])){
            return $this->spm[$index];
        }

        return null;
    }

    /**
     * @param array $spm
     */
    public function setSpm(SPM $spm): void
    {
        array_push($this->spm, $spm);
    }

    public function getArray(): array
    {
        $arr = [];
        if ($this->orc){
            $arr[] = $this->orc;
        }

        $arr[] = $this->obr;
        return array_merge($arr, $this->nte, $this->tq1, $this->oru_obx_group->getArray(), $this->spm);
    }

    public function __toString(): string
    {
        if ($this->orc != null) {
            $str = $this->orc;
        }

        $str .= $this->obr ;
        foreach ($this->nte as $item) {
            $str .= $item ;
        }
        foreach ($this->tq1 as $item) {
            $str .= $item ;
        }

        $str .= $this->oru_obx_group;

        foreach ($this->spm as $value){
            $str .= $value;
        }

        return $str;
    }

}