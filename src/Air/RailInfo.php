<?php

namespace Santosdave\Travelport\Air;

class RailInfo
{

    /**
     * @var typeTrainNumber $TrainNumber
     */
    protected $TrainNumber = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeRailLocationCode $RailLocOrigin
     */
    protected $RailLocOrigin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var typeRailLocationCode $RailLocDestination
     */
    protected $RailLocDestination = null;

    /**
     * @var string $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var string $ArrivalTime
     */
    protected $ArrivalTime = null;

    /**
     * @param typeTrainNumber $TrainNumber
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param typeIATACode $Origin
     * @param typeRailLocationCode $RailLocOrigin
     * @param typeIATACode $Destination
     * @param typeRailLocationCode $RailLocDestination
     * @param string $DepartureTime
     * @param string $ArrivalTime
     */
    public function __construct($TrainNumber = null, $ProviderCode = null, $SupplierCode = null, $Origin = null, $RailLocOrigin = null, $Destination = null, $RailLocDestination = null, $DepartureTime = null, $ArrivalTime = null)
    {
      $this->TrainNumber = $TrainNumber;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->Origin = $Origin;
      $this->RailLocOrigin = $RailLocOrigin;
      $this->Destination = $Destination;
      $this->RailLocDestination = $RailLocDestination;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
    }

    /**
     * @return typeTrainNumber
     */
    public function getTrainNumber()
    {
      return $this->TrainNumber;
    }

    /**
     * @param typeTrainNumber $TrainNumber
     * @return \Santosdave\Travelport\Air\RailInfo
     */
    public function setTrainNumber($TrainNumber)
    {
      $this->TrainNumber = $TrainNumber;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \Santosdave\Travelport\Air\RailInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \Santosdave\Travelport\Air\RailInfo
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \Santosdave\Travelport\Air\RailInfo
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getRailLocOrigin()
    {
      return $this->RailLocOrigin;
    }

    /**
     * @param typeRailLocationCode $RailLocOrigin
     * @return \Santosdave\Travelport\Air\RailInfo
     */
    public function setRailLocOrigin($RailLocOrigin)
    {
      $this->RailLocOrigin = $RailLocOrigin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \Santosdave\Travelport\Air\RailInfo
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getRailLocDestination()
    {
      return $this->RailLocDestination;
    }

    /**
     * @param typeRailLocationCode $RailLocDestination
     * @return \Santosdave\Travelport\Air\RailInfo
     */
    public function setRailLocDestination($RailLocDestination)
    {
      $this->RailLocDestination = $RailLocDestination;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param string $DepartureTime
     * @return \Santosdave\Travelport\Air\RailInfo
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrivalTime()
    {
      return $this->ArrivalTime;
    }

    /**
     * @param string $ArrivalTime
     * @return \Santosdave\Travelport\Air\RailInfo
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

}
