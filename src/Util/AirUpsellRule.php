<?php

namespace Santosdave\Travelport\Util;

class AirUpsellRule
{

    /**
     * @var AirUpsellQualify $AirUpsellQualify
     */
    protected $AirUpsellQualify = null;

    /**
     * @var AirUpsellOffer $AirUpsellOffer
     */
    protected $AirUpsellOffer = null;

    /**
     * @param AirUpsellQualify $AirUpsellQualify
     * @param AirUpsellOffer $AirUpsellOffer
     */
    public function __construct($AirUpsellQualify = null, $AirUpsellOffer = null)
    {
      $this->AirUpsellQualify = $AirUpsellQualify;
      $this->AirUpsellOffer = $AirUpsellOffer;
    }

    /**
     * @return AirUpsellQualify
     */
    public function getAirUpsellQualify()
    {
      return $this->AirUpsellQualify;
    }

    /**
     * @param AirUpsellQualify $AirUpsellQualify
     * @return \Santosdave\Travelport\Util\AirUpsellRule
     */
    public function setAirUpsellQualify($AirUpsellQualify)
    {
      $this->AirUpsellQualify = $AirUpsellQualify;
      return $this;
    }

    /**
     * @return AirUpsellOffer
     */
    public function getAirUpsellOffer()
    {
      return $this->AirUpsellOffer;
    }

    /**
     * @param AirUpsellOffer $AirUpsellOffer
     * @return \Santosdave\Travelport\Util\AirUpsellRule
     */
    public function setAirUpsellOffer($AirUpsellOffer)
    {
      $this->AirUpsellOffer = $AirUpsellOffer;
      return $this;
    }

}
