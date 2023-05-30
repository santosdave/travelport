<?php

namespace Santosdave\Travelport\UniversalRecord;

class PaymentInformation extends typePaymentInformation
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param string $BillingNumber
     * @param string $BillingReferenceNumber
     * @param anonymous1124 $PrePayment
     * @param typeRef $Key
     */
    public function __construct($BillingNumber = null, $BillingReferenceNumber = null, $PrePayment = null, $Key = null)
    {
      parent::__construct($BillingNumber, $BillingReferenceNumber, $PrePayment);
      $this->Key = $Key;
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
     * @return \Santosdave\Travelport\UniversalRecord\PaymentInformation
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
