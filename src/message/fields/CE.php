<?php


namespace amin0x\nabidh;


final class CE extends Field
{
    /**
     * CE constructor.
     */
    public function __construct($identifier,
                                $text,
                                $nameOfCodingSystem,
                                $AlternateIdentifier = '',
                                $AlternateText = '',
                                $NameOfAlternateCodingSystem = '')
    {
        $this->setIdentifier($identifier);
        $this->setText($text);
        $this->setNameOfCodingSystem($nameOfCodingSystem);
        $this->setNameOfAlternateCodingSystem($NameOfAlternateCodingSystem);
        $this->setAlternateIdentifier($AlternateIdentifier);
        $this->setAlternateText($AlternateText);
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

    public function getAlternateIdentifier()
    {
        return $this->getElementValue(4);
    }

    public function setAlternateIdentifier(string $AlternateIdentifier)
    {
        $this->setElementValue(4, $AlternateIdentifier);
    }

    public function getAlternateText()
    {
        return $this->getElementValue(5);
    }

    public function setAlternateText(string $AlternateText)
    {
        $this->setElementValue(5, $AlternateText);
    }

    public function getNameOfAlternateCodingSystem()
    {
        return $this->getElementValue(6);
    }

    public function setNameOfAlternateCodingSystem(string $NameOfAlternateCodingSystem)
    {
        $this->setElementValue(6, $NameOfAlternateCodingSystem);
    }

    public function __toString() : string
    {
        return parent::__toString();
    }


}