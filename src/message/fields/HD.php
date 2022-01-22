<?php


namespace amin0x\nabidh;


class HD
{
    private $NamespaceId;
    private $UniversalId;

    /**
     * HD constructor.
     * @param $NamespaceId
     * @param $UniversalId
     */
    public function __construct($NamespaceId = '', $UniversalId = '')
    {
        $this->NamespaceId = $NamespaceId;
        $this->UniversalId = $UniversalId;
    }


    /**
     * @return mixed
     */
    public function getNamespaceId()
    {
        return $this->NamespaceId;
    }

    /**
     * @param mixed $NamespaceId
     */
    public function setNamespaceId($NamespaceId): void
    {
        $this->NamespaceId = $NamespaceId;
    }

    /**
     * @return mixed
     */
    public function getUniversalId()
    {
        return $this->UniversalId;
    }

    /**
     * @param mixed $UniversalId
     */
    public function setUniversalId($UniversalId): void
    {
        $this->UniversalId = $UniversalId;
    }

    public function __toString()
    {
        return $this->NamespaceId . '^' .$this->UniversalId;

    }


}