<?php

namespace Santosdave\Travelport\Rail;

class HotelPropertyWithMediaItems
{

    /**
     * @var HotelProperty $HotelProperty
     */
    protected $HotelProperty = null;

    /**
     * @var MediaItem $MediaItem
     */
    protected $MediaItem = null;

    /**
     * @var typeResultMessage[] $MediaResultMessage
     */
    protected $MediaResultMessage = null;

    /**
     * @param HotelProperty $HotelProperty
     * @param MediaItem $MediaItem
     */
    public function __construct($HotelProperty = null, $MediaItem = null)
    {
      $this->HotelProperty = $HotelProperty;
      $this->MediaItem = $MediaItem;
    }

    /**
     * @return HotelProperty
     */
    public function getHotelProperty()
    {
      return $this->HotelProperty;
    }

    /**
     * @param HotelProperty $HotelProperty
     * @return \Santosdave\Travelport\Rail\HotelPropertyWithMediaItems
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

    /**
     * @return MediaItem
     */
    public function getMediaItem()
    {
      return $this->MediaItem;
    }

    /**
     * @param MediaItem $MediaItem
     * @return \Santosdave\Travelport\Rail\HotelPropertyWithMediaItems
     */
    public function setMediaItem($MediaItem)
    {
      $this->MediaItem = $MediaItem;
      return $this;
    }

    /**
     * @return typeResultMessage[]
     */
    public function getMediaResultMessage()
    {
      return $this->MediaResultMessage;
    }

    /**
     * @param typeResultMessage[] $MediaResultMessage
     * @return \Santosdave\Travelport\Rail\HotelPropertyWithMediaItems
     */
    public function setMediaResultMessage(array $MediaResultMessage = null)
    {
      $this->MediaResultMessage = $MediaResultMessage;
      return $this;
    }

}
