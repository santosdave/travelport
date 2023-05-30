<?php

namespace FilippoToso\Travelport\Vehicle;

class typeDepositGuarantee
{

    /**
     * @var typeReserveRequirement $Purpose
     */
    protected $Purpose = null;

    /**
     * @var anonymous591 $Type
     */
    protected $Type = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var float $Percent
     */
    protected $Percent = null;

    /**
     * @var date $DueDate
     */
    protected $DueDate = null;

    /**
     * @var int $NumberOfDays
     */
    protected $NumberOfDays = null;

    /**
     * @var anonymous592 $OptionType
     */
    protected $OptionType = null;

    /**
     * @var boolean $Required
     */
    protected $Required = null;

    /**
     * @var boolean $RequirementPassed
     */
    protected $RequirementPassed = null;

    /**
     * @param typeReserveRequirement $Purpose
     * @param anonymous591 $Type
     * @param typeMoney $Amount
     * @param float $Percent
     * @param date $DueDate
     * @param int $NumberOfDays
     * @param anonymous592 $OptionType
     * @param boolean $Required
     * @param boolean $RequirementPassed
     */
    public function __construct($Purpose = null, $Type = null, $Amount = null, $Percent = null, $DueDate = null, $NumberOfDays = null, $OptionType = null, $Required = null, $RequirementPassed = null)
    {
      $this->Purpose = $Purpose;
      $this->Type = $Type;
      $this->Amount = $Amount;
      $this->Percent = $Percent;
      $this->DueDate = $DueDate;
      $this->NumberOfDays = $NumberOfDays;
      $this->OptionType = $OptionType;
      $this->Required = $Required;
      $this->RequirementPassed = $RequirementPassed;
    }

    /**
     * @return typeReserveRequirement
     */
    public function getPurpose()
    {
      return $this->Purpose;
    }

    /**
     * @param typeReserveRequirement $Purpose
     * @return \FilippoToso\Travelport\Vehicle\typeDepositGuarantee
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
      return $this;
    }

    /**
     * @return anonymous591
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous591 $Type
     * @return \FilippoToso\Travelport\Vehicle\typeDepositGuarantee
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\Vehicle\typeDepositGuarantee
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param float $Percent
     * @return \FilippoToso\Travelport\Vehicle\typeDepositGuarantee
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

    /**
     * @return date
     */
    public function getDueDate()
    {
      return $this->DueDate;
    }

    /**
     * @param date $DueDate
     * @return \FilippoToso\Travelport\Vehicle\typeDepositGuarantee
     */
    public function setDueDate($DueDate)
    {
      $this->DueDate = $DueDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfDays()
    {
      return $this->NumberOfDays;
    }

    /**
     * @param int $NumberOfDays
     * @return \FilippoToso\Travelport\Vehicle\typeDepositGuarantee
     */
    public function setNumberOfDays($NumberOfDays)
    {
      $this->NumberOfDays = $NumberOfDays;
      return $this;
    }

    /**
     * @return anonymous592
     */
    public function getOptionType()
    {
      return $this->OptionType;
    }

    /**
     * @param anonymous592 $OptionType
     * @return \FilippoToso\Travelport\Vehicle\typeDepositGuarantee
     */
    public function setOptionType($OptionType)
    {
      $this->OptionType = $OptionType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequired()
    {
      return $this->Required;
    }

    /**
     * @param boolean $Required
     * @return \FilippoToso\Travelport\Vehicle\typeDepositGuarantee
     */
    public function setRequired($Required)
    {
      $this->Required = $Required;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequirementPassed()
    {
      return $this->RequirementPassed;
    }

    /**
     * @param boolean $RequirementPassed
     * @return \FilippoToso\Travelport\Vehicle\typeDepositGuarantee
     */
    public function setRequirementPassed($RequirementPassed)
    {
      $this->RequirementPassed = $RequirementPassed;
      return $this;
    }

}
