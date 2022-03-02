<?php
namespace amin0x\nabidh;

class SPM implements Segment {

    private $ID;
    private $SpecimenID = '';
    private $SpecimenType = '';
    private $SpecimenTypeModifier = '';
    private $SpecimenAdditives = '';
    private $SpecimenCollectionMethod = '';
    private $SpecimenSourceSite = '';
    private $SpecimenSourceSiteModifier = '';
    private $SpecimenRole = '';
    private $SpecimenCollectionAmount = '';
    private $SpecimenCollectionDateTime = '';
    private $SpecimenReceivedDateTime = '';
    private $SpecimenRejectReason = '';
    private $SpecimenQuality = '';
    private $SpecimenAppropriateness = '';
    private $SpecimenCondition = '';


    /**
     * SPM constructor.
     */
    public function __construct($ID)
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
     * @return CE|string
     */
    public function getSpecimenCollectionMethod(): CE|string
    {
        return $this->SpecimenCollectionMethod;
    }

    /**
     * @param CE $SpecimenCollectionMethod
     */
    public function setSpecimenCollectionMethod(CE $SpecimenCollectionMethod): void
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

    public function __toString()
    {
        $fields = [];
        $fields[] = 'SPM';
        $fields[] = $this->ID;
        $fields[] = $this->SpecimenID;
        $fields[] = '';
        $fields[] = $this->SpecimenType;
        $fields[] = $this->SpecimenTypeModifier;
        $fields[] = $this->SpecimenAdditives;
        $fields[] = $this->SpecimenCollectionMethod;
        $fields[] = $this->SpecimenSourceSite;
        $fields[] = $this->SpecimenSourceSiteModifier;
        $fields[] = '';
        $fields[] = $this->SpecimenRole;
        $fields[] = $this->SpecimenCollectionAmount;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->SpecimenCollectionDateTime;
        $fields[] = $this->SpecimenReceivedDateTime;
        $fields[] = '';
        $fields[] = '';
        $fields[] = $this->SpecimenRejectReason;
        $fields[] = $this->SpecimenQuality;
        $fields[] = $this->SpecimenAppropriateness;
        $fields[] = $this->SpecimenCondition;
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        $fields[] = '';
        return '';
    }


}