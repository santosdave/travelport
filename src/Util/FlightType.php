<?php

namespace Santosdave\Travelport\Util;

class FlightType
{

    /**
     * @var boolean $RequireSingleCarrier
     */
    protected $RequireSingleCarrier = null;

    /**
     * @var anonymous620 $MaxConnections
     */
    protected $MaxConnections = null;

    /**
     * @var anonymous621 $MaxStops
     */
    protected $MaxStops = null;

    /**
     * @var boolean $NonStopDirects
     */
    protected $NonStopDirects = null;

    /**
     * @var boolean $StopDirects
     */
    protected $StopDirects = null;

    /**
     * @var boolean $SingleOnlineCon
     */
    protected $SingleOnlineCon = null;

    /**
     * @var boolean $DoubleOnlineCon
     */
    protected $DoubleOnlineCon = null;

    /**
     * @var boolean $TripleOnlineCon
     */
    protected $TripleOnlineCon = null;

    /**
     * @var boolean $SingleInterlineCon
     */
    protected $SingleInterlineCon = null;

    /**
     * @var boolean $DoubleInterlineCon
     */
    protected $DoubleInterlineCon = null;

    /**
     * @var boolean $TripleInterlineCon
     */
    protected $TripleInterlineCon = null;

    /**
     * @param boolean $RequireSingleCarrier
     * @param anonymous620 $MaxConnections
     * @param anonymous621 $MaxStops
     * @param boolean $NonStopDirects
     * @param boolean $StopDirects
     * @param boolean $SingleOnlineCon
     * @param boolean $DoubleOnlineCon
     * @param boolean $TripleOnlineCon
     * @param boolean $SingleInterlineCon
     * @param boolean $DoubleInterlineCon
     * @param boolean $TripleInterlineCon
     */
    public function __construct($RequireSingleCarrier = null, $MaxConnections = null, $MaxStops = null, $NonStopDirects = null, $StopDirects = null, $SingleOnlineCon = null, $DoubleOnlineCon = null, $TripleOnlineCon = null, $SingleInterlineCon = null, $DoubleInterlineCon = null, $TripleInterlineCon = null)
    {
      $this->RequireSingleCarrier = $RequireSingleCarrier;
      $this->MaxConnections = $MaxConnections;
      $this->MaxStops = $MaxStops;
      $this->NonStopDirects = $NonStopDirects;
      $this->StopDirects = $StopDirects;
      $this->SingleOnlineCon = $SingleOnlineCon;
      $this->DoubleOnlineCon = $DoubleOnlineCon;
      $this->TripleOnlineCon = $TripleOnlineCon;
      $this->SingleInterlineCon = $SingleInterlineCon;
      $this->DoubleInterlineCon = $DoubleInterlineCon;
      $this->TripleInterlineCon = $TripleInterlineCon;
    }

    /**
     * @return boolean
     */
    public function getRequireSingleCarrier()
    {
      return $this->RequireSingleCarrier;
    }

    /**
     * @param boolean $RequireSingleCarrier
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setRequireSingleCarrier($RequireSingleCarrier)
    {
      $this->RequireSingleCarrier = $RequireSingleCarrier;
      return $this;
    }

    /**
     * @return anonymous620
     */
    public function getMaxConnections()
    {
      return $this->MaxConnections;
    }

    /**
     * @param anonymous620 $MaxConnections
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setMaxConnections($MaxConnections)
    {
      $this->MaxConnections = $MaxConnections;
      return $this;
    }

    /**
     * @return anonymous621
     */
    public function getMaxStops()
    {
      return $this->MaxStops;
    }

    /**
     * @param anonymous621 $MaxStops
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setMaxStops($MaxStops)
    {
      $this->MaxStops = $MaxStops;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonStopDirects()
    {
      return $this->NonStopDirects;
    }

    /**
     * @param boolean $NonStopDirects
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setNonStopDirects($NonStopDirects)
    {
      $this->NonStopDirects = $NonStopDirects;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStopDirects()
    {
      return $this->StopDirects;
    }

    /**
     * @param boolean $StopDirects
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setStopDirects($StopDirects)
    {
      $this->StopDirects = $StopDirects;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSingleOnlineCon()
    {
      return $this->SingleOnlineCon;
    }

    /**
     * @param boolean $SingleOnlineCon
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setSingleOnlineCon($SingleOnlineCon)
    {
      $this->SingleOnlineCon = $SingleOnlineCon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoubleOnlineCon()
    {
      return $this->DoubleOnlineCon;
    }

    /**
     * @param boolean $DoubleOnlineCon
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setDoubleOnlineCon($DoubleOnlineCon)
    {
      $this->DoubleOnlineCon = $DoubleOnlineCon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTripleOnlineCon()
    {
      return $this->TripleOnlineCon;
    }

    /**
     * @param boolean $TripleOnlineCon
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setTripleOnlineCon($TripleOnlineCon)
    {
      $this->TripleOnlineCon = $TripleOnlineCon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSingleInterlineCon()
    {
      return $this->SingleInterlineCon;
    }

    /**
     * @param boolean $SingleInterlineCon
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setSingleInterlineCon($SingleInterlineCon)
    {
      $this->SingleInterlineCon = $SingleInterlineCon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoubleInterlineCon()
    {
      return $this->DoubleInterlineCon;
    }

    /**
     * @param boolean $DoubleInterlineCon
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setDoubleInterlineCon($DoubleInterlineCon)
    {
      $this->DoubleInterlineCon = $DoubleInterlineCon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTripleInterlineCon()
    {
      return $this->TripleInterlineCon;
    }

    /**
     * @param boolean $TripleInterlineCon
     * @return \Santosdave\Travelport\Util\FlightType
     */
    public function setTripleInterlineCon($TripleInterlineCon)
    {
      $this->TripleInterlineCon = $TripleInterlineCon;
      return $this;
    }

}
