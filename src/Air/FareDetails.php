<?php

namespace Santosdave\Travelport\Air;

class FareDetails
{

    /**
     * @var FareTicketDesignator $FareTicketDesignator
     */
    protected $FareTicketDesignator = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $PassengerDetailRef
     */
    protected $PassengerDetailRef = null;

    /**
     * @var typeFareBasisCode $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @param FareTicketDesignator $FareTicketDesignator
     * @param typeRef $Key
     * @param typeRef $PassengerDetailRef
     * @param typeFareBasisCode $FareBasis
     */
    public function __construct($FareTicketDesignator = null, $Key = null, $PassengerDetailRef = null, $FareBasis = null)
    {
      $this->FareTicketDesignator = $FareTicketDesignator;
      $this->Key = $Key;
      $this->PassengerDetailRef = $PassengerDetailRef;
      $this->FareBasis = $FareBasis;
    }

    /**
     * @return FareTicketDesignator
     */
    public function getFareTicketDesignator()
    {
      return $this->FareTicketDesignator;
    }

    /**
     * @param FareTicketDesignator $FareTicketDesignator
     * @return \Santosdave\Travelport\Air\FareDetails
     */
    public function setFareTicketDesignator($FareTicketDesignator)
    {
      $this->FareTicketDesignator = $FareTicketDesignator;
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
     * @return \Santosdave\Travelport\Air\FareDetails
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPassengerDetailRef()
    {
      return $this->PassengerDetailRef;
    }

    /**
     * @param typeRef $PassengerDetailRef
     * @return \Santosdave\Travelport\Air\FareDetails
     */
    public function setPassengerDetailRef($PassengerDetailRef)
    {
      $this->PassengerDetailRef = $PassengerDetailRef;
      return $this;
    }

    /**
     * @return typeFareBasisCode
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param typeFareBasisCode $FareBasis
     * @return \Santosdave\Travelport\Air\FareDetails
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

}
