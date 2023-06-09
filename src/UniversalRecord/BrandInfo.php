<?php

namespace Santosdave\Travelport\UniversalRecord;

class BrandInfo
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeBrandId $BrandID
     */
    protected $BrandID = null;

    /**
     * @var typeRef $AirPricingInfoRef
     */
    protected $AirPricingInfoRef = null;

    /**
     * @var typeRef $FareInfoRef
     */
    protected $FareInfoRef = null;

    /**
     * @param typeRef $Key
     * @param typeBrandId $BrandID
     * @param typeRef $AirPricingInfoRef
     * @param typeRef $FareInfoRef
     */
    public function __construct($Key = null, $BrandID = null, $AirPricingInfoRef = null, $FareInfoRef = null)
    {
      $this->Key = $Key;
      $this->BrandID = $BrandID;
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->FareInfoRef = $FareInfoRef;
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
     * @return \Santosdave\Travelport\UniversalRecord\BrandInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeBrandId
     */
    public function getBrandID()
    {
      return $this->BrandID;
    }

    /**
     * @param typeBrandId $BrandID
     * @return \Santosdave\Travelport\UniversalRecord\BrandInfo
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param typeRef $AirPricingInfoRef
     * @return \Santosdave\Travelport\UniversalRecord\BrandInfo
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param typeRef $FareInfoRef
     * @return \Santosdave\Travelport\UniversalRecord\BrandInfo
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
