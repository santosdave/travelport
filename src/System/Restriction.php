<?php

namespace Santosdave\Travelport\System;

class Restriction
{

    /**
     * @var string $Operation
     */
    protected $Operation = null;

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @param string $Operation
     * @param string $Reason
     */
    public function __construct($Operation = null, $Reason = null)
    {
      $this->Operation = $Operation;
      $this->Reason = $Reason;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
      return $this->Operation;
    }

    /**
     * @param string $Operation
     * @return \Santosdave\Travelport\System\Restriction
     */
    public function setOperation($Operation)
    {
      $this->Operation = $Operation;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return \Santosdave\Travelport\System\Restriction
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}
