<?php

namespace Santosdave\Travelport\UniversalRecord;

class FlightType
{

    /**
     * @var boolean $RequireSingleCarrier
     */
    protected $RequireSingleCarrier = null;

    /**
     * @var anonymous623 $MaxConnections
     */
    protected $MaxConnections = null;

    /**
     * @var anonymous624 $MaxStops
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
     * @param anonymous623 $MaxConnections
     * @param anonymous624 $MaxStops
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
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
     */
    public function setRequireSingleCarrier($RequireSingleCarrier)
    {
      $this->RequireSingleCarrier = $RequireSingleCarrier;
      return $this;
    }

    /**
     * @return anonymous623
     */
    public function getMaxConnections()
    {
      return $this->MaxConnections;
    }

    /**
     * @param anonymous623 $MaxConnections
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
     */
    public function setMaxConnections($MaxConnections)
    {
      $this->MaxConnections = $MaxConnections;
      return $this;
    }

    /**
     * @return anonymous624
     */
    public function getMaxStops()
    {
      return $this->MaxStops;
    }

    /**
     * @param anonymous624 $MaxStops
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
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
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
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
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
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
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
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
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
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
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
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
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
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
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
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
     * @return \Santosdave\Travelport\UniversalRecord\FlightType
     */
    public function setTripleInterlineCon($TripleInterlineCon)
    {
      $this->TripleInterlineCon = $TripleInterlineCon;
      return $this;
    }

}
