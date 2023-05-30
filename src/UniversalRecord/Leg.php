<?php

namespace Santosdave\Travelport\UniversalRecord;

class Leg
{

    /**
     * @var LegDetail $LegDetail
     */
    protected $LegDetail = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var int $Group
     */
    protected $Group = null;

    /**
     * @var typeRailLocationCode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeRailLocationCode $Destination
     */
    protected $Destination = null;

    /**
     * @param LegDetail $LegDetail
     * @param typeRef $Key
     * @param int $Group
     * @param typeRailLocationCode $Origin
     * @param typeRailLocationCode $Destination
     */
    public function __construct($LegDetail = null, $Key = null, $Group = null, $Origin = null, $Destination = null)
    {
      $this->LegDetail = $LegDetail;
      $this->Key = $Key;
      $this->Group = $Group;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
    }

    /**
     * @return LegDetail
     */
    public function getLegDetail()
    {
      return $this->LegDetail;
    }

    /**
     * @param LegDetail $LegDetail
     * @return \Santosdave\Travelport\UniversalRecord\Leg
     */
    public function setLegDetail($LegDetail)
    {
      $this->LegDetail = $LegDetail;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \Santosdave\Travelport\UniversalRecord\Leg
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroup()
    {
      return $this->Group;
    }

    /**
     * @param int $Group
     * @return \Santosdave\Travelport\UniversalRecord\Leg
     */
    public function setGroup($Group)
    {
      $this->Group = $Group;
      return $this;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeRailLocationCode $Origin
     * @return \Santosdave\Travelport\UniversalRecord\Leg
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeRailLocationCode $Destination
     * @return \Santosdave\Travelport\UniversalRecord\Leg
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

}
