<?php


namespace amin0x\nabidh;


class ADT_A30_Merge_Patient_Information implements IMessage
{
    private MSH $MSH;
    private EVN $EVN;
    private PID $PID;
    private ?PD1 $PD1 = null;
    private MRG $MRG;

    /**
     * ADT_A47_Change_Patient_Identifier_List constructor.
     */
    public function __construct()
    {
        $this->MSH = new MSH();
        $this->EVN = new EVN();
        $this->PID = new PID();
        $this->MRG = new MRG();
        
        $this->getMSH()->setMessageType('ADT^A30');
        $this->getEVN()->setEventTypeCode('A30');
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
     * @return EVN
     */
    public function getEVN(): EVN
    {
        return $this->EVN;
    }

    /**
     * @param EVN $EVN
     */
    public function setEVN(EVN $EVN): void
    {
        $this->EVN = $EVN;
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
     * @return MRG
     */
    public function getMRG(): MRG
    {
        return $this->MRG;
    }

    /**
     * @param MRG $MRG
     */
    public function setMRG(MRG $MRG): void
    {
        $this->MRG = $MRG;
    }

    public function __toString(): string
    {
        $str = $this->MSH . $this->EVN . $this->PID;
        if ($this->PD1 != null)
            $str .= $this->PD1;

        $str .= $this->MRG;
        return $str;
    }
}