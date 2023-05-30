<?php

namespace Santosdave\Travelport\Rail;

class ServiceGroup
{

    /**
     * @var ServiceSubGroup $ServiceSubGroup
     */
    protected $ServiceSubGroup = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param ServiceSubGroup $ServiceSubGroup
     * @param string $Code
     */
    public function __construct($ServiceSubGroup = null, $Code = null)
    {
      $this->ServiceSubGroup = $ServiceSubGroup;
      $this->Code = $Code;
    }

    /**
     * @return ServiceSubGroup
     */
    public function getServiceSubGroup()
    {
      return $this->ServiceSubGroup;
    }

    /**
     * @param ServiceSubGroup $ServiceSubGroup
     * @return \Santosdave\Travelport\Rail\ServiceGroup
     */
    public function setServiceSubGroup($ServiceSubGroup)
    {
      $this->ServiceSubGroup = $ServiceSubGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Santosdave\Travelport\Rail\ServiceGroup
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
