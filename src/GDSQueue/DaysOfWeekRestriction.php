<?php

namespace Santosdave\Travelport\GDSQueue;

class DaysOfWeekRestriction
{

    /**
     * @var boolean $RestrictionExistsInd
     */
    protected $RestrictionExistsInd = null;

    /**
     * @var string $Application
     */
    protected $Application = null;

    /**
     * @var boolean $IncludeExcludeUseInd
     */
    protected $IncludeExcludeUseInd = null;

    /**
     * @var boolean $Mon
     */
    protected $Mon = null;

    /**
     * @var boolean $Tue
     */
    protected $Tue = null;

    /**
     * @var boolean $Wed
     */
    protected $Wed = null;

    /**
     * @var boolean $Thu
     */
    protected $Thu = null;

    /**
     * @var boolean $Fri
     */
    protected $Fri = null;

    /**
     * @var boolean $Sat
     */
    protected $Sat = null;

    /**
     * @var boolean $Sun
     */
    protected $Sun = null;

    /**
     * @param boolean $RestrictionExistsInd
     * @param string $Application
     * @param boolean $IncludeExcludeUseInd
     * @param boolean $Mon
     * @param boolean $Tue
     * @param boolean $Wed
     * @param boolean $Thu
     * @param boolean $Fri
     * @param boolean $Sat
     * @param boolean $Sun
     */
    public function __construct($RestrictionExistsInd = null, $Application = null, $IncludeExcludeUseInd = null, $Mon = null, $Tue = null, $Wed = null, $Thu = null, $Fri = null, $Sat = null, $Sun = null)
    {
      $this->RestrictionExistsInd = $RestrictionExistsInd;
      $this->Application = $Application;
      $this->IncludeExcludeUseInd = $IncludeExcludeUseInd;
      $this->Mon = $Mon;
      $this->Tue = $Tue;
      $this->Wed = $Wed;
      $this->Thu = $Thu;
      $this->Fri = $Fri;
      $this->Sat = $Sat;
      $this->Sun = $Sun;
    }

    /**
     * @return boolean
     */
    public function getRestrictionExistsInd()
    {
      return $this->RestrictionExistsInd;
    }

    /**
     * @param boolean $RestrictionExistsInd
     * @return \Santosdave\Travelport\GDSQueue\DaysOfWeekRestriction
     */
    public function setRestrictionExistsInd($RestrictionExistsInd)
    {
      $this->RestrictionExistsInd = $RestrictionExistsInd;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplication()
    {
      return $this->Application;
    }

    /**
     * @param string $Application
     * @return \Santosdave\Travelport\GDSQueue\DaysOfWeekRestriction
     */
    public function setApplication($Application)
    {
      $this->Application = $Application;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeExcludeUseInd()
    {
      return $this->IncludeExcludeUseInd;
    }

    /**
     * @param boolean $IncludeExcludeUseInd
     * @return \Santosdave\Travelport\GDSQueue\DaysOfWeekRestriction
     */
    public function setIncludeExcludeUseInd($IncludeExcludeUseInd)
    {
      $this->IncludeExcludeUseInd = $IncludeExcludeUseInd;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMon()
    {
      return $this->Mon;
    }

    /**
     * @param boolean $Mon
     * @return \Santosdave\Travelport\GDSQueue\DaysOfWeekRestriction
     */
    public function setMon($Mon)
    {
      $this->Mon = $Mon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTue()
    {
      return $this->Tue;
    }

    /**
     * @param boolean $Tue
     * @return \Santosdave\Travelport\GDSQueue\DaysOfWeekRestriction
     */
    public function setTue($Tue)
    {
      $this->Tue = $Tue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWed()
    {
      return $this->Wed;
    }

    /**
     * @param boolean $Wed
     * @return \Santosdave\Travelport\GDSQueue\DaysOfWeekRestriction
     */
    public function setWed($Wed)
    {
      $this->Wed = $Wed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThu()
    {
      return $this->Thu;
    }

    /**
     * @param boolean $Thu
     * @return \Santosdave\Travelport\GDSQueue\DaysOfWeekRestriction
     */
    public function setThu($Thu)
    {
      $this->Thu = $Thu;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFri()
    {
      return $this->Fri;
    }

    /**
     * @param boolean $Fri
     * @return \Santosdave\Travelport\GDSQueue\DaysOfWeekRestriction
     */
    public function setFri($Fri)
    {
      $this->Fri = $Fri;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSat()
    {
      return $this->Sat;
    }

    /**
     * @param boolean $Sat
     * @return \Santosdave\Travelport\GDSQueue\DaysOfWeekRestriction
     */
    public function setSat($Sat)
    {
      $this->Sat = $Sat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSun()
    {
      return $this->Sun;
    }

    /**
     * @param boolean $Sun
     * @return \Santosdave\Travelport\GDSQueue\DaysOfWeekRestriction
     */
    public function setSun($Sun)
    {
      $this->Sun = $Sun;
      return $this;
    }

}
