<?php

namespace Santosdave\Travelport\Vehicle;

class AirSearchParameters
{

    /**
     * @var boolean $NoAdvancePurchase
     */
    protected $NoAdvancePurchase = null;

    /**
     * @var boolean $RefundableFares
     */
    protected $RefundableFares = null;

    /**
     * @var boolean $NonPenaltyFares
     */
    protected $NonPenaltyFares = null;

    /**
     * @var boolean $UnRestrictedFares
     */
    protected $UnRestrictedFares = null;

    /**
     * @param boolean $NoAdvancePurchase
     * @param boolean $RefundableFares
     * @param boolean $NonPenaltyFares
     * @param boolean $UnRestrictedFares
     */
    public function __construct($NoAdvancePurchase = null, $RefundableFares = null, $NonPenaltyFares = null, $UnRestrictedFares = null)
    {
      $this->NoAdvancePurchase = $NoAdvancePurchase;
      $this->RefundableFares = $RefundableFares;
      $this->NonPenaltyFares = $NonPenaltyFares;
      $this->UnRestrictedFares = $UnRestrictedFares;
    }

    /**
     * @return boolean
     */
    public function getNoAdvancePurchase()
    {
      return $this->NoAdvancePurchase;
    }

    /**
     * @param boolean $NoAdvancePurchase
     * @return \Santosdave\Travelport\Vehicle\AirSearchParameters
     */
    public function setNoAdvancePurchase($NoAdvancePurchase)
    {
      $this->NoAdvancePurchase = $NoAdvancePurchase;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundableFares()
    {
      return $this->RefundableFares;
    }

    /**
     * @param boolean $RefundableFares
     * @return \Santosdave\Travelport\Vehicle\AirSearchParameters
     */
    public function setRefundableFares($RefundableFares)
    {
      $this->RefundableFares = $RefundableFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonPenaltyFares()
    {
      return $this->NonPenaltyFares;
    }

    /**
     * @param boolean $NonPenaltyFares
     * @return \Santosdave\Travelport\Vehicle\AirSearchParameters
     */
    public function setNonPenaltyFares($NonPenaltyFares)
    {
      $this->NonPenaltyFares = $NonPenaltyFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnRestrictedFares()
    {
      return $this->UnRestrictedFares;
    }

    /**
     * @param boolean $UnRestrictedFares
     * @return \Santosdave\Travelport\Vehicle\AirSearchParameters
     */
    public function setUnRestrictedFares($UnRestrictedFares)
    {
      $this->UnRestrictedFares = $UnRestrictedFares;
      return $this;
    }

}
