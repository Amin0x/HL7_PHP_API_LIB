<?php


namespace amin0x\nabidh;


final class XTN extends Field
{

    /**
     * XTN constructor.
     * @param string $Number
     * @param string $Code
     * @param string $Type
     */
    public function __construct(string $Number = '', string $Code = '', string $Type = '', string $EmailAddress = '')
    {
        $this->setTelephoneNumber($Number);
        $this->setTelecommunicationUseCode($Code);
        $this->setTelecommunicationEquipmentType($Type);
        $this->setEmailAddress($EmailAddress);
    }

    /**
     * @return string
     */
    public function getTelephoneNumber(): string
    {
        return $this->getElementValue(1);
    }

    /**
     * @param string $TelephoneNumber
     */
    public function setTelephoneNumber(string $TelephoneNumber): void
    {
        $this->setElementValue(1, $TelephoneNumber);
    }

    /**
     * @return string
     */
    public function getTelecommunicationUseCode(): string
    {
        return $this->getElementValue(2);
    }

    /**
     * @param string $TelecommunicationUseCode
     */
    public function setTelecommunicationUseCode(string $TelecommunicationUseCode): void
    {
        $this->setElementValue(2, $TelecommunicationUseCode);
    }

    /**
     * @return string
     */
    public function getTelecommunicationEquipmentType(): string
    {
        return $this->getElementValue(3);
    }

    /**
     * @param string $TelecommunicationEquipmentType
     */
    public function setTelecommunicationEquipmentType(string $TelecommunicationEquipmentType): void
    {
        $this->setElementValue(3, $TelecommunicationEquipmentType);
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->getElementValue(4);
    }

    /**
     * @param string $EmailAddress
     */
    public function setEmailAddress(string $EmailAddress): void
    {
        $this->setElementValue(4, $EmailAddress);
    }

    public function __toString()
    {
        return parent::__toString();
    }


}