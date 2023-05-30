<?php

namespace FilippoToso\Travelport\System;

class HostTokenList
{

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @param HostToken $HostToken
     */
    public function __construct($HostToken = null)
    {
      $this->HostToken = $HostToken;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\System\HostTokenList
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

}
