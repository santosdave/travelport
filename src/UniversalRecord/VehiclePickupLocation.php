<?php

namespace Santosdave\Travelport\UniversalRecord;

class VehiclePickupLocation
{

    /**
     * @var Vendor $Vendor
     */
    protected $Vendor = null;

    /**
     * @var VehicleModifier $VehicleModifier
     */
    protected $VehicleModifier = null;

    /**
     * @var typeIATACode $PickUpLocation
     */
    protected $PickUpLocation = null;

    /**
     * @param Vendor $Vendor
     * @param VehicleModifier $VehicleModifier
     * @param typeIATACode $PickUpLocation
     */
    public function __construct($Vendor = null, $VehicleModifier = null, $PickUpLocation = null)
    {
      $this->Vendor = $Vendor;
      $this->VehicleModifier = $VehicleModifier;
      $this->PickUpLocation = $PickUpLocation;
    }

    /**
     * @return Vendor
     */
    public function getVendor()
    {
      return $this->Vendor;
    }

    /**
     * @param Vendor $Vendor
     * @return \Santosdave\Travelport\UniversalRecord\VehiclePickupLocation
     */
    public function setVendor($Vendor)
    {
      $this->Vendor = $Vendor;
      return $this;
    }

    /**
     * @return VehicleModifier
     */
    public function getVehicleModifier()
    {
      return $this->VehicleModifier;
    }

    /**
     * @param VehicleModifier $VehicleModifier
     * @return \Santosdave\Travelport\UniversalRecord\VehiclePickupLocation
     */
    public function setVehicleModifier($VehicleModifier)
    {
      $this->VehicleModifier = $VehicleModifier;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getPickUpLocation()
    {
      return $this->PickUpLocation;
    }

    /**
     * @param typeIATACode $PickUpLocation
     * @return \Santosdave\Travelport\UniversalRecord\VehiclePickupLocation
     */
    public function setPickUpLocation($PickUpLocation)
    {
      $this->PickUpLocation = $PickUpLocation;
      return $this;
    }

}
