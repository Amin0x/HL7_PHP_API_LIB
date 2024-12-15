<?php
namespace amin0x\nabidh;

use BadMethodCallException;

class RXR implements Segment
{
    private ?CE $route = null;
    private ?CE $administrationSite = null;

    /**
     * RXR constructor.
     * 
     * @param CE|null $route
     * @param CE|null $administrationSite
     */
    public function __construct(?CE $route = null, ?CE $administrationSite = null)
    {
        $this->route = $route;
        $this->administrationSite = $administrationSite;
    }

    /**
     * @return CE|null
     */
    public function getRoute(): ?CE
    {
        return $this->route;
    }

    /**
     * @param CE|null $route
     */
    public function setRoute(?CE $route): void
    {
        $this->route = $route;
    }

    /**
     * @return CE|null
     */
    public function getAdministrationSite(): ?CE
    {
        return $this->administrationSite;
    }

    /**
     * @param CE|null $administrationSite
     */
    public function setAdministrationSite(?CE $administrationSite): void
    {
        $this->administrationSite = $administrationSite;
    }

    /**
     * String representation of the RXR object.
     */
    public function __toString()
    {
        return 'RXR|' . ($this->route ? $this->route : '') . '|' . ($this->administrationSite ? $this->administrationSite : '') . '||||\r';
    }
}
