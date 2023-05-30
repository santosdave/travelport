<?php

namespace FilippoToso\Travelport\Hotel;

class CityOrAirport extends Location
{

    /**
     * @var typeIATACode $Code
     */
    protected $Code = null;

    /**
     * @var boolean $PreferCity
     */
    protected $PreferCity = null;

    /**
     * @param typeIATACode $Code
     * @param boolean $PreferCity
     */
    public function __construct($Code = null, $PreferCity = null)
    {
      $this->Code = $Code;
      $this->PreferCity = $PreferCity;
    }

    /**
     * @return typeIATACode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeIATACode $Code
     * @return \FilippoToso\Travelport\Hotel\CityOrAirport
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferCity()
    {
      return $this->PreferCity;
    }

    /**
     * @param boolean $PreferCity
     * @return \FilippoToso\Travelport\Hotel\CityOrAirport
     */
    public function setPreferCity($PreferCity)
    {
      $this->PreferCity = $PreferCity;
      return $this;
    }

}
