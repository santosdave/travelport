<?php

namespace FilippoToso\Travelport\Rail;

class OptionalServicesTotal
{

    /**
     * @var typeTaxInfo $TaxInfo
     */
    protected $TaxInfo = null;

    /**
     * @var typeFeeInfo $FeeInfo
     */
    protected $FeeInfo = null;

    /**
     * @var typeMoney $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var typeMoney $BasePrice
     */
    protected $BasePrice = null;

    /**
     * @var typeMoney $ApproximateTotalPrice
     */
    protected $ApproximateTotalPrice = null;

    /**
     * @var typeMoney $ApproximateBasePrice
     */
    protected $ApproximateBasePrice = null;

    /**
     * @var typeMoney $EquivalentBasePrice
     */
    protected $EquivalentBasePrice = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var typeMoney $Fees
     */
    protected $Fees = null;

    /**
     * @var typeMoney $Services
     */
    protected $Services = null;

    /**
     * @var typeMoney $ApproximateTaxes
     */
    protected $ApproximateTaxes = null;

    /**
     * @var typeMoney $ApproximateFees
     */
    protected $ApproximateFees = null;

    /**
     * @param typeTaxInfo $TaxInfo
     * @param typeFeeInfo $FeeInfo
     * @param typeMoney $TotalPrice
     * @param typeMoney $BasePrice
     * @param typeMoney $ApproximateTotalPrice
     * @param typeMoney $ApproximateBasePrice
     * @param typeMoney $EquivalentBasePrice
     * @param typeMoney $Taxes
     * @param typeMoney $Fees
     * @param typeMoney $Services
     * @param typeMoney $ApproximateTaxes
     * @param typeMoney $ApproximateFees
     */
    public function __construct($TaxInfo = null, $FeeInfo = null, $TotalPrice = null, $BasePrice = null, $ApproximateTotalPrice = null, $ApproximateBasePrice = null, $EquivalentBasePrice = null, $Taxes = null, $Fees = null, $Services = null, $ApproximateTaxes = null, $ApproximateFees = null)
    {
      $this->TaxInfo = $TaxInfo;
      $this->FeeInfo = $FeeInfo;
      $this->TotalPrice = $TotalPrice;
      $this->BasePrice = $BasePrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      $this->EquivalentBasePrice = $EquivalentBasePrice;
      $this->Taxes = $Taxes;
      $this->Fees = $Fees;
      $this->Services = $Services;
      $this->ApproximateTaxes = $ApproximateTaxes;
      $this->ApproximateFees = $ApproximateFees;
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
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return typeFeeInfo
     */
    public function getFeeInfo()
    {
      return $this->FeeInfo;
    }

    /**
     * @param typeFeeInfo $FeeInfo
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setFeeInfo($FeeInfo)
    {
      $this->FeeInfo = $FeeInfo;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param typeMoney $BasePrice
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotalPrice()
    {
      return $this->ApproximateTotalPrice;
    }

    /**
     * @param typeMoney $ApproximateTotalPrice
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateBasePrice()
    {
      return $this->ApproximateBasePrice;
    }

    /**
     * @param typeMoney $ApproximateBasePrice
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setApproximateBasePrice($ApproximateBasePrice)
    {
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getEquivalentBasePrice()
    {
      return $this->EquivalentBasePrice;
    }

    /**
     * @param typeMoney $EquivalentBasePrice
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setEquivalentBasePrice($EquivalentBasePrice)
    {
      $this->EquivalentBasePrice = $EquivalentBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param typeMoney $Taxes
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param typeMoney $Fees
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param typeMoney $Services
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTaxes()
    {
      return $this->ApproximateTaxes;
    }

    /**
     * @param typeMoney $ApproximateTaxes
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setApproximateTaxes($ApproximateTaxes)
    {
      $this->ApproximateTaxes = $ApproximateTaxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateFees()
    {
      return $this->ApproximateFees;
    }

    /**
     * @param typeMoney $ApproximateFees
     * @return \FilippoToso\Travelport\Rail\OptionalServicesTotal
     */
    public function setApproximateFees($ApproximateFees)
    {
      $this->ApproximateFees = $ApproximateFees;
      return $this;
    }

}
