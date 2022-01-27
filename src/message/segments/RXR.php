<?php
namespace amin0x\nabidh;

class RXR implements Segment
{
    private $Route = '';
    private $AdministrationSite = '';

    /**
     * @return string
     */
    public function getRoute(): string
    {
        return $this->Route;
    }

    /**
     * @param string $Route
     */
    public function setRoute(string $Route): void
    {
        $this->Route = $Route;
    }

    /**
     * @return string
     */
    public function getAdministrationSite(): string
    {
        return $this->AdministrationSite;
    }

    /**
     * @param string $AdministrationSite
     */
    public function setAdministrationSite(string $AdministrationSite): void
    {
        $this->AdministrationSite = $AdministrationSite;
    }


}