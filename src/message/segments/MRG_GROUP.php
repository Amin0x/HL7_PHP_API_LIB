<?php


namespace amin0x\nabidh;


class MRG_GROUP
{
    private MRG $MRG;
    private PV1 $PV1;

    /**
     * MRG_GROUP constructor.
     * @param MRG $MRG
     * @param PV1 $PV1
     */
    public function __construct(MRG $MRG, PV1 $PV1)
    {
        $this->MRG = $MRG;
        $this->PV1 = $PV1;
    }

    /**
     * @return MRG
     */
    public function getMRG(): MRG
    {
        return $this->MRG;
    }

    /**
     * @param MRG $MRG
     */
    public function setMRG(MRG $MRG): void
    {
        $this->MRG = $MRG;
    }

    /**
     * @return PV1
     */
    public function getPV1(): PV1
    {
        return $this->PV1;
    }

    /**
     * @param PV1 $PV1
     */
    public function setPV1(PV1 $PV1): void
    {
        $this->PV1 = $PV1;
    }


}