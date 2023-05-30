<?php

namespace Santosdave\Travelport\Air;

class InitialAsynchResult
{

    /**
     * @var int $MaxWait
     */
    protected $MaxWait = null;

    /**
     * @param int $MaxWait
     */
    public function __construct($MaxWait = null)
    {
      $this->MaxWait = $MaxWait;
    }

    /**
     * @return int
     */
    public function getMaxWait()
    {
      return $this->MaxWait;
    }

    /**
     * @param int $MaxWait
     * @return \Santosdave\Travelport\Air\InitialAsynchResult
     */
    public function setMaxWait($MaxWait)
    {
      $this->MaxWait = $MaxWait;
      return $this;
    }

}
