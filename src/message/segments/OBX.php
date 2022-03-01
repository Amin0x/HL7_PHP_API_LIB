<?php
namespace amin0x\nabidh;

class OBX implements Segment {

    private $ID = '';
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
     * @return CE|string
     */
    public function getObservationIdentifier(): CE|string
    {
        return $this->ObservationIdentifier;
    }

    /**
     * @param CE $ObservationIdentifier
     */
    public function setObservationIdentifier(CE $ObservationIdentifier): void
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
     * @return CE|string
     */
    public function getUnits(): CE|string
    {
        return $this->Units;
    }

    /**
     * @param CE $Units
     */
    public function setUnits(CE $Units): void
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
     * @return CE|string
     */
    public function getProducerReference(): CE|string
    {
        return $this->ProducerReference;
    }

    /**
     * @param CE $ProducerReference
     */
    public function setProducerReference(CE $ProducerReference): void
    {
        $this->ProducerReference = $ProducerReference;
    }

    /**
     * @return XCN|string
     */
    public function getResponsibleObserver(): XCN|string
    {
        return $this->ResponsibleObserver;
    }

    /**
     * @param XCN $ResponsibleObserver
     */
    public function setResponsibleObserver(XCN $ResponsibleObserver): void
    {
        $this->ResponsibleObserver = $ResponsibleObserver;
    }

    /**
     * @return CE|string
     */
    public function getObservationMethod(): CE|string
    {
        return $this->ObservationMethod;
    }

    /**
     * @param CE $ObservationMethod
     */
    public function setObservationMethod(CE $ObservationMethod): void
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
     * @return XON|string
     */
    public function getPerformingOrganizationName(): XON|string
    {
        return $this->PerformingOrganizationName;
    }

    /**
     * @param XON $PerformingOrganizationName
     */
    public function setPerformingOrganizationName(XON $PerformingOrganizationName): void
    {
        $this->PerformingOrganizationName = $PerformingOrganizationName;
    }

    /**
     * @return XAD|string
     */
    public function getPerformingOrganizationAddress(): XAD|string
    {
        return $this->PerformingOrganizationAddress;
    }

    /**
     * @param XAD $PerformingOrganizationAddress
     */
    public function setPerformingOrganizationAddress(XAD $PerformingOrganizationAddress): void
    {
        $this->PerformingOrganizationAddress = $PerformingOrganizationAddress;
    }

    /**
     * @return XCN|string
     */
    public function getPerformingOrganizationMedicalDirector(): XCN|string
    {
        return $this->PerformingOrganizationMedicalDirector;
    }

    /**
     * @param XCN $PerformingOrganizationMedicalDirector
     */
    public function setPerformingOrganizationMedicalDirector(XCN $PerformingOrganizationMedicalDirector): void
    {
        $this->PerformingOrganizationMedicalDirector = $PerformingOrganizationMedicalDirector;
    }

    public function __toString()
    {
        $fields = [];
        $fields[] = 'OBX|';
        $fields[] = $this->ID;
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