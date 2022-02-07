<?php


namespace amin0x\nabidh;


final class PL extends Field
{

    /**
     * PL constructor.
     * @param string $pointOfCare
     * @param string $room
     * @param string $bed
     * @param string $facility
     * @param string $locationDescription
     */
    public function __construct(string $pointOfCare = '',
                                string $room = '',
                                string $bed = '',
                                string $facility = '',
                                string $locationDescription = '')
    {
        $this->setPointOfCare($pointOfCare);
        $this->setRoom($room);
        $this->setBed($bed);
        $this->setFacility($facility);
        $this->setLocationDescription($locationDescription);
    }

    /**
     * @return string
     */
    public function getPointOfCare(): string
    {
        return $this->getElementValue(1);
    }

    /**
     * @param string $pointOfCare
     */
    public function setPointOfCare(string $pointOfCare): void
    {
        $this->setElementValue(1, $pointOfCare);
    }

    /**
     * @return string
     */
    public function getRoom(): string
    {
        return $this->getElementValue(2);
    }

    /**
     * @param string $room
     */
    public function setRoom(string $room): void
    {
        $this->setElementValue(2, $room);
    }

    /**
     * @return string
     */
    public function getBed(): string
    {
        return $this->getElementValue(3);
    }

    /**
     * @param string $bed
     */
    public function setBed(string $bed): void
    {
        $this->setElementValue(3, $bed);
    }

    /**
     * @return string
     */
    public function getFacility(): string
    {
        return $this->getElementValue(4);
    }

    /**
     * @param string $facility
     */
    public function setFacility(string $facility): void
    {
        $this->setElementValue(4, $facility);
    }

    /**
     * @return string
     */
    public function getLocationDescription(): string
    {
        return $this->getElementValue(9);
    }

    /**
     * @param string $locationDescription
     */
    public function setLocationDescription(string $locationDescription): void
    {
        $this->setElementValue(9, $locationDescription);
    }

    public function __toString()
    {
        return parent::__toString();
    }


}