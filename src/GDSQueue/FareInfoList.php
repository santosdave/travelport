<?php

namespace Santosdave\Travelport\GDSQueue;

class FareInfoList
{

    /**
     * @var FareInfo $FareInfo
     */
    protected $FareInfo = null;

    /**
     * @param FareInfo $FareInfo
     */
    public function __construct($FareInfo = null)
    {
      $this->FareInfo = $FareInfo;
    }

    /**
     * @return FareInfo
     */
    public function getFareInfo()
    {
      return $this->FareInfo;
    }

    /**
     * @param FareInfo $FareInfo
     * @return \Santosdave\Travelport\GDSQueue\FareInfoList
     */
    public function setFareInfo($FareInfo)
    {
      $this->FareInfo = $FareInfo;
      return $this;
    }

}
