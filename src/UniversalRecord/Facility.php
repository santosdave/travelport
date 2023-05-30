<?php

namespace Santosdave\Travelport\UniversalRecord;

class Facility
{

    /**
     * @var Characteristic $Characteristic
     */
    protected $Characteristic = null;

    /**
     * @var Remark $Remark
     */
    protected $Remark = null;

    /**
     * @var PassengerSeatPrice $PassengerSeatPrice
     */
    protected $PassengerSeatPrice = null;

    /**
     * @var typeTaxInfo $TaxInfo
     */
    protected $TaxInfo = null;

    /**
     * @var EMD $EMD
     */
    protected $EMD = null;

    /**
     * @var ServiceData $ServiceData
     */
    protected $ServiceData = null;

    /**
     * @var TourCode $TourCode
     */
    protected $TourCode = null;

    /**
     * @var typeFacility $Type
     */
    protected $Type = null;

    /**
     * @var string $SeatCode
     */
    protected $SeatCode = null;

    /**
     * @var typeSeatAvailability $Availability
     */
    protected $Availability = null;

    /**
     * @var typeMoney $SeatPrice
     */
    protected $SeatPrice = null;

    /**
     * @var boolean $Paid
     */
    protected $Paid = null;

    /**
     * @var anonymous587 $ServiceSubCode
     */
    protected $ServiceSubCode = null;

    /**
     * @var typeSSRCode $SSRCode
     */
    protected $SSRCode = null;

    /**
     * @var anonymous588 $IssuanceReason
     */
    protected $IssuanceReason = null;

    /**
     * @var typeMoney $BaseSeatPrice
     */
    protected $BaseSeatPrice = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var boolean $InclusiveOfTax
     */
    protected $InclusiveOfTax = null;

    /**
     * @var boolean $InterlineSettlementAllowed
     */
    protected $InterlineSettlementAllowed = null;

    /**
     * @var string $GeographySpecification
     */
    protected $GeographySpecification = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var typeRef $OptionalServiceRef
     */
    protected $OptionalServiceRef = null;

    /**
     * @var typeRef $SeatInformationRef
     */
    protected $SeatInformationRef = null;

    /**
     * @param Characteristic $Characteristic
     * @param Remark $Remark
     * @param PassengerSeatPrice $PassengerSeatPrice
     * @param typeTaxInfo $TaxInfo
     * @param EMD $EMD
     * @param ServiceData $ServiceData
     * @param TourCode $TourCode
     * @param typeFacility $Type
     * @param string $SeatCode
     * @param typeSeatAvailability $Availability
     * @param typeMoney $SeatPrice
     * @param boolean $Paid
     * @param anonymous587 $ServiceSubCode
     * @param typeSSRCode $SSRCode
     * @param anonymous588 $IssuanceReason
     * @param typeMoney $BaseSeatPrice
     * @param typeMoney $Taxes
     * @param int $Quantity
     * @param int $SequenceNumber
     * @param boolean $InclusiveOfTax
     * @param boolean $InterlineSettlementAllowed
     * @param string $GeographySpecification
     * @param string $Source
     * @param typeRef $OptionalServiceRef
     * @param typeRef $SeatInformationRef
     */
    public function __construct($Characteristic = null, $Remark = null, $PassengerSeatPrice = null, $TaxInfo = null, $EMD = null, $ServiceData = null, $TourCode = null, $Type = null, $SeatCode = null, $Availability = null, $SeatPrice = null, $Paid = null, $ServiceSubCode = null, $SSRCode = null, $IssuanceReason = null, $BaseSeatPrice = null, $Taxes = null, $Quantity = null, $SequenceNumber = null, $InclusiveOfTax = null, $InterlineSettlementAllowed = null, $GeographySpecification = null, $Source = null, $OptionalServiceRef = null, $SeatInformationRef = null)
    {
      $this->Characteristic = $Characteristic;
      $this->Remark = $Remark;
      $this->PassengerSeatPrice = $PassengerSeatPrice;
      $this->TaxInfo = $TaxInfo;
      $this->EMD = $EMD;
      $this->ServiceData = $ServiceData;
      $this->TourCode = $TourCode;
      $this->Type = $Type;
      $this->SeatCode = $SeatCode;
      $this->Availability = $Availability;
      $this->SeatPrice = $SeatPrice;
      $this->Paid = $Paid;
      $this->ServiceSubCode = $ServiceSubCode;
      $this->SSRCode = $SSRCode;
      $this->IssuanceReason = $IssuanceReason;
      $this->BaseSeatPrice = $BaseSeatPrice;
      $this->Taxes = $Taxes;
      $this->Quantity = $Quantity;
      $this->SequenceNumber = $SequenceNumber;
      $this->InclusiveOfTax = $InclusiveOfTax;
      $this->InterlineSettlementAllowed = $InterlineSettlementAllowed;
      $this->GeographySpecification = $GeographySpecification;
      $this->Source = $Source;
      $this->OptionalServiceRef = $OptionalServiceRef;
      $this->SeatInformationRef = $SeatInformationRef;
    }

    /**
     * @return Characteristic
     */
    public function getCharacteristic()
    {
      return $this->Characteristic;
    }

    /**
     * @param Characteristic $Characteristic
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setCharacteristic($Characteristic)
    {
      $this->Characteristic = $Characteristic;
      return $this;
    }

    /**
     * @return Remark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param Remark $Remark
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return PassengerSeatPrice
     */
    public function getPassengerSeatPrice()
    {
      return $this->PassengerSeatPrice;
    }

    /**
     * @param PassengerSeatPrice $PassengerSeatPrice
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setPassengerSeatPrice($PassengerSeatPrice)
    {
      $this->PassengerSeatPrice = $PassengerSeatPrice;
      return $this;
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
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return EMD
     */
    public function getEMD()
    {
      return $this->EMD;
    }

    /**
     * @param EMD $EMD
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setEMD($EMD)
    {
      $this->EMD = $EMD;
      return $this;
    }

    /**
     * @return ServiceData
     */
    public function getServiceData()
    {
      return $this->ServiceData;
    }

    /**
     * @param ServiceData $ServiceData
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setServiceData($ServiceData)
    {
      $this->ServiceData = $ServiceData;
      return $this;
    }

    /**
     * @return TourCode
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param TourCode $TourCode
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return typeFacility
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeFacility $Type
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeatCode()
    {
      return $this->SeatCode;
    }

    /**
     * @param string $SeatCode
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setSeatCode($SeatCode)
    {
      $this->SeatCode = $SeatCode;
      return $this;
    }

    /**
     * @return typeSeatAvailability
     */
    public function getAvailability()
    {
      return $this->Availability;
    }

    /**
     * @param typeSeatAvailability $Availability
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setAvailability($Availability)
    {
      $this->Availability = $Availability;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getSeatPrice()
    {
      return $this->SeatPrice;
    }

    /**
     * @param typeMoney $SeatPrice
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setSeatPrice($SeatPrice)
    {
      $this->SeatPrice = $SeatPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaid()
    {
      return $this->Paid;
    }

    /**
     * @param boolean $Paid
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setPaid($Paid)
    {
      $this->Paid = $Paid;
      return $this;
    }

    /**
     * @return anonymous587
     */
    public function getServiceSubCode()
    {
      return $this->ServiceSubCode;
    }

    /**
     * @param anonymous587 $ServiceSubCode
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setServiceSubCode($ServiceSubCode)
    {
      $this->ServiceSubCode = $ServiceSubCode;
      return $this;
    }

    /**
     * @return typeSSRCode
     */
    public function getSSRCode()
    {
      return $this->SSRCode;
    }

    /**
     * @param typeSSRCode $SSRCode
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setSSRCode($SSRCode)
    {
      $this->SSRCode = $SSRCode;
      return $this;
    }

    /**
     * @return anonymous588
     */
    public function getIssuanceReason()
    {
      return $this->IssuanceReason;
    }

    /**
     * @param anonymous588 $IssuanceReason
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setIssuanceReason($IssuanceReason)
    {
      $this->IssuanceReason = $IssuanceReason;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBaseSeatPrice()
    {
      return $this->BaseSeatPrice;
    }

    /**
     * @param typeMoney $BaseSeatPrice
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setBaseSeatPrice($BaseSeatPrice)
    {
      $this->BaseSeatPrice = $BaseSeatPrice;
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
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInclusiveOfTax()
    {
      return $this->InclusiveOfTax;
    }

    /**
     * @param boolean $InclusiveOfTax
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setInclusiveOfTax($InclusiveOfTax)
    {
      $this->InclusiveOfTax = $InclusiveOfTax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInterlineSettlementAllowed()
    {
      return $this->InterlineSettlementAllowed;
    }

    /**
     * @param boolean $InterlineSettlementAllowed
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setInterlineSettlementAllowed($InterlineSettlementAllowed)
    {
      $this->InterlineSettlementAllowed = $InterlineSettlementAllowed;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeographySpecification()
    {
      return $this->GeographySpecification;
    }

    /**
     * @param string $GeographySpecification
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setGeographySpecification($GeographySpecification)
    {
      $this->GeographySpecification = $GeographySpecification;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getOptionalServiceRef()
    {
      return $this->OptionalServiceRef;
    }

    /**
     * @param typeRef $OptionalServiceRef
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setOptionalServiceRef($OptionalServiceRef)
    {
      $this->OptionalServiceRef = $OptionalServiceRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSeatInformationRef()
    {
      return $this->SeatInformationRef;
    }

    /**
     * @param typeRef $SeatInformationRef
     * @return \Santosdave\Travelport\UniversalRecord\Facility
     */
    public function setSeatInformationRef($SeatInformationRef)
    {
      $this->SeatInformationRef = $SeatInformationRef;
      return $this;
    }

}
