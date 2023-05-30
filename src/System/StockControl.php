<?php

namespace Santosdave\Travelport\System;

class StockControl
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @param string $Type
     * @param string $Number
     */
    public function __construct($Type = null, $Number = null)
    {
      $this->Type = $Type;
      $this->Number = $Number;
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
     * @return \Santosdave\Travelport\System\StockControl
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \Santosdave\Travelport\System\StockControl
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
