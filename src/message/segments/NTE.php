<?php
namespace amin0x\nabidh;

class NTE implements Segment {

    private $SetID_NTE = '';
    private $Comment = '';

    /**
     * NTE constructor.
     * @param string $SetID_NTE
     * @param string $Comment
     */
    public function __construct(string $SetID_NTE,  string $Comment)
    {
        $this->SetID_NTE = $SetID_NTE;
        $this->Comment = $Comment;
    }

    /**
     * @return string
     */
    public function getSetIDNTE(): string
    {
        return $this->SetID_NTE;
    }

    /**
     * @param string $SetID_NTE
     */
    public function setSetIDNTE(string $SetID_NTE): void
    {
        $this->SetID_NTE = $SetID_NTE;
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
        return $this->SetID_NTE . '||' . $this->Comment . '|\r';
    }


}