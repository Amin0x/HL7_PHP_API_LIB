<?php


namespace amin0x\nabidh;


class ORU_OBX_GROUP
{
    private OBX $obx;
    private array $nte = [];

    /**
     * @return OBX
     */
    public function getObx(): OBX
    {
        return $this->obx;
    }

    /**
     * @param OBX $obx
     */
    public function setObx(OBX $obx): void
    {
        $this->obx = $obx;
    }

    /**
     * @param int $index
     * @return NTE|null
     */
    public function getNte(int $index): ?NTE
    {
        if (count($this->nte) > 0 && $index < count($this->nte))
        {
            return $this->nte[$index];
        }
        return null;
    }

    /**
     * @param NTE $nte
     */
    public function addNte(NTE $nte): void
    {
        array_push($this->nte, $nte);
    }


}