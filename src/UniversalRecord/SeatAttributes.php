<?php

namespace FilippoToso\Travelport\UniversalRecord;

class SeatAttributes
{

    /**
     * @var SeatAttribute $SeatAttribute
     */
    protected $SeatAttribute = null;

    /**
     * @param SeatAttribute $SeatAttribute
     */
    public function __construct($SeatAttribute = null)
    {
      $this->SeatAttribute = $SeatAttribute;
    }

    /**
     * @return SeatAttribute
     */
    public function getSeatAttribute()
    {
      return $this->SeatAttribute;
    }

    /**
     * @param SeatAttribute $SeatAttribute
     * @return \FilippoToso\Travelport\UniversalRecord\SeatAttributes
     */
    public function setSeatAttribute($SeatAttribute)
    {
      $this->SeatAttribute = $SeatAttribute;
      return $this;
    }

}
