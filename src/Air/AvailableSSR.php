<?php

namespace Santosdave\Travelport\Air;

class AvailableSSR
{

    /**
     * @var SSR $SSR
     */
    protected $SSR = null;

    /**
     * @var ServiceRuleType[] $SSRRules
     */
    protected $SSRRules = null;

    /**
     * @var IndustryStandardSSR $IndustryStandardSSR
     */
    protected $IndustryStandardSSR = null;

    /**
     * @param SSR $SSR
     * @param IndustryStandardSSR $IndustryStandardSSR
     */
    public function __construct($SSR = null, $IndustryStandardSSR = null)
    {
      $this->SSR = $SSR;
      $this->IndustryStandardSSR = $IndustryStandardSSR;
    }

    /**
     * @return SSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param SSR $SSR
     * @return \Santosdave\Travelport\Air\AvailableSSR
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return ServiceRuleType[]
     */
    public function getSSRRules()
    {
      return $this->SSRRules;
    }

    /**
     * @param ServiceRuleType[] $SSRRules
     * @return \Santosdave\Travelport\Air\AvailableSSR
     */
    public function setSSRRules(array $SSRRules = null)
    {
      $this->SSRRules = $SSRRules;
      return $this;
    }

    /**
     * @return IndustryStandardSSR
     */
    public function getIndustryStandardSSR()
    {
      return $this->IndustryStandardSSR;
    }

    /**
     * @param IndustryStandardSSR $IndustryStandardSSR
     * @return \Santosdave\Travelport\Air\AvailableSSR
     */
    public function setIndustryStandardSSR($IndustryStandardSSR)
    {
      $this->IndustryStandardSSR = $IndustryStandardSSR;
      return $this;
    }

}
