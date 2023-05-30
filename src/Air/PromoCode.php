<?php

namespace Santosdave\Travelport\Air;

class PromoCode
{

    /**
     * @var anonymous837 $Code
     */
    protected $Code = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @param anonymous837 $Code
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     */
    public function __construct($Code = null, $ProviderCode = null, $SupplierCode = null)
    {
      $this->Code = $Code;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
    }

    /**
     * @return anonymous837
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param anonymous837 $Code
     * @return \Santosdave\Travelport\Air\PromoCode
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \Santosdave\Travelport\Air\PromoCode
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
     * @return \Santosdave\Travelport\Air\PromoCode
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
