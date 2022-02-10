<?php
namespace amin0x\nabidh;

class AL1 implements Segment {

    private $ID = '';
    private $AllergenTypeCode = '';
    private $AllergenCodeMnemonicDescription = '';
    private $AllergySeverityCode = '';
    private $AllergyReactionCode = '';
    private $IdentificationDate = '';

    /**
     * AL1 constructor.
     * @param string $ID
     */
    public function __construct(string $ID)
    {
        $this->ID = $ID;
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
    public function getAllergenTypeCode(): CE|string
    {
        return $this->AllergenTypeCode;
    }

    /**
     * @param string $AllergenTypeCode
     */
    public function setAllergenTypeCode(CE $AllergenTypeCode): void
    {
        $this->AllergenTypeCode = getAllergyTypeCodeTable($AllergenTypeCode);
    }

    /**
     * @return string
     */
    public function getAllergenCodeMnemonicDescription(): CE|string
    {
        return $this->AllergenCodeMnemonicDescription;
    }

    /**
     * @param string $AllergenCodeMnemonicDescription
     */
    public function setAllergenCodeMnemonicDescription(CE $AllergenCodeMnemonicDescription): void
    {
        $this->AllergenCodeMnemonicDescription = getAllergenTable($AllergenCodeMnemonicDescription);
    }

    /**
     * @return string
     */
    public function getAllergySeverityCode(): CE|string
    {
        return $this->AllergySeverityCode;
    }

    /**
     * @param string $AllergySeverityCode
     */
    public function setAllergySeverityCode(CE $AllergySeverityCode): void
    {
        $this->AllergySeverityCode = $AllergySeverityCode;
    }

    /**
     * @return string
     */
    public function getAllergyReactionCode(): string
    {
        return $this->AllergyReactionCode;
    }

    /**
     * @param string $AllergyReactionCode
     */
    public function setAllergyReactionCode(string $AllergyReactionCode): void
    {
        $this->AllergyReactionCode = $AllergyReactionCode;
    }

    /**
     * @return string
     */
    public function getIdentificationDate(): string
    {
        return $this->IdentificationDate;
    }

    /**
     * @param string $IdentificationDate
     */
    public function setIdentificationDate(string $IdentificationDate): void
    {
        $this->IdentificationDate = $IdentificationDate;
    }

    public function __toString(){
        $str = [];
        $str[] = 'AL1';
        $str[] = $this->ID;
        $str[] = $this->AllergenTypeCode;
        $str[] = $this->AllergenCodeMnemonicDescription;
        $str[] = $this->AllergySeverityCode;
        $str[] = $this->AllergyReactionCode;
        $str[] = $this->IdentificationDate ;

        return implode('|', $str).'\r';
    }

}