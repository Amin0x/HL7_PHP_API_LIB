<?php


namespace amin0x\nabidh;


use phpDocumentor\Reflection\Types\This;

class ORU_PID_SUPER_GROUP extends Group
{
    private ORU_PID_GROUP|null $oru_pid_group;
    private array $oru_orc_group;

    /**
     * ORU_PID_SUPER_GROUP constructor.
     */
    public function __construct()
    {
        $this->oru_pid_group = null;
        $this->oru_orc_group = [];
    }

    /**
     * @return ORU_PID_GROUP
     */
    public function getOruPidGroup(): ORU_PID_GROUP|null
    {
        return $this->oru_pid_group;
    }

    /**
     * @param ORU_PID_GROUP $oru_pid_group
     */
    public function setOruPidGroup(ORU_PID_GROUP $oru_pid_group): void
    {
        $this->oru_pid_group = $oru_pid_group;
    }

    /**
     * @param $index
     * @return ORU_ORC_GROUP|null
     */
    public function getOruOrcGroup($index): ORU_ORC_GROUP|null
    {
        if(isset($this->oru_orc_group[$index]))
            return $this->oru_orc_group[$index];

        return null;
    }

    public function getOruOrcGroupArray(): array
    {
        return $this->oru_orc_group;
    }

    /**
     * @param ORU_ORC_GROUP $oru_orc_group
     */
    public function addOruOrcGroup(ORU_ORC_GROUP $oru_orc_group): void
    {
        array_push($this->oru_orc_group, $oru_orc_group);
    }

    public function getArray(): array
    {
        $arr = [];

        if ($this->oru_pid_group){
            $arr = [$this->oru_pid_group];
        }

        foreach ($this->oru_orc_group as $oruorc){
            array_merge($arr, $oruorc->getArray());
        }

        return $arr;
    }

    public function __toString(): string
    {
        $str = '';
        if (!empty($this->oru_pid_group)) {
            $str .= $this->oru_pid_group;
        }
        foreach ($this->oru_orc_group as $item) {
            $str .= $item;
        }
        return $str;
    }


}