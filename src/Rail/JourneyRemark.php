<?php

namespace Santosdave\Travelport\Rail;

class JourneyRemark
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @param string $_
     * @param string $Category
     */
    public function __construct($_ = null, $Category = null)
    {
      $this->_ = $_;
      $this->Category = $Category;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \Santosdave\Travelport\Rail\JourneyRemark
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \Santosdave\Travelport\Rail\JourneyRemark
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
