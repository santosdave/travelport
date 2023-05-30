<?php

namespace Santosdave\Travelport\GDSQueue;

class AirPricingSolutionRef
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeRef $Key
     */
    public function __construct($Key = null)
    {
      $this->Key = $Key;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \Santosdave\Travelport\GDSQueue\AirPricingSolutionRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
