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
    public function getNk1(): array
    {
        return $this->nk1;
    }

    /**
     * @param array $nk1
     */
    public function setNk1(array $nk1): void
    {
        $this->nk1 = $nk1;
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
    public function getGt1(): array
    {
        return $this->gt1;
    }

    /**
     * @param array $gt1
     */
    public function setGt1(array $gt1): void
    {
        $this->gt1 = $gt1;
    }

    /**
     * @return array
     */
    public function getIn1(): array
    {
        return $this->in1;
    }

    /**
     * @param array $in1
     */
    public function setIn1(array $in1): void
    {
        $this->in1 = $in1;
    }


}