<?php


namespace amin0x\nabidh;


final class HD extends Field
{


    /**
     * HD constructor.
     * @param $NamespaceId
     * @param $UniversalId
     */
    public function __construct($NamespaceId = '', $UniversalId = '')
    {
        $this->setNamespaceId($NamespaceId);
        $this->setUniversalId($UniversalId);
    }


    /**
     * @return mixed
     */
    public function getNamespaceId()
    {
        return $this->getElementValue(1);
    }

    /**
     * @param mixed $NamespaceId
     */
    public function setNamespaceId($NamespaceId): void
    {
        $this->setElementValue(1, $NamespaceId);
    }

    /**
     * @return mixed
     */
    public function getUniversalId()
    {
        return $this->getElementValue(2);
    }

    /**
     * @param mixed $UniversalId
     */
    public function setUniversalId($UniversalId): void
    {
        $this->setElementValue(2, $UniversalId);
    }

    public function __toString()
    {
        return parent::__toString();

    }

}