<?php


namespace amin0x\nabidh;


class ORU_R01_Observation_Results
{
    private MSH $msh;
    private ORU_PID_SUPER_GROUP $oru_pid_group;

    /**
     * @param MSH $msh
     */
    public function setMsh(MSH $msh): void
    {
        $this->msh = $msh;
    }

    /**
     * @return MSH
     */
    public function getMsh(): MSH
    {
        return $this->msh;
    }
    /**
     * @param ORU_PID_SUPER_GROUP $oru_pid_group
     */
    public function setOruPidGroup(ORU_PID_SUPER_GROUP $oru_pid_group): void
    {
        $this->oru_pid_group = $oru_pid_group;
    }

    /**
     * @return ORU_PID_SUPER_GROUP
     */
    public function getOruPidGroup(): ORU_PID_SUPER_GROUP
    {
        return $this->oru_pid_group;
    }

    public function __toString()
    {

        $str = $this->msh .'\r';
        $str .= $this->oru_pid_group;

        return $str;
    }
}