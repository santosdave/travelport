<?php

namespace FilippoToso\Travelport\Rail;

class DisplayDetail
{

    /**
     * @var typeDisplayDetailName $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param typeDisplayDetailName $Name
     * @param string $Value
     */
    public function __construct($Name = null, $Value = null)
    {
      $this->Name = $Name;
      $this->Value = $Value;
    }

    /**
     * @return typeDisplayDetailName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeDisplayDetailName $Name
     * @return \FilippoToso\Travelport\Rail\DisplayDetail
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FilippoToso\Travelport\Rail\DisplayDetail
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
