<?php

namespace Santosdave\Travelport\Rail;

class ExchangeEligibilityInfo
{

    /**
     * @var ExchangePenaltyInfo $ExchangePenaltyInfo
     */
    protected $ExchangePenaltyInfo = null;

    /**
     * @var string $EligibleFares
     */
    protected $EligibleFares = null;

    /**
     * @var string $RefundableFares
     */
    protected $RefundableFares = null;

    /**
     * @var boolean $PassedAutomationChecks
     */
    protected $PassedAutomationChecks = null;

    /**
     * @param ExchangePenaltyInfo $ExchangePenaltyInfo
     * @param string $EligibleFares
     * @param string $RefundableFares
     * @param boolean $PassedAutomationChecks
     */
    public function __construct($ExchangePenaltyInfo = null, $EligibleFares = null, $RefundableFares = null, $PassedAutomationChecks = null)
    {
      $this->ExchangePenaltyInfo = $ExchangePenaltyInfo;
      $this->EligibleFares = $EligibleFares;
      $this->RefundableFares = $RefundableFares;
      $this->PassedAutomationChecks = $PassedAutomationChecks;
    }

    /**
     * @return ExchangePenaltyInfo
     */
    public function getExchangePenaltyInfo()
    {
      return $this->ExchangePenaltyInfo;
    }

    /**
     * @param ExchangePenaltyInfo $ExchangePenaltyInfo
     * @return \Santosdave\Travelport\Rail\ExchangeEligibilityInfo
     */
    public function setExchangePenaltyInfo($ExchangePenaltyInfo)
    {
      $this->ExchangePenaltyInfo = $ExchangePenaltyInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getEligibleFares()
    {
      return $this->EligibleFares;
    }

    /**
     * @param string $EligibleFares
     * @return \Santosdave\Travelport\Rail\ExchangeEligibilityInfo
     */
    public function setEligibleFares($EligibleFares)
    {
      $this->EligibleFares = $EligibleFares;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundableFares()
    {
      return $this->RefundableFares;
    }

    /**
     * @param string $RefundableFares
     * @return \Santosdave\Travelport\Rail\ExchangeEligibilityInfo
     */
    public function setRefundableFares($RefundableFares)
    {
      $this->RefundableFares = $RefundableFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassedAutomationChecks()
    {
      return $this->PassedAutomationChecks;
    }

    /**
     * @param boolean $PassedAutomationChecks
     * @return \Santosdave\Travelport\Rail\ExchangeEligibilityInfo
     */
    public function setPassedAutomationChecks($PassedAutomationChecks)
    {
      $this->PassedAutomationChecks = $PassedAutomationChecks;
      return $this;
    }

}
