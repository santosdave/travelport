<?php

namespace Santosdave\Travelport\UniversalRecord;

class CustomerID extends typeRemark
{

    /**
     * @var typeRemark $_
     */
    protected $_ = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param string $_
     * @param typeRef $ProviderReservationInfoRef
     * @param typeProviderCode $ProviderCode
     * @param typeRemark $_
     * @param typeRef $Key
     */
    public function __construct($_ = null, $ProviderReservationInfoRef = null, $ProviderCode = null, $Key = null)
    {
      parent::__construct($_, $ProviderReservationInfoRef, $ProviderCode);
      $this->_ = $_;
      $this->Key = $Key;
    }

    /**
     * @return typeRemark
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeRemark $_
     * @return \Santosdave\Travelport\UniversalRecord\CustomerID
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \Santosdave\Travelport\UniversalRecord\CustomerID
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
