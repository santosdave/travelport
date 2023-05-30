<?php

namespace Santosdave\Travelport\Hotel;

class Segment
{

    /**
     * @var SegmentRemark $SegmentRemark
     */
    protected $SegmentRemark = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var boolean $Passive
     */
    protected $Passive = null;

    /**
     * @var int $TravelOrder
     */
    protected $TravelOrder = null;

    /**
     * @var anonymous195 $ProviderSegmentOrder
     */
    protected $ProviderSegmentOrder = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param SegmentRemark $SegmentRemark
     * @param typeRef $Key
     * @param string $Status
     * @param boolean $Passive
     * @param int $TravelOrder
     * @param anonymous195 $ProviderSegmentOrder
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($SegmentRemark = null, $Key = null, $Status = null, $Passive = null, $TravelOrder = null, $ProviderSegmentOrder = null, $ElStat = null, $KeyOverride = null)
    {
      $this->SegmentRemark = $SegmentRemark;
      $this->Key = $Key;
      $this->Status = $Status;
      $this->Passive = $Passive;
      $this->TravelOrder = $TravelOrder;
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return SegmentRemark
     */
    public function getSegmentRemark()
    {
      return $this->SegmentRemark;
    }

    /**
     * @param SegmentRemark $SegmentRemark
     * @return \Santosdave\Travelport\Hotel\Segment
     */
    public function setSegmentRemark($SegmentRemark)
    {
      $this->SegmentRemark = $SegmentRemark;
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
     * @return \Santosdave\Travelport\Hotel\Segment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Santosdave\Travelport\Hotel\Segment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassive()
    {
      return $this->Passive;
    }

    /**
     * @param boolean $Passive
     * @return \Santosdave\Travelport\Hotel\Segment
     */
    public function setPassive($Passive)
    {
      $this->Passive = $Passive;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravelOrder()
    {
      return $this->TravelOrder;
    }

    /**
     * @param int $TravelOrder
     * @return \Santosdave\Travelport\Hotel\Segment
     */
    public function setTravelOrder($TravelOrder)
    {
      $this->TravelOrder = $TravelOrder;
      return $this;
    }

    /**
     * @return anonymous195
     */
    public function getProviderSegmentOrder()
    {
      return $this->ProviderSegmentOrder;
    }

    /**
     * @param anonymous195 $ProviderSegmentOrder
     * @return \Santosdave\Travelport\Hotel\Segment
     */
    public function setProviderSegmentOrder($ProviderSegmentOrder)
    {
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \Santosdave\Travelport\Hotel\Segment
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \Santosdave\Travelport\Hotel\Segment
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
