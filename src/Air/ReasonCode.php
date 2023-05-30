<?php

namespace FilippoToso\Travelport\Air;

class ReasonCode
{

    /**
     * @var string $OutOfPolicy
     */
    protected $OutOfPolicy = null;

    /**
     * @var string $PurposeOfTrip
     */
    protected $PurposeOfTrip = null;

    /**
     * @var Remark $Remark
     */
    protected $Remark = null;

    /**
     * @param Remark $Remark
     */
    public function __construct($Remark = null)
    {
      $this->Remark = $Remark;
    }

    /**
     * @return string
     */
    public function getOutOfPolicy()
    {
      return $this->OutOfPolicy;
    }

    /**
     * @param string $OutOfPolicy
     * @return \FilippoToso\Travelport\Air\ReasonCode
     */
    public function setOutOfPolicy($OutOfPolicy)
    {
      $this->OutOfPolicy = $OutOfPolicy;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurposeOfTrip()
    {
      return $this->PurposeOfTrip;
    }

    /**
     * @param string $PurposeOfTrip
     * @return \FilippoToso\Travelport\Air\ReasonCode
     */
    public function setPurposeOfTrip($PurposeOfTrip)
    {
      $this->PurposeOfTrip = $PurposeOfTrip;
      return $this;
    }

    /**
     * @return Remark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param Remark $Remark
     * @return \FilippoToso\Travelport\Air\ReasonCode
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

}
