<?php

namespace Santosdave\Travelport\Hotel;

class typeGuestChildInformation
{

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @param int $Age
     */
    public function __construct($Age = null)
    {
      $this->Age = $Age;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return \Santosdave\Travelport\Hotel\typeGuestChildInformation
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
