<?php

class PID {


    private $SetID = '1';
    private $PatientIdentifierList = '';
    private $AlternatePatientID     = '';
    private $PatientName = '';
    private $MotherMaidenName = '';
    private $DateTimeofBirth = '';
    private $AdministrativeSex = '';
    private $PatientAlias = '';
    private $Race = '';
    private $PatientAddress = '';
    private $CountyCode = '';
    private $PhoneNumberHome = '';
    private $PhoneNumberBusiness = '';
    private $PrimaryLanguage = '';
    private $MaritalStatus = '';
    private $Religion = '';
    private $PatientAccountNumber = '';
    private $SSN_NumberPatient = '';
    private $DriverLicenseNumberPatient = '';
    private $MotherIdentifier = '';
    private $EthnicGroup = '';
    private $BirthPlace = '';
    private $MultipleBirthIndicator = '';
    private $BirthOrder = '';
    private $Citizenship = '';
    private $VeteransMilitaryStatus = '';
    private $Nationality = '';
    private $PatientDeathDateTime = '';
    private $PatientDeathIndicator = '';
    private $IdentityUnknownIndicator = '';
    private $IdentityReliabilityCode = '';
    private $LastUpdateDateTime = '';
    private $LastUpdateFacility = '';
    private $SpeciesCode = '';
    private $BreedCode = '';
    private $Strain = '';
    private $ProductionClassCode = '';
    private $TribalCitizenship = '';

    /**
     * MessagePID constructor.
     * @param string $SetID
     * @param string $PatientIdentifierList
     * @param string $AlternatePatientID
     * @param string $PatientName
     * @param string $MotherMaidenName
     * @param string $DateTimeofBirth
     * @param string $AdministrativeSex
     * @param string $PatientAlias
     * @param string $Race
     * @param string $PatientAddress
     * @param string $CountyCode
     * @param string $PhoneNumberHome
     */
    public function __construct(string $SetID, string $PatientIdentifierList, string $AlternatePatientID, string $PatientName, string $MotherMaidenName, string $DateTimeofBirth, string $AdministrativeSex, string $PatientAlias, string $Race, string $PatientAddress, string $CountyCode, string $PhoneNumberHome)
    {
        $this->SetID = $SetID;
        $this->PatientIdentifierList = $PatientIdentifierList;
        $this->AlternatePatientID = $AlternatePatientID;
        $this->PatientName = $PatientName;
        $this->MotherMaidenName = $MotherMaidenName;
        $this->DateTimeofBirth = $DateTimeofBirth;
        $this->AdministrativeSex = $AdministrativeSex;
        $this->PatientAlias = $PatientAlias;
        $this->Race = $Race;
        $this->PatientAddress = $PatientAddress;
        $this->CountyCode = $CountyCode;
        $this->PhoneNumberHome = $PhoneNumberHome;
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
        $this->SetID = $SetID;
    }

    /**
     * @return string
     */
    public function getPatientIdentifierList(): string
    {
        return $this->PatientIdentifierList;
    }

    /**
     * @param string $PatientIdentifierList
     */
    public function setPatientIdentifierList(string $PatientIdentifierList): void
    {
        $this->PatientIdentifierList = $PatientIdentifierList;
    }

    /**
     * @return string
     */
    public function getAlternatePatientID(): string
    {
        return $this->AlternatePatientID;
    }

    /**
     * @param string $AlternatePatientID
     */
    public function setAlternatePatientID(string $AlternatePatientID): void
    {
        $this->AlternatePatientID = $AlternatePatientID;
    }

    /**
     * @return string
     */
    public function getPatientName(): string
    {
        return $this->PatientName;
    }

    /**
     * @param string $PatientName
     */
    public function setPatientName(string $PatientName): void
    {
        $this->PatientName = $PatientName;
    }

    /**
     * @return string
     */
    public function getMotherMaidenName(): string
    {
        return $this->MotherMaidenName;
    }

    /**
     * @param string $MotherMaidenName
     */
    public function setMotherMaidenName(string $MotherMaidenName): void
    {
        $this->MotherMaidenName = $MotherMaidenName;
    }

    /**
     * @return string
     */
    public function getDateTimeofBirth(): string
    {
        return $this->DateTimeofBirth;
    }

    /**
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
     * @param string $AdministrativeSex
     */
    public function setAdministrativeSex(string $AdministrativeSex): void
    {
        $this->AdministrativeSex = $AdministrativeSex;
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
     * @param string $PatientAddress
     */
    public function setPatientAddress(string $PatientAddress): void
    {
        $this->PatientAddress = $PatientAddress;
    }

    /**
     * @return string
     */
    public function getCountyCode(): string
    {
        return $this->CountyCode;
    }

    /**
     * @param string $CountyCode
     */
    public function setCountyCode(string $CountyCode): void
    {
        $this->CountyCode = $CountyCode;
    }

    /**
     * @return string
     */
    public function getPhoneNumberHome(): string
    {
        return $this->PhoneNumberHome;
    }

    /**
     * @param string $PhoneNumberHome
     */
    public function setPhoneNumberHome(string $PhoneNumberHome): void
    {
        $this->PhoneNumberHome = $PhoneNumberHome;
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
        $this->PhoneNumberBusiness = $PhoneNumberBusiness;
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
    public function getDriverLicenseNumberPatient(): string
    {
        return $this->DriverLicenseNumberPatient;
    }

    /**
     * @param string $DriverLicenseNumberPatient
     */
    public function setDriverLicenseNumberPatient(string $DriverLicenseNumberPatient): void
    {
        $this->DriverLicenseNumberPatient = $DriverLicenseNumberPatient;
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
    public function getVeteransMilitaryStatus(): string
    {
        return $this->VeteransMilitaryStatus;
    }

    /**
     * @param string $VeteransMilitaryStatus
     */
    public function setVeteransMilitaryStatus(string $VeteransMilitaryStatus): void
    {
        $this->VeteransMilitaryStatus = $VeteransMilitaryStatus;
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
    public function getIdentityReliabilityCode(): string
    {
        return $this->IdentityReliabilityCode;
    }

    /**
     * @param string $IdentityReliabilityCode
     */
    public function setIdentityReliabilityCode(string $IdentityReliabilityCode): void
    {
        $this->IdentityReliabilityCode = $IdentityReliabilityCode;
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

    /**
     * @return string
     */
    public function getSpeciesCode(): string
    {
        return $this->SpeciesCode;
    }

    /**
     * @param string $SpeciesCode
     */
    public function setSpeciesCode(string $SpeciesCode): void
    {
        $this->SpeciesCode = $SpeciesCode;
    }

    /**
     * @return string
     */
    public function getBreedCode(): string
    {
        return $this->BreedCode;
    }

    /**
     * @param string $BreedCode
     */
    public function setBreedCode(string $BreedCode): void
    {
        $this->BreedCode = $BreedCode;
    }

    /**
     * @return string
     */
    public function getStrain(): string
    {
        return $this->Strain;
    }

    /**
     * @param string $Strain
     */
    public function setStrain(string $Strain): void
    {
        $this->Strain = $Strain;
    }

    /**
     * @return string
     */
    public function getProductionClassCode(): string
    {
        return $this->ProductionClassCode;
    }

    /**
     * @param string $ProductionClassCode
     */
    public function setProductionClassCode(string $ProductionClassCode): void
    {
        $this->ProductionClassCode = $ProductionClassCode;
    }

    /**
     * @return string
     */
    public function getTribalCitizenship(): string
    {
        return $this->TribalCitizenship;
    }

    /**
     * @param string $TribalCitizenship
     */
    public function setTribalCitizenship(string $TribalCitizenship): void
    {
        $this->TribalCitizenship = $TribalCitizenship;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}