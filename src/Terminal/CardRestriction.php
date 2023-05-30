<?php

namespace Santosdave\Travelport\Terminal;

class CardRestriction
{

    /**
     * @var RequiredField $RequiredField
     */
    protected $RequiredField = null;

    /**
     * @var typeCardMerchantType $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param RequiredField $RequiredField
     * @param typeCardMerchantType $Code
     * @param string $Name
     */
    public function __construct($RequiredField = null, $Code = null, $Name = null)
    {
      $this->RequiredField = $RequiredField;
      $this->Code = $Code;
      $this->Name = $Name;
    }

    /**
     * @return RequiredField
     */
    public function getRequiredField()
    {
      return $this->RequiredField;
    }

    /**
     * @param RequiredField $RequiredField
     * @return \Santosdave\Travelport\Terminal\CardRestriction
     */
    public function setRequiredField($RequiredField)
    {
      $this->RequiredField = $RequiredField;
      return $this;
    }

    /**
     * @return typeCardMerchantType
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeCardMerchantType $Code
     * @return \Santosdave\Travelport\Terminal\CardRestriction
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Santosdave\Travelport\Terminal\CardRestriction
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
