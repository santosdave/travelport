<?php

namespace Santosdave\Travelport\System;

class ProviderReservationLevel
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typePercentageWithDecimal $Percentage
     */
    protected $Percentage = null;

    /**
     * @var typeMoney $CommissionCap
     */
    protected $CommissionCap = null;

    /**
     * @param typeMoney $Amount
     * @param typePercentageWithDecimal $Percentage
     * @param typeMoney $CommissionCap
     */
    public function __construct($Amount = null, $Percentage = null, $CommissionCap = null)
    {
      $this->Amount = $Amount;
      $this->Percentage = $Percentage;
      $this->CommissionCap = $CommissionCap;
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
     * @return \Santosdave\Travelport\System\ProviderReservationLevel
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePercentageWithDecimal
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param typePercentageWithDecimal $Percentage
     * @return \Santosdave\Travelport\System\ProviderReservationLevel
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCommissionCap()
    {
      return $this->CommissionCap;
    }

    /**
     * @param typeMoney $CommissionCap
     * @return \Santosdave\Travelport\System\ProviderReservationLevel
     */
    public function setCommissionCap($CommissionCap)
    {
      $this->CommissionCap = $CommissionCap;
      return $this;
    }

}
