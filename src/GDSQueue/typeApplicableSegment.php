<?php

namespace Santosdave\Travelport\GDSQueue;

class typeApplicableSegment
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $AirItineraryDetailsRef
     */
    protected $AirItineraryDetailsRef = null;

    /**
     * @var string $BookingCounts
     */
    protected $BookingCounts = null;

    /**
     * @param typeRef $Key
     * @param typeRef $AirItineraryDetailsRef
     * @param string $BookingCounts
     */
    public function __construct($Key = null, $AirItineraryDetailsRef = null, $BookingCounts = null)
    {
      $this->Key = $Key;
      $this->AirItineraryDetailsRef = $AirItineraryDetailsRef;
      $this->BookingCounts = $BookingCounts;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \Santosdave\Travelport\GDSQueue\typeApplicableSegment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirItineraryDetailsRef()
    {
      return $this->AirItineraryDetailsRef;
    }

    /**
     * @param typeRef $AirItineraryDetailsRef
     * @return \Santosdave\Travelport\GDSQueue\typeApplicableSegment
     */
    public function setAirItineraryDetailsRef($AirItineraryDetailsRef)
    {
      $this->AirItineraryDetailsRef = $AirItineraryDetailsRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingCounts()
    {
      return $this->BookingCounts;
    }

    /**
     * @param string $BookingCounts
     * @return \Santosdave\Travelport\GDSQueue\typeApplicableSegment
     */
    public function setBookingCounts($BookingCounts)
    {
      $this->BookingCounts = $BookingCounts;
      return $this;
    }

}
