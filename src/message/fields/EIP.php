<?php


namespace amin0x\nabidh;


final class EIP extends Field
{
    public function __construct($PlacerIdentifier = '', $FillerIdentifier = '')
    {
    }

    public function getPlacerAssignedIdentifier(){
        return $this->getElementValue(1);
    }

    public function getFillerAssignedIdentifier(){
        return $this->getElementValue(2);
    }

    public function setPlacerAssignedIdentifier(string $val){
        $this->setElementValue(1, $val);
    }

    public function setFillerAssignedIdentifier(string $val){
        $this->setElementValue(2, $val);
    }

    public function __toString()
    {
        return parent::__toString(); // TODO: Change the autogenerated stub
    }
}