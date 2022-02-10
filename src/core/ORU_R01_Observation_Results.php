<?php


namespace amin0x\nabidh;


use phpDocumentor\Reflection\Types\This;

class ORU_R01_Observation_Results implements IMessage
{
    private MSH $MSH;
    private array $ORU_PID_SUPER_GROUP;

    /**
     * ORU_R01_Observation_Results constructor.
     */
    public function __construct()
    {
        $this->MSH = new MSH();
        $this->ORU_PID_SUPER_GROUP = [];
        $this->MSH->setMessageType('ORU^R01');
    }

    /**
     * @param MSH $MSH
     */
    public function setMSH(MSH $MSH): void
    {
        $this->MSH = $MSH;
    }

    /**
     * @return MSH
     */
    public function getMSH(): MSH
    {
        return $this->MSH;
    }

    /**
     * @param ORU_PID_SUPER_GROUP $ORU_PID_SUPER_GROUP
     */
    public function addORUPIDSUPERGROUP(ORU_PID_SUPER_GROUP $ORU_PID_SUPER_GROUP): void
    {
        array_push($this->ORU_PID_SUPER_GROUP, $ORU_PID_SUPER_GROUP);
    }

    /**
     * @param $index
     * @return ORU_PID_SUPER_GROUP|null
     */
    public function getORUPIDSUPERGROUP($index): ORU_PID_SUPER_GROUP|null
    {
        if (isset($this->ORU_PID_SUPER_GROUP[$index])){
            return $this->ORU_PID_SUPER_GROUP[$index];
        }
        return null;
    }

    public function __toString(): string
    {

        $str = (string) $this->MSH;
        foreach ($this->ORU_PID_SUPER_GROUP as $i=>$item) {

            foreach ($this->getORUPIDSUPERGROUP($i)->getArray() as $y=>$yitem){
                $str .= $yitem;
            }
        }


        return $str;
    }
}