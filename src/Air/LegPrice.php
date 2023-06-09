<?php

namespace Santosdave\Travelport\Air;

class LegPrice
{

    /**
     * @var LegDetail $LegDetail
     */
    protected $LegDetail = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeMoney $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var typeMoney $ApproximateTotalPrice
     */
    protected $ApproximateTotalPrice = null;

    /**
     * @param LegDetail $LegDetail
     * @param typeRef $Key
     * @param typeMoney $TotalPrice
     * @param typeMoney $ApproximateTotalPrice
     */
    public function __construct($LegDetail = null, $Key = null, $TotalPrice = null, $ApproximateTotalPrice = null)
    {
      $this->LegDetail = $LegDetail;
      $this->Key = $Key;
      $this->TotalPrice = $TotalPrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
    }

    /**
     * @return LegDetail
     */
    public function getLegDetail()
    {
      return $this->LegDetail;
    }

    /**
     * @param LegDetail $LegDetail
     * @return \Santosdave\Travelport\Air\LegPrice
     */
    public function setLegDetail($LegDetail)
    {
      $this->LegDetail = $LegDetail;
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
     * @return \Santosdave\Travelport\Air\LegPrice
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \Santosdave\Travelport\Air\LegPrice
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotalPrice()
    {
      return $this->ApproximateTotalPrice;
    }

    /**
     * @param typeMoney $ApproximateTotalPrice
     * @return \Santosdave\Travelport\Air\LegPrice
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

}
