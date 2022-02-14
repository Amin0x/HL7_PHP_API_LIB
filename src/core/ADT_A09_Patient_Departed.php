<?php


namespace amin0x\nabidh;


class ADT_A09_Patient_Departed extends ADTA03 implements IMessage
{
    private PD1|null $PD1;
    private PV2|null $PV2;
    private array $OBX;
    private array $DG1;

    public function __construct()
    {
        parent::__construct();

        $this->PD1 = null;
        $this->PV2 = null;
        $this->OBX = [];
        $this->DG1 = [];

        $this->getMSH()->setMessageType('ADT^A09');
        $this->getEVN()->setEventTypeCode('A09');
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
     * @return PV2|null
     */
    public function getPV2(): ?PV2
    {
        return $this->PV2;
    }

    /**
     * @param PV2|null $PV2
     */
    public function setPV2(?PV2 $PV2): void
    {
        $this->PV2 = $PV2;
    }


    /**
     * @param int $index
     * @return OBX
     */
    public function getOBX(int $index): OBX
    {
        return $this->OBX[$index];
    }

    /**
     * @param int $index
     * @param OBX $OBX
     */
    public function setOBX(int $index, OBX $OBX): void
    {
        $this->OBX[$index] = $OBX;
    }


    /**
     * @param int $index
     * @return DG1
     */
    public function getDG1(int $index): DG1
    {
        return $this->DG1[$index];
    }

    /**
     * @param int $index
     * @param DG1 $DG1
     */
    public function setDG1(int $index, DG1 $DG1): void
    {
        $this->DG1[$index] = $DG1;
    }

    public function __toString(): string
    {
        return '';
    }
}