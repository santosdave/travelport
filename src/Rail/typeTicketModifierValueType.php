<?php

namespace Santosdave\Travelport\Rail;

class typeTicketModifierValueType
{

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var boolean $NetFareValue
     */
    protected $NetFareValue = null;

    /**
     * @param string $Value
     * @param boolean $NetFareValue
     */
    public function __construct($Value = null, $NetFareValue = null)
    {
      $this->Value = $Value;
      $this->NetFareValue = $NetFareValue;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \Santosdave\Travelport\Rail\typeTicketModifierValueType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNetFareValue()
    {
      return $this->NetFareValue;
    }

    /**
     * @param boolean $NetFareValue
     * @return \Santosdave\Travelport\Rail\typeTicketModifierValueType
     */
    public function setNetFareValue($NetFareValue)
    {
      $this->NetFareValue = $NetFareValue;
      return $this;
    }

}
