<?php

namespace Santosdave\Travelport\UniversalRecord;

class RailLocation extends Location
{

    /**
     * @var typeRailLocationCode $Code
     */
    protected $Code = null;

    /**
     * @param typeRailLocationCode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeRailLocationCode $Code
     * @return \Santosdave\Travelport\UniversalRecord\RailLocation
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
