<?php
namespace amin0x\nabidh;

/**
 * Class representing different types of admissions.
 */
class AdmissionType
{
    public const ACCIDENT = 'A';
    public const ELECTIVE = 'C';
    public const EMERGENCY = 'E';
    public const LABOR_AND_DELIVERY = 'L';
    public const NEWBORN = 'N';
    public const ROUTINE = 'R';
    public const URGENT = 'U';
    public const OTHER = 'O';

    /**
     * Prevent instantiation of this class.
     */
    private function __construct()
    {
        // This class should not be instantiated.
    }
}
