<?php


namespace amin0x\nabidh;


class TQ1_GROUP extends Group
{
    private TQ1 $TQ1;
    private array $TQ2;

    /**
     * TQ1_GROUP constructor.
     * @param TQ1 $TQ1
     * @param array $TQ2
     */
    public function __construct(TQ1 $TQ1, array $TQ2 = [])
    {
        $this->TQ1 = $TQ1;
        $this->TQ2 = $TQ2;
    }

    /**
     * @return TQ1
     */
    public function getTQ1(): TQ1
    {
        return $this->TQ1;
    }

    /**
     * @param TQ1 $TQ1
     */
    public function setTQ1(TQ1 $TQ1): void
    {
        $this->TQ1 = $TQ1;
    }

    /**
     * @return array
     */
    public function getTQ2(): array
    {
        return $this->TQ2;
    }

    /**
     * @param array $TQ2
     */
    public function setTQ2(array $TQ2): void
    {
        $this->TQ2 = $TQ2;
    }

    public function __toString(): string
    {
        $str = (string) $this->TQ1;
        foreach ($this->TQ2 as $item) {
            $str .= $item;
        }
        return $str;
    }

    public function getArray(): array
    {
        return [];
    }

}