<?php

namespace Santosdave\Travelport\Vehicle;

class SSR
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @var typeRef $PassiveSegmentRef
     */
    protected $PassiveSegmentRef = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeSSRCode $Type
     */
    protected $Type = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var typeSSRFreeText $FreeText
     */
    protected $FreeText = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var anonymous158 $CarrierSpecificText
     */
    protected $CarrierSpecificText = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var anonymous159 $ProviderDefinedType
     */
    protected $ProviderDefinedType = null;

    /**
     * @var typeRef $SSRRuleRef
     */
    protected $SSRRuleRef = null;

    /**
     * @var anyURI $URL
     */
    protected $URL = null;

    /**
     * @var string $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeRef $ProfileSecureFlightDocKey
     */
    protected $ProfileSecureFlightDocKey = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param typeRef $SegmentRef
     * @param typeRef $PassiveSegmentRef
     * @param typeRef $ProviderReservationInfoRef
     * @param typeSSRCode $Type
     * @param string $Status
     * @param typeSSRFreeText $FreeText
     * @param typeCarrier $Carrier
     * @param anonymous158 $CarrierSpecificText
     * @param string $Description
     * @param anonymous159 $ProviderDefinedType
     * @param typeRef $SSRRuleRef
     * @param anyURI $URL
     * @param string $ProfileID
     * @param typeRef $ProfileSecureFlightDocKey
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key = null, $SegmentRef = null, $PassiveSegmentRef = null, $ProviderReservationInfoRef = null, $Type = null, $Status = null, $FreeText = null, $Carrier = null, $CarrierSpecificText = null, $Description = null, $ProviderDefinedType = null, $SSRRuleRef = null, $URL = null, $ProfileID = null, $ProfileSecureFlightDocKey = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Key = $Key;
      $this->SegmentRef = $SegmentRef;
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Type = $Type;
      $this->Status = $Status;
      $this->FreeText = $FreeText;
      $this->Carrier = $Carrier;
      $this->CarrierSpecificText = $CarrierSpecificText;
      $this->Description = $Description;
      $this->ProviderDefinedType = $ProviderDefinedType;
      $this->SSRRuleRef = $SSRRuleRef;
      $this->URL = $URL;
      $this->ProfileID = $ProfileID;
      $this->ProfileSecureFlightDocKey = $ProfileSecureFlightDocKey;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPassiveSegmentRef()
    {
      return $this->PassiveSegmentRef;
    }

    /**
     * @param typeRef $PassiveSegmentRef
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setPassiveSegmentRef($PassiveSegmentRef)
    {
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeSSRCode
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeSSRCode $Type
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typeSSRFreeText
     */
    public function getFreeText()
    {
      return $this->FreeText;
    }

    /**
     * @param typeSSRFreeText $FreeText
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setFreeText($FreeText)
    {
      $this->FreeText = $FreeText;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return anonymous158
     */
    public function getCarrierSpecificText()
    {
      return $this->CarrierSpecificText;
    }

    /**
     * @param anonymous158 $CarrierSpecificText
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setCarrierSpecificText($CarrierSpecificText)
    {
      $this->CarrierSpecificText = $CarrierSpecificText;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return anonymous159
     */
    public function getProviderDefinedType()
    {
      return $this->ProviderDefinedType;
    }

    /**
     * @param anonymous159 $ProviderDefinedType
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setProviderDefinedType($ProviderDefinedType)
    {
      $this->ProviderDefinedType = $ProviderDefinedType;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSSRRuleRef()
    {
      return $this->SSRRuleRef;
    }

    /**
     * @param typeRef $SSRRuleRef
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setSSRRuleRef($SSRRuleRef)
    {
      $this->SSRRuleRef = $SSRRuleRef;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param anyURI $URL
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param string $ProfileID
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProfileSecureFlightDocKey()
    {
      return $this->ProfileSecureFlightDocKey;
    }

    /**
     * @param typeRef $ProfileSecureFlightDocKey
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setProfileSecureFlightDocKey($ProfileSecureFlightDocKey)
    {
      $this->ProfileSecureFlightDocKey = $ProfileSecureFlightDocKey;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \Santosdave\Travelport\Vehicle\SSR
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
