<?php

namespace Santosdave\Travelport\Rail;

class SelectionModifiers
{

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var typeRef[] $SvcSegmentRef
     */
    protected $SvcSegmentRef = null;

    /**
     * @var typeCarrier $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var anonymous1082 $RFIC
     */
    protected $RFIC = null;

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @param typeCarrier $SupplierCode
     * @param anonymous1082 $RFIC
     */
    public function __construct($AirSegmentRef = null, $SupplierCode = null, $RFIC = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->SupplierCode = $SupplierCode;
      $this->RFIC = $RFIC;
    }

    /**
     * @return AirSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @return \Santosdave\Travelport\Rail\SelectionModifiers
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return typeRef[]
     */
    public function getSvcSegmentRef()
    {
      return $this->SvcSegmentRef;
    }

    /**
     * @param typeRef[] $SvcSegmentRef
     * @return \Santosdave\Travelport\Rail\SelectionModifiers
     */
    public function setSvcSegmentRef(array $SvcSegmentRef = null)
    {
      $this->SvcSegmentRef = $SvcSegmentRef;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeCarrier $SupplierCode
     * @return \Santosdave\Travelport\Rail\SelectionModifiers
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return anonymous1082
     */
    public function getRFIC()
    {
      return $this->RFIC;
    }

    /**
     * @param anonymous1082 $RFIC
     * @return \Santosdave\Travelport\Rail\SelectionModifiers
     */
    public function setRFIC($RFIC)
    {
      $this->RFIC = $RFIC;
      return $this;
    }

}
