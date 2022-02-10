<?php


namespace amin0x\nabidh;


class MDM_T02_Original_Document_Notification extends MDMT02 implements IMessage
{

    /**
     * MDM_T02_Original_Document_Notification constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->getMSH()->setMessageType('MDM^T02');

    }

    public function __toString() : string
    {
        $str = (string) $this->getMSH();
        $str .= $this->getPID();

        if ($this->getEVN() != null)
            $str .= $this->getEVN();

        $str .= $this->getPV1();

        foreach ($this->getMDMORCGROUP() as $item) {
            $str .= $item->getOrc();

            if ($item->getTQ1GROUP())
                $str .= $item->getTQ1GROUP();

            $str .= $item->getObr();

            foreach ($item->getNte() as $value) {
                $str .= $value;
            }
        }

        $str .= $this->getTXA();

        foreach ($this->getOBXGroup() as $item) {
            $str .= $item;
        }

       return $str;
    }
}