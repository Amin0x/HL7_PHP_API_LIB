<?php

class SPM {    

    private $SetID_SPM = '';
    private $SpecimenID = '';
    private $SpecimenParentIDs = '';
    private $SpecimenType = '';
    private $SpecimenTypeModifier = '';
    private $SpecimenAdditives = '';
    private $SpecimenCollectionMethod = '';
    private $SpecimenSourceSite = '';
    private $SpecimenSourceSiteModifier = '';
    private $SpecimenCollectionSite = '';
    private $SpecimenRole = '';
    private $SpecimenCollectionAmount = '';
    private $GroupedSpecimenCount = '';
    private $SpecimenDescription = '';
    private $SpecimenHandlingCode = '';
    private $SpecimenRiskCode = '';
    private $SpecimenCollectionDateTime = '';
    private $SpecimenReceivedDateTime = '';
    private $SpecimenExpirationDateTime = '';
    private $SpecimenAvailability = '';
    private $SpecimenRejectReason = '';
    private $SpecimenQuality = '';
    private $SpecimenAppropriateness = '';
    private $SpecimenCondition = '';
    private $SpecimenCurrentQuantity = '';
    private $NumberSpecimenContainers = '';
    private $ContainerType = '';
    private $ContainerCondition = '';
    private $SpecimenChildRole = '';

    /**
     * SPM constructor.
     * @param string $SetID_SPM
     * @param string $SpecimenID
     * @param string $SpecimenParentIDs
     * @param string $SpecimenType
     * @param string $SpecimenTypeModifier
     * @param string $SpecimenAdditives
     */
    public function __construct(string $SetID_SPM, string $SpecimenID, string $SpecimenParentIDs, string $SpecimenType, string $SpecimenTypeModifier, string $SpecimenAdditives)
    {
        $this->SetID_SPM = $SetID_SPM;
        $this->SpecimenID = $SpecimenID;
        $this->SpecimenParentIDs = $SpecimenParentIDs;
        $this->SpecimenType = $SpecimenType;
        $this->SpecimenTypeModifier = $SpecimenTypeModifier;
        $this->SpecimenAdditives = $SpecimenAdditives;
    }

    /**
     * @return string
     */
    public function getSetIDSPM(): string
    {
        return $this->SetID_SPM;
    }

    /**
     * @param string $SetID_SPM
     */
    public function setSetIDSPM(string $SetID_SPM): void
    {
        $this->SetID_SPM = $SetID_SPM;
    }

    /**
     * @return string
     */
    public function getSpecimenID(): string
    {
        return $this->SpecimenID;
    }

    /**
     * @param string $SpecimenID
     */
    public function setSpecimenID(string $SpecimenID): void
    {
        $this->SpecimenID = $SpecimenID;
    }

    /**
     * @return string
     */
    public function getSpecimenParentIDs(): string
    {
        return $this->SpecimenParentIDs;
    }

    /**
     * @param string $SpecimenParentIDs
     */
    public function setSpecimenParentIDs(string $SpecimenParentIDs): void
    {
        $this->SpecimenParentIDs = $SpecimenParentIDs;
    }

    /**
     * @return string
     */
    public function getSpecimenType(): string
    {
        return $this->SpecimenType;
    }

    /**
     * @param string $SpecimenType
     */
    public function setSpecimenType(string $SpecimenType): void
    {
        $this->SpecimenType = $SpecimenType;
    }

    /**
     * @return string
     */
    public function getSpecimenTypeModifier(): string
    {
        return $this->SpecimenTypeModifier;
    }

    /**
     * @param string $SpecimenTypeModifier
     */
    public function setSpecimenTypeModifier(string $SpecimenTypeModifier): void
    {
        $this->SpecimenTypeModifier = $SpecimenTypeModifier;
    }

    /**
     * @return string
     */
    public function getSpecimenAdditives(): string
    {
        return $this->SpecimenAdditives;
    }

    /**
     * @param string $SpecimenAdditives
     */
    public function setSpecimenAdditives(string $SpecimenAdditives): void
    {
        $this->SpecimenAdditives = $SpecimenAdditives;
    }

    /**
     * @return string
     */
    public function getSpecimenCollectionMethod(): string
    {
        return $this->SpecimenCollectionMethod;
    }

    /**
     * @param string $SpecimenCollectionMethod
     */
    public function setSpecimenCollectionMethod(string $SpecimenCollectionMethod): void
    {
        $this->SpecimenCollectionMethod = $SpecimenCollectionMethod;
    }

    /**
     * @return string
     */
    public function getSpecimenSourceSite(): string
    {
        return $this->SpecimenSourceSite;
    }

    /**
     * @param string $SpecimenSourceSite
     */
    public function setSpecimenSourceSite(string $SpecimenSourceSite): void
    {
        $this->SpecimenSourceSite = $SpecimenSourceSite;
    }

    /**
     * @return string
     */
    public function getSpecimenSourceSiteModifier(): string
    {
        return $this->SpecimenSourceSiteModifier;
    }

    /**
     * @param string $SpecimenSourceSiteModifier
     */
    public function setSpecimenSourceSiteModifier(string $SpecimenSourceSiteModifier): void
    {
        $this->SpecimenSourceSiteModifier = $SpecimenSourceSiteModifier;
    }

    /**
     * @return string
     */
    public function getSpecimenCollectionSite(): string
    {
        return $this->SpecimenCollectionSite;
    }

    /**
     * @param string $SpecimenCollectionSite
     */
    public function setSpecimenCollectionSite(string $SpecimenCollectionSite): void
    {
        $this->SpecimenCollectionSite = $SpecimenCollectionSite;
    }

    /**
     * @return string
     */
    public function getSpecimenRole(): string
    {
        return $this->SpecimenRole;
    }

    /**
     * @param string $SpecimenRole
     */
    public function setSpecimenRole(string $SpecimenRole): void
    {
        $this->SpecimenRole = $SpecimenRole;
    }

    /**
     * @return string
     */
    public function getSpecimenCollectionAmount(): string
    {
        return $this->SpecimenCollectionAmount;
    }

    /**
     * @param string $SpecimenCollectionAmount
     */
    public function setSpecimenCollectionAmount(string $SpecimenCollectionAmount): void
    {
        $this->SpecimenCollectionAmount = $SpecimenCollectionAmount;
    }

    /**
     * @return string
     */
    public function getGroupedSpecimenCount(): string
    {
        return $this->GroupedSpecimenCount;
    }

    /**
     * @param string $GroupedSpecimenCount
     */
    public function setGroupedSpecimenCount(string $GroupedSpecimenCount): void
    {
        $this->GroupedSpecimenCount = $GroupedSpecimenCount;
    }

    /**
     * @return string
     */
    public function getSpecimenDescription(): string
    {
        return $this->SpecimenDescription;
    }

    /**
     * @param string $SpecimenDescription
     */
    public function setSpecimenDescription(string $SpecimenDescription): void
    {
        $this->SpecimenDescription = $SpecimenDescription;
    }

    /**
     * @return string
     */
    public function getSpecimenHandlingCode(): string
    {
        return $this->SpecimenHandlingCode;
    }

    /**
     * @param string $SpecimenHandlingCode
     */
    public function setSpecimenHandlingCode(string $SpecimenHandlingCode): void
    {
        $this->SpecimenHandlingCode = $SpecimenHandlingCode;
    }

    /**
     * @return string
     */
    public function getSpecimenRiskCode(): string
    {
        return $this->SpecimenRiskCode;
    }

    /**
     * @param string $SpecimenRiskCode
     */
    public function setSpecimenRiskCode(string $SpecimenRiskCode): void
    {
        $this->SpecimenRiskCode = $SpecimenRiskCode;
    }

    /**
     * @return string
     */
    public function getSpecimenCollectionDateTime(): string
    {
        return $this->SpecimenCollectionDateTime;
    }

    /**
     * @param string $SpecimenCollectionDateTime
     */
    public function setSpecimenCollectionDateTime(string $SpecimenCollectionDateTime): void
    {
        $this->SpecimenCollectionDateTime = $SpecimenCollectionDateTime;
    }

    /**
     * @return string
     */
    public function getSpecimenReceivedDateTime(): string
    {
        return $this->SpecimenReceivedDateTime;
    }

    /**
     * @param string $SpecimenReceivedDateTime
     */
    public function setSpecimenReceivedDateTime(string $SpecimenReceivedDateTime): void
    {
        $this->SpecimenReceivedDateTime = $SpecimenReceivedDateTime;
    }

    /**
     * @return string
     */
    public function getSpecimenExpirationDateTime(): string
    {
        return $this->SpecimenExpirationDateTime;
    }

    /**
     * @param string $SpecimenExpirationDateTime
     */
    public function setSpecimenExpirationDateTime(string $SpecimenExpirationDateTime): void
    {
        $this->SpecimenExpirationDateTime = $SpecimenExpirationDateTime;
    }

    /**
     * @return string
     */
    public function getSpecimenAvailability(): string
    {
        return $this->SpecimenAvailability;
    }

    /**
     * @param string $SpecimenAvailability
     */
    public function setSpecimenAvailability(string $SpecimenAvailability): void
    {
        $this->SpecimenAvailability = $SpecimenAvailability;
    }

    /**
     * @return string
     */
    public function getSpecimenRejectReason(): string
    {
        return $this->SpecimenRejectReason;
    }

    /**
     * @param string $SpecimenRejectReason
     */
    public function setSpecimenRejectReason(string $SpecimenRejectReason): void
    {
        $this->SpecimenRejectReason = $SpecimenRejectReason;
    }

    /**
     * @return string
     */
    public function getSpecimenQuality(): string
    {
        return $this->SpecimenQuality;
    }

    /**
     * @param string $SpecimenQuality
     */
    public function setSpecimenQuality(string $SpecimenQuality): void
    {
        $this->SpecimenQuality = $SpecimenQuality;
    }

    /**
     * @return string
     */
    public function getSpecimenAppropriateness(): string
    {
        return $this->SpecimenAppropriateness;
    }

    /**
     * @param string $SpecimenAppropriateness
     */
    public function setSpecimenAppropriateness(string $SpecimenAppropriateness): void
    {
        $this->SpecimenAppropriateness = $SpecimenAppropriateness;
    }

    /**
     * @return string
     */
    public function getSpecimenCondition(): string
    {
        return $this->SpecimenCondition;
    }

    /**
     * @param string $SpecimenCondition
     */
    public function setSpecimenCondition(string $SpecimenCondition): void
    {
        $this->SpecimenCondition = $SpecimenCondition;
    }

    /**
     * @return string
     */
    public function getSpecimenCurrentQuantity(): string
    {
        return $this->SpecimenCurrentQuantity;
    }

    /**
     * @param string $SpecimenCurrentQuantity
     */
    public function setSpecimenCurrentQuantity(string $SpecimenCurrentQuantity): void
    {
        $this->SpecimenCurrentQuantity = $SpecimenCurrentQuantity;
    }

    /**
     * @return string
     */
    public function getNumberSpecimenContainers(): string
    {
        return $this->NumberSpecimenContainers;
    }

    /**
     * @param string $NumberSpecimenContainers
     */
    public function setNumberSpecimenContainers(string $NumberSpecimenContainers): void
    {
        $this->NumberSpecimenContainers = $NumberSpecimenContainers;
    }

    /**
     * @return string
     */
    public function getContainerType(): string
    {
        return $this->ContainerType;
    }

    /**
     * @param string $ContainerType
     */
    public function setContainerType(string $ContainerType): void
    {
        $this->ContainerType = $ContainerType;
    }

    /**
     * @return string
     */
    public function getContainerCondition(): string
    {
        return $this->ContainerCondition;
    }

    /**
     * @param string $ContainerCondition
     */
    public function setContainerCondition(string $ContainerCondition): void
    {
        $this->ContainerCondition = $ContainerCondition;
    }

    /**
     * @return string
     */
    public function getSpecimenChildRole(): string
    {
        return $this->SpecimenChildRole;
    }

    /**
     * @param string $SpecimenChildRole
     */
    public function setSpecimenChildRole(string $SpecimenChildRole): void
    {
        $this->SpecimenChildRole = $SpecimenChildRole;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}