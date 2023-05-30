<?php

namespace Santosdave\Travelport\GDSQueue;

class Rows
{

    /**
     * @var Row $Row
     */
    protected $Row = null;

    /**
     * @var typeRef $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @param Row $Row
     * @param typeRef $SegmentRef
     */
    public function __construct($Row = null, $SegmentRef = null)
    {
      $this->Row = $Row;
      $this->SegmentRef = $SegmentRef;
    }

    /**
     * @return Row
     */
    public function getRow()
    {
      return $this->Row;
    }

    /**
     * @param Row $Row
     * @return \Santosdave\Travelport\GDSQueue\Rows
     */
    public function setRow($Row)
    {
      $this->Row = $Row;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \Santosdave\Travelport\GDSQueue\Rows
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

}
