<?php

namespace Santosdave\Travelport\Util;

class AccountCodes
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
     * @return \Santosdave\Travelport\Util\AccountCodes
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

}
