<?php


namespace amin0x\nabidh;


final class XPN extends Field
{

    /**
     * XPN constructor.
     */
    public function __construct($LastName = '', $FirstName = '', $MidName = '', $Proficient = '')
    {
        $this->setElementValue(1, $LastName);
        $this->setElementValue(2, $FirstName);
        $this->setElementValue(3, $MidName);
        $this->setElementValue(7, 'D');
        if (!empty($Proficient)){
            $this->setElementValue(14, $Proficient);
        }
    }

    public function getLastName(){
        return $this->getElementValue(1);
    }

    public function setLastName($name){
        $this->setElementValue(1, $name);
    }

    public function getFirstName(){
        return $this->getElementValue(2);
    }

    public function setFirstName($name){
        $this->setElementValue(2, $name);
    }

    public function getMidName(){
        return $this->getElementValue(3);
    }

    public function setMidName($name){
        $this->setElementValue(3, $name);
    }

    public function __toString()
    {
        return parent::__toString();
    }

}