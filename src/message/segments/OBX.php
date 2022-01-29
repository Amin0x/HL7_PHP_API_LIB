<?php
namespace amin0x\nabidh;

class OBX implements Segment {

    private $SetID_OBX = '';
    private $ValueType = '';
    private $ObservationIdentifier = '';
    private $ObservationSubID = '';
    private $ObservationValue = '';
    private $Units = '';
    private $ReferencesRange = '';
    private $AbnormalFlags = '';

    private $ObservationResultStatus = '';

    private $DateTimeoftheObservation = '';
    private $ProducerReference = '';
    private $ResponsibleObserver = '';
    private $ObservationMethod = '';

    private $DateTimeoftheAnalysis = '';

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
        $fields = [];
        $fields[] = 'OBX|';
        $fields[] = $this->SetID_OBX;
        $fields[] = $this->ValueType;
        $fields[] = $this->ObservationIdentifier;
        $fields[] = $this->ObservationSubID;
        $fields[] = $this->ObservationValue;
        $fields[] = $this->Units;
        $fields[] = $this->ReferencesRange;
        $fields[] = $this->AbnormalFlags;
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->ObservationResultStatus;
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->DateTimeoftheObservation;
        $fields[] = $this->ProducerReference;
        $fields[] = $this->ResponsibleObserver;
        $fields[] = $this->ObservationMethod;
        $fields[] = '';
        $fields[] = $this->DateTimeoftheAnalysis;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->PerformingOrganizationName;
        $fields[] = $this->PerformingOrganizationAddress;
        $fields[] = $this->PerformingOrganizationMedicalDirector;

        return implode('|', $fields).'\r';
    }


}