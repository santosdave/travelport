<?php

namespace Santosdave\Travelport\GDSQueue;

class FareRuleCategoryTypes
{

    /**
     * @var ValueDetails[] $CategoryDetails
     */
    protected $CategoryDetails = null;

    /**
     * @var CategoryDetailsType[] $VariableCategoryDetails
     */
    protected $VariableCategoryDetails = null;

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
     * @return \Santosdave\Travelport\GDSQueue\FareRuleCategoryTypes
     */
    public function setCategoryDetails(array $CategoryDetails = null)
    {
      $this->CategoryDetails = $CategoryDetails;
      return $this;
    }

    /**
     * @return CategoryDetailsType[]
     */
    public function getVariableCategoryDetails()
    {
      return $this->VariableCategoryDetails;
    }

    /**
     * @param CategoryDetailsType[] $VariableCategoryDetails
     * @return \Santosdave\Travelport\GDSQueue\FareRuleCategoryTypes
     */
    public function setVariableCategoryDetails(array $VariableCategoryDetails = null)
    {
      $this->VariableCategoryDetails = $VariableCategoryDetails;
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
     * @return \Santosdave\Travelport\GDSQueue\FareRuleCategoryTypes
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
