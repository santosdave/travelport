<?php

namespace Santosdave\Travelport\Air;

class ExemptOBFee
{

    /**
     * @var typeSubCode[] $SubCode
     */
    protected $SubCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeSubCode[]
     */
    public function getSubCode()
    {
      return $this->SubCode;
    }

    /**
     * @param typeSubCode[] $SubCode
     * @return \Santosdave\Travelport\Air\ExemptOBFee
     */
    public function setSubCode(array $SubCode = null)
    {
      $this->SubCode = $SubCode;
      return $this;
    }

}
