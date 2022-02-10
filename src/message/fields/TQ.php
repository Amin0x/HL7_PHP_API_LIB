<?php


namespace amin0x\nabidh;


final class TQ extends Field
{
    public function __construct()
    {

    }

    public function getQuantity(){
        return $this->getElementValue(1);
    }

    public function setQuantity(string $val){
        $this->setElementValue(1, $val);
    }

    public function getInterval(){
        return $this->getElementValue(2);
    }

    public function setInterval(string $val){
        $this->setElementValue(2, $val);
    }

    public function getDuration(){
        return $this->getElementValue(3);
    }

    public function setDuration(string $val){
        $this->setElementValue(3, $val);
    }

    public function getStartDateTime(){
        return $this->getElementValue(4);
    }

    public function setStartDateTime(string $val){
        $this->setElementValue(4, $val);
    }

    public function getEndDateTime(){
        return $this->getElementValue(5);
    }

    public function setEndDateTime(string $val){
        $this->setElementValue(5, $val);
    }

    public function getPriority(){
        return $this->getElementValue(6);
    }

    public function setPriority(string $val){
        $this->setElementValue(6, $val);
    }

    public function getCondition(){
        return $this->getElementValue(7);
    }

    public function setCondition(string $val){
        $this->setElementValue(7, $val);
    }

    public function getText(){
        return $this->getElementValue(8);
    }

    public function setText(string $val){
        $this->setElementValue(8, $val);
    }

    public function getConjunction(){
        return $this->getElementValue(9);
    }

    public function setConjunction(string $val){
        $this->setElementValue(9, $val);
    }


}