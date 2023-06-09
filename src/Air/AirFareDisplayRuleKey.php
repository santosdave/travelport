<?php

namespace Santosdave\Travelport\Air;

class AirFareDisplayRuleKey
{

    /**
     * @var typeNonBlanks $_
     */
    protected $_ = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @param typeNonBlanks $_
     * @param typeProviderCode $ProviderCode
     */
    public function __construct($_ = null, $ProviderCode = null)
    {
      $this->_ = $_;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return typeNonBlanks
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeNonBlanks $_
     * @return \Santosdave\Travelport\Air\AirFareDisplayRuleKey
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \Santosdave\Travelport\Air\AirFareDisplayRuleKey
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
