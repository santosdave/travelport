<?php

namespace FilippoToso\Travelport\Util;

class FareFamilyDisplay
{

    /**
     * @var string $ModifierType
     */
    protected $ModifierType = null;

    /**
     * @param string $ModifierType
     */
    public function __construct($ModifierType = null)
    {
      $this->ModifierType = $ModifierType;
    }

    /**
     * @return string
     */
    public function getModifierType()
    {
      return $this->ModifierType;
    }

    /**
     * @param string $ModifierType
     * @return \FilippoToso\Travelport\Util\FareFamilyDisplay
     */
    public function setModifierType($ModifierType)
    {
      $this->ModifierType = $ModifierType;
      return $this;
    }

}
