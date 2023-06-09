<?php

namespace Santosdave\Travelport\GDSQueue;

class typeOTASubKey
{

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    /**
     * @var typeOTACode $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param typeOTACode $Name
     * @param string $Description
     */
    public function __construct($Name = null, $Description = null)
    {
      $this->Name = $Name;
      $this->Description = $Description;
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
     * @return \Santosdave\Travelport\GDSQueue\typeOTASubKey
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return typeOTACode
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeOTACode $Name
     * @return \Santosdave\Travelport\GDSQueue\typeOTASubKey
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Santosdave\Travelport\GDSQueue\typeOTASubKey
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
