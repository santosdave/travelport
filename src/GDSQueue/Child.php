<?php

namespace Santosdave\Travelport\GDSQueue;

class Child extends typeGuestChildInformation
{

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param int $Age
     * @param BookingTravelerRef $BookingTravelerRef
     */
    public function __construct($Age = null, $BookingTravelerRef = null)
    {
      parent::__construct($Age);
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \Santosdave\Travelport\GDSQueue\Child
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
