<?php
namespace amin0x\nabidh;

/**
 * Class representing different ambulatory statuses.
 */
class AmbulatoryStatus
{
    public const NO_FUNCTIONAL_LIMITATIONS = 'A0';
    public const AMBULATES_WITH_ASSISTIVE_DEVICE = 'A1';
    public const WHEELCHAIR_STRETCHER_BOUND = 'A2';
    public const COMATOSE_NON_RESPONSIVE = 'A3';
    public const DISORIENTED = 'A4';
    public const VISION_IMPAIRED = 'A5';
    public const HEARING_IMPAIRED = 'A6';
    public const SPEECH_IMPAIRED = 'A7';
    public const NON_ENGLISH_SPEAKING = 'A8';
    public const FUNCTIONAL_LEVEL_UNKNOWN = 'A9';
    public const OXYGEN_THERAPY = 'B1';
    public const SPECIAL_EQUIPMENT = 'B2';
    public const AMPUTEE = 'B3';
    public const MASTECTOMY = 'B4';
    public const PARAPLEGIC = 'B5';
    public const PREGNANT = 'B6';

    /**
     * Prevent instantiation of this class.
     */
    private function __construct()
    {
        // This class should not be instantiated.
    }
}
