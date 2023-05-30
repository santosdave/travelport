<?php

namespace Santosdave\Travelport\Rail;

class FlightOrigin
{

    /**
     * @var Airport $Airport
     */
    protected $Airport = null;

    /**
     * @param Airport $Airport
     */
    public function __construct($Airport = null)
    {
      $this->Airport = $Airport;
    }

    /**
     * @return Airport
     */
    public function getAirport()
    {
      return $this->Airport;
    }

    /**
     * @param Airport $Airport
     * @return \Santosdave\Travelport\Rail\FlightOrigin
     */
    public function setAirport($Airport)
    {
      $this->Airport = $Airport;
      return $this;
    }

}
