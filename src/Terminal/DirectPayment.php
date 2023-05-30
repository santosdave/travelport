<?php

namespace Santosdave\Travelport\Terminal;

class DirectPayment
{

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @param string $Text
     */
    public function __construct($Text = null)
    {
      $this->Text = $Text;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \Santosdave\Travelport\Terminal\DirectPayment
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
