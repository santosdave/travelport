<?php

namespace Santosdave\Travelport\GDSQueue;

class BasicDetailsOnly
{

    /**
     * @var boolean $ReturnBasicDetails
     */
    protected $ReturnBasicDetails = null;

    /**
     * @param boolean $ReturnBasicDetails
     */
    public function __construct($ReturnBasicDetails = null)
    {
      $this->ReturnBasicDetails = $ReturnBasicDetails;
    }

    /**
     * @return boolean
     */
    public function getReturnBasicDetails()
    {
      return $this->ReturnBasicDetails;
    }

    /**
     * @param boolean $ReturnBasicDetails
     * @return \Santosdave\Travelport\GDSQueue\BasicDetailsOnly
     */
    public function setReturnBasicDetails($ReturnBasicDetails)
    {
      $this->ReturnBasicDetails = $ReturnBasicDetails;
      return $this;
    }

}
