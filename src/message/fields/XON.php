<?php


namespace amin0x\nabidh;


final class XON extends Field
{
    public function getOrganizationName(){
        return $this->getElementValue(1);
    }

    public function setOrganizationName($name){
        $this->setElementValue(1, $name);
    }

    public function getIdNumber(){
        return $this->getElementValue(3);
    }

    public function setIdNumber($id){
        $this->setElementValue(3, $id);
    }

    public function getAssigningAuthority(){
        return $this->getElementValue(6);
    }

    public function setAssigningAuthority($auth){
        $this->setElementValue(6, $auth);
    }

    public function getOrganizationIdentifier(){
        return $this->getElementValue(10);
    }

    public function setOrganizationIdentifier($id){
        $this->setElementValue(10, $id);
    }

    public function __toString(): string
    {
        return parent::__toString();
    }
}