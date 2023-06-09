<?php

namespace Santosdave\Travelport\UniversalRecord;

class Amenities
{

    /**
     * @var Amenity $Amenity
     */
    protected $Amenity = null;

    /**
     * @param Amenity $Amenity
     */
    public function __construct($Amenity = null)
    {
      $this->Amenity = $Amenity;
    }

    /**
     * @return Amenity
     */
    public function getAmenity()
    {
      return $this->Amenity;
    }

    /**
     * @param Amenity $Amenity
     * @return \Santosdave\Travelport\UniversalRecord\Amenities
     */
    public function setAmenity($Amenity)
    {
      $this->Amenity = $Amenity;
      return $this;
    }

}
