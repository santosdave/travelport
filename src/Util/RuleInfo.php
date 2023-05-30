<?php

namespace Santosdave\Travelport\Util;

class RuleInfo
{

    /**
     * @var ChargesRules $ChargesRules
     */
    protected $ChargesRules = null;

    /**
     * @param ChargesRules $ChargesRules
     */
    public function __construct($ChargesRules = null)
    {
      $this->ChargesRules = $ChargesRules;
    }

    /**
     * @return ChargesRules
     */
    public function getChargesRules()
    {
      return $this->ChargesRules;
    }

    /**
     * @param ChargesRules $ChargesRules
     * @return \Santosdave\Travelport\Util\RuleInfo
     */
    public function setChargesRules($ChargesRules)
    {
      $this->ChargesRules = $ChargesRules;
      return $this;
    }

}
