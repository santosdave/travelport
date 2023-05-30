<?php

namespace Santosdave\Travelport\Rail;

class HotelBedding
{

    /**
     * @var typeBedding $Type
     */
    protected $Type = null;

    /**
     * @var int $NumberOfBeds
     */
    protected $NumberOfBeds = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @param typeBedding $Type
     * @param int $NumberOfBeds
     * @param typeMoney $Amount
     * @param string $Content
     */
    public function __construct($Type = null, $NumberOfBeds = null, $Amount = null, $Content = null)
    {
      $this->Type = $Type;
      $this->NumberOfBeds = $NumberOfBeds;
      $this->Amount = $Amount;
      $this->Content = $Content;
    }

    /**
     * @return typeBedding
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeBedding $Type
     * @return \Santosdave\Travelport\Rail\HotelBedding
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfBeds()
    {
      return $this->NumberOfBeds;
    }

    /**
     * @param int $NumberOfBeds
     * @return \Santosdave\Travelport\Rail\HotelBedding
     */
    public function setNumberOfBeds($NumberOfBeds)
    {
      $this->NumberOfBeds = $NumberOfBeds;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \Santosdave\Travelport\Rail\HotelBedding
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \Santosdave\Travelport\Rail\HotelBedding
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
