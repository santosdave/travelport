<?php

namespace Santosdave\Travelport\Vehicle;

class typeAgencyPayment
{

    /**
     * @var anonymous64 $AgencyBillingIdentifier
     */
    protected $AgencyBillingIdentifier = null;

    /**
     * @var anonymous65 $AgencyBillingNumber
     */
    protected $AgencyBillingNumber = null;

    /**
     * @var anonymous66 $AgencyBillingPassword
     */
    protected $AgencyBillingPassword = null;

    /**
     * @param anonymous64 $AgencyBillingIdentifier
     * @param anonymous65 $AgencyBillingNumber
     * @param anonymous66 $AgencyBillingPassword
     */
    public function __construct($AgencyBillingIdentifier = null, $AgencyBillingNumber = null, $AgencyBillingPassword = null)
    {
      $this->AgencyBillingIdentifier = $AgencyBillingIdentifier;
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      $this->AgencyBillingPassword = $AgencyBillingPassword;
    }

    /**
     * @return anonymous64
     */
    public function getAgencyBillingIdentifier()
    {
      return $this->AgencyBillingIdentifier;
    }

    /**
     * @param anonymous64 $AgencyBillingIdentifier
     * @return \Santosdave\Travelport\Vehicle\typeAgencyPayment
     */
    public function setAgencyBillingIdentifier($AgencyBillingIdentifier)
    {
      $this->AgencyBillingIdentifier = $AgencyBillingIdentifier;
      return $this;
    }

    /**
     * @return anonymous65
     */
    public function getAgencyBillingNumber()
    {
      return $this->AgencyBillingNumber;
    }

    /**
     * @param anonymous65 $AgencyBillingNumber
     * @return \Santosdave\Travelport\Vehicle\typeAgencyPayment
     */
    public function setAgencyBillingNumber($AgencyBillingNumber)
    {
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      return $this;
    }

    /**
     * @return anonymous66
     */
    public function getAgencyBillingPassword()
    {
      return $this->AgencyBillingPassword;
    }

    /**
     * @param anonymous66 $AgencyBillingPassword
     * @return \Santosdave\Travelport\Vehicle\typeAgencyPayment
     */
    public function setAgencyBillingPassword($AgencyBillingPassword)
    {
      $this->AgencyBillingPassword = $AgencyBillingPassword;
      return $this;
    }

}
