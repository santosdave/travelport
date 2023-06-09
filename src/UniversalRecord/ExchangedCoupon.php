<?php

namespace Santosdave\Travelport\UniversalRecord;

class ExchangedCoupon
{

    /**
     * @var typeTicketNumber $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var string $CouponNumber
     */
    protected $CouponNumber = null;

    /**
     * @param typeTicketNumber $TicketNumber
     * @param string $CouponNumber
     */
    public function __construct($TicketNumber = null, $CouponNumber = null)
    {
      $this->TicketNumber = $TicketNumber;
      $this->CouponNumber = $CouponNumber;
    }

    /**
     * @return typeTicketNumber
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param typeTicketNumber $TicketNumber
     * @return \Santosdave\Travelport\UniversalRecord\ExchangedCoupon
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCouponNumber()
    {
      return $this->CouponNumber;
    }

    /**
     * @param string $CouponNumber
     * @return \Santosdave\Travelport\UniversalRecord\ExchangedCoupon
     */
    public function setCouponNumber($CouponNumber)
    {
      $this->CouponNumber = $CouponNumber;
      return $this;
    }

}
