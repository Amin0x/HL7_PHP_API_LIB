<?php


namespace amin0x\nabidh;


class MDM_T02_Original_Document_Notification extends MDMT02Base
{

    public function __toString()
    {
        $str = (string) $this->getMsh();
        $str .= $this->getPid();

        if ($this->getEvn() != null)
            $str .= $this->getEvn();

        $str .= $this->getPv1();

        foreach ($this->getMDMORCGROUP() as $item) {
            $str .= $item;
        }

        $str .= $this->getTxa();

        foreach ($this->getOBXGroup() as $item) {
            $str .= $item;
        }

       return $str;
    }
}