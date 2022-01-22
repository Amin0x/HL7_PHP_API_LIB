<?php


namespace amin0x\nabidh;


class CE
{
    private  $Identifier;
    private  $Text;
    private  $NameofCodingSystem;

    /**
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->Identifier;
    }

    /**
     * @param mixed $Identifier
     */
    public function setIdentifier($Identifier): void
    {
        $this->Identifier = $Identifier;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param mixed $Text
     */
    public function setText($Text): void
    {
        $this->Text = $Text;
    }

    /**
     * @return mixed
     */
    public function getNameofCodingSystem()
    {
        return $this->NameofCodingSystem;
    }

    /**
     * @param mixed $NameofCodingSystem
     */
    public function setNameofCodingSystem($NameofCodingSystem): void
    {
        $this->NameofCodingSystem = $NameofCodingSystem;
    }

    public function __toString()
    {
        $str = '';
        return rtrim($str, '^');
    }


}