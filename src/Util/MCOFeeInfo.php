<?php

namespace Santosdave\Travelport\Util;

class MCOFeeInfo
{

    /**
     * @var anonymous177 $FeeAppliesToInd
     */
    protected $FeeAppliesToInd = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typePercentageWithDecimal $Percentage
     */
    protected $Percentage = null;

    /**
     * @param anonymous177 $FeeAppliesToInd
     * @param typeMoney $Amount
     * @param typePercentageWithDecimal $Percentage
     */
    public function __construct($FeeAppliesToInd = null, $Amount = null, $Percentage = null)
    {
      $this->FeeAppliesToInd = $FeeAppliesToInd;
      $this->Amount = $Amount;
      $this->Percentage = $Percentage;
    }

    /**
     * @return anonymous177
     */
    public function getFeeAppliesToInd()
    {
      return $this->FeeAppliesToInd;
    }

    /**
     * @param anonymous177 $FeeAppliesToInd
     * @return \Santosdave\Travelport\Util\MCOFeeInfo
     */
    public function setFeeAppliesToInd($FeeAppliesToInd)
    {
      $this->FeeAppliesToInd = $FeeAppliesToInd;
      return $this;
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
     * @return \Santosdave\Travelport\Util\MCOFeeInfo
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
     * @return \Santosdave\Travelport\Util\MCOFeeInfo
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

}
