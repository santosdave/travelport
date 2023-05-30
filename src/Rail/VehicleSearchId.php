<?php

namespace Santosdave\Travelport\Rail;

class VehicleSearchId
{

    /**
     * @var string $MediaLinksSearchId
     */
    protected $MediaLinksSearchId = null;

    /**
     * @param string $MediaLinksSearchId
     */
    public function __construct($MediaLinksSearchId = null)
    {
      $this->MediaLinksSearchId = $MediaLinksSearchId;
    }

    /**
     * @return string
     */
    public function getMediaLinksSearchId()
    {
      return $this->MediaLinksSearchId;
    }

    /**
     * @param string $MediaLinksSearchId
     * @return \Santosdave\Travelport\Rail\VehicleSearchId
     */
    public function setMediaLinksSearchId($MediaLinksSearchId)
    {
      $this->MediaLinksSearchId = $MediaLinksSearchId;
      return $this;
    }

}
