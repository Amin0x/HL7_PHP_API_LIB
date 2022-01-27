<?php


namespace amin0x\nabidh;


class ACK_Response
{
    private ?MSH $MSH;
    private ?MSA $MSA;
    private array $ERR = [];

    public function __construct($res)
    {
        $this->MSH = null;
        $this->MSA = null;
    }

    public function isSuccess()
    {
        if (isset($this->MSA) && $this->MSA->getAcknowledgmentCode() == 'AA'){
            return true;
        }

        return false;
    }

    /**
     * @return array
     */
    public function getERR(): array
    {
        return $this->ERR;
    }

    /**
     * @return MSA
     */
    public function getMSA(): MSA
    {
        return $this->MSA;
    }

    /**
     * @return MSH
     */
    public function getMSH(): MSH
    {
        return $this->MSH;
    }
}