<?php


namespace amin0x\nabidh;


final class JCC extends Field
{

    public function __construct($JobCode = '', $JobClass = '', $JobDescriptionText = '')
    {
        $this->setJobCode($JobCode);
        $this->setJobClass($JobClass);
        $this->setJobDescriptionText($JobDescriptionText);
    }

    /**
     * @return mixed
     */
    public function getJobCode()
    {
        return $this->getElementValue(1);
    }

    /**
     * @param mixed $JobCode
     */
    public function setJobCode($JobCode): void
    {
        $this->setElementValue(1, $JobCode);
    }

    /**
     * @return mixed
     */
    public function getJobClass()
    {
        return $this->getElementValue(2);
    }

    /**
     * @param mixed $JobClass
     */
    public function setJobClass($JobClass): void
    {
        $this->setElementValue(2 , $JobClass);
    }

    /**
     * @return mixed
     */
    public function getJobDescriptionText()
    {
        return $this->getElementValue(3);
    }

    /**
     * @param mixed $JobDescriptionText
     */
    public function setJobDescriptionText($JobDescriptionText): void
    {
        $this->setElementValue(3, $JobDescriptionText);
    }

    public function __toString()
    {
        return parent::__toString(); // TODO: Change the autogenerated stub
    }
}