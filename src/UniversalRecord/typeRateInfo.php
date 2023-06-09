<?php

namespace Santosdave\Travelport\UniversalRecord;

class typeRateInfo
{

    /**
     * @var typeMoney $RateForPeriod
     */
    protected $RateForPeriod = null;

    /**
     * @var int $NumberOfPeriods
     */
    protected $NumberOfPeriods = null;

    /**
     * @var boolean $UnlimitedMileage
     */
    protected $UnlimitedMileage = null;

    /**
     * @var int $MileageAllowance
     */
    protected $MileageAllowance = null;

    /**
     * @var typeDistance $Units
     */
    protected $Units = null;

    /**
     * @var typeMoney $ExtraMileageCharge
     */
    protected $ExtraMileageCharge = null;

    /**
     * @param typeMoney $RateForPeriod
     * @param int $NumberOfPeriods
     * @param boolean $UnlimitedMileage
     * @param int $MileageAllowance
     * @param typeDistance $Units
     * @param typeMoney $ExtraMileageCharge
     */
    public function __construct($RateForPeriod = null, $NumberOfPeriods = null, $UnlimitedMileage = null, $MileageAllowance = null, $Units = null, $ExtraMileageCharge = null)
    {
      $this->RateForPeriod = $RateForPeriod;
      $this->NumberOfPeriods = $NumberOfPeriods;
      $this->UnlimitedMileage = $UnlimitedMileage;
      $this->MileageAllowance = $MileageAllowance;
      $this->Units = $Units;
      $this->ExtraMileageCharge = $ExtraMileageCharge;
    }

    /**
     * @return typeMoney
     */
    public function getRateForPeriod()
    {
      return $this->RateForPeriod;
    }

    /**
     * @param typeMoney $RateForPeriod
     * @return \Santosdave\Travelport\UniversalRecord\typeRateInfo
     */
    public function setRateForPeriod($RateForPeriod)
    {
      $this->RateForPeriod = $RateForPeriod;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPeriods()
    {
      return $this->NumberOfPeriods;
    }

    /**
     * @param int $NumberOfPeriods
     * @return \Santosdave\Travelport\UniversalRecord\typeRateInfo
     */
    public function setNumberOfPeriods($NumberOfPeriods)
    {
      $this->NumberOfPeriods = $NumberOfPeriods;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnlimitedMileage()
    {
      return $this->UnlimitedMileage;
    }

    /**
     * @param boolean $UnlimitedMileage
     * @return \Santosdave\Travelport\UniversalRecord\typeRateInfo
     */
    public function setUnlimitedMileage($UnlimitedMileage)
    {
      $this->UnlimitedMileage = $UnlimitedMileage;
      return $this;
    }

    /**
     * @return int
     */
    public function getMileageAllowance()
    {
      return $this->MileageAllowance;
    }

    /**
     * @param int $MileageAllowance
     * @return \Santosdave\Travelport\UniversalRecord\typeRateInfo
     */
    public function setMileageAllowance($MileageAllowance)
    {
      $this->MileageAllowance = $MileageAllowance;
      return $this;
    }

    /**
     * @return typeDistance
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param typeDistance $Units
     * @return \Santosdave\Travelport\UniversalRecord\typeRateInfo
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getExtraMileageCharge()
    {
      return $this->ExtraMileageCharge;
    }

    /**
     * @param typeMoney $ExtraMileageCharge
     * @return \Santosdave\Travelport\UniversalRecord\typeRateInfo
     */
    public function setExtraMileageCharge($ExtraMileageCharge)
    {
      $this->ExtraMileageCharge = $ExtraMileageCharge;
      return $this;
    }

}
