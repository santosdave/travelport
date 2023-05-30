<?php

namespace Santosdave\Travelport\Rail;

class Journey
{

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var duration $TravelTime
     */
    protected $TravelTime = null;

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @param duration $TravelTime
     */
    public function __construct($AirSegmentRef = null, $TravelTime = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->TravelTime = $TravelTime;
    }

    /**
     * @return AirSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @return \Santosdave\Travelport\Rail\Journey
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTravelTime()
    {
      return $this->TravelTime;
    }

    /**
     * @param duration $TravelTime
     * @return \Santosdave\Travelport\Rail\Journey
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

}
