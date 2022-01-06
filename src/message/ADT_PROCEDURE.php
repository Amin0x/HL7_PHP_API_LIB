<?php


namespace nabidh;


class ADT_PROCEDURE
{
    private PR1 $pr1;
    private array $rol;

    /**
     * ADT_PROCEDURE constructor.
     * @param PR1 $pr1
     * @param array $rol
     */
    public function __construct(PR1 $pr1, array $rol = [])
    {
        $this->pr1 = $pr1;
        $this->rol = $rol;
    }

    /**
     * @return PR1
     */
    public function getPr1(): PR1
    {
        return $this->pr1;
    }

    /**
     * @param PR1 $pr1
     */
    public function setPr1(PR1 $pr1): void
    {
        $this->pr1 = $pr1;
    }

    /**
     * @return array
     */
    public function getRol(): array
    {
        return $this->rol;
    }

    /**
     * @param array $rol
     */
    public function setRol(array $rol): void
    {
        $this->rol = $rol;
    }

    public function toString(){

    }

}