<?php
namespace nabidh;

class OBX implements Segment {

    private $SetID_OBX = '';
    private $ValueType = '';
    private $ObservationIdentifier = '';
    private $ObservationSubID = '';
    private $ObservationValue = '';
    private $Units = '';
    private $ReferencesRange = '';
    private $AbnormalFlags = '';
    private $Probability = '';
    private $NatureofAbnormalTest = '';
    private $ObservationResultStatus = '';
    private $EffectiveDateofReferenceRangeValues = '';
    private $UserDefinedAccessChecks = '';
    private $DateTimeoftheObservation = '';
    private $ProducerReference = '';
    private $ResponsibleObserver = '';
    private $ObservationMethod = '';
    private $EquipmentInstanceIdentifier = '';
    private $DateTimeoftheAnalysis = '';
    private $Reservedforharmonizationwithv2_6a = '';
    private $Reservedforharmonizationwithv2_6b = '';
    private $Reservedforharmonizationwithv2_6c = '';
    private $PerformingOrganizationName = '';
    private $PerformingOrganizationAddress = '';
    private $PerformingOrganizationMedicalDirector = '';

    /**
     * OBX constructor.
     * @param string $SetID_OBX
     */
    public function __construct(string $SetID_OBX)
    {
        $this->SetID_OBX = $SetID_OBX;
    }

    /**
     * @return string
     */
    public function getSetIDOBX(): string
    {
        return $this->SetID_OBX;
    }

    /**
     * @param string $SetID_OBX
     */
    public function setSetIDOBX(string $SetID_OBX): void
    {
        $this->SetID_OBX = $SetID_OBX;
    }

    /**
     * @return string
     */
    public function getValueType(): string
    {
        return $this->ValueType;
    }

    /**
     * @param string $ValueType
     */
    public function setValueType(string $ValueType): void
    {
        $this->ValueType = $ValueType;
    }

    /**
     * @return string
     */
    public function getObservationIdentifier(): string
    {
        return $this->ObservationIdentifier;
    }

    /**
     * @param string $ObservationIdentifier
     */
    public function setObservationIdentifier(string $ObservationIdentifier): void
    {
        $this->ObservationIdentifier = $ObservationIdentifier;
    }

    /**
     * @return string
     */
    public function getObservationSubID(): string
    {
        return $this->ObservationSubID;
    }

    /**
     * @param string $ObservationSubID
     */
    public function setObservationSubID(string $ObservationSubID): void
    {
        $this->ObservationSubID = $ObservationSubID;
    }

    /**
     * @return string
     */
    public function getObservationValue(): string
    {
        return $this->ObservationValue;
    }

    /**
     * @param string $ObservationValue
     */
    public function setObservationValue(string $ObservationValue): void
    {
        $this->ObservationValue = $ObservationValue;
    }

    /**
     * @return string
     */
    public function getUnits(): string
    {
        return $this->Units;
    }

    /**
     * @param string $Units
     */
    public function setUnits(string $Units): void
    {
        $this->Units = $Units;
    }

    /**
     * @return string
     */
    public function getReferencesRange(): string
    {
        return $this->ReferencesRange;
    }

    /**
     * @param string $ReferencesRange
     */
    public function setReferencesRange(string $ReferencesRange): void
    {
        $this->ReferencesRange = $ReferencesRange;
    }

    /**
     * @return string
     */
    public function getAbnormalFlags(): string
    {
        return $this->AbnormalFlags;
    }

    /**
     * @param string $AbnormalFlags
     */
    public function setAbnormalFlags(string $AbnormalFlags): void
    {
        $this->AbnormalFlags = $AbnormalFlags;
    }

    /**
     * @return string
     */
    public function getProbability(): string
    {
        return $this->Probability;
    }

    /**
     * @param string $Probability
     */
    public function setProbability(string $Probability): void
    {
        $this->Probability = $Probability;
    }

    /**
     * @return string
     */
    public function getNatureofAbnormalTest(): string
    {
        return $this->NatureofAbnormalTest;
    }

    /**
     * @param string $NatureofAbnormalTest
     */
    public function setNatureofAbnormalTest(string $NatureofAbnormalTest): void
    {
        $this->NatureofAbnormalTest = $NatureofAbnormalTest;
    }

    /**
     * @return string
     */
    public function getObservationResultStatus(): string
    {
        return $this->ObservationResultStatus;
    }

    /**
     * @param string $ObservationResultStatus
     */
    public function setObservationResultStatus(string $ObservationResultStatus): void
    {
        $this->ObservationResultStatus = $ObservationResultStatus;
    }

    /**
     * @return string
     */
    public function getEffectiveDateofReferenceRangeValues(): string
    {
        return $this->EffectiveDateofReferenceRangeValues;
    }

    /**
     * @param string $EffectiveDateofReferenceRangeValues
     */
    public function setEffectiveDateofReferenceRangeValues(string $EffectiveDateofReferenceRangeValues): void
    {
        $this->EffectiveDateofReferenceRangeValues = $EffectiveDateofReferenceRangeValues;
    }

    /**
     * @return string
     */
    public function getUserDefinedAccessChecks(): string
    {
        return $this->UserDefinedAccessChecks;
    }

    /**
     * @param string $UserDefinedAccessChecks
     */
    public function setUserDefinedAccessChecks(string $UserDefinedAccessChecks): void
    {
        $this->UserDefinedAccessChecks = $UserDefinedAccessChecks;
    }

    /**
     * @return string
     */
    public function getDateTimeoftheObservation(): string
    {
        return $this->DateTimeoftheObservation;
    }

    /**
     * @param string $DateTimeoftheObservation
     */
    public function setDateTimeoftheObservation(string $DateTimeoftheObservation): void
    {
        $this->DateTimeoftheObservation = $DateTimeoftheObservation;
    }

    /**
     * @return string
     */
    public function getProducerReference(): string
    {
        return $this->ProducerReference;
    }

    /**
     * @param string $ProducerReference
     */
    public function setProducerReference(string $ProducerReference): void
    {
        $this->ProducerReference = $ProducerReference;
    }

    /**
     * @return string
     */
    public function getResponsibleObserver(): string
    {
        return $this->ResponsibleObserver;
    }

    /**
     * @param string $ResponsibleObserver
     */
    public function setResponsibleObserver(string $ResponsibleObserver): void
    {
        $this->ResponsibleObserver = $ResponsibleObserver;
    }

    /**
     * @return string
     */
    public function getObservationMethod(): string
    {
        return $this->ObservationMethod;
    }

    /**
     * @param string $ObservationMethod
     */
    public function setObservationMethod(string $ObservationMethod): void
    {
        $this->ObservationMethod = $ObservationMethod;
    }

    /**
     * @return string
     */
    public function getEquipmentInstanceIdentifier(): string
    {
        return $this->EquipmentInstanceIdentifier;
    }

    /**
     * @param string $EquipmentInstanceIdentifier
     */
    public function setEquipmentInstanceIdentifier(string $EquipmentInstanceIdentifier): void
    {
        $this->EquipmentInstanceIdentifier = $EquipmentInstanceIdentifier;
    }

    /**
     * @return string
     */
    public function getDateTimeoftheAnalysis(): string
    {
        return $this->DateTimeoftheAnalysis;
    }

    /**
     * @param string $DateTimeoftheAnalysis
     */
    public function setDateTimeoftheAnalysis(string $DateTimeoftheAnalysis): void
    {
        $this->DateTimeoftheAnalysis = $DateTimeoftheAnalysis;
    }

    /**
     * @return string
     */
    public function getReservedforharmonizationwithv26a(): string
    {
        return $this->Reservedforharmonizationwithv2_6a;
    }

    /**
     * @param string $Reservedforharmonizationwithv2_6a
     */
    public function setReservedforharmonizationwithv26a(string $Reservedforharmonizationwithv2_6a): void
    {
        $this->Reservedforharmonizationwithv2_6a = $Reservedforharmonizationwithv2_6a;
    }

    /**
     * @return string
     */
    public function getReservedforharmonizationwithv26b(): string
    {
        return $this->Reservedforharmonizationwithv2_6b;
    }

    /**
     * @param string $Reservedforharmonizationwithv2_6b
     */
    public function setReservedforharmonizationwithv26b(string $Reservedforharmonizationwithv2_6b): void
    {
        $this->Reservedforharmonizationwithv2_6b = $Reservedforharmonizationwithv2_6b;
    }

    /**
     * @return string
     */
    public function getReservedforharmonizationwithv26c(): string
    {
        return $this->Reservedforharmonizationwithv2_6c;
    }

    /**
     * @param string $Reservedforharmonizationwithv2_6c
     */
    public function setReservedforharmonizationwithv26c(string $Reservedforharmonizationwithv2_6c): void
    {
        $this->Reservedforharmonizationwithv2_6c = $Reservedforharmonizationwithv2_6c;
    }

    /**
     * @return string
     */
    public function getPerformingOrganizationName(): string
    {
        return $this->PerformingOrganizationName;
    }

    /**
     * @param string $PerformingOrganizationName
     */
    public function setPerformingOrganizationName(string $PerformingOrganizationName): void
    {
        $this->PerformingOrganizationName = $PerformingOrganizationName;
    }

    /**
     * @return string
     */
    public function getPerformingOrganizationAddress(): string
    {
        return $this->PerformingOrganizationAddress;
    }

    /**
     * @param string $PerformingOrganizationAddress
     */
    public function setPerformingOrganizationAddress(string $PerformingOrganizationAddress): void
    {
        $this->PerformingOrganizationAddress = $PerformingOrganizationAddress;
    }

    /**
     * @return string
     */
    public function getPerformingOrganizationMedicalDirector(): string
    {
        return $this->PerformingOrganizationMedicalDirector;
    }

    /**
     * @param string $PerformingOrganizationMedicalDirector
     */
    public function setPerformingOrganizationMedicalDirector(string $PerformingOrganizationMedicalDirector): void
    {
        $this->PerformingOrganizationMedicalDirector = $PerformingOrganizationMedicalDirector;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}