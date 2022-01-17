<?php


namespace amin0x\nabidh;


class ORM_O01_Medication_Orders
{
    private MSH $msh;
    private ?PID_Group $pid_group = null;
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

    public function setPID_Group(PID_Group $group)
    {
        $this->pid_group = $group;
    }

    public function addORC_Group(ORC_Group $group)
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

}