<?php
namespace amin0x\nabidh;


class PID implements Segment {

    private $ID = '1';
    private $PatientIdentifierList = [];
    private $PatientName = '';
    private $MotherMaidenName = '';
    private $DateTimeofBirth = '';
    private $AdministrativeSex = '';
    private $PatientAlias = '';
    private $Race = '';
    private $PatientAddress; //default value
    private $PhoneNumberHome = '';
    private $PhoneNumberBusiness = '';
    private $PrimaryLanguage = '';
    private $MaritalStatus = '';
    private $Religion = '';
    private $PatientAccountNumber = '';
    private $SSN_NumberPatient = '';
    private $MotherIdentifier = '';
    private $EthnicGroup = '';
    private $BirthPlace = '';
    private $MultipleBirthIndicator = '';
    private $BirthOrder = '';
    private $Citizenship = '';
    private $Nationality = '';
    private $PatientDeathDateTime = '';
    private $PatientDeathIndicator = '';
    private $IdentityUnknownIndicator = '';
    private $LastUpdateDateTime = '';
    private $LastUpdateFacility = '';


    /**
     * MessagePID constructor.
     */
    public function __construct($ID = '1')
    {
        $this->ID = $ID;
        $this->AdministrativeSex = 'U';
        $this->PatientAddress = new XAD('Dubai', 'Dubai','','784','H');
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
        $this->ID = '1';
    }

    /**
     * @return string
     */
    public function getPatientIdentifierList(int $index): CX|string
    {
        if (isset($this->PatientIdentifierList[$index])) {
            return $this->PatientIdentifierList[$index];
        }

        return '';
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
     * @param string $idNumber
     * @param string $AssigningAuthority
     * @param string $IdentifierTypeCode
     * @param bool $passport
     */
    public function addPatientIdentifierList(string $idNumber, string $AssigningAuthority, string $IdentifierTypeCode, bool $passport = false): void
    {
        if ($passport) {
            array_push($this->PatientIdentifierList, new CX($idNumber, $AssigningAuthority, $IdentifierTypeCode));
        } else {
            array_unshift($this->PatientIdentifierList, new CX($idNumber, $AssigningAuthority, $IdentifierTypeCode));
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
        //$this->MotherMaidenName = "$lastName^$firstName^$middleName^^^^D";
        $this->MotherMaidenName = new XPN($lastName, $firstName, $middleName);
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
        $this->Race = getRaceTable($Race);
    }

    /**
     * @return string
     */
    public function getPatientAddress(): XAD|string
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
        if (!empty($city) && !empty($state) && !empty($country)){
            $this->PatientAddress = new XAD($city, $state,$zip,$country,'H');
            return;
        }
        $this->PatientAddress = new XAD('Dubai', 'Dubai','','784','H');
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
     * @return XTN|string
     */
    public function getPhoneNumberBusiness(): XTN|string
    {
        return $this->PhoneNumberBusiness;
    }

    /**
     * @param string $PhoneNumberBusiness
     */
    public function setPhoneNumberBusiness(string $PhoneNumberBusiness): void
    {
        $this->PhoneNumberBusiness = new XTN($PhoneNumberBusiness, 'WPN', 'PH');
    }

    /**
     * @return CE|string
     */
    public function getPrimaryLanguage(): CE|string
    {
        return $this->PrimaryLanguage;
    }

    /**
     * @param string $PrimaryLanguage
     * @param string $Text
     */
    public function setPrimaryLanguage(string $PrimaryLanguage = 'UNK', string $Text = 'UNKNOWN'): void
    {
        //$this->PrimaryLanguage = $PrimaryLanguage.'^'.$Text.'^NAB024';
        $this->PrimaryLanguage = new CE($PrimaryLanguage, $Text, 'NAB024');
    }

    /**
     * @return CE|string
     */
    public function getMaritalStatus(): CE|string
    {
        return $this->MaritalStatus;
    }

    /**
     * @param string $MaritalStatus
     */
    public function setMaritalStatus(string $MaritalStatus): void
    {
        $this->MaritalStatus = getMaritalStatusTable($MaritalStatus);

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
        $this->Religion = getReligionTable($Religion);
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
        $this->Nationality = new CE($Nationality, '', 'NAB038');
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
        $srt = [];
        $str[] = 'PID';
        $str[] = $this->ID;
        $str[] = '';
        $str[] = implode('~', $this->PatientIdentifierList);
        $str[] = '';
        $str[] = $this->PatientName;
        $str[] = $this->MotherMaidenName;
        $str[] = $this->DateTimeofBirth;
        $str[] = $this->AdministrativeSex;
        $str[] = $this->PatientAlias;
        $str[] = $this->Race;
        $str[] = $this->PatientAddress;
        $str[] = '';
        $str[] = $this->PhoneNumberHome;
        $str[] = $this->PhoneNumberBusiness;
        $str[] = $this->PrimaryLanguage;
        $str[] = $this->MaritalStatus;
        $str[] = $this->Religion;
        $str[] = $this->PatientAccountNumber;
        $str[] = $this->SSN_NumberPatient;
        $str[] = '';
        $str[] = $this->MotherIdentifier;
        $str[] = $this->EthnicGroup;
        $str[] = $this->BirthPlace;
        $str[] = $this->MultipleBirthIndicator;
        $str[] = $this->BirthOrder;
        $str[] = $this->Citizenship;
        $str[] = '';
        $str[] = $this->Nationality;
        $str[] = $this->PatientDeathDateTime;
        $str[] = $this->PatientDeathIndicator;
        $str[] = $this->IdentityUnknownIndicator;
        $str[] = '';
        $str[] = $this->LastUpdateDateTime;
        $str[] = $this->LastUpdateFacility;


        return implode('|', $str) . '\r';

    }


}