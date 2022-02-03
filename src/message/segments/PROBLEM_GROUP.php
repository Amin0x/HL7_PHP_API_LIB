<?php


namespace amin0x\nabidh;


class PROBLEM_GROUP
{
    private PRB $PRB;
    private array $NTE;

    /**
     * PROBLEM_GROUP constructor.
     * @param PRB $PRB
     * @param array $NTE
     */
    public function __construct(PRB $PRB, array $NTE = [])
    {
        $this->PRB = $PRB;
        $this->NTE = $NTE;
    }

    /**
     * @return PRB
     */
    public function getPRB(): PRB
    {
        return $this->PRB;
    }

    /**
     * @param PRB $PRB
     */
    public function setPRB(PRB $PRB): void
    {
        $this->PRB = $PRB;
    }

    /**
     * @return array
     */
    public function getNTE(): array
    {
        return $this->NTE;
    }

    /**
     * @param array $NTE
     */
    public function setNTE(array $NTE): void
    {
        $this->NTE = $NTE;
    }


}