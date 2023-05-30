<?php

namespace Santosdave\Travelport\GDSQueue;

class HotelLocation
{

    /**
     * @var typeIATACode $Location
     */
    protected $Location = null;

    /**
     * @var typeHotelLocation $LocationType
     */
    protected $LocationType = null;

    /**
     * @param typeIATACode $Location
     * @param typeHotelLocation $LocationType
     */
    public function __construct($Location = null, $LocationType = null)
    {
      $this->Location = $Location;
      $this->LocationType = $LocationType;
    }

    /**
     * @return typeIATACode
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param typeIATACode $Location
     * @return \Santosdave\Travelport\GDSQueue\HotelLocation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return typeHotelLocation
     */
    public function getLocationType()
    {
      return $this->LocationType;
    }

    /**
     * @param typeHotelLocation $LocationType
     * @return \Santosdave\Travelport\GDSQueue\HotelLocation
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
      return $this;
    }

}
