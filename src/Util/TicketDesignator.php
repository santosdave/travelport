<?php

namespace Santosdave\Travelport\Util;

class TicketDesignator
{

    /**
     * @var typeTicketDesignator $Value
     */
    protected $Value = null;

    /**
     * @param typeTicketDesignator $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param typeTicketDesignator $Value
     * @return \Santosdave\Travelport\Util\TicketDesignator
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
