<?php

namespace Santosdave\Travelport\Rail;

class PolicyInformation
{

    /**
     * @var typeSegmentPolicy $AirPolicy
     */
    protected $AirPolicy = null;

    /**
     * @var typeSegmentPolicy $RailPolicy
     */
    protected $RailPolicy = null;

    /**
     * @var typeSegmentPolicy $HotelPolicy
     */
    protected $HotelPolicy = null;

    /**
     * @var typeSegmentPolicy $VehiclePolicy
     */
    protected $VehiclePolicy = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param typeSegmentPolicy $AirPolicy
     * @param typeSegmentPolicy $RailPolicy
     * @param typeSegmentPolicy $HotelPolicy
     * @param typeSegmentPolicy $VehiclePolicy
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($AirPolicy = null, $RailPolicy = null, $HotelPolicy = null, $VehiclePolicy = null, $BookingTravelerRef = null)
    {
      $this->AirPolicy = $AirPolicy;
      $this->RailPolicy = $RailPolicy;
      $this->HotelPolicy = $HotelPolicy;
      $this->VehiclePolicy = $VehiclePolicy;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return typeSegmentPolicy
     */
    public function getAirPolicy()
    {
      return $this->AirPolicy;
    }

    /**
     * @param typeSegmentPolicy $AirPolicy
     * @return \Santosdave\Travelport\Rail\PolicyInformation
     */
    public function setAirPolicy($AirPolicy)
    {
      $this->AirPolicy = $AirPolicy;
      return $this;
    }

    /**
     * @return typeSegmentPolicy
     */
    public function getRailPolicy()
    {
      return $this->RailPolicy;
    }

    /**
     * @param typeSegmentPolicy $RailPolicy
     * @return \Santosdave\Travelport\Rail\PolicyInformation
     */
    public function setRailPolicy($RailPolicy)
    {
      $this->RailPolicy = $RailPolicy;
      return $this;
    }

    /**
     * @return typeSegmentPolicy
     */
    public function getHotelPolicy()
    {
      return $this->HotelPolicy;
    }

    /**
     * @param typeSegmentPolicy $HotelPolicy
     * @return \Santosdave\Travelport\Rail\PolicyInformation
     */
    public function setHotelPolicy($HotelPolicy)
    {
      $this->HotelPolicy = $HotelPolicy;
      return $this;
    }

    /**
     * @return typeSegmentPolicy
     */
    public function getVehiclePolicy()
    {
      return $this->VehiclePolicy;
    }

    /**
     * @param typeSegmentPolicy $VehiclePolicy
     * @return \Santosdave\Travelport\Rail\PolicyInformation
     */
    public function setVehiclePolicy($VehiclePolicy)
    {
      $this->VehiclePolicy = $VehiclePolicy;
      return $this;
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
     * @return \Santosdave\Travelport\Rail\PolicyInformation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
