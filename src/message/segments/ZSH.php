<?php
namespace amin0x\nabidh;
class ZSH implements Segment
{
    
    private $ID;
    private $SocialHabit = '';
    private $SocialHabitQty = '';
    private $SocialHabitCategory = '';
    private $SocialHabitComments = '';
    private $Status = '';
    private $FromTime = '';
    private $ToTime = '';
    private $EnteredBy = '';

    /**
     * ZSH constructor.
     * @param string $ID
     */
    public function __construct(string $ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getIDZSH(): string
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     */
    public function setIDZSH(string $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return CE|string
     */
    public function getSocialHabit(): CE|string
    {
        return $this->SocialHabit;
    }

    /**
     * @param CE $SocialHabit
     */
    public function setSocialHabit(CE $SocialHabit): void
    {
        $this->SocialHabit = $SocialHabit;
    }

    /**
     * @return CE|string
     */
    public function getSocialHabitQty(): CE|string
    {
        return $this->SocialHabitQty;
    }

    /**
     * @param CE $SocialHabitQty
     */
    public function setSocialHabitQty(CE $SocialHabitQty): void
    {
        $this->SocialHabitQty = $SocialHabitQty;
    }

    /**
     * @return CE|string
     */
    public function getSocialHabitCategory(): CE|string
    {
        return $this->SocialHabitCategory;
    }

    /**
     * @param CE $SocialHabitCategory
     */
    public function setSocialHabitCategory(CE $SocialHabitCategory): void
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
     * @return CE|string
     */
    public function getEnteredBy(): CE|string
    {
        return $this->EnteredBy;
    }

    /**
     * @param CE $EnteredBy
     */
    public function setEnteredBy(CE $EnteredBy): void
    {
        $this->EnteredBy = $EnteredBy;
    }


    public function __toString()
    {
        $str = 'ZSH|';
        $str .= $this->ID . '|';
        $str .= $this->SocialHabit . '|';
        $str .= $this->SocialHabitQty . '|';
        $str .= $this->SocialHabitCategory . '|';
        $str .= $this->SocialHabitComments . '|';
        $str .= $this->Status . '|';
        $str .= $this->FromTime . '|';
        $str .= $this->ToTime . '|';
        $str .= $this->EnteredBy;

        return $str .'\r';
    }
}