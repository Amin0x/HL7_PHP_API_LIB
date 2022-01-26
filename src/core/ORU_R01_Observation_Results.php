<?php


namespace amin0x\nabidh;


class ORU_R01_Observation_Results
{
    private MSH $msh;
    private ORU_PID_SUPER_GROUP $oru_pid_group;

    public function __toString()
    {

        $str = $this->msh .'\r';
        $str .= $this->oru_pid_group;

        return $str;
    }
}