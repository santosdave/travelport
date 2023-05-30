<?php

namespace Santosdave\Travelport\System;

class typeTimeRange
{

    /**
     * @var string $EarliestTime
     */
    protected $EarliestTime = null;

    /**
     * @var string $LatestTime
     */
    protected $LatestTime = null;

    /**
     * @param string $EarliestTime
     * @param string $LatestTime
     */
    public function __construct($EarliestTime = null, $LatestTime = null)
    {
      $this->EarliestTime = $EarliestTime;
      $this->LatestTime = $LatestTime;
    }

    /**
     * @return string
     */
    public function getEarliestTime()
    {
      return $this->EarliestTime;
    }

    /**
     * @param string $EarliestTime
     * @return \Santosdave\Travelport\System\typeTimeRange
     */
    public function setEarliestTime($EarliestTime)
    {
      $this->EarliestTime = $EarliestTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatestTime()
    {
      return $this->LatestTime;
    }

    /**
     * @param string $LatestTime
     * @return \Santosdave\Travelport\System\typeTimeRange
     */
    public function setLatestTime($LatestTime)
    {
      $this->LatestTime = $LatestTime;
      return $this;
    }

}
