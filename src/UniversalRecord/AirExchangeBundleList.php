<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirExchangeBundleList
{

    /**
     * @var AirExchangeBundle $AirExchangeBundle
     */
    protected $AirExchangeBundle = null;

    /**
     * @param AirExchangeBundle $AirExchangeBundle
     */
    public function __construct($AirExchangeBundle = null)
    {
      $this->AirExchangeBundle = $AirExchangeBundle;
    }

    /**
     * @return AirExchangeBundle
     */
    public function getAirExchangeBundle()
    {
      return $this->AirExchangeBundle;
    }

    /**
     * @param AirExchangeBundle $AirExchangeBundle
     * @return \FilippoToso\Travelport\UniversalRecord\AirExchangeBundleList
     */
    public function setAirExchangeBundle($AirExchangeBundle)
    {
      $this->AirExchangeBundle = $AirExchangeBundle;
      return $this;
    }

}
