<?php

namespace Santosdave\Travelport\System;

class CoordinateLocation extends Location
{

    /**
     * @var float $latitude
     */
    protected $latitude = null;

    /**
     * @var float $longitude
     */
    protected $longitude = null;

    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($latitude = null, $longitude = null)
    {
      $this->latitude = $latitude;
      $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return \Santosdave\Travelport\System\CoordinateLocation
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return \Santosdave\Travelport\System\CoordinateLocation
     */
    public function setLongitude($longitude)
    {
      $this->longitude = $longitude;
      return $this;
    }

}
