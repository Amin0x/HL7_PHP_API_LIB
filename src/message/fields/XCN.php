<?php


namespace amin0x\nabidh;


use Exception;

final class XCN extends Field
{

    /**
     * @return string
     */
    public function getIdNumber(): string
    {
        return $this->getElementValue(1);
    }

    /**
     * @param string $IdNumber
     */
    public function setIdNumber(string $IdNumber): void
    {
        $this->setElementValue(1, $IdNumber);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->getElementValue(2);
    }

    /**
     * @param string $FirstName
     */
    public function setFirstName(string $FirstName): void
    {
        $this->setElementValue(2,  $FirstName);
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->getElementValue(3);
    }

    /**
     * @param string $LastName
     */
    public function setLastName(string $LastName): void
    {
        $this->setElementValue(3, $LastName);
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->getElementValue(4);
    }

    /**
     * @param string $MiddleName
     */
    public function setMiddleName(string $MiddleName): void
    {
        $this->setElementValue(4, $MiddleName);
    }

    /**
     * @return string
     */
    public function getPrefex(): string
    {
        return $this->getElementValue(6);
    }

    /**
     * @param string $prefex
     */
    public function setPrefex(string $prefex): void
    {
        $this->setElementValue(6, $prefex);
    }

    /**
     * @return string
     */
    public function getAssigningAuthority(): string
    {
        return $this->getElementValue(9);
    }

    /**
     * @param string $type
     */
    public function setAssigningAuthority(string $type = 'SHERYAN'): void
    {
        $this->setElementValue(9, $type);
    }

    /**
     * @return string
     */
    public function getNameTypeCode(): string
    {
        throw  new Exception();
        //return $this->getElementValue();
    }

    /**
     * @param string $NameTypeCode
     */
    public function setNameTypeCode(string $NameTypeCode): void
    {
        throw new Exception();
        //$this->setElementValue( null, $NameTypeCode);
    }

    public function __toString(): string
    {
        return parent::__toString();
    }
}