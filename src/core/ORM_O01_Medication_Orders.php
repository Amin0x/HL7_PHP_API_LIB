<?php


namespace amin0x\nabidh;


class ORM_O01_Medication_Orders
{
    private MSH $msh;
    private ?ADT_PID_GROUP $pid_group = null;
    private array $orc_group = [];

    /**
     * ORM_O01_Medication_Orders constructor.
     */
    public function __construct()
    {
        $this->msh = new MSH();
    }

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

    public function getPID_Group()
    {
        return $this->pid_group;
    }

    public function setPID_Group(ADT_PID_GROUP $group)
    {
        $this->pid_group = $group;
    }

    public function addORC_Group(ADT_ORC_GROUP $group)
    {
        array_push($this->orc_group, $group);
    }

    public function getORC_Group(int $index)
    {
        if(count($this->orc_group) > 0 && ($index < count($this->orc_group))){
            return $this->orc_group[$index];
        }

        return null;
    }

    public function __toString()
    {
        $str = $this->msh .'\r';
        if ($this->pid_group)
            $str .= $this->pid_group;

        foreach ($this->orc_group as $item) {
            $str .= $item;
        }
        return $str;
    }
}