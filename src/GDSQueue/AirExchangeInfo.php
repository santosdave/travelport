<?php

namespace Santosdave\Travelport\GDSQueue;

class AirExchangeInfo
{

    /**
     * @var TotalPenaltyTaxInfo $TotalPenaltyTaxInfo
     */
    protected $TotalPenaltyTaxInfo = null;

    /**
     * @var typeTax[] $PaidTax
     */
    protected $PaidTax = null;

    /**
     * @var TicketFeeInfo[] $TicketFeeInfo
     */
    protected $TicketFeeInfo = null;

    /**
     * @var string[] $Reason
     */
    protected $Reason = null;

    /**
     * @var typeFeeInfo[] $FeeInfo
     */
    protected $FeeInfo = null;

    /**
     * @var typeTaxInfo[] $TaxInfo
     */
    protected $TaxInfo = null;

    /**
     * @var typeMoney $ExchangeAmount
     */
    protected $ExchangeAmount = null;

    /**
     * @var typeMoney $BaseFare
     */
    protected $BaseFare = null;

    /**
     * @var typeMoney $EquivalentBaseFare
     */
    protected $EquivalentBaseFare = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var typeMoney $ChangeFee
     */
    protected $ChangeFee = null;

    /**
     * @var typeMoney $ForfeitAmount
     */
    protected $ForfeitAmount = null;

    /**
     * @var boolean $Refundable
     */
    protected $Refundable = null;

    /**
     * @var boolean $Exchangeable
     */
    protected $Exchangeable = null;

    /**
     * @var boolean $FirstClassUpgrade
     */
    protected $FirstClassUpgrade = null;

    /**
     * @var string $TicketByDate
     */
    protected $TicketByDate = null;

    /**
     * @var string $PricingTag
     */
    protected $PricingTag = null;

    /**
     * @var typeMoney $EquivalentChangeFee
     */
    protected $EquivalentChangeFee = null;

    /**
     * @var typeMoney $EquivalentExchangeAmount
     */
    protected $EquivalentExchangeAmount = null;

    /**
     * @var typeMoney $AddCollection
     */
    protected $AddCollection = null;

    /**
     * @var typeMoney $ResidualValue
     */
    protected $ResidualValue = null;

    /**
     * @var typeMoney $TotalResidualValue
     */
    protected $TotalResidualValue = null;

    /**
     * @var typeMoney $OriginalFlightValue
     */
    protected $OriginalFlightValue = null;

    /**
     * @var typeMoney $FlownSegmentValue
     */
    protected $FlownSegmentValue = null;

    /**
     * @var boolean $BulkTicketAdvisory
     */
    protected $BulkTicketAdvisory = null;

    /**
     * @var typeFarePull $FarePull
     */
    protected $FarePull = null;

    /**
     * @var typePTC $PassengerTypeCode
     */
    protected $PassengerTypeCode = null;

    /**
     * @var int $PassengerCount
     */
    protected $PassengerCount = null;

    /**
     * @var typeFormOfRefund $FormOfRefund
     */
    protected $FormOfRefund = null;

    /**
     * @var typeMoney $Refund
     */
    protected $Refund = null;

    /**
     * @param typeMoney $ExchangeAmount
     * @param typeMoney $BaseFare
     * @param typeMoney $EquivalentBaseFare
     * @param typeMoney $Taxes
     * @param typeMoney $ChangeFee
     * @param typeMoney $ForfeitAmount
     * @param boolean $Refundable
     * @param boolean $Exchangeable
     * @param boolean $FirstClassUpgrade
     * @param string $TicketByDate
     * @param string $PricingTag
     * @param typeMoney $EquivalentChangeFee
     * @param typeMoney $EquivalentExchangeAmount
     * @param typeMoney $AddCollection
     * @param typeMoney $ResidualValue
     * @param typeMoney $TotalResidualValue
     * @param typeMoney $OriginalFlightValue
     * @param typeMoney $FlownSegmentValue
     * @param boolean $BulkTicketAdvisory
     * @param typeFarePull $FarePull
     * @param typePTC $PassengerTypeCode
     * @param int $PassengerCount
     * @param typeFormOfRefund $FormOfRefund
     * @param typeMoney $Refund
     */
    public function __construct($ExchangeAmount = null, $BaseFare = null, $EquivalentBaseFare = null, $Taxes = null, $ChangeFee = null, $ForfeitAmount = null, $Refundable = null, $Exchangeable = null, $FirstClassUpgrade = null, $TicketByDate = null, $PricingTag = null, $EquivalentChangeFee = null, $EquivalentExchangeAmount = null, $AddCollection = null, $ResidualValue = null, $TotalResidualValue = null, $OriginalFlightValue = null, $FlownSegmentValue = null, $BulkTicketAdvisory = null, $FarePull = null, $PassengerTypeCode = null, $PassengerCount = null, $FormOfRefund = null, $Refund = null)
    {
      $this->ExchangeAmount = $ExchangeAmount;
      $this->BaseFare = $BaseFare;
      $this->EquivalentBaseFare = $EquivalentBaseFare;
      $this->Taxes = $Taxes;
      $this->ChangeFee = $ChangeFee;
      $this->ForfeitAmount = $ForfeitAmount;
      $this->Refundable = $Refundable;
      $this->Exchangeable = $Exchangeable;
      $this->FirstClassUpgrade = $FirstClassUpgrade;
      $this->TicketByDate = $TicketByDate;
      $this->PricingTag = $PricingTag;
      $this->EquivalentChangeFee = $EquivalentChangeFee;
      $this->EquivalentExchangeAmount = $EquivalentExchangeAmount;
      $this->AddCollection = $AddCollection;
      $this->ResidualValue = $ResidualValue;
      $this->TotalResidualValue = $TotalResidualValue;
      $this->OriginalFlightValue = $OriginalFlightValue;
      $this->FlownSegmentValue = $FlownSegmentValue;
      $this->BulkTicketAdvisory = $BulkTicketAdvisory;
      $this->FarePull = $FarePull;
      $this->PassengerTypeCode = $PassengerTypeCode;
      $this->PassengerCount = $PassengerCount;
      $this->FormOfRefund = $FormOfRefund;
      $this->Refund = $Refund;
    }

    /**
     * @return TotalPenaltyTaxInfo
     */
    public function getTotalPenaltyTaxInfo()
    {
      return $this->TotalPenaltyTaxInfo;
    }

    /**
     * @param TotalPenaltyTaxInfo $TotalPenaltyTaxInfo
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setTotalPenaltyTaxInfo($TotalPenaltyTaxInfo)
    {
      $this->TotalPenaltyTaxInfo = $TotalPenaltyTaxInfo;
      return $this;
    }

    /**
     * @return typeTax[]
     */
    public function getPaidTax()
    {
      return $this->PaidTax;
    }

    /**
     * @param typeTax[] $PaidTax
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setPaidTax(array $PaidTax = null)
    {
      $this->PaidTax = $PaidTax;
      return $this;
    }

    /**
     * @return TicketFeeInfo[]
     */
    public function getTicketFeeInfo()
    {
      return $this->TicketFeeInfo;
    }

    /**
     * @param TicketFeeInfo[] $TicketFeeInfo
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setTicketFeeInfo(array $TicketFeeInfo = null)
    {
      $this->TicketFeeInfo = $TicketFeeInfo;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string[] $Reason
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setReason(array $Reason = null)
    {
      $this->Reason = $Reason;
      return $this;
    }

    /**
     * @return typeFeeInfo[]
     */
    public function getFeeInfo()
    {
      return $this->FeeInfo;
    }

    /**
     * @param typeFeeInfo[] $FeeInfo
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setFeeInfo(array $FeeInfo = null)
    {
      $this->FeeInfo = $FeeInfo;
      return $this;
    }

    /**
     * @return typeTaxInfo[]
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfo[] $TaxInfo
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setTaxInfo(array $TaxInfo = null)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getExchangeAmount()
    {
      return $this->ExchangeAmount;
    }

    /**
     * @param typeMoney $ExchangeAmount
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setExchangeAmount($ExchangeAmount)
    {
      $this->ExchangeAmount = $ExchangeAmount;
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
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setBaseFare($BaseFare)
    {
      $this->BaseFare = $BaseFare;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getEquivalentBaseFare()
    {
      return $this->EquivalentBaseFare;
    }

    /**
     * @param typeMoney $EquivalentBaseFare
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setEquivalentBaseFare($EquivalentBaseFare)
    {
      $this->EquivalentBaseFare = $EquivalentBaseFare;
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
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getChangeFee()
    {
      return $this->ChangeFee;
    }

    /**
     * @param typeMoney $ChangeFee
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setChangeFee($ChangeFee)
    {
      $this->ChangeFee = $ChangeFee;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getForfeitAmount()
    {
      return $this->ForfeitAmount;
    }

    /**
     * @param typeMoney $ForfeitAmount
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setForfeitAmount($ForfeitAmount)
    {
      $this->ForfeitAmount = $ForfeitAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundable()
    {
      return $this->Refundable;
    }

    /**
     * @param boolean $Refundable
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setRefundable($Refundable)
    {
      $this->Refundable = $Refundable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExchangeable()
    {
      return $this->Exchangeable;
    }

    /**
     * @param boolean $Exchangeable
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setExchangeable($Exchangeable)
    {
      $this->Exchangeable = $Exchangeable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFirstClassUpgrade()
    {
      return $this->FirstClassUpgrade;
    }

    /**
     * @param boolean $FirstClassUpgrade
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setFirstClassUpgrade($FirstClassUpgrade)
    {
      $this->FirstClassUpgrade = $FirstClassUpgrade;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketByDate()
    {
      return $this->TicketByDate;
    }

    /**
     * @param string $TicketByDate
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setTicketByDate($TicketByDate)
    {
      $this->TicketByDate = $TicketByDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPricingTag()
    {
      return $this->PricingTag;
    }

    /**
     * @param string $PricingTag
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setPricingTag($PricingTag)
    {
      $this->PricingTag = $PricingTag;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getEquivalentChangeFee()
    {
      return $this->EquivalentChangeFee;
    }

    /**
     * @param typeMoney $EquivalentChangeFee
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setEquivalentChangeFee($EquivalentChangeFee)
    {
      $this->EquivalentChangeFee = $EquivalentChangeFee;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getEquivalentExchangeAmount()
    {
      return $this->EquivalentExchangeAmount;
    }

    /**
     * @param typeMoney $EquivalentExchangeAmount
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setEquivalentExchangeAmount($EquivalentExchangeAmount)
    {
      $this->EquivalentExchangeAmount = $EquivalentExchangeAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAddCollection()
    {
      return $this->AddCollection;
    }

    /**
     * @param typeMoney $AddCollection
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setAddCollection($AddCollection)
    {
      $this->AddCollection = $AddCollection;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getResidualValue()
    {
      return $this->ResidualValue;
    }

    /**
     * @param typeMoney $ResidualValue
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setResidualValue($ResidualValue)
    {
      $this->ResidualValue = $ResidualValue;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalResidualValue()
    {
      return $this->TotalResidualValue;
    }

    /**
     * @param typeMoney $TotalResidualValue
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setTotalResidualValue($TotalResidualValue)
    {
      $this->TotalResidualValue = $TotalResidualValue;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getOriginalFlightValue()
    {
      return $this->OriginalFlightValue;
    }

    /**
     * @param typeMoney $OriginalFlightValue
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setOriginalFlightValue($OriginalFlightValue)
    {
      $this->OriginalFlightValue = $OriginalFlightValue;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getFlownSegmentValue()
    {
      return $this->FlownSegmentValue;
    }

    /**
     * @param typeMoney $FlownSegmentValue
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setFlownSegmentValue($FlownSegmentValue)
    {
      $this->FlownSegmentValue = $FlownSegmentValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBulkTicketAdvisory()
    {
      return $this->BulkTicketAdvisory;
    }

    /**
     * @param boolean $BulkTicketAdvisory
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setBulkTicketAdvisory($BulkTicketAdvisory)
    {
      $this->BulkTicketAdvisory = $BulkTicketAdvisory;
      return $this;
    }

    /**
     * @return typeFarePull
     */
    public function getFarePull()
    {
      return $this->FarePull;
    }

    /**
     * @param typeFarePull $FarePull
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setFarePull($FarePull)
    {
      $this->FarePull = $FarePull;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getPassengerTypeCode()
    {
      return $this->PassengerTypeCode;
    }

    /**
     * @param typePTC $PassengerTypeCode
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setPassengerTypeCode($PassengerTypeCode)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getPassengerCount()
    {
      return $this->PassengerCount;
    }

    /**
     * @param int $PassengerCount
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setPassengerCount($PassengerCount)
    {
      $this->PassengerCount = $PassengerCount;
      return $this;
    }

    /**
     * @return typeFormOfRefund
     */
    public function getFormOfRefund()
    {
      return $this->FormOfRefund;
    }

    /**
     * @param typeFormOfRefund $FormOfRefund
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setFormOfRefund($FormOfRefund)
    {
      $this->FormOfRefund = $FormOfRefund;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param typeMoney $Refund
     * @return \Santosdave\Travelport\GDSQueue\AirExchangeInfo
     */
    public function setRefund($Refund)
    {
      $this->Refund = $Refund;
      return $this;
    }

}
