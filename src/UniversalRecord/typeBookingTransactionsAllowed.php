<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeBookingTransactionsAllowed
{

    /**
     * @var boolean $BookingEnabled
     */
    protected $BookingEnabled = null;

    /**
     * @param boolean $BookingEnabled
     */
    public function __construct($BookingEnabled = null)
    {
      $this->BookingEnabled = $BookingEnabled;
    }

    /**
     * @return boolean
     */
    public function getBookingEnabled()
    {
      return $this->BookingEnabled;
    }

    /**
     * @param boolean $BookingEnabled
     * @return \FilippoToso\Travelport\UniversalRecord\typeBookingTransactionsAllowed
     */
    public function setBookingEnabled($BookingEnabled)
    {
      $this->BookingEnabled = $BookingEnabled;
      return $this;
    }

}
