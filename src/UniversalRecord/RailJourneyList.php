<?php

namespace Santosdave\Travelport\UniversalRecord;

class RailJourneyList
{

    /**
     * @var RailJourney $RailJourney
     */
    protected $RailJourney = null;

    /**
     * @param RailJourney $RailJourney
     */
    public function __construct($RailJourney = null)
    {
      $this->RailJourney = $RailJourney;
    }

    /**
     * @return RailJourney
     */
    public function getRailJourney()
    {
      return $this->RailJourney;
    }

    /**
     * @param RailJourney $RailJourney
     * @return \Santosdave\Travelport\UniversalRecord\RailJourneyList
     */
    public function setRailJourney($RailJourney)
    {
      $this->RailJourney = $RailJourney;
      return $this;
    }

}
