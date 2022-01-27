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
        if (isset($res)){
            $res = trim($res, '\r');
            $segments = explode('\r', $res);
            if (empty($segments) || count($segments) < 3)
                return;

            $msh_fields = explode('|', $segments[0]);
            $msa_fields = explode('|', $segments[1]);
            $err_fields = explode('|', $segments[2]);
            $msh = new MSH();

        }

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