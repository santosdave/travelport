<?php

namespace Santosdave\Travelport\GDSQueue;

class AddSvc
{

    /**
     * @var string $RFIC
     */
    protected $RFIC = null;

    /**
     * @var string $RFISC
     */
    protected $RFISC = null;

    /**
     * @var string $SvcDescription
     */
    protected $SvcDescription = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var date $StartDate
     */
    protected $StartDate = null;

    /**
     * @param string $RFIC
     * @param string $RFISC
     * @param string $SvcDescription
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param date $StartDate
     */
    public function __construct($RFIC = null, $RFISC = null, $SvcDescription = null, $Origin = null, $Destination = null, $StartDate = null)
    {
      $this->RFIC = $RFIC;
      $this->RFISC = $RFISC;
      $this->SvcDescription = $SvcDescription;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->StartDate = $StartDate;
    }

    /**
     * @return string
     */
    public function getRFIC()
    {
      return $this->RFIC;
    }

    /**
     * @param string $RFIC
     * @return \Santosdave\Travelport\GDSQueue\AddSvc
     */
    public function setRFIC($RFIC)
    {
      $this->RFIC = $RFIC;
      return $this;
    }

    /**
     * @return string
     */
    public function getRFISC()
    {
      return $this->RFISC;
    }

    /**
     * @param string $RFISC
     * @return \Santosdave\Travelport\GDSQueue\AddSvc
     */
    public function setRFISC($RFISC)
    {
      $this->RFISC = $RFISC;
      return $this;
    }

    /**
     * @return string
     */
    public function getSvcDescription()
    {
      return $this->SvcDescription;
    }

    /**
     * @param string $SvcDescription
     * @return \Santosdave\Travelport\GDSQueue\AddSvc
     */
    public function setSvcDescription($SvcDescription)
    {
      $this->SvcDescription = $SvcDescription;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \Santosdave\Travelport\GDSQueue\AddSvc
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \Santosdave\Travelport\GDSQueue\AddSvc
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return \Santosdave\Travelport\GDSQueue\AddSvc
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

}
