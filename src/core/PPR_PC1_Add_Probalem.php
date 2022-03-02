<?php


namespace amin0x\nabidh;


class PPR_PC1_Add_Probalem implements IMessage
{
    private  MSH $MSH;
    private  PID $PID;
    private  PV1_GROUP|null $PATIENT_VISIT = null;
    private  array $PROBLEM = [];

    /**
     * PPR_PC1_Add_Probalem constructor.
     */
    public function __construct()
    {
        $this->MSH = new MSH();
        $this->PID = new PID();
        $this->getMSH()->setMessageType('PPR^PC1');
    }

    /**
     * @return MSH
     */
    public function getMSH(): MSH
    {
        return $this->MSH;
    }

    /**
     * @param MSH $MSH
     */
    public function setMSH(MSH $MSH): void
    {
        $this->MSH = $MSH;
    }

    /**
     * @return PID
     */
    public function getPID(): PID
    {
        return $this->PID;
    }

    /**
     * @param PID $PID
     */
    public function setPID(PID $PID): void
    {
        $this->PID = $PID;
    }

    /**
     * @return PV1_GROUP|null
     */
    public function getPATIENTVISIT(): ?PV1_GROUP
    {
        return $this->PATIENT_VISIT;
    }

    /**
     * @param PV1_GROUP|null $PATIENT_VISIT
     */
    public function setPATIENTVISIT(?PV1_GROUP $PATIENT_VISIT): void
    {
        $this->PATIENT_VISIT = $PATIENT_VISIT;
    }

    /**
     * @return array
     */
    public function getPROBLEM(): array
    {
        return $this->PROBLEM;
    }

    /**
     * @param array $PROBLEM
     */
    public function setPROBLEM(array $PROBLEM): void
    {
        $this->PROBLEM = $PROBLEM;
    }


    public function __toString(): string
    {
        $str = '';
        $str .= $this->MSH;
        $str .= $this->PID;
        if (!empty($this->PATIENT_VISIT)) {
            $str .= $this->PATIENT_VISIT;
        }

        foreach ($this->PROBLEM as $item) {
            $str .= $item;
        }

        return $str;
    }

}