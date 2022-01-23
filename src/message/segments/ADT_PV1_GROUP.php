<?php


namespace amin0x\nabidh;


class ADT_PV1_GROUP
{
    private PV1 $pv1;
    private $pv2 = [];

    /**
     * @return PV1
     */
    public function getPv1(): PV1
    {
        return $this->pv1;
    }

    /**
     * @param PV1 $pv1
     */
    public function setPv1(PV1 $pv1): void
    {
        $this->pv1 = $pv1;
    }

    /**
     * @return array
     */
    public function getPv2(int $index)
    {
        if(count($this->pv2) > 0 && $index < count($this->pv2)){
            return $this->pv2[$index];
        }

        return null;
    }

    /**
     * @param array $pv2
     */
    public function addPv2(PV2 $pv2): void
    {
        array_push($this->pv2, $pv2);
    }


}