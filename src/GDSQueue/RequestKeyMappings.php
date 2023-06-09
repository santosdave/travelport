<?php

namespace Santosdave\Travelport\GDSQueue;

class RequestKeyMappings
{

    /**
     * @var KeyMapping $KeyMapping
     */
    protected $KeyMapping = null;

    /**
     * @param KeyMapping $KeyMapping
     */
    public function __construct($KeyMapping = null)
    {
      $this->KeyMapping = $KeyMapping;
    }

    /**
     * @return KeyMapping
     */
    public function getKeyMapping()
    {
      return $this->KeyMapping;
    }

    /**
     * @param KeyMapping $KeyMapping
     * @return \Santosdave\Travelport\GDSQueue\RequestKeyMappings
     */
    public function setKeyMapping($KeyMapping)
    {
      $this->KeyMapping = $KeyMapping;
      return $this;
    }

}
