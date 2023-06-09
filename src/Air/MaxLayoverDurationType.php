<?php

namespace Santosdave\Travelport\Air;

class MaxLayoverDurationType
{

    /**
     * @var MaxLayoverDurationRangeType $Domestic
     */
    protected $Domestic = null;

    /**
     * @var MaxLayoverDurationRangeType $Gateway
     */
    protected $Gateway = null;

    /**
     * @var MaxLayoverDurationRangeType $International
     */
    protected $International = null;

    /**
     * @param MaxLayoverDurationRangeType $Domestic
     * @param MaxLayoverDurationRangeType $Gateway
     * @param MaxLayoverDurationRangeType $International
     */
    public function __construct($Domestic = null, $Gateway = null, $International = null)
    {
      $this->Domestic = $Domestic;
      $this->Gateway = $Gateway;
      $this->International = $International;
    }

    /**
     * @return MaxLayoverDurationRangeType
     */
    public function getDomestic()
    {
      return $this->Domestic;
    }

    /**
     * @param MaxLayoverDurationRangeType $Domestic
     * @return \Santosdave\Travelport\Air\MaxLayoverDurationType
     */
    public function setDomestic($Domestic)
    {
      $this->Domestic = $Domestic;
      return $this;
    }

    /**
     * @return MaxLayoverDurationRangeType
     */
    public function getGateway()
    {
      return $this->Gateway;
    }

    /**
     * @param MaxLayoverDurationRangeType $Gateway
     * @return \Santosdave\Travelport\Air\MaxLayoverDurationType
     */
    public function setGateway($Gateway)
    {
      $this->Gateway = $Gateway;
      return $this;
    }

    /**
     * @return MaxLayoverDurationRangeType
     */
    public function getInternational()
    {
      return $this->International;
    }

    /**
     * @param MaxLayoverDurationRangeType $International
     * @return \Santosdave\Travelport\Air\MaxLayoverDurationType
     */
    public function setInternational($International)
    {
      $this->International = $International;
      return $this;
    }

}
