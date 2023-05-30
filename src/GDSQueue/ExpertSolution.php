<?php

namespace Santosdave\Travelport\GDSQueue;

class ExpertSolution
{

    /**
     * @var LegPrice $LegPrice
     */
    protected $LegPrice = null;

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
     * @var date $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @param LegPrice $LegPrice
     * @param typeRef $Key
     * @param typeMoney $TotalPrice
     * @param typeMoney $ApproximateTotalPrice
     * @param date $CreatedDate
     */
    public function __construct($LegPrice = null, $Key = null, $TotalPrice = null, $ApproximateTotalPrice = null, $CreatedDate = null)
    {
      $this->LegPrice = $LegPrice;
      $this->Key = $Key;
      $this->TotalPrice = $TotalPrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      $this->CreatedDate = $CreatedDate;
    }

    /**
     * @return LegPrice
     */
    public function getLegPrice()
    {
      return $this->LegPrice;
    }

    /**
     * @param LegPrice $LegPrice
     * @return \Santosdave\Travelport\GDSQueue\ExpertSolution
     */
    public function setLegPrice($LegPrice)
    {
      $this->LegPrice = $LegPrice;
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
     * @return \Santosdave\Travelport\GDSQueue\ExpertSolution
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
     * @return \Santosdave\Travelport\GDSQueue\ExpertSolution
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
     * @return \Santosdave\Travelport\GDSQueue\ExpertSolution
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

    /**
     * @return date
     */
    public function getCreatedDate()
    {
      return $this->CreatedDate;
    }

    /**
     * @param date $CreatedDate
     * @return \Santosdave\Travelport\GDSQueue\ExpertSolution
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

}
