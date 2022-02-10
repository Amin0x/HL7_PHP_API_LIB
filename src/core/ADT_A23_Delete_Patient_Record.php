<?php


namespace amin0x\nabidh;


class ADT_A23_Delete_Patient_Record extends ADTA01 implements IMessage
{
    private ?PD1 $PD1 = null;
    private ?PV2 $PV2 = null;
    private array $DB1 = [];
    private array $OBX = [];

    /**
     * ADT_A23_Delete_Patient_record constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->getMessageHeader()->setMessageType('ADT^A23');
        $this->getEventType()->setEventTypeCode('A23');
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


    public function getDB1(int $index)
    {
        return $this->DB1[$index];
    }


    public function setDB1($DB1): void
    {
        array_push($this->DB1, $DB1);
    }

    public function getOBX(int $index)
    {
        return $this->OBX[$index];
    }


    public function setOBX($OBX): void
    {
        array_push($this->DB1, $OBX);
    }

    public function __toString(): string
    {
        $str = $this->getMessageHeader();
        $str .= $this->getEventType();
        $str .= $this->getPatientIdentification();
        $str .= $this->PD1 == null ?  '' : $this->PD1;
        $str .= $this->getPatientVisit();
        $str .= $this->PV2 == null ? '' : $this->PV2;

        foreach ($this->DB1 as $item) {
            $str .= $item;
        }

        foreach ($this->OBX as $item) {
            $str .= $item;
        }

        return $str;
    }
}