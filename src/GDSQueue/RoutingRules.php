<?php

namespace Santosdave\Travelport\GDSQueue;

class RoutingRules
{

    /**
     * @var Routing[] $Routing
     */
    protected $Routing = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Routing[]
     */
    public function getRouting()
    {
      return $this->Routing;
    }

    /**
     * @param Routing[] $Routing
     * @return \Santosdave\Travelport\GDSQueue\RoutingRules
     */
    public function setRouting(array $Routing = null)
    {
      $this->Routing = $Routing;
      return $this;
    }

}
