<?php

namespace Santosdave\Travelport\Rail;

class AirSolutionChangedInfo
{

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var anonymous648 $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @param anonymous648 $ReasonCode
     */
    public function __construct($AirPricingSolution = null, $ReasonCode = null)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      $this->ReasonCode = $ReasonCode;
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
     * @return \Santosdave\Travelport\Rail\AirSolutionChangedInfo
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

    /**
     * @return anonymous648
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param anonymous648 $ReasonCode
     * @return \Santosdave\Travelport\Rail\AirSolutionChangedInfo
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

}
