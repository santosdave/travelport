<?php

namespace Santosdave\Travelport\UniversalRecord;

class AirSegmentError
{

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @param typeBaseAirSegment $AirSegment
     * @param string $ErrorMessage
     */
    public function __construct($AirSegment = null, $ErrorMessage = null)
    {
      $this->AirSegment = $AirSegment;
      $this->ErrorMessage = $ErrorMessage;
    }

    /**
     * @return typeBaseAirSegment
     */
    public function getAirSegment()
    {
      return $this->AirSegment;
    }

    /**
     * @param typeBaseAirSegment $AirSegment
     * @return \Santosdave\Travelport\UniversalRecord\AirSegmentError
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \Santosdave\Travelport\UniversalRecord\AirSegmentError
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

}
