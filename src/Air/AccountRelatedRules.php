<?php

namespace Santosdave\Travelport\Air;

class AccountRelatedRules
{

    /**
     * @var BookingRules $BookingRules
     */
    protected $BookingRules = null;

    /**
     * @var RoutingRules $RoutingRules
     */
    protected $RoutingRules = null;

    /**
     * @param BookingRules $BookingRules
     * @param RoutingRules $RoutingRules
     */
    public function __construct($BookingRules = null, $RoutingRules = null)
    {
      $this->BookingRules = $BookingRules;
      $this->RoutingRules = $RoutingRules;
    }

    /**
     * @return BookingRules
     */
    public function getBookingRules()
    {
      return $this->BookingRules;
    }

    /**
     * @param BookingRules $BookingRules
     * @return \Santosdave\Travelport\Air\AccountRelatedRules
     */
    public function setBookingRules($BookingRules)
    {
      $this->BookingRules = $BookingRules;
      return $this;
    }

    /**
     * @return RoutingRules
     */
    public function getRoutingRules()
    {
      return $this->RoutingRules;
    }

    /**
     * @param RoutingRules $RoutingRules
     * @return \Santosdave\Travelport\Air\AccountRelatedRules
     */
    public function setRoutingRules($RoutingRules)
    {
      $this->RoutingRules = $RoutingRules;
      return $this;
    }

}
