<?php

namespace Santosdave\Travelport\Rail;

class Rules
{

    /**
     * @var string $RulesText
     */
    protected $RulesText = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRulesText()
    {
      return $this->RulesText;
    }

    /**
     * @param string $RulesText
     * @return \Santosdave\Travelport\Rail\Rules
     */
    public function setRulesText($RulesText)
    {
      $this->RulesText = $RulesText;
      return $this;
    }

}
