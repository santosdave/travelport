<?php

namespace Santosdave\Travelport\Vehicle;

class SecondaryTypeRule
{

    /**
     * @var OptionalServiceApplicationLimitType[] $ApplicationLimit
     */
    protected $ApplicationLimit = null;

    /**
     * @var typeRef $SecondaryType
     */
    protected $SecondaryType = null;

    /**
     * @param typeRef $SecondaryType
     */
    public function __construct($SecondaryType = null)
    {
      $this->SecondaryType = $SecondaryType;
    }

    /**
     * @return OptionalServiceApplicationLimitType[]
     */
    public function getApplicationLimit()
    {
      return $this->ApplicationLimit;
    }

    /**
     * @param OptionalServiceApplicationLimitType[] $ApplicationLimit
     * @return \Santosdave\Travelport\Vehicle\SecondaryTypeRule
     */
    public function setApplicationLimit(array $ApplicationLimit = null)
    {
      $this->ApplicationLimit = $ApplicationLimit;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSecondaryType()
    {
      return $this->SecondaryType;
    }

    /**
     * @param typeRef $SecondaryType
     * @return \Santosdave\Travelport\Vehicle\SecondaryTypeRule
     */
    public function setSecondaryType($SecondaryType)
    {
      $this->SecondaryType = $SecondaryType;
      return $this;
    }

}
