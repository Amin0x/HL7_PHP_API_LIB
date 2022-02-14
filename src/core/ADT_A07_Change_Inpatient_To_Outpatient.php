<?php


namespace amin0x\nabidh;


class ADT_A07_Change_Inpatient_To_Outpatient extends ADTA03 implements IMessage
{
    private PD1|null $PD1;
    private array $NK1;
    private PV2|null $PV2;
    private array $OBX;
    private array $AL1;
    private array $DG1;
    private DRG|null $DRG;
    private array $PR1;
    private array $GT1;
    private array $IN1;

    public function __construct()
    {
        parent::__construct();

        $this->PD1 = null;
        $this->NK1 = [];
        $this->PV2 = null;
        $this->OBX = [];
        $this->AL1 = [];
        $this->DG1 = [];
        $this->DRG = null;
        $this->PR1 = [];
        $this->GT1 = [];
        $this->IN1 = [];
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
     * @param int $index
     * @return NK1
     */
    public function getNK1(int $index): NK1
    {
        return $this->NK1[$index];
    }

    /**
     * @param int $index
     * @param NK1 $NK1
     */
    public function setNK1(int $index, NK1 $NK1): void
    {
        $this->NK1[$index] = $NK1;
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
     * @return AL1
     */
    public function getAL1(int $index): AL1
    {
        return $this->AL1[$index];
    }

    /**
     * @param int $index
     * @param AL1 $AL1
     */
    public function setAL1(int $index, AL1 $AL1): void
    {
        $this->AL1[$index] = $AL1;
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

    /**
     * @return DRG|null
     */
    public function getDRG(): ?DRG
    {
        return $this->DRG;
    }

    /**
     * @param DRG|null $DRG
     */
    public function setDRG(?DRG $DRG): void
    {
        $this->DRG = $DRG;
    }

    /**
     * @param int $index
     * @return PR1
     */
    public function getPR1(int $index): PR1
    {
        return $this->PR1[$index];
    }

    /**
     * @param int $index
     * @param PR1 $PR1
     */
    public function setPR1(int $index, PR1 $PR1): void
    {
        $this->PR1[$index] = $PR1;
    }

    /**
     * @param int $index
     * @return GT1
     */
    public function getGT1(int $index): GT1
    {
        return $this->GT1[$index];
    }

    /**
     * @param int $index
     * @param GT1 $GT1
     */
    public function setGT1(int $index, GT1 $GT1): void
    {
        $this->GT1[$index] = $GT1;
    }

    /**
     * @param int $index
     * @return IN1
     */
    public function getIN1(int $index): IN1
    {
        return $this->IN1[$index];
    }

    /**
     * @param int $index
     * @param IN1 $IN1
     */
    public function setIN1(int $index, IN1 $IN1): void
    {
        $this->IN1[$index] = $IN1;
    }

    public function __toString(): string
    {
        $str = '';
        if (!empty($this->PD1)) {
            $str .= $this->PD1;
        }

        foreach ($this->NK1 as $item) {
            $str .= $item;
        }

        if (!empty($this->PV2)) {
            $str .= $this->PV2;
        }
        foreach ($this->OBX as $item) {
            $str .= $item;
        }
        foreach ($this->AL1 as $item) {
            $str .= $item;
        }
        foreach ($this->DG1 as $item) {
            $str .= $item;
        }

        if (!empty($this->DRG)) {
            $str .= $this->DRG;
        }

        foreach ($this->PR1 as $item) {
            $str .= $item;
        }
        foreach ($this->GT1 as $item) {
            $str .= $item;
        }
        foreach ($this->IN1 as $item) {
            $str .= $item;
        }

        return $str;
    }
}