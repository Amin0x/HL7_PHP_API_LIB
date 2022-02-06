<?php


namespace amin0x\nabidh;


final class EI extends Field
{
    public function getEntityIdentifier()
    {
        return $this->getElementValue(1);
    }

    public function setEntityIdentifier(string $value)
    {
        $this->setElementValue(1, $value);
    }

    public function getNamespaceId()
    {
        return $this->getElementValue(2);
    }

    public function setNamespaceId(string $value)
    {
        $this->setElementValue(2, $value);
    }

    public function getUniversalId()
    {
        return $this->getElementValue(3);
    }

    public function setUniversalId(string $value)
    {
        $this->setElementValue(3, $value);
    }

    public function getUniversalIdType()
    {
        return $this->getElementValue(4);
    }

    public function setUniversalIdType(string $value)
    {
        $this->setElementValue(4, $value);
    }

    public function __toString()
    {
        return parent::__toString(); // TODO: Change the autogenerated stub
    }
}