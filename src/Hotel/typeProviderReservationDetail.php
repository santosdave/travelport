<?php

namespace Santosdave\Travelport\Hotel;

class typeProviderReservationDetail
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @param typeSupplierCode $SupplierCode
     */
    public function __construct($ProviderCode = null, $ProviderLocatorCode = null, $SupplierCode = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->SupplierCode = $SupplierCode;
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
     * @return \Santosdave\Travelport\Hotel\typeProviderReservationDetail
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \Santosdave\Travelport\Hotel\typeProviderReservationDetail
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
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
     * @return \Santosdave\Travelport\Hotel\typeProviderReservationDetail
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
