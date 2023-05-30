<?php

namespace Santosdave\Travelport\GDSQueue;

class HotelRuleItem
{

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string[] $Text
     * @param string $Name
     */
    public function __construct(array $Text = null, $Name = null)
    {
      $this->Text = $Text;
      $this->Name = $Name;
    }

    /**
     * @return string[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string[] $Text
     * @return \Santosdave\Travelport\GDSQueue\HotelRuleItem
     */
    public function setText(array $Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Santosdave\Travelport\GDSQueue\HotelRuleItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
