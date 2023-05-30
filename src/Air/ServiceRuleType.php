<?php

namespace Santosdave\Travelport\Air;

class ServiceRuleType
{

    /**
     * @var ApplicationRules $ApplicationRules
     */
    protected $ApplicationRules = null;

    /**
     * @var ApplicationLevel $ApplicationLevel
     */
    protected $ApplicationLevel = null;

    /**
     * @var ModifyRules $ModifyRules
     */
    protected $ModifyRules = null;

    /**
     * @var SecondaryTypeRules $SecondaryTypeRules
     */
    protected $SecondaryTypeRules = null;

    /**
     * @var FormattedTextTextType[] $Remarks
     */
    protected $Remarks = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeRef $Key
     */
    public function __construct($Key = null)
    {
      $this->Key = $Key;
    }

    /**
     * @return ApplicationRules
     */
    public function getApplicationRules()
    {
      return $this->ApplicationRules;
    }

    /**
     * @param ApplicationRules $ApplicationRules
     * @return \Santosdave\Travelport\Air\ServiceRuleType
     */
    public function setApplicationRules($ApplicationRules)
    {
      $this->ApplicationRules = $ApplicationRules;
      return $this;
    }

    /**
     * @return ApplicationLevel
     */
    public function getApplicationLevel()
    {
      return $this->ApplicationLevel;
    }

    /**
     * @param ApplicationLevel $ApplicationLevel
     * @return \Santosdave\Travelport\Air\ServiceRuleType
     */
    public function setApplicationLevel($ApplicationLevel)
    {
      $this->ApplicationLevel = $ApplicationLevel;
      return $this;
    }

    /**
     * @return ModifyRules
     */
    public function getModifyRules()
    {
      return $this->ModifyRules;
    }

    /**
     * @param ModifyRules $ModifyRules
     * @return \Santosdave\Travelport\Air\ServiceRuleType
     */
    public function setModifyRules($ModifyRules)
    {
      $this->ModifyRules = $ModifyRules;
      return $this;
    }

    /**
     * @return SecondaryTypeRules
     */
    public function getSecondaryTypeRules()
    {
      return $this->SecondaryTypeRules;
    }

    /**
     * @param SecondaryTypeRules $SecondaryTypeRules
     * @return \Santosdave\Travelport\Air\ServiceRuleType
     */
    public function setSecondaryTypeRules($SecondaryTypeRules)
    {
      $this->SecondaryTypeRules = $SecondaryTypeRules;
      return $this;
    }

    /**
     * @return FormattedTextTextType[]
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param FormattedTextTextType[] $Remarks
     * @return \Santosdave\Travelport\Air\ServiceRuleType
     */
    public function setRemarks(array $Remarks = null)
    {
      $this->Remarks = $Remarks;
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
     * @return \Santosdave\Travelport\Air\ServiceRuleType
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
