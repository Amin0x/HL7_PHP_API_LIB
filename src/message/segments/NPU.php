<?php
namespace amin0x\nabidh;

class NPU implements Segment {

    private $BedLocation = '';
    private $BedStatus = '';

    /**
     * NPU constructor.
     * @param string $BedLocation
     * @param string $BedStatus
     */
    public function __construct(string $BedLocation, string $BedStatus)
    {
        $this->BedLocation = $BedLocation;
        $this->BedStatus = $BedStatus;
    }

    /**
     * @return string
     */
    public function getBedLocation(): string
    {
        return $this->BedLocation;
    }

    /**
     * @param string $BedLocation
     */
    public function setBedLocation(string $BedLocation): void
    {
        $this->BedLocation = $BedLocation;
    }

    /**
     * @return string
     */
    public function getBedStatus(): string
    {
        return $this->BedStatus;
    }

    /**
     * @param string $BedStatus
     */
    public function setBedStatus(string $BedStatus): void
    {
        $this->BedStatus = $BedStatus;
    }


    public function __toString()
    {
        return '';
    }
}