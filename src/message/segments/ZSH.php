<?php
namespace amin0x\nabidh;
class ZSH implements Segment
{
    
    private $SetID_ZSH = '';
    private $SocialHabit = '';
    private $SocialHabitQty = '';
    private $SocialHabitCategory = '';
    private $SocialHabitComments = '';
    private $Status = '';
    private $FromTime = '';
    private $ToTime = '';
    private $EnteredBy = '';

    /**
     * @return string
     */
    public function getSetIDZSH(): string
    {
        return $this->SetID_ZSH;
    }

    /**
     * @param string $SetID_ZSH
     */
    public function setSetIDZSH(string $SetID_ZSH): void
    {
        $this->SetID_ZSH = $SetID_ZSH;
    }

    /**
     * @return string
     */
    public function getSocialHabit(): string
    {
        return $this->SocialHabit;
    }

    /**
     * @param string $SocialHabit
     */
    public function setSocialHabit(string $SocialHabit): void
    {
        $this->SocialHabit = $SocialHabit;
    }

    /**
     * @return string
     */
    public function getSocialHabitQty(): string
    {
        return $this->SocialHabitQty;
    }

    /**
     * @param string $SocialHabitQty
     */
    public function setSocialHabitQty(string $SocialHabitQty): void
    {
        $this->SocialHabitQty = $SocialHabitQty;
    }

    /**
     * @return string
     */
    public function getSocialHabitCategory(): string
    {
        return $this->SocialHabitCategory;
    }

    /**
     * @param string $SocialHabitCategory
     */
    public function setSocialHabitCategory(string $SocialHabitCategory): void
    {
        $this->SocialHabitCategory = $SocialHabitCategory;
    }

    /**
     * @return string
     */
    public function getSocialHabitComments(): string
    {
        return $this->SocialHabitComments;
    }

    /**
     * @param string $SocialHabitComments
     */
    public function setSocialHabitComments(string $SocialHabitComments): void
    {
        $this->SocialHabitComments = $SocialHabitComments;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     */
    public function setStatus(string $Status): void
    {
        $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getFromTime(): string
    {
        return $this->FromTime;
    }

    /**
     * @param string $FromTime
     */
    public function setFromTime(string $FromTime): void
    {
        $this->FromTime = $FromTime;
    }

    /**
     * @return string
     */
    public function getToTime(): string
    {
        return $this->ToTime;
    }

    /**
     * @param string $ToTime
     */
    public function setToTime(string $ToTime): void
    {
        $this->ToTime = $ToTime;
    }

    /**
     * @return string
     */
    public function getEnteredBy(): string
    {
        return $this->EnteredBy;
    }

    /**
     * @param string $EnteredBy
     */
    public function setEnteredBy(string $EnteredBy): void
    {
        $this->EnteredBy = $EnteredBy;
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
    }
}