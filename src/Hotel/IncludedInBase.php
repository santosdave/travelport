<?php

namespace Santosdave\Travelport\Hotel;

class IncludedInBase
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
     * @return \Santosdave\Travelport\Hotel\IncludedInBase
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
