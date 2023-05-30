<?php

namespace Santosdave\Travelport\GDSQueue;

class AirItinerarySolution
{

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var Connection $Connection
     */
    protected $Connection = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @param Connection $Connection
     * @param typeRef $Key
     */
    public function __construct($AirSegmentRef = null, $Connection = null, $Key = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->Connection = $Connection;
      $this->Key = $Key;
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
     * @return \Santosdave\Travelport\GDSQueue\AirItinerarySolution
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
      return $this->Connection;
    }

    /**
     * @param Connection $Connection
     * @return \Santosdave\Travelport\GDSQueue\AirItinerarySolution
     */
    public function setConnection($Connection)
    {
      $this->Connection = $Connection;
      return $this;
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
     * @return \Santosdave\Travelport\GDSQueue\AirItinerarySolution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
