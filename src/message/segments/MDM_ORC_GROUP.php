<?php


namespace amin0x\nabidh;


class MDM_ORC_GROUP extends Group
{
    private ORC $ORC;
    private ?TQ1_GROUP $TQ1_GROUP;
    private OBR $OBR;
    private array $NTE;

    /**
     * MDM_ORC_GROUP constructor.
     * @param ORC $ORC
     * @param TQ1_GROUP|null $TQ1_GROUP
     * @param OBR $OBR
     * @param array $NTE
     */
    public function __construct(ORC $ORC,  OBR $OBR,?TQ1_GROUP $TQ1_GROUP = null, array $NTE = [])
    {
        $this->ORC = $ORC;
        $this->TQ1_GROUP = $TQ1_GROUP;
        $this->OBR = $OBR;
        $this->NTE = $NTE;
    }

    /**
     * @return ORC
     */
    public function getORC(): ORC
    {
        return $this->ORC;
    }

    /**
     * @param ORC $ORC
     */
    public function setORC(ORC $ORC): void
    {
        $this->ORC = $ORC;
    }

    /**
     * @return TQ1_GROUP|null
     */
    public function getTQ1GROUP(): ?TQ1_GROUP
    {
        return $this->TQ1_GROUP;
    }

    /**
     * @param TQ1_GROUP|null $TQ1_GROUP
     */
    public function setTQ1GROUP(?TQ1_GROUP $TQ1_GROUP): void
    {
        $this->TQ1_GROUP = $TQ1_GROUP;
    }

    /**
     * @return OBR
     */
    public function getOBR(): OBR
    {
        return $this->OBR;
    }

    /**
     * @param OBR $OBR
     */
    public function setOBR(OBR $OBR): void
    {
        $this->OBR = $OBR;
    }

    /**
     * @return array
     */
    public function getNTE(): array
    {
        return $this->NTE;
    }

    /**
     * @param array $NTE
     */
    public function setNTE(array $NTE): void
    {
        $this->NTE = $NTE;
    }

    public function __toString(): string
    {
        return '';
    }

    public function getArray(): array
    {
        return [];
    }
}