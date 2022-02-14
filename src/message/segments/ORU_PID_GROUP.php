<?php


namespace amin0x\nabidh;


class ORU_PID_GROUP extends Group
{
    private PID $pid;
    private ?PD1 $pd1 = null;
    private array $nte = [];
    private array $nk1 = [];
    private ?PV1_GROUP $PV1_group = null;

    /**
     * @return PID
     */
    public function getPid(): PID
    {
        return $this->pid;
    }

    /**
     * @param PID $pid
     */
    public function setPid(PID $pid): void
    {
        $this->pid = $pid;
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
     * @return array
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
        array_push( $this->nte, $nte);
    }

    /**
     * @param int $index
     * @return NK1|null
     */
    public function getNk1(int $index): ?NK1
    {
        if(isset($this->nk1[$index])){
            return $this->nk1[$index];
        }

        return null;
    }

    /**
     * @param array $nk1
     */
    public function setNk1(NK1 $nk1): void
    {
        array_push($this->nk1, $nk1);
    }

    /**
     * @return PV1_GROUP|null
     */
    public function getPV1Group(): ?PV1_GROUP
    {
        return $this->PV1_group;
    }

    /**
     * @param PV1_GROUP|null $PV1_group
     */
    public function setPV1Group(?PV1_GROUP $PV1_group): void
    {
        $this->PV1_group = $PV1_group;
    }

    public function __toString(): string
    {
        $str = (string) $this->pid;
        if (!empty($this->pd1)) {
            $str .= $this->pd1;
        }
        foreach ($this->nte as $item) {
            $str .= $item;
        }
        foreach ($this->nk1 as $item) {
            $str .= $item;
        }
        if (!empty($this->PV1_group)) {
            $str .= $this->PV1_group;
        }

        return $str;
    }


    public function getArray(): array
    {
        return [];
    }
}