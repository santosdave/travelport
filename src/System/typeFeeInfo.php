<?php

namespace FilippoToso\Travelport\System;

class typeFeeInfo
{

    /**
     * @var TaxInfoRef[] $TaxInfoRef
     */
    protected $TaxInfoRef = null;

    /**
     * @var typeMoney $BaseAmount
     */
    protected $BaseAmount = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $SubCode
     */
    protected $SubCode = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $FeeToken
     */
    protected $FeeToken = null;

    /**
     * @var typeRef $PaymentRef
     */
    protected $PaymentRef = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typePTC $PassengerTypeCode
     */
    protected $PassengerTypeCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typeMoney $BaseAmount
     * @param string $Description
     * @param string $SubCode
     * @param typeRef $Key
     * @param typeMoney $Amount
     * @param string $Code
     * @param string $FeeToken
     * @param typeRef $PaymentRef
     * @param typeRef $BookingTravelerRef
     * @param typePTC $PassengerTypeCode
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($BaseAmount = null, $Description = null, $SubCode = null, $Key = null, $Amount = null, $Code = null, $FeeToken = null, $PaymentRef = null, $BookingTravelerRef = null, $PassengerTypeCode = null, $ProviderCode = null, $SupplierCode = null, $ElStat = null, $KeyOverride = null)
    {
      $this->BaseAmount = $BaseAmount;
      $this->Description = $Description;
      $this->SubCode = $SubCode;
      $this->Key = $Key;
      $this->Amount = $Amount;
      $this->Code = $Code;
      $this->FeeToken = $FeeToken;
      $this->PaymentRef = $PaymentRef;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->PassengerTypeCode = $PassengerTypeCode;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return TaxInfoRef[]
     */
    public function getTaxInfoRef()
    {
      return $this->TaxInfoRef;
    }

    /**
     * @param TaxInfoRef[] $TaxInfoRef
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setTaxInfoRef(array $TaxInfoRef = null)
    {
      $this->TaxInfoRef = $TaxInfoRef;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBaseAmount()
    {
      return $this->BaseAmount;
    }

    /**
     * @param typeMoney $BaseAmount
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setBaseAmount($BaseAmount)
    {
      $this->BaseAmount = $BaseAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubCode()
    {
      return $this->SubCode;
    }

    /**
     * @param string $SubCode
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setSubCode($SubCode)
    {
      $this->SubCode = $SubCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeeToken()
    {
      return $this->FeeToken;
    }

    /**
     * @param string $FeeToken
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setFeeToken($FeeToken)
    {
      $this->FeeToken = $FeeToken;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPaymentRef()
    {
      return $this->PaymentRef;
    }

    /**
     * @param typeRef $PaymentRef
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setPaymentRef($PaymentRef)
    {
      $this->PaymentRef = $PaymentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setPassengerTypeCode($PassengerTypeCode)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\System\typeFeeInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
