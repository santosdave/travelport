<?php

namespace Santosdave\Travelport\UProfile;

class MiscFormOfPaymentHistory
{

    /**
     * @var anonymous917 $CreditCardType
     */
    protected $CreditCardType = null;

    /**
     * @var typeCreditCardNumber $CreditCardNumber
     */
    protected $CreditCardNumber = null;

    /**
     * @var gYearMonth $ExpDate
     */
    protected $ExpDate = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var anonymous918 $Category
     */
    protected $Category = null;

    /**
     * @var boolean $AcceptanceOverride
     */
    protected $AcceptanceOverride = null;

    /**
     * @param anonymous917 $CreditCardType
     * @param typeCreditCardNumber $CreditCardNumber
     * @param gYearMonth $ExpDate
     * @param string $Text
     * @param anonymous918 $Category
     * @param boolean $AcceptanceOverride
     */
    public function __construct($CreditCardType = null, $CreditCardNumber = null, $ExpDate = null, $Text = null, $Category = null, $AcceptanceOverride = null)
    {
      $this->CreditCardType = $CreditCardType;
      $this->CreditCardNumber = $CreditCardNumber;
      $this->ExpDate = $ExpDate;
      $this->Text = $Text;
      $this->Category = $Category;
      $this->AcceptanceOverride = $AcceptanceOverride;
    }

    /**
     * @return anonymous917
     */
    public function getCreditCardType()
    {
      return $this->CreditCardType;
    }

    /**
     * @param anonymous917 $CreditCardType
     * @return \Santosdave\Travelport\UProfile\MiscFormOfPaymentHistory
     */
    public function setCreditCardType($CreditCardType)
    {
      $this->CreditCardType = $CreditCardType;
      return $this;
    }

    /**
     * @return typeCreditCardNumber
     */
    public function getCreditCardNumber()
    {
      return $this->CreditCardNumber;
    }

    /**
     * @param typeCreditCardNumber $CreditCardNumber
     * @return \Santosdave\Travelport\UProfile\MiscFormOfPaymentHistory
     */
    public function setCreditCardNumber($CreditCardNumber)
    {
      $this->CreditCardNumber = $CreditCardNumber;
      return $this;
    }

    /**
     * @return gYearMonth
     */
    public function getExpDate()
    {
      return $this->ExpDate;
    }

    /**
     * @param gYearMonth $ExpDate
     * @return \Santosdave\Travelport\UProfile\MiscFormOfPaymentHistory
     */
    public function setExpDate($ExpDate)
    {
      $this->ExpDate = $ExpDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \Santosdave\Travelport\UProfile\MiscFormOfPaymentHistory
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return anonymous918
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous918 $Category
     * @return \Santosdave\Travelport\UProfile\MiscFormOfPaymentHistory
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAcceptanceOverride()
    {
      return $this->AcceptanceOverride;
    }

    /**
     * @param boolean $AcceptanceOverride
     * @return \Santosdave\Travelport\UProfile\MiscFormOfPaymentHistory
     */
    public function setAcceptanceOverride($AcceptanceOverride)
    {
      $this->AcceptanceOverride = $AcceptanceOverride;
      return $this;
    }

}
