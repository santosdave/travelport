<?php

namespace FilippoToso\Travelport\UniversalRecord;

class GroupedOption
{

    /**
     * @var typeRef $OptionalServiceRef
     */
    protected $OptionalServiceRef = null;

    /**
     * @param typeRef $OptionalServiceRef
     */
    public function __construct($OptionalServiceRef = null)
    {
      $this->OptionalServiceRef = $OptionalServiceRef;
    }

    /**
     * @return typeRef
     */
    public function getOptionalServiceRef()
    {
      return $this->OptionalServiceRef;
    }

    /**
     * @param typeRef $OptionalServiceRef
     * @return \FilippoToso\Travelport\UniversalRecord\GroupedOption
     */
    public function setOptionalServiceRef($OptionalServiceRef)
    {
      $this->OptionalServiceRef = $OptionalServiceRef;
      return $this;
    }

}
