<?php


namespace amin0x\nabidh;


class VXU_V04_Vaccination_Record_Message
{
    private MSH $msh;
    private PID $pid;
    private ?PD1 $pd1 = null;
    private array $nk1 = [];
    private ?ADT_PV1_GROUP $ADT_PV1_GROUP = null;
    private array $gt1 = [];
    private array $in1 = [];

    /**
     * @return MSH
     */
    public function getMsh(): MSH
    {
        return $this->msh;
    }

    /**
     * @param MSH $msh
     */
    public function setMsh(MSH $msh): void
    {
        $this->msh = $msh;
    }

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
    public function getNk1(int $index)
    {
        return $this->nk1[$index];
    }

    /**
     * @param array $nk1
     */
    public function setNk1(NK1 $nk1): void
    {
        array_push($this->nk1 , $nk1);
    }

    /**
     * @return ADT_PV1_GROUP|null
     */
    public function getADTPV1GROUP(): ?ADT_PV1_GROUP
    {
        return $this->ADT_PV1_GROUP;
    }

    /**
     * @param ADT_PV1_GROUP|null $ADT_PV1_GROUP
     */
    public function setADTPV1GROUP(?ADT_PV1_GROUP $ADT_PV1_GROUP): void
    {
        $this->ADT_PV1_GROUP = $ADT_PV1_GROUP;
    }

    /**
     * @return array
     */
    public function getGt1(int $index)
    {
        return $this->gt1[$index];
    }

    /**
     * @param array $gt1
     */
    public function addGt1(GT1 $gt1): void
    {
        array_push($this->gt1 , $gt1);
    }

    /**
     * @return array
     */
    public function getIn1($index)
    {
        return $this->in1[$index];
    }

    /**
     * @param array $in1
     */
    public function addIn1(IN1 $in1): void
    {
        array_push($this->in1 , $in1);
    }


    public function __toString()
    {
        $str = $this->msh . '\r';
        $str .= $this->pid . '\r';
        $str .= $this->pd1 ? $this->pd1 . '\r' : '';
        foreach ($this->nk1 as $item) {
            $str .= $item . '\r';
        }

        $str .= $this->ADT_PV1_GROUP ? $this->ADT_PV1_GROUP : '';
        foreach ($this->gt1 as $item) {
            $str .= $item . '\r';
        }

        foreach ($this->nk1 as $item) {
            $str .= $item . '\r';
        }
        return $str;
    }
}