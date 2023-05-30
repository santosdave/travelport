<?php

namespace Santosdave\Travelport\Rail;

class HotelProperty
{

    /**
     * @var typeUnstructuredAddress $PropertyAddress
     */
    protected $PropertyAddress = null;

    /**
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var CoordinateLocation $CoordinateLocation
     */
    protected $CoordinateLocation = null;

    /**
     * @var Distance $Distance
     */
    protected $Distance = null;

    /**
     * @var HotelRating $HotelRating
     */
    protected $HotelRating = null;

    /**
     * @var Amenities $Amenities
     */
    protected $Amenities = null;

    /**
     * @var MarketingMessage $MarketingMessage
     */
    protected $MarketingMessage = null;

    /**
     * @var typeHotelChainCode $HotelChain
     */
    protected $HotelChain = null;

    /**
     * @var typeHotelCode $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var typeHotelLocationCode $HotelLocation
     */
    protected $HotelLocation = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $VendorLocationKey
     */
    protected $VendorLocationKey = null;

    /**
     * @var typeOTACode $HotelTransportation
     */
    protected $HotelTransportation = null;

    /**
     * @var typeReserveRequirement $ReserveRequirement
     */
    protected $ReserveRequirement = null;

    /**
     * @var StringLength1 $ParticipationLevel
     */
    protected $ParticipationLevel = null;

    /**
     * @var typeHotelAvailability $Availability
     */
    protected $Availability = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var boolean $PreferredOption
     */
    protected $PreferredOption = null;

    /**
     * @var boolean $MoreRates
     */
    protected $MoreRates = null;

    /**
     * @var anonymous1156 $MoreRatesToken
     */
    protected $MoreRatesToken = null;

    /**
     * @var typeNetTransCommission $NetTransCommissionInd
     */
    protected $NetTransCommissionInd = null;

    /**
     * @var int $NumOfRatePlans
     */
    protected $NumOfRatePlans = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param CoordinateLocation $CoordinateLocation
     * @param Distance $Distance
     * @param HotelRating $HotelRating
     * @param Amenities $Amenities
     * @param MarketingMessage $MarketingMessage
     * @param typeHotelChainCode $HotelChain
     * @param typeHotelCode $HotelCode
     * @param typeHotelLocationCode $HotelLocation
     * @param string $Name
     * @param string $VendorLocationKey
     * @param typeOTACode $HotelTransportation
     * @param typeReserveRequirement $ReserveRequirement
     * @param StringLength1 $ParticipationLevel
     * @param typeHotelAvailability $Availability
     * @param typeRef $Key
     * @param boolean $PreferredOption
     * @param boolean $MoreRates
     * @param anonymous1156 $MoreRatesToken
     * @param typeNetTransCommission $NetTransCommissionInd
     * @param int $NumOfRatePlans
     */
    public function __construct($PhoneNumber = null, $CoordinateLocation = null, $Distance = null, $HotelRating = null, $Amenities = null, $MarketingMessage = null, $HotelChain = null, $HotelCode = null, $HotelLocation = null, $Name = null, $VendorLocationKey = null, $HotelTransportation = null, $ReserveRequirement = null, $ParticipationLevel = null, $Availability = null, $Key = null, $PreferredOption = null, $MoreRates = null, $MoreRatesToken = null, $NetTransCommissionInd = null, $NumOfRatePlans = null)
    {
      $this->PhoneNumber = $PhoneNumber;
      $this->CoordinateLocation = $CoordinateLocation;
      $this->Distance = $Distance;
      $this->HotelRating = $HotelRating;
      $this->Amenities = $Amenities;
      $this->MarketingMessage = $MarketingMessage;
      $this->HotelChain = $HotelChain;
      $this->HotelCode = $HotelCode;
      $this->HotelLocation = $HotelLocation;
      $this->Name = $Name;
      $this->VendorLocationKey = $VendorLocationKey;
      $this->HotelTransportation = $HotelTransportation;
      $this->ReserveRequirement = $ReserveRequirement;
      $this->ParticipationLevel = $ParticipationLevel;
      $this->Availability = $Availability;
      $this->Key = $Key;
      $this->PreferredOption = $PreferredOption;
      $this->MoreRates = $MoreRates;
      $this->MoreRatesToken = $MoreRatesToken;
      $this->NetTransCommissionInd = $NetTransCommissionInd;
      $this->NumOfRatePlans = $NumOfRatePlans;
    }

    /**
     * @return typeUnstructuredAddress
     */
    public function getPropertyAddress()
    {
      return $this->PropertyAddress;
    }

    /**
     * @param typeUnstructuredAddress $PropertyAddress
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setPropertyAddress($PropertyAddress)
    {
      $this->PropertyAddress = $PropertyAddress;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return CoordinateLocation
     */
    public function getCoordinateLocation()
    {
      return $this->CoordinateLocation;
    }

    /**
     * @param CoordinateLocation $CoordinateLocation
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setCoordinateLocation($CoordinateLocation)
    {
      $this->CoordinateLocation = $CoordinateLocation;
      return $this;
    }

    /**
     * @return Distance
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param Distance $Distance
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

    /**
     * @return HotelRating
     */
    public function getHotelRating()
    {
      return $this->HotelRating;
    }

    /**
     * @param HotelRating $HotelRating
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setHotelRating($HotelRating)
    {
      $this->HotelRating = $HotelRating;
      return $this;
    }

    /**
     * @return Amenities
     */
    public function getAmenities()
    {
      return $this->Amenities;
    }

    /**
     * @param Amenities $Amenities
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setAmenities($Amenities)
    {
      $this->Amenities = $Amenities;
      return $this;
    }

    /**
     * @return MarketingMessage
     */
    public function getMarketingMessage()
    {
      return $this->MarketingMessage;
    }

    /**
     * @param MarketingMessage $MarketingMessage
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setMarketingMessage($MarketingMessage)
    {
      $this->MarketingMessage = $MarketingMessage;
      return $this;
    }

    /**
     * @return typeHotelChainCode
     */
    public function getHotelChain()
    {
      return $this->HotelChain;
    }

    /**
     * @param typeHotelChainCode $HotelChain
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setHotelChain($HotelChain)
    {
      $this->HotelChain = $HotelChain;
      return $this;
    }

    /**
     * @return typeHotelCode
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param typeHotelCode $HotelCode
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return typeHotelLocationCode
     */
    public function getHotelLocation()
    {
      return $this->HotelLocation;
    }

    /**
     * @param typeHotelLocationCode $HotelLocation
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setHotelLocation($HotelLocation)
    {
      $this->HotelLocation = $HotelLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorLocationKey()
    {
      return $this->VendorLocationKey;
    }

    /**
     * @param string $VendorLocationKey
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setVendorLocationKey($VendorLocationKey)
    {
      $this->VendorLocationKey = $VendorLocationKey;
      return $this;
    }

    /**
     * @return typeOTACode
     */
    public function getHotelTransportation()
    {
      return $this->HotelTransportation;
    }

    /**
     * @param typeOTACode $HotelTransportation
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setHotelTransportation($HotelTransportation)
    {
      $this->HotelTransportation = $HotelTransportation;
      return $this;
    }

    /**
     * @return typeReserveRequirement
     */
    public function getReserveRequirement()
    {
      return $this->ReserveRequirement;
    }

    /**
     * @param typeReserveRequirement $ReserveRequirement
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setReserveRequirement($ReserveRequirement)
    {
      $this->ReserveRequirement = $ReserveRequirement;
      return $this;
    }

    /**
     * @return StringLength1
     */
    public function getParticipationLevel()
    {
      return $this->ParticipationLevel;
    }

    /**
     * @param StringLength1 $ParticipationLevel
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setParticipationLevel($ParticipationLevel)
    {
      $this->ParticipationLevel = $ParticipationLevel;
      return $this;
    }

    /**
     * @return typeHotelAvailability
     */
    public function getAvailability()
    {
      return $this->Availability;
    }

    /**
     * @param typeHotelAvailability $Availability
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setAvailability($Availability)
    {
      $this->Availability = $Availability;
      return $this;
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
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferredOption()
    {
      return $this->PreferredOption;
    }

    /**
     * @param boolean $PreferredOption
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setPreferredOption($PreferredOption)
    {
      $this->PreferredOption = $PreferredOption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoreRates()
    {
      return $this->MoreRates;
    }

    /**
     * @param boolean $MoreRates
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setMoreRates($MoreRates)
    {
      $this->MoreRates = $MoreRates;
      return $this;
    }

    /**
     * @return anonymous1156
     */
    public function getMoreRatesToken()
    {
      return $this->MoreRatesToken;
    }

    /**
     * @param anonymous1156 $MoreRatesToken
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setMoreRatesToken($MoreRatesToken)
    {
      $this->MoreRatesToken = $MoreRatesToken;
      return $this;
    }

    /**
     * @return typeNetTransCommission
     */
    public function getNetTransCommissionInd()
    {
      return $this->NetTransCommissionInd;
    }

    /**
     * @param typeNetTransCommission $NetTransCommissionInd
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setNetTransCommissionInd($NetTransCommissionInd)
    {
      $this->NetTransCommissionInd = $NetTransCommissionInd;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumOfRatePlans()
    {
      return $this->NumOfRatePlans;
    }

    /**
     * @param int $NumOfRatePlans
     * @return \Santosdave\Travelport\Rail\HotelProperty
     */
    public function setNumOfRatePlans($NumOfRatePlans)
    {
      $this->NumOfRatePlans = $NumOfRatePlans;
      return $this;
    }

}
