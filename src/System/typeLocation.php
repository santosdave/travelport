<?php

namespace Santosdave\Travelport\System;

class typeLocation
{

    /**
     * @var Airport $Airport
     */
    protected $Airport = null;

    /**
     * @var City $City
     */
    protected $City = null;

    /**
     * @var CityOrAirport $CityOrAirport
     */
    protected $CityOrAirport = null;

    /**
     * @param Airport $Airport
     * @param City $City
     * @param CityOrAirport $CityOrAirport
     */
    public function __construct($Airport = null, $City = null, $CityOrAirport = null)
    {
      $this->Airport = $Airport;
      $this->City = $City;
      $this->CityOrAirport = $CityOrAirport;
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
     * @return \Santosdave\Travelport\System\typeLocation
     */
    public function setAirport($Airport)
    {
      $this->Airport = $Airport;
      return $this;
    }

    /**
     * @return City
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param City $City
     * @return \Santosdave\Travelport\System\typeLocation
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return CityOrAirport
     */
    public function getCityOrAirport()
    {
      return $this->CityOrAirport;
    }

    /**
     * @param CityOrAirport $CityOrAirport
     * @return \Santosdave\Travelport\System\typeLocation
     */
    public function setCityOrAirport($CityOrAirport)
    {
      $this->CityOrAirport = $CityOrAirport;
      return $this;
    }

}
