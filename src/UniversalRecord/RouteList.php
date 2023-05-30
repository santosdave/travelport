<?php

namespace Santosdave\Travelport\UniversalRecord;

class RouteList
{

    /**
     * @var Route $Route
     */
    protected $Route = null;

    /**
     * @param Route $Route
     */
    public function __construct($Route = null)
    {
      $this->Route = $Route;
    }

    /**
     * @return Route
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param Route $Route
     * @return \Santosdave\Travelport\UniversalRecord\RouteList
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
      return $this;
    }

}
