<?php

namespace Santosdave\Travelport\Util;

class PersonName
{

    /**
     * @var StringLength1to64 $First
     */
    protected $First = null;

    /**
     * @var StringLength1to64 $Last
     */
    protected $Last = null;

    /**
     * @var StringLength1to16 $Prefix
     */
    protected $Prefix = null;

    /**
     * @param StringLength1to64 $First
     * @param StringLength1to64 $Last
     * @param StringLength1to16 $Prefix
     */
    public function __construct($First = null, $Last = null, $Prefix = null)
    {
      $this->First = $First;
      $this->Last = $Last;
      $this->Prefix = $Prefix;
    }

    /**
     * @return StringLength1to64
     */
    public function getFirst()
    {
      return $this->First;
    }

    /**
     * @param StringLength1to64 $First
     * @return \Santosdave\Travelport\Util\PersonName
     */
    public function setFirst($First)
    {
      $this->First = $First;
      return $this;
    }

    /**
     * @return StringLength1to64
     */
    public function getLast()
    {
      return $this->Last;
    }

    /**
     * @param StringLength1to64 $Last
     * @return \Santosdave\Travelport\Util\PersonName
     */
    public function setLast($Last)
    {
      $this->Last = $Last;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getPrefix()
    {
      return $this->Prefix;
    }

    /**
     * @param StringLength1to16 $Prefix
     * @return \Santosdave\Travelport\Util\PersonName
     */
    public function setPrefix($Prefix)
    {
      $this->Prefix = $Prefix;
      return $this;
    }

}
