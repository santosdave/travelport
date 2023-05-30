<?php

namespace Santosdave\Travelport\GDSQueue;

class HotelReservationCriteria
{

    /**
     * @var typeDateSpec $CheckInDate
     */
    protected $CheckInDate = null;

    /**
     * @var typeHotelChainCode $HotelChainCode
     */
    protected $HotelChainCode = null;

    /**
     * @var typeHotelCode $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $HotelConfirmation
     */
    protected $HotelConfirmation = null;

    /**
     * @var typeIATACode $Location
     */
    protected $Location = null;

    /**
     * @var boolean $PassiveOnly
     */
    protected $PassiveOnly = null;

    /**
     * @param typeHotelChainCode $HotelChainCode
     * @param typeHotelCode $HotelCode
     * @param string $HotelConfirmation
     * @param typeIATACode $Location
     * @param boolean $PassiveOnly
     */
    public function __construct($HotelChainCode = null, $HotelCode = null, $HotelConfirmation = null, $Location = null, $PassiveOnly = null)
    {
      $this->HotelChainCode = $HotelChainCode;
      $this->HotelCode = $HotelCode;
      $this->HotelConfirmation = $HotelConfirmation;
      $this->Location = $Location;
      $this->PassiveOnly = $PassiveOnly;
    }

    /**
     * @return typeDateSpec
     */
    public function getCheckInDate()
    {
      return $this->CheckInDate;
    }

    /**
     * @param typeDateSpec $CheckInDate
     * @return \Santosdave\Travelport\GDSQueue\HotelReservationCriteria
     */
    public function setCheckInDate($CheckInDate)
    {
      $this->CheckInDate = $CheckInDate;
      return $this;
    }

    /**
     * @return typeHotelChainCode
     */
    public function getHotelChainCode()
    {
      return $this->HotelChainCode;
    }

    /**
     * @param typeHotelChainCode $HotelChainCode
     * @return \Santosdave\Travelport\GDSQueue\HotelReservationCriteria
     */
    public function setHotelChainCode($HotelChainCode)
    {
      $this->HotelChainCode = $HotelChainCode;
      return $this;
    }

    /**
     * @return typeHotelCode
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param typeHotelCode $HotelCode
     * @return \Santosdave\Travelport\GDSQueue\HotelReservationCriteria
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelConfirmation()
    {
      return $this->HotelConfirmation;
    }

    /**
     * @param string $HotelConfirmation
     * @return \Santosdave\Travelport\GDSQueue\HotelReservationCriteria
     */
    public function setHotelConfirmation($HotelConfirmation)
    {
      $this->HotelConfirmation = $HotelConfirmation;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param typeIATACode $Location
     * @return \Santosdave\Travelport\GDSQueue\HotelReservationCriteria
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassiveOnly()
    {
      return $this->PassiveOnly;
    }

    /**
     * @param boolean $PassiveOnly
     * @return \Santosdave\Travelport\GDSQueue\HotelReservationCriteria
     */
    public function setPassiveOnly($PassiveOnly)
    {
      $this->PassiveOnly = $PassiveOnly;
      return $this;
    }

}
