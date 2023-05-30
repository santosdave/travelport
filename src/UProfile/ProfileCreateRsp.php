<?php

namespace Santosdave\Travelport\UProfile;

class ProfileCreateRsp extends BaseRsp
{

    /**
     * @var Profile $Profile
     */
    protected $Profile = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param Profile $Profile
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $Profile = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->Profile = $Profile;
    }

    /**
     * @return Profile
     */
    public function getProfile()
    {
      return $this->Profile;
    }

    /**
     * @param Profile $Profile
     * @return \Santosdave\Travelport\UProfile\ProfileCreateRsp
     */
    public function setProfile($Profile)
    {
      $this->Profile = $Profile;
      return $this;
    }

}
