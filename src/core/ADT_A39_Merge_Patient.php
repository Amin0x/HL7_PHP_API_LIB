<?php


namespace amin0x\nabidh;


class ADT_A39_Merge_Patient implements IMessage
{
    private MSH $MSH;
    private EVN $EVN;
    private array $pid_group;

    /**
     * ADT_A39_Merge_Patient constructor.
     */
    public function __construct()
    {
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
     * @return array
     */
    public function getPidGroup(): array
    {
        return $this->pid_group;
    }

    /**
     * @param array $pid_group
     */
    public function setPidGroup(array $pid_group): void
    {
        $this->pid_group = $pid_group;
    }


    public function __toString(): string
    {
        return '';
    }
}