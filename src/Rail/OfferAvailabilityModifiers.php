<?php

namespace Santosdave\Travelport\Rail;

class OfferAvailabilityModifiers
{

    /**
     * @var typeMerchandisingService[] $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var typeCarrier[] $Carrier
     */
    protected $Carrier = null;

    /**
     * @var typeCurrency $CurrencyType
     */
    protected $CurrencyType = null;

    /**
     * @param typeCurrency $CurrencyType
     */
    public function __construct($CurrencyType = null)
    {
      $this->CurrencyType = $CurrencyType;
    }

    /**
     * @return typeMerchandisingService[]
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param typeMerchandisingService[] $ServiceType
     * @return \Santosdave\Travelport\Rail\OfferAvailabilityModifiers
     */
    public function setServiceType(array $ServiceType = null)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return typeCarrier[]
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier[] $Carrier
     * @return \Santosdave\Travelport\Rail\OfferAvailabilityModifiers
     */
    public function setCarrier(array $Carrier = null)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrencyType()
    {
      return $this->CurrencyType;
    }

    /**
     * @param typeCurrency $CurrencyType
     * @return \Santosdave\Travelport\Rail\OfferAvailabilityModifiers
     */
    public function setCurrencyType($CurrencyType)
    {
      $this->CurrencyType = $CurrencyType;
      return $this;
    }

}
