<?php

namespace Santosdave\Travelport\UProfile;

class ReservationName
{

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var NameOverride $NameOverride
     */
    protected $NameOverride = null;

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @param NameOverride $NameOverride
     */
    public function __construct($BookingTravelerRef = null, $NameOverride = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->NameOverride = $NameOverride;
    }

    /**
     * @return BookingTravelerRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @return \Santosdave\Travelport\UProfile\ReservationName
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return NameOverride
     */
    public function getNameOverride()
    {
      return $this->NameOverride;
    }

    /**
     * @param NameOverride $NameOverride
     * @return \Santosdave\Travelport\UProfile\ReservationName
     */
    public function setNameOverride($NameOverride)
    {
      $this->NameOverride = $NameOverride;
      return $this;
    }

}
