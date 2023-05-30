<?php

namespace Santosdave\Travelport\UniversalRecord;

class NextSegment
{

    /**
     * @var typeSegmentRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var typeNonAirReservationRef $HotelReservationRef
     */
    protected $HotelReservationRef = null;

    /**
     * @var typeNonAirReservationRef $VehicleReservationRef
     */
    protected $VehicleReservationRef = null;

    /**
     * @var typeSegmentRef $PassiveSegmentRef
     */
    protected $PassiveSegmentRef = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param typeSegmentRef $AirSegmentRef
     * @return \Santosdave\Travelport\UniversalRecord\NextSegment
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return typeNonAirReservationRef
     */
    public function getHotelReservationRef()
    {
      return $this->HotelReservationRef;
    }

    /**
     * @param typeNonAirReservationRef $HotelReservationRef
     * @return \Santosdave\Travelport\UniversalRecord\NextSegment
     */
    public function setHotelReservationRef($HotelReservationRef)
    {
      $this->HotelReservationRef = $HotelReservationRef;
      return $this;
    }

    /**
     * @return typeNonAirReservationRef
     */
    public function getVehicleReservationRef()
    {
      return $this->VehicleReservationRef;
    }

    /**
     * @param typeNonAirReservationRef $VehicleReservationRef
     * @return \Santosdave\Travelport\UniversalRecord\NextSegment
     */
    public function setVehicleReservationRef($VehicleReservationRef)
    {
      $this->VehicleReservationRef = $VehicleReservationRef;
      return $this;
    }

    /**
     * @return typeSegmentRef
     */
    public function getPassiveSegmentRef()
    {
      return $this->PassiveSegmentRef;
    }

    /**
     * @param typeSegmentRef $PassiveSegmentRef
     * @return \Santosdave\Travelport\UniversalRecord\NextSegment
     */
    public function setPassiveSegmentRef($PassiveSegmentRef)
    {
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      return $this;
    }

}
