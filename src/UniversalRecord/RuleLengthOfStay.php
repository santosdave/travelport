<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RuleLengthOfStay
{

    /**
     * @var typeRestrictionLengthOfStay $MinimumStay
     */
    protected $MinimumStay = null;

    /**
     * @var typeRestrictionLengthOfStay $MaximumStay
     */
    protected $MaximumStay = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeRestrictionLengthOfStay
     */
    public function getMinimumStay()
    {
      return $this->MinimumStay;
    }

    /**
     * @param typeRestrictionLengthOfStay $MinimumStay
     * @return \FilippoToso\Travelport\UniversalRecord\RuleLengthOfStay
     */
    public function setMinimumStay($MinimumStay)
    {
      $this->MinimumStay = $MinimumStay;
      return $this;
    }

    /**
     * @return typeRestrictionLengthOfStay
     */
    public function getMaximumStay()
    {
      return $this->MaximumStay;
    }

    /**
     * @param typeRestrictionLengthOfStay $MaximumStay
     * @return \FilippoToso\Travelport\UniversalRecord\RuleLengthOfStay
     */
    public function setMaximumStay($MaximumStay)
    {
      $this->MaximumStay = $MaximumStay;
      return $this;
    }

}
