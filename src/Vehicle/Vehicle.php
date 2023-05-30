<?php

namespace Santosdave\Travelport\Vehicle;

class Vehicle
{

    /**
     * @var typePolicyCodesList $PolicyCodesList
     */
    protected $PolicyCodesList = null;

    /**
     * @var VehicleRate $VehicleRate
     */
    protected $VehicleRate = null;

    /**
     * @var typeSupplierCode $VendorCode
     */
    protected $VendorCode = null;

    /**
     * @var boolean $AirConditioning
     */
    protected $AirConditioning = null;

    /**
     * @var typeVehicleTransmission $TransmissionType
     */
    protected $TransmissionType = null;

    /**
     * @var typeVehicleClass $VehicleClass
     */
    protected $VehicleClass = null;

    /**
     * @var typeVehicleCategory $Category
     */
    protected $Category = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var typeDoorCount $DoorCount
     */
    protected $DoorCount = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var anonymous548 $CounterLocationCode
     */
    protected $CounterLocationCode = null;

    /**
     * @var typeRef $VendorLocationKey
     */
    protected $VendorLocationKey = null;

    /**
     * @var anonymous549 $VendorName
     */
    protected $VendorName = null;

    /**
     * @var string $AlternateVendor
     */
    protected $AlternateVendor = null;

    /**
     * @var typeFuel $FuelType
     */
    protected $FuelType = null;

    /**
     * @var anonymous550 $AcrissVehicleCode
     */
    protected $AcrissVehicleCode = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var boolean $ReturnAtPickup
     */
    protected $ReturnAtPickup = null;

    /**
     * @var boolean $InPolicy
     */
    protected $InPolicy = null;

    /**
     * @var typePolicyCode $PolicyCode
     */
    protected $PolicyCode = null;

    /**
     * @var boolean $PreferredOption
     */
    protected $PreferredOption = null;

    /**
     * @param typePolicyCodesList $PolicyCodesList
     * @param VehicleRate $VehicleRate
     * @param typeSupplierCode $VendorCode
     * @param boolean $AirConditioning
     * @param typeVehicleTransmission $TransmissionType
     * @param typeVehicleClass $VehicleClass
     * @param typeVehicleCategory $Category
     * @param string $Description
     * @param typeDoorCount $DoorCount
     * @param string $Location
     * @param anonymous548 $CounterLocationCode
     * @param typeRef $VendorLocationKey
     * @param anonymous549 $VendorName
     * @param string $AlternateVendor
     * @param typeFuel $FuelType
     * @param anonymous550 $AcrissVehicleCode
     * @param typeRef $Key
     * @param boolean $ReturnAtPickup
     * @param boolean $InPolicy
     * @param typePolicyCode $PolicyCode
     * @param boolean $PreferredOption
     */
    public function __construct($PolicyCodesList = null, $VehicleRate = null, $VendorCode = null, $AirConditioning = null, $TransmissionType = null, $VehicleClass = null, $Category = null, $Description = null, $DoorCount = null, $Location = null, $CounterLocationCode = null, $VendorLocationKey = null, $VendorName = null, $AlternateVendor = null, $FuelType = null, $AcrissVehicleCode = null, $Key = null, $ReturnAtPickup = null, $InPolicy = null, $PolicyCode = null, $PreferredOption = null)
    {
      $this->PolicyCodesList = $PolicyCodesList;
      $this->VehicleRate = $VehicleRate;
      $this->VendorCode = $VendorCode;
      $this->AirConditioning = $AirConditioning;
      $this->TransmissionType = $TransmissionType;
      $this->VehicleClass = $VehicleClass;
      $this->Category = $Category;
      $this->Description = $Description;
      $this->DoorCount = $DoorCount;
      $this->Location = $Location;
      $this->CounterLocationCode = $CounterLocationCode;
      $this->VendorLocationKey = $VendorLocationKey;
      $this->VendorName = $VendorName;
      $this->AlternateVendor = $AlternateVendor;
      $this->FuelType = $FuelType;
      $this->AcrissVehicleCode = $AcrissVehicleCode;
      $this->Key = $Key;
      $this->ReturnAtPickup = $ReturnAtPickup;
      $this->InPolicy = $InPolicy;
      $this->PolicyCode = $PolicyCode;
      $this->PreferredOption = $PreferredOption;
    }

    /**
     * @return typePolicyCodesList
     */
    public function getPolicyCodesList()
    {
      return $this->PolicyCodesList;
    }

    /**
     * @param typePolicyCodesList $PolicyCodesList
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setPolicyCodesList($PolicyCodesList)
    {
      $this->PolicyCodesList = $PolicyCodesList;
      return $this;
    }

    /**
     * @return VehicleRate
     */
    public function getVehicleRate()
    {
      return $this->VehicleRate;
    }

    /**
     * @param VehicleRate $VehicleRate
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setVehicleRate($VehicleRate)
    {
      $this->VehicleRate = $VehicleRate;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param typeSupplierCode $VendorCode
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAirConditioning()
    {
      return $this->AirConditioning;
    }

    /**
     * @param boolean $AirConditioning
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setAirConditioning($AirConditioning)
    {
      $this->AirConditioning = $AirConditioning;
      return $this;
    }

    /**
     * @return typeVehicleTransmission
     */
    public function getTransmissionType()
    {
      return $this->TransmissionType;
    }

    /**
     * @param typeVehicleTransmission $TransmissionType
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setTransmissionType($TransmissionType)
    {
      $this->TransmissionType = $TransmissionType;
      return $this;
    }

    /**
     * @return typeVehicleClass
     */
    public function getVehicleClass()
    {
      return $this->VehicleClass;
    }

    /**
     * @param typeVehicleClass $VehicleClass
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setVehicleClass($VehicleClass)
    {
      $this->VehicleClass = $VehicleClass;
      return $this;
    }

    /**
     * @return typeVehicleCategory
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param typeVehicleCategory $Category
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typeDoorCount
     */
    public function getDoorCount()
    {
      return $this->DoorCount;
    }

    /**
     * @param typeDoorCount $DoorCount
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setDoorCount($DoorCount)
    {
      $this->DoorCount = $DoorCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return anonymous548
     */
    public function getCounterLocationCode()
    {
      return $this->CounterLocationCode;
    }

    /**
     * @param anonymous548 $CounterLocationCode
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setCounterLocationCode($CounterLocationCode)
    {
      $this->CounterLocationCode = $CounterLocationCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getVendorLocationKey()
    {
      return $this->VendorLocationKey;
    }

    /**
     * @param typeRef $VendorLocationKey
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setVendorLocationKey($VendorLocationKey)
    {
      $this->VendorLocationKey = $VendorLocationKey;
      return $this;
    }

    /**
     * @return anonymous549
     */
    public function getVendorName()
    {
      return $this->VendorName;
    }

    /**
     * @param anonymous549 $VendorName
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateVendor()
    {
      return $this->AlternateVendor;
    }

    /**
     * @param string $AlternateVendor
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setAlternateVendor($AlternateVendor)
    {
      $this->AlternateVendor = $AlternateVendor;
      return $this;
    }

    /**
     * @return typeFuel
     */
    public function getFuelType()
    {
      return $this->FuelType;
    }

    /**
     * @param typeFuel $FuelType
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setFuelType($FuelType)
    {
      $this->FuelType = $FuelType;
      return $this;
    }

    /**
     * @return anonymous550
     */
    public function getAcrissVehicleCode()
    {
      return $this->AcrissVehicleCode;
    }

    /**
     * @param anonymous550 $AcrissVehicleCode
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setAcrissVehicleCode($AcrissVehicleCode)
    {
      $this->AcrissVehicleCode = $AcrissVehicleCode;
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
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnAtPickup()
    {
      return $this->ReturnAtPickup;
    }

    /**
     * @param boolean $ReturnAtPickup
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setReturnAtPickup($ReturnAtPickup)
    {
      $this->ReturnAtPickup = $ReturnAtPickup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInPolicy()
    {
      return $this->InPolicy;
    }

    /**
     * @param boolean $InPolicy
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setInPolicy($InPolicy)
    {
      $this->InPolicy = $InPolicy;
      return $this;
    }

    /**
     * @return typePolicyCode
     */
    public function getPolicyCode()
    {
      return $this->PolicyCode;
    }

    /**
     * @param typePolicyCode $PolicyCode
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setPolicyCode($PolicyCode)
    {
      $this->PolicyCode = $PolicyCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferredOption()
    {
      return $this->PreferredOption;
    }

    /**
     * @param boolean $PreferredOption
     * @return \Santosdave\Travelport\Vehicle\Vehicle
     */
    public function setPreferredOption($PreferredOption)
    {
      $this->PreferredOption = $PreferredOption;
      return $this;
    }

}