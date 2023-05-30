<?php

namespace Santosdave\Travelport\UniversalRecord;

class Amount
{

    /**
     * @var anonymous1337 $Type
     */
    protected $Type = null;

    /**
     * @var typeMoney $AmountDuePaid
     */
    protected $AmountDuePaid = null;

    /**
     * @param anonymous1337 $Type
     * @param typeMoney $AmountDuePaid
     */
    public function __construct($Type = null, $AmountDuePaid = null)
    {
      $this->Type = $Type;
      $this->AmountDuePaid = $AmountDuePaid;
    }

    /**
     * @return anonymous1337
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1337 $Type
     * @return \Santosdave\Travelport\UniversalRecord\Amount
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmountDuePaid()
    {
      return $this->AmountDuePaid;
    }

    /**
     * @param typeMoney $AmountDuePaid
     * @return \Santosdave\Travelport\UniversalRecord\Amount
     */
    public function setAmountDuePaid($AmountDuePaid)
    {
      $this->AmountDuePaid = $AmountDuePaid;
      return $this;
    }

}
