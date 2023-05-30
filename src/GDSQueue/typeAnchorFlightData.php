<?php

namespace Santosdave\Travelport\GDSQueue;

class typeAnchorFlightData
{

    /**
     * @var typeCarrier $AirlineCode
     */
    protected $AirlineCode = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var boolean $ConnectionIndicator
     */
    protected $ConnectionIndicator = null;

    /**
     * @param typeCarrier $AirlineCode
     * @param typeFlightNumber $FlightNumber
     * @param boolean $ConnectionIndicator
     */
    public function __construct($AirlineCode = null, $FlightNumber = null, $ConnectionIndicator = null)
    {
      $this->AirlineCode = $AirlineCode;
      $this->FlightNumber = $FlightNumber;
      $this->ConnectionIndicator = $ConnectionIndicator;
    }

    /**
     * @return typeCarrier
     */
    public function getAirlineCode()
    {
      return $this->AirlineCode;
    }

    /**
     * @param typeCarrier $AirlineCode
     * @return \Santosdave\Travelport\GDSQueue\typeAnchorFlightData
     */
    public function setAirlineCode($AirlineCode)
    {
      $this->AirlineCode = $AirlineCode;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param typeFlightNumber $FlightNumber
     * @return \Santosdave\Travelport\GDSQueue\typeAnchorFlightData
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConnectionIndicator()
    {
      return $this->ConnectionIndicator;
    }

    /**
     * @param boolean $ConnectionIndicator
     * @return \Santosdave\Travelport\GDSQueue\typeAnchorFlightData
     */
    public function setConnectionIndicator($ConnectionIndicator)
    {
      $this->ConnectionIndicator = $ConnectionIndicator;
      return $this;
    }

}
