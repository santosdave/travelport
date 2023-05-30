<?php

namespace Santosdave\Travelport\Terminal;

class Carrier
{

    /**
     * @var typeCarrier $Code
     */
    protected $Code = null;

    /**
     * @param typeCarrier $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeCarrier
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeCarrier $Code
     * @return \Santosdave\Travelport\Terminal\Carrier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
