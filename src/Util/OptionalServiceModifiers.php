<?php

namespace Santosdave\Travelport\Util;

class OptionalServiceModifiers
{

    /**
     * @var OptionalServiceModifier $OptionalServiceModifier
     */
    protected $OptionalServiceModifier = null;

    /**
     * @param OptionalServiceModifier $OptionalServiceModifier
     */
    public function __construct($OptionalServiceModifier = null)
    {
      $this->OptionalServiceModifier = $OptionalServiceModifier;
    }

    /**
     * @return OptionalServiceModifier
     */
    public function getOptionalServiceModifier()
    {
      return $this->OptionalServiceModifier;
    }

    /**
     * @param OptionalServiceModifier $OptionalServiceModifier
     * @return \Santosdave\Travelport\Util\OptionalServiceModifiers
     */
    public function setOptionalServiceModifier($OptionalServiceModifier)
    {
      $this->OptionalServiceModifier = $OptionalServiceModifier;
      return $this;
    }

}
