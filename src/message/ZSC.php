<?php
namespace nabidh;
class ZSC implements Segment {
    
    private $OptOutFlag = '';
    private $OptOutFlagEnteredDate = '';
    private $VIPFlag = '';
    private $VIPFlagEnteredDate = '';

    /**
     * @return string
     */
    public function getOptOutFlag(): string
    {
        return $this->OptOutFlag;
    }

    /**
     * @param string $OptOutFlag
     */
    public function setOptOutFlag(string $OptOutFlag): void
    {
        $this->OptOutFlag = $OptOutFlag;
    }

    /**
     * @return string
     */
    public function getOptOutFlagEnteredDate(): string
    {
        return $this->OptOutFlagEnteredDate;
    }

    /**
     * @param string $OptOutFlagEnteredDate
     */
    public function setOptOutFlagEnteredDate(string $OptOutFlagEnteredDate): void
    {
        $this->OptOutFlagEnteredDate = $OptOutFlagEnteredDate;
    }

    /**
     * @return string
     */
    public function getVIPFlag(): string
    {
        return $this->VIPFlag;
    }

    /**
     * @param string $VIPFlag
     */
    public function setVIPFlag(string $VIPFlag): void
    {
        $this->VIPFlag = $VIPFlag;
    }

    /**
     * @return string
     */
    public function getVIPFlagEnteredDate(): string
    {
        return $this->VIPFlagEnteredDate;
    }

    /**
     * @param string $VIPFlagEnteredDate
     */
    public function setVIPFlagEnteredDate(string $VIPFlagEnteredDate): void
    {
        $this->VIPFlagEnteredDate = $VIPFlagEnteredDate;
    }

}