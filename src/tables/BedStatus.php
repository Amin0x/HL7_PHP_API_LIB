<?php
namespace amin0x\nabidh;

/**
 * Class representing the status of a bed.
 */
class BedStatus
{
    public const CLOSED = 'C';
    public const HOUSEKEEPING = 'H';
    public const OCCUPIED = 'O';
    public const UNOCCUPIED = 'U';
    public const CONTAMINATED = 'K';
    public const ISOLATED = 'I';

    /**
     * Prevent instantiation of this class.
     */
    private function __construct()
    {
        // This class should not be instantiated.
    }
}
