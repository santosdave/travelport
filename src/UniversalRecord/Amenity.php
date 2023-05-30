<?php

namespace Santosdave\Travelport\UniversalRecord;

class Amenity
{

    /**
     * @var typeAmenity $Code
     */
    protected $Code = null;

    /**
     * @var anonymous1235 $AmenityType
     */
    protected $AmenityType = null;

    /**
     * @param typeAmenity $Code
     * @param anonymous1235 $AmenityType
     */
    public function __construct($Code = null, $AmenityType = null)
    {
      $this->Code = $Code;
      $this->AmenityType = $AmenityType;
    }

    /**
     * @return typeAmenity
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeAmenity $Code
     * @return \Santosdave\Travelport\UniversalRecord\Amenity
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous1235
     */
    public function getAmenityType()
    {
      return $this->AmenityType;
    }

    /**
     * @param anonymous1235 $AmenityType
     * @return \Santosdave\Travelport\UniversalRecord\Amenity
     */
    public function setAmenityType($AmenityType)
    {
      $this->AmenityType = $AmenityType;
      return $this;
    }

}
