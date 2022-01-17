<?php


namespace amin0x\nabidh;


class ADT_PID_GROUP
{
    private PID $pid;
    private $pd1 = [];
    private ADT_PV1_GROUP $PV1_group;
    private $in1 = [];
    private $gt1 = null;
    private $al1 = [];

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
     * @return array
     */
    public function getPd1(int $index)
    {
        if(count($this->pd1) > 0 && $index < count($this->pd1)){
            return $this->pd1[$index];
        }

        return null;
    }

    /**
     * @param array $pd1
     */
    public function setPd1(PD1 $pd1): void
    {
        array_push($this->pd1, $pd1);
    }

    /**
     * @return ADT_PV1_GROUP
     */
    public function getPV1Group(): ADT_PV1_GROUP
    {
        return $this->PV1_group;
    }

    /**
     * @param ADT_PV1_GROUP $PV1_group
     */
    public function setPV1Group(ADT_PV1_GROUP $PV1_group): void
    {
        $this->PV1_group = $PV1_group;
    }

    /**
     * @return array
     */
    public function getIn1(int $index)
    {
        if(count($this->in1) > 0 && $index < count($this->in1)){
            return $this->in1[$index];
        }

        return null;
    }

    /**
     * @param IN1 $in1
     */
    public function setIn1(IN1 $in1): void
    {
        array_push($this->in1, $in1);
    }

    /**
     * @return null
     */
    public function getGt1()
    {
        return $this->gt1;
    }

    /**
     * @param null $gt1
     */
    public function setGt1($gt1): void
    {
        $this->gt1 = $gt1;
    }

    /**
     * @return AL1|null
     */
    public function getAl1( int $index)
    {
        if(count($this->al1) > 0 && $index < count($this->al1)){
            return $this->al1[$index];
        }

        return null;
    }

    /**
     * @param AL1 $al1
     */
    public function setAl1(AL1 $al1): void
    {
        array_push($this->al1, $al1);
    }


}