<?php

namespace Santosdave\Travelport\Util;

class CorporateDiscountID
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var boolean $NegotiatedRateCode
     */
    protected $NegotiatedRateCode = null;

    /**
     * @param string $_
     * @param boolean $NegotiatedRateCode
     */
    public function __construct($_ = null, $NegotiatedRateCode = null)
    {
      $this->_ = $_;
      $this->NegotiatedRateCode = $NegotiatedRateCode;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \Santosdave\Travelport\Util\CorporateDiscountID
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNegotiatedRateCode()
    {
      return $this->NegotiatedRateCode;
    }

    /**
     * @param boolean $NegotiatedRateCode
     * @return \Santosdave\Travelport\Util\CorporateDiscountID
     */
    public function setNegotiatedRateCode($NegotiatedRateCode)
    {
      $this->NegotiatedRateCode = $NegotiatedRateCode;
      return $this;
    }

}
