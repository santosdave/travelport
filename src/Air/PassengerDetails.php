<?php

namespace Santosdave\Travelport\Air;

class PassengerDetails
{

    /**
     * @var LoyaltyCardDetails $LoyaltyCardDetails
     */
    protected $LoyaltyCardDetails = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typePTC $Code
     */
    protected $Code = null;

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @param LoyaltyCardDetails $LoyaltyCardDetails
     * @param typeRef $Key
     * @param typePTC $Code
     * @param int $Age
     */
    public function __construct($LoyaltyCardDetails = null, $Key = null, $Code = null, $Age = null)
    {
      $this->LoyaltyCardDetails = $LoyaltyCardDetails;
      $this->Key = $Key;
      $this->Code = $Code;
      $this->Age = $Age;
    }

    /**
     * @return LoyaltyCardDetails
     */
    public function getLoyaltyCardDetails()
    {
      return $this->LoyaltyCardDetails;
    }

    /**
     * @param LoyaltyCardDetails $LoyaltyCardDetails
     * @return \Santosdave\Travelport\Air\PassengerDetails
     */
    public function setLoyaltyCardDetails($LoyaltyCardDetails)
    {
      $this->LoyaltyCardDetails = $LoyaltyCardDetails;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \Santosdave\Travelport\Air\PassengerDetails
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typePTC $Code
     * @return \Santosdave\Travelport\Air\PassengerDetails
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return \Santosdave\Travelport\Air\PassengerDetails
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
