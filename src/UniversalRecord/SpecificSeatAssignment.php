<?php

namespace Santosdave\Travelport\UniversalRecord;

class SpecificSeatAssignment
{

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeRef $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @var typeRef $FlightDetailRef
     */
    protected $FlightDetailRef = null;

    /**
     * @var string $SeatId
     */
    protected $SeatId = null;

    /**
     * @var anonymous721 $RailCoachNumber
     */
    protected $RailCoachNumber = null;

    /**
     * @param typeRef $BookingTravelerRef
     * @param typeRef $SegmentRef
     * @param typeRef $FlightDetailRef
     * @param string $SeatId
     * @param anonymous721 $RailCoachNumber
     */
    public function __construct($BookingTravelerRef = null, $SegmentRef = null, $FlightDetailRef = null, $SeatId = null, $RailCoachNumber = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->SegmentRef = $SegmentRef;
      $this->FlightDetailRef = $FlightDetailRef;
      $this->SeatId = $SeatId;
      $this->RailCoachNumber = $RailCoachNumber;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \Santosdave\Travelport\UniversalRecord\SpecificSeatAssignment
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \Santosdave\Travelport\UniversalRecord\SpecificSeatAssignment
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFlightDetailRef()
    {
      return $this->FlightDetailRef;
    }

    /**
     * @param typeRef $FlightDetailRef
     * @return \Santosdave\Travelport\UniversalRecord\SpecificSeatAssignment
     */
    public function setFlightDetailRef($FlightDetailRef)
    {
      $this->FlightDetailRef = $FlightDetailRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeatId()
    {
      return $this->SeatId;
    }

    /**
     * @param string $SeatId
     * @return \Santosdave\Travelport\UniversalRecord\SpecificSeatAssignment
     */
    public function setSeatId($SeatId)
    {
      $this->SeatId = $SeatId;
      return $this;
    }

    /**
     * @return anonymous721
     */
    public function getRailCoachNumber()
    {
      return $this->RailCoachNumber;
    }

    /**
     * @param anonymous721 $RailCoachNumber
     * @return \Santosdave\Travelport\UniversalRecord\SpecificSeatAssignment
     */
    public function setRailCoachNumber($RailCoachNumber)
    {
      $this->RailCoachNumber = $RailCoachNumber;
      return $this;
    }

}
