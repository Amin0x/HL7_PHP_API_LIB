<?php
namespace amin0x\nabidh;

class NTE implements Segment {

    private $ID = '';
    private $Comment = '';

    /**
     * NTE constructor.
     * @param string $ID
     * @param string $Comment
     */
    public function __construct(string $ID, string $Comment = '')
    {
        $this->ID = $ID;
        $this->Comment = $Comment;
    }

    /**
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     */
    public function setID(string $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     */
    public function setComment(string $Comment): void
    {
        $this->Comment = $Comment;
    }

    public function __toString()
    {
        return $this->ID . '||' . $this->Comment . '|\r';
    }


}