<?php

namespace FilippoToso\Travelport\Terminal;

class PreviousSegment
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
     * @return \FilippoToso\Travelport\Terminal\PreviousSegment
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
     * @return \FilippoToso\Travelport\Terminal\PreviousSegment
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
     * @return \FilippoToso\Travelport\Terminal\PreviousSegment
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
     * @return \FilippoToso\Travelport\Terminal\PreviousSegment
     */
    public function setPassiveSegmentRef($PassiveSegmentRef)
    {
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      return $this;
    }

}
