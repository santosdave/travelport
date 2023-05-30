<?php

namespace Santosdave\Travelport\Air;

class typeRestrictionLengthOfStay
{

    /**
     * @var int $Length
     */
    protected $Length = null;

    /**
     * @var typeStayUnit $StayUnit
     */
    protected $StayUnit = null;

    /**
     * @var date $StayDate
     */
    protected $StayDate = null;

    /**
     * @var boolean $MoreRulesPresent
     */
    protected $MoreRulesPresent = null;

    /**
     * @param int $Length
     * @param typeStayUnit $StayUnit
     * @param date $StayDate
     * @param boolean $MoreRulesPresent
     */
    public function __construct($Length = null, $StayUnit = null, $StayDate = null, $MoreRulesPresent = null)
    {
      $this->Length = $Length;
      $this->StayUnit = $StayUnit;
      $this->StayDate = $StayDate;
      $this->MoreRulesPresent = $MoreRulesPresent;
    }

    /**
     * @return int
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param int $Length
     * @return \Santosdave\Travelport\Air\typeRestrictionLengthOfStay
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return typeStayUnit
     */
    public function getStayUnit()
    {
      return $this->StayUnit;
    }

    /**
     * @param typeStayUnit $StayUnit
     * @return \Santosdave\Travelport\Air\typeRestrictionLengthOfStay
     */
    public function setStayUnit($StayUnit)
    {
      $this->StayUnit = $StayUnit;
      return $this;
    }

    /**
     * @return date
     */
    public function getStayDate()
    {
      return $this->StayDate;
    }

    /**
     * @param date $StayDate
     * @return \Santosdave\Travelport\Air\typeRestrictionLengthOfStay
     */
    public function setStayDate($StayDate)
    {
      $this->StayDate = $StayDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoreRulesPresent()
    {
      return $this->MoreRulesPresent;
    }

    /**
     * @param boolean $MoreRulesPresent
     * @return \Santosdave\Travelport\Air\typeRestrictionLengthOfStay
     */
    public function setMoreRulesPresent($MoreRulesPresent)
    {
      $this->MoreRulesPresent = $MoreRulesPresent;
      return $this;
    }

}
