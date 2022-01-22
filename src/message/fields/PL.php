<?php


namespace amin0x\nabidh;


class PL
{
    private $pointOfCare = '';
    private $room = '';
    private $bed = '';
    private $facility = '';
    private $locationDescription = '';

    /**
     * @return string
     */
    public function getPointOfCare(): string
    {
        return $this->pointOfCare;
    }

    /**
     * @param string $pointOfCare
     */
    public function setPointOfCare(string $pointOfCare): void
    {
        $this->pointOfCare = $pointOfCare;
    }

    /**
     * @return string
     */
    public function getRoom(): string
    {
        return $this->room;
    }

    /**
     * @param string $room
     */
    public function setRoom(string $room): void
    {
        $this->room = $room;
    }

    /**
     * @return string
     */
    public function getBed(): string
    {
        return $this->bed;
    }

    /**
     * @param string $bed
     */
    public function setBed(string $bed): void
    {
        $this->bed = $bed;
    }

    /**
     * @return string
     */
    public function getFacility(): string
    {
        return $this->facility;
    }

    /**
     * @param string $facility
     */
    public function setFacility(string $facility): void
    {
        $this->facility = $facility;
    }

    /**
     * @return string
     */
    public function getLocationDescription(): string
    {
        return $this->locationDescription;
    }

    /**
     * @param string $locationDescription
     */
    public function setLocationDescription(string $locationDescription): void
    {
        $this->locationDescription = $locationDescription;
    }

    public function __toString()
    {
        $str = '';
        $str = $this->pointOfCare . '^';
        $str .= $this->room . '^';
        $str .= $this->bed . '^';
        $str .= $this->facility . '^';
        $str .= '^^^^';
        $str .= $this->locationDescription . '^';

        return $str;
    }


}