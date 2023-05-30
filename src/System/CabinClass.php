<?php

namespace Santosdave\Travelport\System;

class CabinClass
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param string $Type
     */
    public function __construct($Type = null)
    {
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Santosdave\Travelport\System\CabinClass
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
