<?php


namespace amin0x\nabidh;


class OperatorID
{
    private $SheryanID = '';
    private $FirstName = '';
    private $LastName = '';
    private $MiddleName = '';
    private $prefex = '';
    private $type = '';

    /**
     * @return string
     */
    public function getSheryanID(): string
    {
        return $this->SheryanID;
    }

    /**
     * @param string $SheryanID
     */
    public function setSheryanID(string $SheryanID): void
    {
        $this->SheryanID = $SheryanID;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     */
    public function setFirstName(string $FirstName): void
    {
        $this->FirstName = $FirstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     */
    public function setLastName(string $LastName): void
    {
        $this->LastName = $LastName;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     */
    public function setMiddleName(string $MiddleName): void
    {
        $this->MiddleName = $MiddleName;
    }

    /**
     * @return string
     */
    public function getPrefex(): string
    {
        return $this->prefex;
    }

    /**
     * @param string $prefex
     */
    public function setPrefex(string $prefex): void
    {
        $this->prefex = $prefex;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type = 'SHERYAN'): void
    {
        $type = 'SHERYAN';
        $this->type = $type;
    }

    public function __toString(){

        $str = $this->SheryanID."^".$this->FirstName.'^'.$this->LastName.'^'
            .$this->MiddleName.'^^'.$this->prefex.'^^^'.$this->type;

        if (str_replace('^', '',$str) == ''){
            return '';
        }

        return $str;
    }

}