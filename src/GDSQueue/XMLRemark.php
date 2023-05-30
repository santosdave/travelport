<?php

namespace Santosdave\Travelport\GDSQueue;

class XMLRemark
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
     * @var anonymous116 $Category
     */
    protected $Category = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param string $_
     * @param typeRef $Key
     * @param anonymous116 $Category
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($_ = null, $Key = null, $Category = null, $ElStat = null, $KeyOverride = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
      $this->Category = $Category;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \Santosdave\Travelport\GDSQueue\XMLRemark
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
     * @return \Santosdave\Travelport\GDSQueue\XMLRemark
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous116
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous116 $Category
     * @return \Santosdave\Travelport\GDSQueue\XMLRemark
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \Santosdave\Travelport\GDSQueue\XMLRemark
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \Santosdave\Travelport\GDSQueue\XMLRemark
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
