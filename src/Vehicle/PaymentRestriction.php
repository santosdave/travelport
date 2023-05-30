<?php

namespace Santosdave\Travelport\Vehicle;

class PaymentRestriction
{

    /**
     * @var CardRestriction $CardRestriction
     */
    protected $CardRestriction = null;

    /**
     * @var AddressRestriction $AddressRestriction
     */
    protected $AddressRestriction = null;

    /**
     * @param CardRestriction $CardRestriction
     * @param AddressRestriction $AddressRestriction
     */
    public function __construct($CardRestriction = null, $AddressRestriction = null)
    {
      $this->CardRestriction = $CardRestriction;
      $this->AddressRestriction = $AddressRestriction;
    }

    /**
     * @return CardRestriction
     */
    public function getCardRestriction()
    {
      return $this->CardRestriction;
    }

    /**
     * @param CardRestriction $CardRestriction
     * @return \Santosdave\Travelport\Vehicle\PaymentRestriction
     */
    public function setCardRestriction($CardRestriction)
    {
      $this->CardRestriction = $CardRestriction;
      return $this;
    }

    /**
     * @return AddressRestriction
     */
    public function getAddressRestriction()
    {
      return $this->AddressRestriction;
    }

    /**
     * @param AddressRestriction $AddressRestriction
     * @return \Santosdave\Travelport\Vehicle\PaymentRestriction
     */
    public function setAddressRestriction($AddressRestriction)
    {
      $this->AddressRestriction = $AddressRestriction;
      return $this;
    }

}
