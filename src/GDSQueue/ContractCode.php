<?php

namespace Santosdave\Travelport\GDSQueue;

class ContractCode
{

    /**
     * @var anonymous894 $Code
     */
    protected $Code = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @param anonymous894 $Code
     * @param string $CompanyName
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     */
    public function __construct($Code = null, $CompanyName = null, $ProviderCode = null, $SupplierCode = null)
    {
      $this->Code = $Code;
      $this->CompanyName = $CompanyName;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
    }

    /**
     * @return anonymous894
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param anonymous894 $Code
     * @return \Santosdave\Travelport\GDSQueue\ContractCode
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \Santosdave\Travelport\GDSQueue\ContractCode
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
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
     * @return \Santosdave\Travelport\GDSQueue\ContractCode
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
     * @return \Santosdave\Travelport\GDSQueue\ContractCode
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
