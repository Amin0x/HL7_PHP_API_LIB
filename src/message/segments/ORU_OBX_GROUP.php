<?php


namespace amin0x\nabidh;


class ORU_OBX_GROUP extends Group
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


    public function __toString()
    {
        $str = $this->obx . '\r';
        foreach ($this->nte as $item) {
            $str .= $item . '\r';
        }

        return $str;
    }
}