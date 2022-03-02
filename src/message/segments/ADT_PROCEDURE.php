<?php


namespace amin0x\nabidh;


class ADT_PROCEDURE extends Group
{
    private static int $index = 0;
    private PR1 $pr1;
    private array $rol;

    /**
     * ADT_PROCEDURE constructor.
     * @param PR1 $pr1
     */
    public function __construct(PR1 $pr1)
    {
        self::$index += 1;
        $this->pr1 = $pr1;
        $this->pr1->setID(self::$index);
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
        $this->pr1->setID(self::$index);
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
    public function addRol($rol): void
    {
        $this->rol[] = $rol;
        $this->rol[count($this->rol) - 1]->setID(self::$index);
    }

    public function getArray(): array
    {
        return array_merge([$this->pr1], $this->rol);
    }


    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }
}