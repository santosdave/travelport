<?php

namespace Santosdave\Travelport\Util;

class AirSearchAsynchModifiers
{

    /**
     * @var InitialAsynchResult $InitialAsynchResult
     */
    protected $InitialAsynchResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InitialAsynchResult
     */
    public function getInitialAsynchResult()
    {
      return $this->InitialAsynchResult;
    }

    /**
     * @param InitialAsynchResult $InitialAsynchResult
     * @return \Santosdave\Travelport\Util\AirSearchAsynchModifiers
     */
    public function setInitialAsynchResult($InitialAsynchResult)
    {
      $this->InitialAsynchResult = $InitialAsynchResult;
      return $this;
    }

}
