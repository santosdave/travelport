<?php

namespace Santosdave\Travelport\UProfile;

class ApplicationLimits
{

    /**
     * @var OptionalServiceApplicationLimitType[] $ApplicationLimit
     */
    protected $ApplicationLimit = null;

    /**
     * @param OptionalServiceApplicationLimitType[] $ApplicationLimit
     */
    public function __construct(array $ApplicationLimit = null)
    {
      $this->ApplicationLimit = $ApplicationLimit;
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
     * @return \Santosdave\Travelport\UProfile\ApplicationLimits
     */
    public function setApplicationLimit(array $ApplicationLimit)
    {
      $this->ApplicationLimit = $ApplicationLimit;
      return $this;
    }

}
