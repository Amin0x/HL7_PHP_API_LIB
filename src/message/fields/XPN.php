<?php


namespace amin0x\nabidh;


final class XPN extends Element
{
    public function getA(){
        return $this->getElementValue(3);
    }

    public function setA($a){
        $this->setElementValue(3, $a);
    }


}