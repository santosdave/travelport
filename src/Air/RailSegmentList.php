<?php

namespace Santosdave\Travelport\Air;

class RailSegmentList
{

    /**
     * @var RailSegment $RailSegment
     */
    protected $RailSegment = null;

    /**
     * @param RailSegment $RailSegment
     */
    public function __construct($RailSegment = null)
    {
      $this->RailSegment = $RailSegment;
    }

    /**
     * @return RailSegment
     */
    public function getRailSegment()
    {
      return $this->RailSegment;
    }

    /**
     * @param RailSegment $RailSegment
     * @return \Santosdave\Travelport\Air\RailSegmentList
     */
    public function setRailSegment($RailSegment)
    {
      $this->RailSegment = $RailSegment;
      return $this;
    }

}
