<?php

namespace Santosdave\Travelport\Terminal;

class ContinuityCheckOverride
{

    /**
     * @var typeNonBlanks $_
     */
    protected $_ = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeNonBlanks $_
     * @param typeRef $Key
     */
    public function __construct($_ = null, $Key = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
    }

    /**
     * @return typeNonBlanks
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeNonBlanks $_
     * @return \Santosdave\Travelport\Terminal\ContinuityCheckOverride
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \Santosdave\Travelport\Terminal\ContinuityCheckOverride
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
