<?php

namespace Santosdave\Travelport\Rail;

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
     * @return \Santosdave\Travelport\Rail\BasicDetailsOnly
     */
    public function setReturnBasicDetails($ReturnBasicDetails)
    {
      $this->ReturnBasicDetails = $ReturnBasicDetails;
      return $this;
    }

}
