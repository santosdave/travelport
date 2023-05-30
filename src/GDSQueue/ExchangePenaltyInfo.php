<?php

namespace Santosdave\Travelport\GDSQueue;

class ExchangePenaltyInfo
{

    /**
     * @var PenaltyInformation $PenaltyInformation
     */
    protected $PenaltyInformation = null;

    /**
     * @var typePTC $PTC
     */
    protected $PTC = null;

    /**
     * @var typeMoney $MinimumChangeFee
     */
    protected $MinimumChangeFee = null;

    /**
     * @var typeMoney $MaximumChangeFee
     */
    protected $MaximumChangeFee = null;

    /**
     * @param PenaltyInformation $PenaltyInformation
     * @param typePTC $PTC
     * @param typeMoney $MinimumChangeFee
     * @param typeMoney $MaximumChangeFee
     */
    public function __construct($PenaltyInformation = null, $PTC = null, $MinimumChangeFee = null, $MaximumChangeFee = null)
    {
      $this->PenaltyInformation = $PenaltyInformation;
      $this->PTC = $PTC;
      $this->MinimumChangeFee = $MinimumChangeFee;
      $this->MaximumChangeFee = $MaximumChangeFee;
    }

    /**
     * @return PenaltyInformation
     */
    public function getPenaltyInformation()
    {
      return $this->PenaltyInformation;
    }

    /**
     * @param PenaltyInformation $PenaltyInformation
     * @return \Santosdave\Travelport\GDSQueue\ExchangePenaltyInfo
     */
    public function setPenaltyInformation($PenaltyInformation)
    {
      $this->PenaltyInformation = $PenaltyInformation;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getPTC()
    {
      return $this->PTC;
    }

    /**
     * @param typePTC $PTC
     * @return \Santosdave\Travelport\GDSQueue\ExchangePenaltyInfo
     */
    public function setPTC($PTC)
    {
      $this->PTC = $PTC;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMinimumChangeFee()
    {
      return $this->MinimumChangeFee;
    }

    /**
     * @param typeMoney $MinimumChangeFee
     * @return \Santosdave\Travelport\GDSQueue\ExchangePenaltyInfo
     */
    public function setMinimumChangeFee($MinimumChangeFee)
    {
      $this->MinimumChangeFee = $MinimumChangeFee;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMaximumChangeFee()
    {
      return $this->MaximumChangeFee;
    }

    /**
     * @param typeMoney $MaximumChangeFee
     * @return \Santosdave\Travelport\GDSQueue\ExchangePenaltyInfo
     */
    public function setMaximumChangeFee($MaximumChangeFee)
    {
      $this->MaximumChangeFee = $MaximumChangeFee;
      return $this;
    }

}
