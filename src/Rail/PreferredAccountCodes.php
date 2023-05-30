<?php

namespace FilippoToso\Travelport\Rail;

class PreferredAccountCodes
{

    /**
     * @var AccountCode $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @param AccountCode $AccountCode
     */
    public function __construct($AccountCode = null)
    {
      $this->AccountCode = $AccountCode;
    }

    /**
     * @return AccountCode
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param AccountCode $AccountCode
     * @return \FilippoToso\Travelport\Rail\PreferredAccountCodes
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

}
