<?php

namespace Santosdave\Travelport\UniversalRecord;

class URLInfo
{

    /**
     * @var typeGeneralText[] $Text
     */
    protected $Text = null;

    /**
     * @var anyURI[] $URL
     */
    protected $URL = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeGeneralText[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param typeGeneralText[] $Text
     * @return \Santosdave\Travelport\UniversalRecord\URLInfo
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return anyURI[]
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param anyURI[] $URL
     * @return \Santosdave\Travelport\UniversalRecord\URLInfo
     */
    public function setURL(array $URL = null)
    {
      $this->URL = $URL;
      return $this;
    }

}
