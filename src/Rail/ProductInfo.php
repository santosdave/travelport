<?php

namespace Santosdave\Travelport\Rail;

class ProductInfo
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @param Name $Name
     */
    public function __construct($Name = null)
    {
      $this->Name = $Name;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \Santosdave\Travelport\Rail\ProductInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
