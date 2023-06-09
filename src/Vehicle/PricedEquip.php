<?php

namespace Santosdave\Travelport\Vehicle;

class PricedEquip
{

    /**
     * @var Equipment $Equipment
     */
    protected $Equipment = null;

    /**
     * @var Charge $Charge
     */
    protected $Charge = null;

    /**
     * @param Equipment $Equipment
     * @param Charge $Charge
     */
    public function __construct($Equipment = null, $Charge = null)
    {
      $this->Equipment = $Equipment;
      $this->Charge = $Charge;
    }

    /**
     * @return Equipment
     */
    public function getEquipment()
    {
      return $this->Equipment;
    }

    /**
     * @param Equipment $Equipment
     * @return \Santosdave\Travelport\Vehicle\PricedEquip
     */
    public function setEquipment($Equipment)
    {
      $this->Equipment = $Equipment;
      return $this;
    }

    /**
     * @return Charge
     */
    public function getCharge()
    {
      return $this->Charge;
    }

    /**
     * @param Charge $Charge
     * @return \Santosdave\Travelport\Vehicle\PricedEquip
     */
    public function setCharge($Charge)
    {
      $this->Charge = $Charge;
      return $this;
    }

}
