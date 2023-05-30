<?php

namespace Santosdave\Travelport\Rail;

class typeSavedTripNote
{

    /**
     * @var anonymous1419 $Text
     */
    protected $Text = null;

    /**
     * @param anonymous1419 $Text
     */
    public function __construct($Text = null)
    {
      $this->Text = $Text;
    }

    /**
     * @return anonymous1419
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param anonymous1419 $Text
     * @return \Santosdave\Travelport\Rail\typeSavedTripNote
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
