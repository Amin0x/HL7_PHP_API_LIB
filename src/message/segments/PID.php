<?php
namespace amin0x\nabidh;

class PID implements Segment {

    private $SetID = '1';
    private $PatientIdentifierList = '';
    //private $AlternatePatientID     = '';
    private $PatientName = '';
    private $MotherMaidenName = '';
    private $DateTimeofBirth = '';
    private $AdministrativeSex = '';
    private $PatientAlias = '';
    private $Race = '';
    private $PatientAddress = '^^Dubai^Dubai^^784^H'; //default value
    //private $CountyCode = '';
    private $PhoneNumberHome = '';
    private $PhoneNumberBusiness = '';
    private $PrimaryLanguage = '';
    private $MaritalStatus = '';
    private $Religion = '';
    private $PatientAccountNumber = '';
    private $SSN_NumberPatient = '';
    //private $DriverLicenseNumberPatient = '';
    private $MotherIdentifier = '';
    private $EthnicGroup = '';
    private $BirthPlace = '';
    private $MultipleBirthIndicator = '';
    private $BirthOrder = '';
    private $Citizenship = '';
    //private $VeteransMilitaryStatus = '';
    private $Nationality = '';
    private $PatientDeathDateTime = '';
    private $PatientDeathIndicator = '';
    private $IdentityUnknownIndicator = '';
    //private $IdentityReliabilityCode = '';
    private $LastUpdateDateTime = '';
    private $LastUpdateFacility = '';
    //private $SpeciesCode = '';
    //private $BreedCode = '';
    //private $Strain = '';
    //private $ProductionClassCode = '';
    //private $TribalCitizenship = '';

    /**
     * MessagePID constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getSetID(): string
    {
        return $this->SetID;
    }

    /**
     * @param string $SetID
     */
    public function setSetID(string $SetID): void
    {
        $this->SetID = '1';
    }

    /**
     * @return string
     */
    public function getPatientIdentifierList(): string
    {
        return $this->PatientIdentifierList;
    }

    /**
     * Refer to Implementation Guidance Section
     * This field supports multiple repeats. The acceptable Patient Identifiers are:
     * Primary MRN Number (Source Application Patient Identifier) - This must the first repeat for the field.
     * Expected Format: Primary_MRN^^^FACILITYCODE^MRN
     * Secondary MRN Number (used for search purposes)
     * Expected Format: Secondary_MRN^^^OTHER^SMR Passport Number
     * Expected Format: Passport_Number^^^GOVERNMENT^PPN GCC Number
     * Expected Format: GCC_Number^^^LOCAL^GCC
     * Example: If Patient has MRN = 123456 & Passport Number = 9998888 then PID-3 field
     * should be shared as: 123456^^^FACILITYCODE^MRN~9998888^^^GOVERNMENT^PPN
     * @param string $facilityId
     * @param string $passportId
     */
    public function setPatientIdentifierList(string $facilityId, string $passportId = ''): void
    {
        if (!empty($facilityId)){
            $this->PatientIdentifierList = $facilityId.'^^^FACILITYCODE^MRN';
            if (!empty($passportId)){
                $this->PatientIdentifierList .= "~".$passportId."^^^GOVERNMENT^PPN";
            }
        }
    }


    /**
     * @return string
     */
    public function getPatientName(): string
    {
        return $this->PatientName;
    }

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $middleName
     * @param bool $arabic
     */
    public function setPatientName(string $firstName, string $middleName, string $lastName, bool $arabic = false): void
    {
        if( !$arabic ){
            $this->PatientName = "$lastName^$firstName^$middleName^^^^D";
        } else {
            $this->PatientName = "LastName^FirstName^MiddleName^^^^D^^^^^^^Profession~$lastName^$firstName^$middleName^^^^D";
        }
    }

    /**
     * @return string
     */
    public function getMotherMaidenName(): string
    {
        return $this->MotherMaidenName;
    }

    /**
     * @param string $lastName
     * @param string $firstName
     * @param string $middleName
     */
    public function setMotherMaidenName(string $lastName, string $firstName, string $middleName): void
    {
        $this->MotherMaidenName = "$lastName^$firstName^$middleName^^^^D";
    }

    /**
     * It should be in format YYYYMMDD,
     * EMR don’t need to send the time only date should be sent.
     * In case of Emergency where DOB is not provided at the
     * time of encounter creation, EMR to send empty DOB field
     * @return string
     */
    public function getDateTimeofBirth(): string
    {
        return $this->DateTimeofBirth;
    }

    /**
     * It should be in format YYYYMMDD,
     * EMR don’t need to send the time only date should be sent.
     * In case of Emergency where DOB is not provided at the
     * time of encounter creation, EMR to send empty DOB field
     * @param string $DateTimeofBirth
     */
    public function setDateTimeofBirth(string $DateTimeofBirth): void
    {
        $this->DateTimeofBirth = $DateTimeofBirth;
    }

    /**
     * @return string
     */
    public function getAdministrativeSex(): string
    {
        return $this->AdministrativeSex;
    }

    /**
     * Valid values are M, F, or U. Any other value will be rejected.
     * Please see table NAB001. For example: M
     * @param string $AdministrativeSex
     */
    public function setAdministrativeSex(string $AdministrativeSex): void
    {
        if(!empty($AdministrativeSex) && in_array( $AdministrativeSex, ['F', 'M', 'U'])){
            $this->AdministrativeSex = $AdministrativeSex;
            return;
        }
        $this->AdministrativeSex = 'U';
    }

    /**
     * @return string
     */
    public function getPatientAlias(): string
    {
        return $this->PatientAlias;
    }

    /**
     * @param string $PatientAlias
     */
    public function setPatientAlias(string $PatientAlias): void
    {
        $this->PatientAlias = $PatientAlias;
    }

    /**
     * @return string
     */
    public function getRace(): string
    {
        return $this->Race;
    }

    /**
     * This should be in this format 2028-9^Asian^NAB004 Please refer to coding table NAB004.
     * @param string $Race
     */
    public function setRace(string $Race): void
    {
        $this->Race = $Race;
    }

    /**
     * @return string
     */
    public function getPatientAddress(): string
    {
        return $this->PatientAddress;
    }

    /**
     * Patient address should be in proper format,      *
     * PID.11.3 City should not be empty     *
     * PID.11.4 State should not be empty and should be a valid code from NAB047
     * PID.11.5 Zip code should have Makani No (if available)
     * PID.11.6 Country should be valid code from NAB039
     * PID.11.7 Address Type Code should be valid value from HL7190 table list “BA, BDL, BR, C, F, H, L, M, O, P”.
     *
     * If address not captured by the EMR then send default value as  ^^Dubai^Dubai^^784^H
     * @param $city
     * @param $state
     * @param $zip
     * @param $country
     * @param string $addressType
     */
    public function setPatientAddress($city, $state, $zip, $country, $addressType = 'BA'): void
    {
        if (!empty($city) && !empty($state) && !empty($country) && !empty($zip)){
            $this->PatientAddress = "^^$city^$state^^$zip^H";
            return;
        }
        $this->PatientAddress = "^^Dubai^Dubai^^784^H";
    }


    /**
     * @return string
     */
    public function getPhoneNumberHome(): string
    {
        return $this->PhoneNumberHome;
    }

    /**
     * @param string $phone
     * @param string $email
     */
    public function setPhoneNumberHome(string $phone, string $email = ''): void
    {
        if (!empty($phone)){
            $this->PhoneNumberHome = $phone.'^PRN^CP';
            if (!empty($email)){
                $this->PhoneNumberHome .= '~';
                $this->PhoneNumberHome .= '^NET^Internet^'.$email;
            }
        }

    }

    /**
     * @return string
     */
    public function getPhoneNumberBusiness(): string
    {
        return $this->PhoneNumberBusiness;
    }

    /**
     * @param string $PhoneNumberBusiness
     */
    public function setPhoneNumberBusiness(string $PhoneNumberBusiness): void
    {
        $this->PhoneNumberBusiness = "$PhoneNumberBusiness^WPN^PH";
    }

    /**
     * @return string
     */
    public function getPrimaryLanguage(): string
    {
        return $this->PrimaryLanguage;
    }

    /**
     * @param string $PrimaryLanguage
     */
    public function setPrimaryLanguage(string $PrimaryLanguage): void
    {
        $this->PrimaryLanguage = $PrimaryLanguage;
    }

    /**
     * @return string
     */
    public function getMaritalStatus(): string
    {
        return $this->MaritalStatus;
    }

    /**
     * @param string $MaritalStatus
     */
    public function setMaritalStatus(string $MaritalStatus): void
    {
        $this->MaritalStatus = $MaritalStatus;
    }

    /**
     * @return string
     */
    public function getReligion(): string
    {
        return $this->Religion;
    }

    /**
     * @param string $Religion
     */
    public function setReligion(string $Religion): void
    {
        $this->Religion = $Religion;
    }

    /**
     * @return string
     */
    public function getPatientAccountNumber(): string
    {
        return $this->PatientAccountNumber;
    }

    /**
     * @param string $PatientAccountNumber
     */
    public function setPatientAccountNumber(string $PatientAccountNumber): void
    {
        $this->PatientAccountNumber = $PatientAccountNumber;
    }

    /**
     * @return string
     */
    public function getSSNNumberPatient(): string
    {
        return $this->SSN_NumberPatient;
    }

    /**
     * @param string $SSN_NumberPatient
     */
    public function setSSNNumberPatient(string $SSN_NumberPatient): void
    {
        $this->SSN_NumberPatient = $SSN_NumberPatient;
    }


    /**
     * @return string
     */
    public function getMotherIdentifier(): string
    {
        return $this->MotherIdentifier;
    }

    /**
     * @param string $MotherIdentifier
     */
    public function setMotherIdentifier(string $MotherIdentifier): void
    {
        $this->MotherIdentifier = $MotherIdentifier;
    }

    /**
     * @return string
     */
    public function getEthnicGroup(): string
    {
        return $this->EthnicGroup;
    }

    /**
     * @param string $EthnicGroup
     */
    public function setEthnicGroup(string $EthnicGroup): void
    {
        $this->EthnicGroup = $EthnicGroup;
    }

    /**
     * @return string
     */
    public function getBirthPlace(): string
    {
        return $this->BirthPlace;
    }

    /**
     * @param string $BirthPlace
     */
    public function setBirthPlace(string $BirthPlace): void
    {
        $this->BirthPlace = $BirthPlace;
    }

    /**
     * @return string
     */
    public function getMultipleBirthIndicator(): string
    {
        return $this->MultipleBirthIndicator;
    }

    /**
     * @param string $MultipleBirthIndicator
     */
    public function setMultipleBirthIndicator(string $MultipleBirthIndicator): void
    {
        $this->MultipleBirthIndicator = $MultipleBirthIndicator;
    }

    /**
     * @return string
     */
    public function getBirthOrder(): string
    {
        return $this->BirthOrder;
    }

    /**
     * @param string $BirthOrder
     */
    public function setBirthOrder(string $BirthOrder): void
    {
        $this->BirthOrder = $BirthOrder;
    }

    /**
     * @return string
     */
    public function getCitizenship(): string
    {
        return $this->Citizenship;
    }

    /**
     * @param string $Citizenship
     */
    public function setCitizenship(string $Citizenship): void
    {
        $this->Citizenship = $Citizenship;
    }


    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->Nationality;
    }

    /**
     * @param string $Nationality
     */
    public function setNationality(string $Nationality): void
    {
        $this->Nationality = $Nationality;
    }

    /**
     * @return string
     */
    public function getPatientDeathDateTime(): string
    {
        return $this->PatientDeathDateTime;
    }

    /**
     * @param string $PatientDeathDateTime
     */
    public function setPatientDeathDateTime(string $PatientDeathDateTime): void
    {
        $this->PatientDeathDateTime = $PatientDeathDateTime;
    }

    /**
     * @return string
     */
    public function getPatientDeathIndicator(): string
    {
        return $this->PatientDeathIndicator;
    }

    /**
     * @param string $PatientDeathIndicator
     */
    public function setPatientDeathIndicator(string $PatientDeathIndicator): void
    {
        $this->PatientDeathIndicator = $PatientDeathIndicator;
    }

    /**
     * @return string
     */
    public function getIdentityUnknownIndicator(): string
    {
        return $this->IdentityUnknownIndicator;
    }

    /**
     * @param string $IdentityUnknownIndicator
     */
    public function setIdentityUnknownIndicator(string $IdentityUnknownIndicator): void
    {
        $this->IdentityUnknownIndicator = $IdentityUnknownIndicator;
    }


    /**
     * @return string
     */
    public function getLastUpdateDateTime(): string
    {
        return $this->LastUpdateDateTime;
    }

    /**
     * @param string $LastUpdateDateTime
     */
    public function setLastUpdateDateTime(string $LastUpdateDateTime): void
    {
        $this->LastUpdateDateTime = $LastUpdateDateTime;
    }

    /**
     * @return string
     */
    public function getLastUpdateFacility(): string
    {
        return $this->LastUpdateFacility;
    }

    /**
     * @param string $LastUpdateFacility
     */
    public function setLastUpdateFacility(string $LastUpdateFacility): void
    {
        $this->LastUpdateFacility = $LastUpdateFacility;
    }



    public function __toString(): string
    {
        $out = 'PID' . '|'  //0
        .$this->SetID .'|'  //1
        .'|' // 2
        .$this->PatientIdentifierList . '|' //3
        . '|' //4
        .$this->PatientName . '|' //5
        .$this->MotherMaidenName . '|' //6
        .$this->DateTimeofBirth . '|' //7
        .$this->AdministrativeSex . '|' //8
        .$this->PatientAlias . '|' //9
        .$this->Race . '|' //10
        .$this->PatientAddress . '|' //11
        . '|' //12
        .$this->PhoneNumberHome . '|' //13
        .$this->PhoneNumberBusiness . '|' //14
        .$this->PrimaryLanguage . '|' //15
        .$this->MaritalStatus . '|' //16
        .$this->Religion . '|' //17
        .$this->PatientAccountNumber . '|' //18
        .$this->SSN_NumberPatient . '|' //19
        . '|'   //20
        .$this->MotherIdentifier . '|' //21
        .$this->EthnicGroup . '|' //22
        .$this->BirthPlace . '|' //23
        .$this->MultipleBirthIndicator . '|' //24
        .$this->BirthOrder . '|' //25
        .$this->Citizenship . '|' //26
        . '|' //27
        .$this->Nationality . '|' //28
        .$this->PatientDeathDateTime . '|' //29
        .$this->PatientDeathIndicator . '|' //30
        .$this->IdentityUnknownIndicator . '|' //31
        . '|' //32
        .$this->LastUpdateDateTime . '|' //33
        .$this->LastUpdateFacility . '|' //34
        . '|' //35
        . '|' //36
        . '|' //37
        . '|' //38
        .'|' //39
        ;

        return rtrim($out,'|').'\r';
    }


}