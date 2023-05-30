<?php

namespace Santosdave\Travelport\Util;

class PolicyCodesList
{

    /**
     * @var typePolicyCode[] $PolicyCode
     */
    protected $PolicyCode = null;

    /**
     * @param typePolicyCode[] $PolicyCode
     */
    public function __construct(array $PolicyCode = null)
    {
      $this->PolicyCode = $PolicyCode;
    }

    /**
     * @return typePolicyCode[]
     */
    public function getPolicyCode()
    {
      return $this->PolicyCode;
    }

    /**
     * @param typePolicyCode[] $PolicyCode
     * @return \Santosdave\Travelport\Util\PolicyCodesList
     */
    public function setPolicyCode(array $PolicyCode)
    {
      $this->PolicyCode = $PolicyCode;
      return $this;
    }

}
