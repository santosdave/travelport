<?php

namespace Santosdave\Travelport\Util;

class PhoneNumber
{

    /**
     * @var ProviderReservationInfoRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var anonymous93 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous94 $Location
     */
    protected $Location = null;

    /**
     * @var anonymous95 $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var anonymous96 $AreaCode
     */
    protected $AreaCode = null;

    /**
     * @var anonymous97 $Number
     */
    protected $Number = null;

    /**
     * @var anonymous98 $Extension
     */
    protected $Extension = null;

    /**
     * @var anonymous99 $Text
     */
    protected $Text = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param anonymous93 $Type
     * @param anonymous94 $Location
     * @param anonymous95 $CountryCode
     * @param anonymous96 $AreaCode
     * @param anonymous97 $Number
     * @param anonymous98 $Extension
     * @param anonymous99 $Text
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($ProviderReservationInfoRef = null, $Key = null, $Type = null, $Location = null, $CountryCode = null, $AreaCode = null, $Number = null, $Extension = null, $Text = null, $ElStat = null, $KeyOverride = null)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Key = $Key;
      $this->Type = $Type;
      $this->Location = $Location;
      $this->CountryCode = $CountryCode;
      $this->AreaCode = $AreaCode;
      $this->Number = $Number;
      $this->Extension = $Extension;
      $this->Text = $Text;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return ProviderReservationInfoRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @return \Santosdave\Travelport\Util\PhoneNumber
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
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
     * @return \Santosdave\Travelport\Util\PhoneNumber
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous93
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous93 $Type
     * @return \Santosdave\Travelport\Util\PhoneNumber
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous94
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous94 $Location
     * @return \Santosdave\Travelport\Util\PhoneNumber
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return anonymous95
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param anonymous95 $CountryCode
     * @return \Santosdave\Travelport\Util\PhoneNumber
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return anonymous96
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param anonymous96 $AreaCode
     * @return \Santosdave\Travelport\Util\PhoneNumber
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
      return $this;
    }

    /**
     * @return anonymous97
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param anonymous97 $Number
     * @return \Santosdave\Travelport\Util\PhoneNumber
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return anonymous98
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param anonymous98 $Extension
     * @return \Santosdave\Travelport\Util\PhoneNumber
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return anonymous99
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param anonymous99 $Text
     * @return \Santosdave\Travelport\Util\PhoneNumber
     */
    public function setText($Text)
    {
      $this->Text = $Text;
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
     * @return \Santosdave\Travelport\Util\PhoneNumber
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
     * @return \Santosdave\Travelport\Util\PhoneNumber
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
