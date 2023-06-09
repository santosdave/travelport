<?php

namespace Santosdave\Travelport\UniversalRecord;

class SessProp
{

    /**
     * @var string $nm
     */
    protected $nm = null;

    /**
     * @var string $val
     */
    protected $val = null;

    /**
     * @param string $nm
     * @param string $val
     */
    public function __construct($nm = null, $val = null)
    {
      $this->nm = $nm;
      $this->val = $val;
    }

    /**
     * @return string
     */
    public function getNm()
    {
      return $this->nm;
    }

    /**
     * @param string $nm
     * @return \Santosdave\Travelport\UniversalRecord\SessProp
     */
    public function setNm($nm)
    {
      $this->nm = $nm;
      return $this;
    }

    /**
     * @return string
     */
    public function getVal()
    {
      return $this->val;
    }

    /**
     * @param string $val
     * @return \Santosdave\Travelport\UniversalRecord\SessProp
     */
    public function setVal($val)
    {
      $this->val = $val;
      return $this;
    }

}
