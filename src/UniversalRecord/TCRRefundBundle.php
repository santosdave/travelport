<?php

namespace Santosdave\Travelport\UniversalRecord;

class TCRRefundBundle
{

    /**
     * @var AirRefundInfo $AirRefundInfo
     */
    protected $AirRefundInfo = null;

    /**
     * @var WaiverCode $WaiverCode
     */
    protected $WaiverCode = null;

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var typeFeeInfo $FeeInfo
     */
    protected $FeeInfo = null;

    /**
     * @var typeTaxInfo $TaxInfo
     */
    protected $TaxInfo = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var typeTCRNumber $TCRNumber
     */
    protected $TCRNumber = null;

    /**
     * @var anonymous665 $RefundType
     */
    protected $RefundType = null;

    /**
     * @var anonymous648 $RefundAccessCode
     */
    protected $RefundAccessCode = null;

    /**
     * @param AirRefundInfo $AirRefundInfo
     * @param WaiverCode $WaiverCode
     * @param typeBaseAirSegment $AirSegment
     * @param typeFeeInfo $FeeInfo
     * @param typeTaxInfo $TaxInfo
     * @param HostToken $HostToken
     * @param typeTCRNumber $TCRNumber
     * @param anonymous665 $RefundType
     * @param anonymous648 $RefundAccessCode
     */
    public function __construct($AirRefundInfo = null, $WaiverCode = null, $AirSegment = null, $FeeInfo = null, $TaxInfo = null, $HostToken = null, $TCRNumber = null, $RefundType = null, $RefundAccessCode = null)
    {
      $this->AirRefundInfo = $AirRefundInfo;
      $this->WaiverCode = $WaiverCode;
      $this->AirSegment = $AirSegment;
      $this->FeeInfo = $FeeInfo;
      $this->TaxInfo = $TaxInfo;
      $this->HostToken = $HostToken;
      $this->TCRNumber = $TCRNumber;
      $this->RefundType = $RefundType;
      $this->RefundAccessCode = $RefundAccessCode;
    }

    /**
     * @return AirRefundInfo
     */
    public function getAirRefundInfo()
    {
      return $this->AirRefundInfo;
    }

    /**
     * @param AirRefundInfo $AirRefundInfo
     * @return \Santosdave\Travelport\UniversalRecord\TCRRefundBundle
     */
    public function setAirRefundInfo($AirRefundInfo)
    {
      $this->AirRefundInfo = $AirRefundInfo;
      return $this;
    }

    /**
     * @return WaiverCode
     */
    public function getWaiverCode()
    {
      return $this->WaiverCode;
    }

    /**
     * @param WaiverCode $WaiverCode
     * @return \Santosdave\Travelport\UniversalRecord\TCRRefundBundle
     */
    public function setWaiverCode($WaiverCode)
    {
      $this->WaiverCode = $WaiverCode;
      return $this;
    }

    /**
     * @return typeBaseAirSegment
     */
    public function getAirSegment()
    {
      return $this->AirSegment;
    }

    /**
     * @param typeBaseAirSegment $AirSegment
     * @return \Santosdave\Travelport\UniversalRecord\TCRRefundBundle
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
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
     * @return \Santosdave\Travelport\UniversalRecord\TCRRefundBundle
     */
    public function setFeeInfo($FeeInfo)
    {
      $this->FeeInfo = $FeeInfo;
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
     * @return \Santosdave\Travelport\UniversalRecord\TCRRefundBundle
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \Santosdave\Travelport\UniversalRecord\TCRRefundBundle
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return typeTCRNumber
     */
    public function getTCRNumber()
    {
      return $this->TCRNumber;
    }

    /**
     * @param typeTCRNumber $TCRNumber
     * @return \Santosdave\Travelport\UniversalRecord\TCRRefundBundle
     */
    public function setTCRNumber($TCRNumber)
    {
      $this->TCRNumber = $TCRNumber;
      return $this;
    }

    /**
     * @return anonymous665
     */
    public function getRefundType()
    {
      return $this->RefundType;
    }

    /**
     * @param anonymous665 $RefundType
     * @return \Santosdave\Travelport\UniversalRecord\TCRRefundBundle
     */
    public function setRefundType($RefundType)
    {
      $this->RefundType = $RefundType;
      return $this;
    }

    /**
     * @return anonymous648
     */
    public function getRefundAccessCode()
    {
      return $this->RefundAccessCode;
    }

    /**
     * @param anonymous648 $RefundAccessCode
     * @return \Santosdave\Travelport\UniversalRecord\TCRRefundBundle
     */
    public function setRefundAccessCode($RefundAccessCode)
    {
      $this->RefundAccessCode = $RefundAccessCode;
      return $this;
    }

}
