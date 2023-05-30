<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FareRuleCategory
{

    /**
     * @var anonymous741 $Category
     */
    protected $Category = null;

    /**
     * @param anonymous741 $Category
     */
    public function __construct($Category = null)
    {
      $this->Category = $Category;
    }

    /**
     * @return anonymous741
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous741 $Category
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleCategory
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
