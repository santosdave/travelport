<?php

namespace Santosdave\Travelport\Air;

class ProhibitedBookingCodes
{

    /**
     * @var BookingCode $BookingCode
     */
    protected $BookingCode = null;

    /**
     * @param BookingCode $BookingCode
     */
    public function __construct($BookingCode = null)
    {
      $this->BookingCode = $BookingCode;
    }

    /**
     * @return BookingCode
     */
    public function getBookingCode()
    {
      return $this->BookingCode;
    }

    /**
     * @param BookingCode $BookingCode
     * @return \Santosdave\Travelport\Air\ProhibitedBookingCodes
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
    }

}
