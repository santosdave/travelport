<?php

namespace Santosdave\Travelport\Util;

class VehicleUpsellAdd
{

    /**
     * @var VehicleUpsellQualify $VehicleUpsellQualify
     */
    protected $VehicleUpsellQualify = null;

    /**
     * @var VehicleUpsellOffer $VehicleUpsellOffer
     */
    protected $VehicleUpsellOffer = null;

    /**
     * @param VehicleUpsellQualify $VehicleUpsellQualify
     * @param VehicleUpsellOffer $VehicleUpsellOffer
     */
    public function __construct($VehicleUpsellQualify = null, $VehicleUpsellOffer = null)
    {
      $this->VehicleUpsellQualify = $VehicleUpsellQualify;
      $this->VehicleUpsellOffer = $VehicleUpsellOffer;
    }

    /**
     * @return VehicleUpsellQualify
     */
    public function getVehicleUpsellQualify()
    {
      return $this->VehicleUpsellQualify;
    }

    /**
     * @param VehicleUpsellQualify $VehicleUpsellQualify
     * @return \Santosdave\Travelport\Util\VehicleUpsellAdd
     */
    public function setVehicleUpsellQualify($VehicleUpsellQualify)
    {
      $this->VehicleUpsellQualify = $VehicleUpsellQualify;
      return $this;
    }

    /**
     * @return VehicleUpsellOffer
     */
    public function getVehicleUpsellOffer()
    {
      return $this->VehicleUpsellOffer;
    }

    /**
     * @param VehicleUpsellOffer $VehicleUpsellOffer
     * @return \Santosdave\Travelport\Util\VehicleUpsellAdd
     */
    public function setVehicleUpsellOffer($VehicleUpsellOffer)
    {
      $this->VehicleUpsellOffer = $VehicleUpsellOffer;
      return $this;
    }

}
