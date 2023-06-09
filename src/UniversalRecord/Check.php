<?php

namespace Santosdave\Travelport\UniversalRecord;

class Check
{

    /**
     * @var anonymous22 $MICRNumber
     */
    protected $MICRNumber = null;

    /**
     * @var string $RoutingNumber
     */
    protected $RoutingNumber = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var string $CheckNumber
     */
    protected $CheckNumber = null;

    /**
     * @param anonymous22 $MICRNumber
     * @param string $RoutingNumber
     * @param string $AccountNumber
     * @param string $CheckNumber
     */
    public function __construct($MICRNumber = null, $RoutingNumber = null, $AccountNumber = null, $CheckNumber = null)
    {
      $this->MICRNumber = $MICRNumber;
      $this->RoutingNumber = $RoutingNumber;
      $this->AccountNumber = $AccountNumber;
      $this->CheckNumber = $CheckNumber;
    }

    /**
     * @return anonymous22
     */
    public function getMICRNumber()
    {
      return $this->MICRNumber;
    }

    /**
     * @param anonymous22 $MICRNumber
     * @return \Santosdave\Travelport\UniversalRecord\Check
     */
    public function setMICRNumber($MICRNumber)
    {
      $this->MICRNumber = $MICRNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber()
    {
      return $this->RoutingNumber;
    }

    /**
     * @param string $RoutingNumber
     * @return \Santosdave\Travelport\UniversalRecord\Check
     */
    public function setRoutingNumber($RoutingNumber)
    {
      $this->RoutingNumber = $RoutingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \Santosdave\Travelport\UniversalRecord\Check
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckNumber()
    {
      return $this->CheckNumber;
    }

    /**
     * @param string $CheckNumber
     * @return \Santosdave\Travelport\UniversalRecord\Check
     */
    public function setCheckNumber($CheckNumber)
    {
      $this->CheckNumber = $CheckNumber;
      return $this;
    }

}
