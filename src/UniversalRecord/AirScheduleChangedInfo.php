<?php

namespace Santosdave\Travelport\UniversalRecord;

class AirScheduleChangedInfo
{

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @param AirPricingSolution $AirPricingSolution
     */
    public function __construct($AirPricingSolution = null)
    {
      $this->AirPricingSolution = $AirPricingSolution;
    }

    /**
     * @return AirPricingSolution
     */
    public function getAirPricingSolution()
    {
      return $this->AirPricingSolution;
    }

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @return \Santosdave\Travelport\UniversalRecord\AirScheduleChangedInfo
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

}
