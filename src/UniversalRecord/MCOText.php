<?php

namespace Santosdave\Travelport\UniversalRecord;

class MCOText extends typeFreeFormText
{

    /**
     * @var typeFreeFormText $_
     */
    protected $_ = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param typeFreeFormText $_
     * @param string $Type
     */
    public function __construct($_ = null, $Type = null)
    {
      parent::__construct($_);
      $this->_ = $_;
      $this->Type = $Type;
    }

    /**
     * @return typeFreeFormText
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeFreeFormText $_
     * @return \Santosdave\Travelport\UniversalRecord\MCOText
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Santosdave\Travelport\UniversalRecord\MCOText
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
