<?php

namespace Santosdave\Travelport\UniversalRecord;

class typeVehicleRateDescription
{

    /**
     * @var Text[] $Text
     */
    protected $Text = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param Text[] $Text
     * @param string $Name
     */
    public function __construct(array $Text = null, $Name = null)
    {
      $this->Text = $Text;
      $this->Name = $Name;
    }

    /**
     * @return Text[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param Text[] $Text
     * @return \Santosdave\Travelport\UniversalRecord\typeVehicleRateDescription
     */
    public function setText(array $Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Santosdave\Travelport\UniversalRecord\typeVehicleRateDescription
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
