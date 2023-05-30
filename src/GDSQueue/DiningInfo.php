<?php

namespace Santosdave\Travelport\GDSQueue;

class DiningInfo
{

    /**
     * @var StringLength1 $Seating
     */
    protected $Seating = null;

    /**
     * @var typeStatusCode $Status
     */
    protected $Status = null;

    /**
     * @var int $TableSize
     */
    protected $TableSize = null;

    /**
     * @param StringLength1 $Seating
     * @param typeStatusCode $Status
     * @param int $TableSize
     */
    public function __construct($Seating = null, $Status = null, $TableSize = null)
    {
      $this->Seating = $Seating;
      $this->Status = $Status;
      $this->TableSize = $TableSize;
    }

    /**
     * @return StringLength1
     */
    public function getSeating()
    {
      return $this->Seating;
    }

    /**
     * @param StringLength1 $Seating
     * @return \Santosdave\Travelport\GDSQueue\DiningInfo
     */
    public function setSeating($Seating)
    {
      $this->Seating = $Seating;
      return $this;
    }

    /**
     * @return typeStatusCode
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeStatusCode $Status
     * @return \Santosdave\Travelport\GDSQueue\DiningInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getTableSize()
    {
      return $this->TableSize;
    }

    /**
     * @param int $TableSize
     * @return \Santosdave\Travelport\GDSQueue\DiningInfo
     */
    public function setTableSize($TableSize)
    {
      $this->TableSize = $TableSize;
      return $this;
    }

}
