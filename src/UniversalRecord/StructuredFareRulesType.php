<?php

namespace Santosdave\Travelport\UniversalRecord;

class StructuredFareRulesType
{

    /**
     * @var FareRuleCategoryTypes[] $FareRuleCategoryType
     */
    protected $FareRuleCategoryType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareRuleCategoryTypes[]
     */
    public function getFareRuleCategoryType()
    {
      return $this->FareRuleCategoryType;
    }

    /**
     * @param FareRuleCategoryTypes[] $FareRuleCategoryType
     * @return \Santosdave\Travelport\UniversalRecord\StructuredFareRulesType
     */
    public function setFareRuleCategoryType(array $FareRuleCategoryType = null)
    {
      $this->FareRuleCategoryType = $FareRuleCategoryType;
      return $this;
    }

}
