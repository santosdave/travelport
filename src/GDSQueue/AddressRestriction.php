<?php

namespace FilippoToso\Travelport\GDSQueue;

class AddressRestriction
{

    /**
     * @var RequiredField $RequiredField
     */
    protected $RequiredField = null;

    /**
     * @param RequiredField $RequiredField
     */
    public function __construct($RequiredField = null)
    {
      $this->RequiredField = $RequiredField;
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
     * @return \FilippoToso\Travelport\GDSQueue\AddressRestriction
     */
    public function setRequiredField($RequiredField)
    {
      $this->RequiredField = $RequiredField;
      return $this;
    }

}
