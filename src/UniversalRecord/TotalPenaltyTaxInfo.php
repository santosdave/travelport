<?php

namespace Santosdave\Travelport\UniversalRecord;

class TotalPenaltyTaxInfo
{

    /**
     * @var typeTax[] $PenaltyTaxInfo
     */
    protected $PenaltyTaxInfo = null;

    /**
     * @var typeMoney $TotalPenaltyTax
     */
    protected $TotalPenaltyTax = null;

    /**
     * @param typeMoney $TotalPenaltyTax
     */
    public function __construct($TotalPenaltyTax = null)
    {
      $this->TotalPenaltyTax = $TotalPenaltyTax;
    }

    /**
     * @return typeTax[]
     */
    public function getPenaltyTaxInfo()
    {
      return $this->PenaltyTaxInfo;
    }

    /**
     * @param typeTax[] $PenaltyTaxInfo
     * @return \Santosdave\Travelport\UniversalRecord\TotalPenaltyTaxInfo
     */
    public function setPenaltyTaxInfo(array $PenaltyTaxInfo = null)
    {
      $this->PenaltyTaxInfo = $PenaltyTaxInfo;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPenaltyTax()
    {
      return $this->TotalPenaltyTax;
    }

    /**
     * @param typeMoney $TotalPenaltyTax
     * @return \Santosdave\Travelport\UniversalRecord\TotalPenaltyTaxInfo
     */
    public function setTotalPenaltyTax($TotalPenaltyTax)
    {
      $this->TotalPenaltyTax = $TotalPenaltyTax;
      return $this;
    }

}
