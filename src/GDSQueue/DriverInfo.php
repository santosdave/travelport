<?php

namespace FilippoToso\Travelport\GDSQueue;

class DriverInfo
{

    /**
     * @var anonymous612 $Age
     */
    protected $Age = null;

    /**
     * @param anonymous612 $Age
     */
    public function __construct($Age = null)
    {
      $this->Age = $Age;
    }

    /**
     * @return anonymous612
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param anonymous612 $Age
     * @return \FilippoToso\Travelport\GDSQueue\DriverInfo
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
