<?php

namespace FilippoToso\Travelport\Terminal;

class typeNonAirReservationRef
{

    /**
     * @var typeLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @param typeLocatorCode $LocatorCode
     */
    public function __construct($LocatorCode = null)
    {
      $this->LocatorCode = $LocatorCode;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Terminal\typeNonAirReservationRef
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

}
