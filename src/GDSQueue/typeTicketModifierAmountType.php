<?php

namespace Santosdave\Travelport\GDSQueue;

class typeTicketModifierAmountType
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @param typeMoney $Amount
     */
    public function __construct($Amount = null)
    {
      $this->Amount = $Amount;
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
     * @return \Santosdave\Travelport\GDSQueue\typeTicketModifierAmountType
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
