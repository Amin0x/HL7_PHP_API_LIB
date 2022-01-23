<?php


namespace amin0x\nabidh;


class ADT_INSURANCE extends Group
{
    private static int $index = 1;
    private  IN1 $in1;
    private array $in2 = [];
    private array $in3 = [];
    private array $rol = [];

    /**
     * ADT_INSURANCE constructor.
     * @param IN1 $in1
     * @param array $in2
     * @param array $in3
     * @param array $rol
     */
    public function __construct(IN1 $in1, array $in2 = [], array $in3 = [], array $rol = [])
    {
        $this->in1 = $in1;
        if (isset($in2) && !empty($in2)) {
            $this->in2 = $in2;
        }

        if (isset($in3) && !empty($in3)) {
            $this->in3 = $in3;
        }

        if (isset($rol) && !empty($rol)) {
            $this->rol = $rol;
        }
    }

    /**
     * @return IN1
     */
    public function getIn1(): IN1
    {
        return $this->in1;
    }

    /**
     * @param IN1 $in1
     */
    public function setIn1(IN1 $in1): void
    {
        $this->in1 = $in1;
    }

    /**
     * @return array
     */
    public function getIn2(): array
    {
        return $this->in2;
    }

    /**
     * @param array $in2
     */
    public function setIn2(array $in2): void
    {
        $this->in2 = $in2;
    }

    /**
     * @return array
     */
    public function getIn3(): array
    {
        return $this->in3;
    }

    /**
     * @param array $in3
     */
    public function setIn3(array $in3): void
    {
        $this->in3 = $in3;
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

    /**
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * @param int $index
     */
    public function setIndex(int $index): void
    {
        $this->index = $index;
    }

    /**
     * @return array|IN1[]
     */
    public function getArray(){
        return array_merge([$this->in1], $this->in2, $this->in3, $this->rol);
    }

    public function toString(){

    }


}