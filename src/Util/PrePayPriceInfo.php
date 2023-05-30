<?php

namespace FilippoToso\Travelport\Util;

class PrePayPriceInfo
{

    /**
     * @var typeTaxInfo $TaxInfo
     */
    protected $TaxInfo = null;

    /**
     * @var typeMoney $BaseFare
     */
    protected $BaseFare = null;

    /**
     * @var typeMoney $TotalFare
     */
    protected $TotalFare = null;

    /**
     * @var typeMoney $TotalTax
     */
    protected $TotalTax = null;

    /**
     * @param typeTaxInfo $TaxInfo
     * @param typeMoney $BaseFare
     * @param typeMoney $TotalFare
     * @param typeMoney $TotalTax
     */
    public function __construct($TaxInfo = null, $BaseFare = null, $TotalFare = null, $TotalTax = null)
    {
      $this->TaxInfo = $TaxInfo;
      $this->BaseFare = $BaseFare;
      $this->TotalFare = $TotalFare;
      $this->TotalTax = $TotalTax;
    }

    /**
     * @return typeTaxInfo
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfo $TaxInfo
     * @return \FilippoToso\Travelport\Util\PrePayPriceInfo
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBaseFare()
    {
      return $this->BaseFare;
    }

    /**
     * @param typeMoney $BaseFare
     * @return \FilippoToso\Travelport\Util\PrePayPriceInfo
     */
    public function setBaseFare($BaseFare)
    {
      $this->BaseFare = $BaseFare;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalFare()
    {
      return $this->TotalFare;
    }

    /**
     * @param typeMoney $TotalFare
     * @return \FilippoToso\Travelport\Util\PrePayPriceInfo
     */
    public function setTotalFare($TotalFare)
    {
      $this->TotalFare = $TotalFare;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param typeMoney $TotalTax
     * @return \FilippoToso\Travelport\Util\PrePayPriceInfo
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

}
