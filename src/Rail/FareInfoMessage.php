<?php

namespace FilippoToso\Travelport\Rail;

class FareInfoMessage
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param string $_
     * @param typeRef $Key
     */
    public function __construct($_ = null, $Key = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Rail\FareInfoMessage
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
     * @return \FilippoToso\Travelport\Rail\FareInfoMessage
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
