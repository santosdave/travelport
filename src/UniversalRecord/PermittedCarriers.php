<?php

namespace Santosdave\Travelport\UniversalRecord;

class PermittedCarriers
{

    /**
     * @var Carrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @param Carrier $Carrier
     */
    public function __construct($Carrier = null)
    {
      $this->Carrier = $Carrier;
    }

    /**
     * @return Carrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param Carrier $Carrier
     * @return \Santosdave\Travelport\UniversalRecord\PermittedCarriers
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

}
