<?php

namespace Santosdave\Travelport\GDSQueue;

class EmbargoList
{

    /**
     * @var Embargo $Embargo
     */
    protected $Embargo = null;

    /**
     * @param Embargo $Embargo
     */
    public function __construct($Embargo = null)
    {
      $this->Embargo = $Embargo;
    }

    /**
     * @return Embargo
     */
    public function getEmbargo()
    {
      return $this->Embargo;
    }

    /**
     * @param Embargo $Embargo
     * @return \Santosdave\Travelport\GDSQueue\EmbargoList
     */
    public function setEmbargo($Embargo)
    {
      $this->Embargo = $Embargo;
      return $this;
    }

}
