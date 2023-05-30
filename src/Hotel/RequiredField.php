<?php

namespace Santosdave\Travelport\Hotel;

class RequiredField
{

    /**
     * @var anonymous409 $Name
     */
    protected $Name = null;

    /**
     * @param anonymous409 $Name
     */
    public function __construct($Name = null)
    {
      $this->Name = $Name;
    }

    /**
     * @return anonymous409
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous409 $Name
     * @return \Santosdave\Travelport\Hotel\RequiredField
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
