<?php

namespace Santosdave\Travelport\System;

class typeAgencyHierarchyReference
{

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeAgencyProfileLevel $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param typeProfileID $ProfileID
     * @param typeAgencyProfileLevel $ProfileType
     */
    public function __construct($ProfileID = null, $ProfileType = null)
    {
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
    }

    /**
     * @return typeProfileID
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param typeProfileID $ProfileID
     * @return \Santosdave\Travelport\System\typeAgencyHierarchyReference
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeAgencyProfileLevel
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeAgencyProfileLevel $ProfileType
     * @return \Santosdave\Travelport\System\typeAgencyHierarchyReference
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
