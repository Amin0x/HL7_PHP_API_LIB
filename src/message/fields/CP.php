<?php


namespace amin0x\nabidh;


final class CP extends Field
{
    public function __construct()
    {
    }

    public function getPrice(){
        return $this->getElementValue(1);
    }

    public function setPrice(string $value){
        $this->setElementValue(1, $value);
    }

    public function getPriceType(){
        return $this->getElementValue(2);
    }

    public function setPriceType(string $value){
        $this->setElementValue(2, $value);
    }

    public function getFromValue(){
        return $this->getElementValue(3);
    }

    public function setFromValue(string $value){
        $this->setElementValue(3, $value);
    }

    public function getToValue(){
        return $this->getElementValue(4);
    }

    public function setToValue(string $value){
        $this->setElementValue(4, $value);
    }

    public function getRangeUnits(){
        return $this->getElementValue(5);
    }

    public function setRangeUnits(string $value){
        $this->setElementValue(5, $value);
    }

    public function getRangeType(){
        return $this->getElementValue(6);
    }

    public function setRangeType(string $value){
        $this->setElementValue(6, $value);
    }

    public function __toString(): string
    {
        return parent::__toString();
    }
}