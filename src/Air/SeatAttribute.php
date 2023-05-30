<?php

namespace FilippoToso\Travelport\Air;

class SeatAttribute
{

    /**
     * @var anonymous479 $Value
     */
    protected $Value = null;

    /**
     * @param anonymous479 $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return anonymous479
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous479 $Value
     * @return \FilippoToso\Travelport\Air\SeatAttribute
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
