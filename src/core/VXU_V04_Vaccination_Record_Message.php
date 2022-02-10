<?php


namespace amin0x\nabidh;


class VXU_V04_Vaccination_Record_Message implements IMessage
{
    private MSH $MSH;
    private PID $PID;
    private PD1|null $PD1 = null;
    private array $NK1 = [];
    private PV1_GROUP|null $PV1_GROUP = null;
    private array $GT1 = [];
    private array $IN1 = [];

    /**
     * VXU_V04_Vaccination_Record_Message constructor.
     */
    public function __construct()
    {
        $this->MSH = new MSH();
        $this->PID = new PID();
        $this->getMSH()->setMessageType('VXU^V04');
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
     * @return PD1|null
     */
    public function getPD1(): ?PD1
    {
        return $this->PD1;
    }

    /**
     * @param PD1|null $PD1
     */
    public function setPD1(?PD1 $PD1): void
    {
        $this->PD1 = $PD1;
    }

    /**
     * @return array
     */
    public function getNK1(int $index)
    {
        return $this->NK1[$index];
    }

    /**
     * @param array $NK1
     */
    public function setNK1(NK1 $NK1): void
    {
        array_push($this->NK1 , $NK1);
    }

    /**
     * @return PV1_GROUP|null
     */
    public function getADTPV1GROUP(): ?PV1_GROUP
    {
        return $this->PV1_GROUP;
    }

    /**
     * @param PV1_GROUP|null $PV1_GROUP
     */
    public function setADTPV1GROUP(?PV1_GROUP $PV1_GROUP): void
    {
        $this->PV1_GROUP = $PV1_GROUP;
    }

    /**
     * @return array
     */
    public function getGT1(int $index): ?GT1
    {
        return $this->GT1[$index];
    }

    /**
     * @param GT1 $gt1
     */
    public function addGT1(GT1 $gt1): void
    {
        array_push($this->GT1 , $gt1);
    }

    /**
     * @return array
     */
    public function getIN1($index)
    {
        return $this->IN1[$index];
    }

    /**
     * @param IN1 $in1
     */
    public function addIN1(IN1 $in1): void
    {
        array_push($this->IN1 , $in1);
    }


    public function __toString(): string
    {
        $str = $this->MSH;
        $str .= $this->PID;

        if ($this->PD1 != null)
            $str .= $this->PD1;

        foreach ($this->NK1 as $item) {
            $str .= $item;
        }

        if ($this->getADTPV1GROUP() != null){
            $str .= $this->PV1_GROUP->getPv1();
            foreach ($this->PV1_GROUP->getPv2Array() as $item) {
                $str .= $item;
            }
        }

        foreach ($this->GT1 as $item) {
            $str .= $item;
        }

        foreach ($this->NK1 as $item) {
            $str .= $item ;
        }

        return $str;
    }
}