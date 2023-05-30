<?php

namespace Santosdave\Travelport\System;

class typeAgencyHierarchyLongReference extends typeAgencyHierarchyReference
{

    /**
     * @var int $ProfileVersion
     */
    protected $ProfileVersion = null;

    /**
     * @var anonymous363 $ProfileName
     */
    protected $ProfileName = null;

    /**
     * @param typeProfileID $ProfileID
     * @param typeAgencyProfileLevel $ProfileType
     * @param int $ProfileVersion
     * @param anonymous363 $ProfileName
     */
    public function __construct($ProfileID = null, $ProfileType = null, $ProfileVersion = null, $ProfileName = null)
    {
      parent::__construct($ProfileID, $ProfileType);
      $this->ProfileVersion = $ProfileVersion;
      $this->ProfileName = $ProfileName;
    }

    /**
     * @return int
     */
    public function getProfileVersion()
    {
      return $this->ProfileVersion;
    }

    /**
     * @param int $ProfileVersion
     * @return \Santosdave\Travelport\System\typeAgencyHierarchyLongReference
     */
    public function setProfileVersion($ProfileVersion)
    {
      $this->ProfileVersion = $ProfileVersion;
      return $this;
    }

    /**
     * @return anonymous363
     */
    public function getProfileName()
    {
      return $this->ProfileName;
    }

    /**
     * @param anonymous363 $ProfileName
     * @return \Santosdave\Travelport\System\typeAgencyHierarchyLongReference
     */
    public function setProfileName($ProfileName)
    {
      $this->ProfileName = $ProfileName;
      return $this;
    }

}
