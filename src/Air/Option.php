<?php

namespace Santosdave\Travelport\Air;

class Option
{

    /**
     * @var BookingInfo $BookingInfo
     */
    protected $BookingInfo = null;

    /**
     * @var Connection $Connection
     */
    protected $Connection = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var duration $TravelTime
     */
    protected $TravelTime = null;

    /**
     * @param BookingInfo $BookingInfo
     * @param Connection $Connection
     * @param typeRef $Key
     * @param duration $TravelTime
     */
    public function __construct($BookingInfo = null, $Connection = null, $Key = null, $TravelTime = null)
    {
      $this->BookingInfo = $BookingInfo;
      $this->Connection = $Connection;
      $this->Key = $Key;
      $this->TravelTime = $TravelTime;
    }

    /**
     * @return BookingInfo
     */
    public function getBookingInfo()
    {
      return $this->BookingInfo;
    }

    /**
     * @param BookingInfo $BookingInfo
     * @return \Santosdave\Travelport\Air\Option
     */
    public function setBookingInfo($BookingInfo)
    {
      $this->BookingInfo = $BookingInfo;
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
     * @return \Santosdave\Travelport\Air\Option
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
     * @return \Santosdave\Travelport\Air\Option
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \Santosdave\Travelport\Air\Option
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

}
