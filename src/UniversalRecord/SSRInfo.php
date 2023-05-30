<?php

namespace Santosdave\Travelport\UniversalRecord;

class SSRInfo
{

    /**
     * @var SSR $SSR
     */
    protected $SSR = null;

    /**
     * @var typeRef[] $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param SSR $SSR
     */
    public function __construct($SSR = null)
    {
      $this->SSR = $SSR;
    }

    /**
     * @return SSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param SSR $SSR
     * @return \Santosdave\Travelport\UniversalRecord\SSRInfo
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return typeRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef[] $BookingTravelerRef
     * @return \Santosdave\Travelport\UniversalRecord\SSRInfo
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
