<?php

namespace Santosdave\Travelport\Util;

class YieldCustom
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param typeMoney $Amount
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($Amount = null, $BookingTravelerRef = null)
    {
      $this->Amount = $Amount;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \Santosdave\Travelport\Util\Yield
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \Santosdave\Travelport\Util\Yield
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
