<?php

namespace Santosdave\Travelport\Rail;

class CategoryDetailsType
{

    /**
     * @var ValueDetails[] $CategoryDetails
     */
    protected $CategoryDetails = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param string $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return ValueDetails[]
     */
    public function getCategoryDetails()
    {
      return $this->CategoryDetails;
    }

    /**
     * @param ValueDetails[] $CategoryDetails
     * @return \Santosdave\Travelport\Rail\CategoryDetailsType
     */
    public function setCategoryDetails(array $CategoryDetails = null)
    {
      $this->CategoryDetails = $CategoryDetails;
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
     * @return \Santosdave\Travelport\Rail\CategoryDetailsType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
