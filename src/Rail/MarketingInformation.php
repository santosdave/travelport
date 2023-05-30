<?php

namespace Santosdave\Travelport\Rail;

class MarketingInformation
{

    /**
     * @var anyType[] $Text
     */
    protected $Text = null;

    /**
     * @param anyType[] $Text
     */
    public function __construct(array $Text = null)
    {
      $this->Text = $Text;
    }

    /**
     * @return anyType[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param anyType[] $Text
     * @return \Santosdave\Travelport\Rail\MarketingInformation
     */
    public function setText(array $Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
