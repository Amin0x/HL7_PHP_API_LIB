<?php


namespace amin0x\nabidh;


class MRG_PID_GROUP extends Group
{
    public PID $PID;
    public ?PD1 $PD1 = null;
    public MRG $MRG;
    public ?PV1 $PV1 = null;

    /**
     * A40PID_GROUP constructor.
     */
    public function __construct(PID $PID, MRG $MRG, PD1 $PD1 = null, PV1 $PV1 = null)
    {
        $this->PID = $PID;
        $this->MRG = $MRG;
        $this->PD1 = $PD1;
        $this->PV1 = $PV1;
    }

    /**
     * @return PID
     */
    public function getPID(): PID
    {
        return $this->PID;
    }

    /**
     * @param PID $PID
     */
    public function setPID(PID $PID): void
    {
        $this->PID = $PID;
    }

    /**
     * @return PD1|null
     */
    public function getPD1(): ?PD1
    {
        return $this->PD1;
    }

    /**
     * @param PD1|null $PD1
     */
    public function setPD1(?PD1 $PD1): void
    {
        $this->PD1 = $PD1;
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
     * @return PV1|null
     */
    public function getPV1(): ?PV1
    {
        return $this->PV1;
    }

    /**
     * @param PV1|null $PV1
     */
    public function setPV1(?PV1 $PV1): void
    {
        $this->PV1 = $PV1;
    }

    public function __toString(): string
    {
        $str = (string) $this->PID;
        if (!empty($this->PD1)) {
            $str .= $this->PD1;
        }
        $str .= $this->MRG;
        if (!empty($this->PV1)) {
            $str .= $this->PV1;
        }

        return $str;
    }

    public function getArray(): array
    {
        return [];
    }
}