<?php

namespace Santosdave\Travelport\GDSQueue;

class AirPricingInfoList
{

    /**
     * @var AirPricingInfo $AirPricingInfo
     */
    protected $AirPricingInfo = null;

    /**
     * @param AirPricingInfo $AirPricingInfo
     */
    public function __construct($AirPricingInfo = null)
    {
      $this->AirPricingInfo = $AirPricingInfo;
    }

    /**
     * @return AirPricingInfo
     */
    public function getAirPricingInfo()
    {
      return $this->AirPricingInfo;
    }

    /**
     * @param AirPricingInfo $AirPricingInfo
     * @return \Santosdave\Travelport\GDSQueue\AirPricingInfoList
     */
    public function setAirPricingInfo($AirPricingInfo)
    {
      $this->AirPricingInfo = $AirPricingInfo;
      return $this;
    }

}
