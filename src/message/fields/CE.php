<?php


namespace amin0x\nabidh;


final class CE extends Element
{
    /**
     * CE constructor.
     */
    public function __construct($identifier, $text, $nameOfCodingSystem)
    {
        $this->setIdentifier($identifier);
        $this->setText($text);
        $this->setNameOfCodingSystem($nameOfCodingSystem);
    }

    /**
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->getElementValue(1);
    }

    /**
     * @param mixed $Identifier
     */
    public function setIdentifier($Identifier): void
    {
        $this->setElementValue(1, $Identifier);
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->getElementValue(2);
    }

    /**
     * @param mixed $Text
     */
    public function setText($Text): void
    {
        $this->setElementValue(2, $Text);
    }

    /**
     * @return mixed
     */
    public function getNameOfCodingSystem()
    {
        return $this->getElementValue(3);
    }

    /**
     * @param mixed $NameofCodingSystem
     */
    public function setNameOfCodingSystem($NameOfCodingSystem): void
    {
        $this->setElementValue(3, $NameOfCodingSystem);
    }

    public function __toString()
    {
        return parent::__toString();
    }


}