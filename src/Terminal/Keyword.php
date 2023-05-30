<?php

namespace Santosdave\Travelport\Terminal;

class Keyword extends typeKeyword
{

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    /**
     * @param anonymous391 $Name
     * @param UNKNOWN $Number
     * @param UNKNOWN $Description
     */
    public function __construct($Name = null, $Number = null, $Description = null)
    {
      parent::__construct($Name, $Number, $Description);
    }

    /**
     * @return string[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string[] $Text
     * @return \Santosdave\Travelport\Terminal\Keyword
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

}
