<?php

namespace Santosdave\Travelport\UniversalRecord;

class HotelStayRef
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeRef $Key
     */
    public function __construct($Key = null)
    {
      $this->Key = $Key;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \Santosdave\Travelport\UniversalRecord\HotelStayRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
