<?php


namespace amin0x\nabidh;


class ORU_PID_SUPER_GROUP
{
    private ORU_PID_GROUP $oru_pid_group;
    private ORU_ORC_GROUP $oru_orc_group;

    /**
     * @return ORU_PID_GROUP
     */
    public function getOruPidGroup(): ORU_PID_GROUP
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
     * @return ORU_ORC_GROUP
     */
    public function getOruOrcGroup(): ORU_ORC_GROUP
    {
        return $this->oru_orc_group;
    }

    /**
     * @param ORU_ORC_GROUP $oru_orc_group
     */
    public function setOruOrcGroup(ORU_ORC_GROUP $oru_orc_group): void
    {
        $this->oru_orc_group = $oru_orc_group;
    }


}