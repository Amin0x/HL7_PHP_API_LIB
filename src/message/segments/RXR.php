<?php
namespace amin0x\nabidh;

use BadMethodCallException;

class RXR implements Segment
{
    private $Route = '';
    private $AdministrationSite = '';

    /**
     * @return CE|string
     */
    public function getRoute(): CE|string
    {
        return $this->Route;
    }

    /**
     * @param CE $Route
     */
    public function setRoute(CE $Route): void
    {
        $this->Route = $Route;
    }

    /**
     * @return CE|string
     */
    public function getAdministrationSite(): CE|string
    {
        return $this->AdministrationSite;
    }

    /**
     * @param CE $AdministrationSite
     */
    public function setAdministrationSite(CE $AdministrationSite): void
    {
        $this->AdministrationSite = $AdministrationSite;
    }

    public function __toString()
    {
        return 'RXR|' . $this->Route . '|' . $this->AdministrationSite . '||||\r';
    }

}