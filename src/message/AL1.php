<?php
namespace amin0x\nabidh;

class AL1 implements Segment {

    private $SetID_AL1 = '';
    private $AllergenTypeCode = '';
    private $AllergenCodeMnemonicDescription = '';
    private $AllergySeverityCode = '';
    private $AllergyReactionCode = '';
    private $IdentificationDate = '';


    /**
     * @return string
     */
    public function getSetIDAL1(): string
    {
        return $this->SetID_AL1;
    }

    /**
     * @param string $SetID_AL1
     */
    public function setSetIDAL1(string $SetID_AL1): void
    {
        $this->SetID_AL1 = $SetID_AL1;
    }

    /**
     * @return string
     */
    public function getAllergenTypeCode(): string
    {
        return $this->AllergenTypeCode;
    }

    /**
     * @param string $AllergenTypeCode
     */
    public function setAllergenTypeCode(string $AllergenTypeCode): void
    {
        $this->AllergenTypeCode = $AllergenTypeCode;
    }

    /**
     * @return string
     */
    public function getAllergenCodeMnemonicDescription(): string
    {
        return $this->AllergenCodeMnemonicDescription;
    }

    /**
     * @param string $AllergenCodeMnemonicDescription
     */
    public function setAllergenCodeMnemonicDescription(string $AllergenCodeMnemonicDescription): void
    {
        $this->AllergenCodeMnemonicDescription = $AllergenCodeMnemonicDescription;
    }

    /**
     * @return string
     */
    public function getAllergySeverityCode(): string
    {
        return $this->AllergySeverityCode;
    }

    /**
     * @param string $AllergySeverityCode
     */
    public function setAllergySeverityCode(string $AllergySeverityCode): void
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

    public function toString(){
        $str = 'AL1|'
        .$this->SetID_AL1 . '|'
        .$this->AllergenTypeCode . '|'
        .$this->AllergenCodeMnemonicDescription . '|'
        .$this->AllergySeverityCode . '|'
        .$this->AllergyReactionCode . '|'
        .$this->IdentificationDate . '|';

        return $str;
    }

}