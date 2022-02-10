<?php


namespace amin0x\nabidh;


class ADT_A39_Merge_Patient implements IMessage
{
    private MSH $MSH;
    private EVN $EVN;
    private array $PID_group;

    /**
     * ADT_A39_Merge_Patient constructor.
     */
    public function __construct()
    {
        $this->PID_group = [];
        $this->getMSH()->setMessageType('ADT^A39');
        $this->getEVN()->setEventTypeCode('A39');
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
    public function getPIDGroup(): array
    {
        return $this->PID_group;
    }

    /**
     * @param array $PID_group
     */
    public function setPIDGroup(array $PID_group): void
    {
        $this->PID_group = $PID_group;
    }


    public function __toString(): string
    {
        $str = $this->MSH . $this->EVN;
        foreach ($this->PID_group as $item) {
            $str .= $item;
        }
        return '';
    }
}