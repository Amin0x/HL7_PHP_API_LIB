<?php


namespace amin0x\nabidh;


class PV1_GROUP extends Group
{
    private PV1 $pv1;
    private array $pv2;

    /**
     * PV1_GROUP constructor.
     * @param PV1 $pv1
     * @param array $pv2
     */
    public function __construct(PV1 $pv1, array $pv2 = [])
    {
        $this->pv1 = $pv1;
        $this->pv2 = $pv2;
    }

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



    public function getPv2Array(): array
    {
        return $this->pv2;
    }

    public function __toString()
    {
        $str = $this->pv1;
        foreach ($this->pv2 as $item) {
            $str .= $item;
        }
        return $str;
    }

}