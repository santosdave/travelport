<?php

namespace FilippoToso\Travelport\GDSQueue;

class PreferredSuppliers
{

    /**
     * @var RailSupplier $RailSupplier
     */
    protected $RailSupplier = null;

    /**
     * @param RailSupplier $RailSupplier
     */
    public function __construct($RailSupplier = null)
    {
      $this->RailSupplier = $RailSupplier;
    }

    /**
     * @return RailSupplier
     */
    public function getRailSupplier()
    {
      return $this->RailSupplier;
    }

    /**
     * @param RailSupplier $RailSupplier
     * @return \FilippoToso\Travelport\GDSQueue\PreferredSuppliers
     */
    public function setRailSupplier($RailSupplier)
    {
      $this->RailSupplier = $RailSupplier;
      return $this;
    }

}
