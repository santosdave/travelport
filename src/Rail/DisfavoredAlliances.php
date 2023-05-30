<?php

namespace Santosdave\Travelport\Rail;

class DisfavoredAlliances
{

    /**
     * @var Alliance $Alliance
     */
    protected $Alliance = null;

    /**
     * @param Alliance $Alliance
     */
    public function __construct($Alliance = null)
    {
      $this->Alliance = $Alliance;
    }

    /**
     * @return Alliance
     */
    public function getAlliance()
    {
      return $this->Alliance;
    }

    /**
     * @param Alliance $Alliance
     * @return \Santosdave\Travelport\Rail\DisfavoredAlliances
     */
    public function setAlliance($Alliance)
    {
      $this->Alliance = $Alliance;
      return $this;
    }

}
