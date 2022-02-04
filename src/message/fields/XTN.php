<?php


namespace amin0x\nabidh;


final class XTN extends Element
{
    private $Number = '';
    private $Code = '';
    private $Type = '';

    /**
     * XTN constructor.
     * @param string $Number
     * @param string $Code
     * @param string $Type
     */
    public function __construct(string $Number, string $Code, string $Type)
    {
        $this->Number = $Number;
        $this->Code = $Code;
        $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     */
    public function setNumber(string $Number): void
    {
        $this->Number = $Number;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     */
    public function setCode(string $Code): void
    {
        $this->Code = $Code;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     */
    public function setType(string $Type): void
    {
        $this->Type = $Type;
    }

    public function __toString()
    {
        $str = $this->Number . '^';
        $str = $this->Code . '^';
        $str = $this->Type;

        return rtrim($str, '^');
    }


}