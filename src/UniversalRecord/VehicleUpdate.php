<?php

namespace Santosdave\Travelport\UniversalRecord;

class VehicleUpdate
{

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var DriversLicense $DriversLicense
     */
    protected $DriversLicense = null;

    /**
     * @var Guarantee $Guarantee
     */
    protected $Guarantee = null;

    /**
     * @var BookingSource $BookingSource
     */
    protected $BookingSource = null;

    /**
     * @var VehicleRateInfo $VehicleRateInfo
     */
    protected $VehicleRateInfo = null;

    /**
     * @var PaymentInformation $PaymentInformation
     */
    protected $PaymentInformation = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    protected $AssociatedRemark = null;

    /**
     * @var VehicleSpecialRequest $VehicleSpecialRequest
     */
    protected $VehicleSpecialRequest = null;

    /**
     * @var DeliveryAddress $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var CollectionAddress $CollectionAddress
     */
    protected $CollectionAddress = null;

    /**
     * @var VehicleReturnDateLocation $VehicleReturnDateLocation
     */
    protected $VehicleReturnDateLocation = null;

    /**
     * @var VehiclePickupDateLocation $VehiclePickupDateLocation
     */
    protected $VehiclePickupDateLocation = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    protected $ThirdPartyInformation = null;

    /**
     * @var TravelComplianceData $TravelComplianceData
     */
    protected $TravelComplianceData = null;

    /**
     * @var VehicleTypeIdentifier $VehicleTypeIdentifier
     */
    protected $VehicleTypeIdentifier = null;

    /**
     * @var FlightArrivalInformation $FlightArrivalInformation
     */
    protected $FlightArrivalInformation = null;

    /**
     * @var typeLocatorCode $ReservationLocatorCode
     */
    protected $ReservationLocatorCode = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @param DriversLicense $DriversLicense
     * @param Guarantee $Guarantee
     * @param BookingSource $BookingSource
     * @param VehicleRateInfo $VehicleRateInfo
     * @param PaymentInformation $PaymentInformation
     * @param AssociatedRemark $AssociatedRemark
     * @param VehicleSpecialRequest $VehicleSpecialRequest
     * @param DeliveryAddress $DeliveryAddress
     * @param CollectionAddress $CollectionAddress
     * @param VehicleReturnDateLocation $VehicleReturnDateLocation
     * @param VehiclePickupDateLocation $VehiclePickupDateLocation
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param TravelComplianceData $TravelComplianceData
     * @param VehicleTypeIdentifier $VehicleTypeIdentifier
     * @param FlightArrivalInformation $FlightArrivalInformation
     * @param typeLocatorCode $ReservationLocatorCode
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($LoyaltyCard = null, $DriversLicense = null, $Guarantee = null, $BookingSource = null, $VehicleRateInfo = null, $PaymentInformation = null, $AssociatedRemark = null, $VehicleSpecialRequest = null, $DeliveryAddress = null, $CollectionAddress = null, $VehicleReturnDateLocation = null, $VehiclePickupDateLocation = null, $ThirdPartyInformation = null, $TravelComplianceData = null, $VehicleTypeIdentifier = null, $FlightArrivalInformation = null, $ReservationLocatorCode = null, $BookingTravelerRef = null)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      $this->DriversLicense = $DriversLicense;
      $this->Guarantee = $Guarantee;
      $this->BookingSource = $BookingSource;
      $this->VehicleRateInfo = $VehicleRateInfo;
      $this->PaymentInformation = $PaymentInformation;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->VehicleSpecialRequest = $VehicleSpecialRequest;
      $this->DeliveryAddress = $DeliveryAddress;
      $this->CollectionAddress = $CollectionAddress;
      $this->VehicleReturnDateLocation = $VehicleReturnDateLocation;
      $this->VehiclePickupDateLocation = $VehiclePickupDateLocation;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->TravelComplianceData = $TravelComplianceData;
      $this->VehicleTypeIdentifier = $VehicleTypeIdentifier;
      $this->FlightArrivalInformation = $FlightArrivalInformation;
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return LoyaltyCard
     */
    public function getLoyaltyCard()
    {
      return $this->LoyaltyCard;
    }

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      return $this;
    }

    /**
     * @return DriversLicense
     */
    public function getDriversLicense()
    {
      return $this->DriversLicense;
    }

    /**
     * @param DriversLicense $DriversLicense
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setDriversLicense($DriversLicense)
    {
      $this->DriversLicense = $DriversLicense;
      return $this;
    }

    /**
     * @return Guarantee
     */
    public function getGuarantee()
    {
      return $this->Guarantee;
    }

    /**
     * @param Guarantee $Guarantee
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setGuarantee($Guarantee)
    {
      $this->Guarantee = $Guarantee;
      return $this;
    }

    /**
     * @return BookingSource
     */
    public function getBookingSource()
    {
      return $this->BookingSource;
    }

    /**
     * @param BookingSource $BookingSource
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setBookingSource($BookingSource)
    {
      $this->BookingSource = $BookingSource;
      return $this;
    }

    /**
     * @return VehicleRateInfo
     */
    public function getVehicleRateInfo()
    {
      return $this->VehicleRateInfo;
    }

    /**
     * @param VehicleRateInfo $VehicleRateInfo
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setVehicleRateInfo($VehicleRateInfo)
    {
      $this->VehicleRateInfo = $VehicleRateInfo;
      return $this;
    }

    /**
     * @return PaymentInformation
     */
    public function getPaymentInformation()
    {
      return $this->PaymentInformation;
    }

    /**
     * @param PaymentInformation $PaymentInformation
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setPaymentInformation($PaymentInformation)
    {
      $this->PaymentInformation = $PaymentInformation;
      return $this;
    }

    /**
     * @return AssociatedRemark
     */
    public function getAssociatedRemark()
    {
      return $this->AssociatedRemark;
    }

    /**
     * @param AssociatedRemark $AssociatedRemark
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
      return $this;
    }

    /**
     * @return VehicleSpecialRequest
     */
    public function getVehicleSpecialRequest()
    {
      return $this->VehicleSpecialRequest;
    }

    /**
     * @param VehicleSpecialRequest $VehicleSpecialRequest
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setVehicleSpecialRequest($VehicleSpecialRequest)
    {
      $this->VehicleSpecialRequest = $VehicleSpecialRequest;
      return $this;
    }

    /**
     * @return DeliveryAddress
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param DeliveryAddress $DeliveryAddress
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return CollectionAddress
     */
    public function getCollectionAddress()
    {
      return $this->CollectionAddress;
    }

    /**
     * @param CollectionAddress $CollectionAddress
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setCollectionAddress($CollectionAddress)
    {
      $this->CollectionAddress = $CollectionAddress;
      return $this;
    }

    /**
     * @return VehicleReturnDateLocation
     */
    public function getVehicleReturnDateLocation()
    {
      return $this->VehicleReturnDateLocation;
    }

    /**
     * @param VehicleReturnDateLocation $VehicleReturnDateLocation
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setVehicleReturnDateLocation($VehicleReturnDateLocation)
    {
      $this->VehicleReturnDateLocation = $VehicleReturnDateLocation;
      return $this;
    }

    /**
     * @return VehiclePickupDateLocation
     */
    public function getVehiclePickupDateLocation()
    {
      return $this->VehiclePickupDateLocation;
    }

    /**
     * @param VehiclePickupDateLocation $VehiclePickupDateLocation
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setVehiclePickupDateLocation($VehiclePickupDateLocation)
    {
      $this->VehiclePickupDateLocation = $VehiclePickupDateLocation;
      return $this;
    }

    /**
     * @return ThirdPartyInformation
     */
    public function getThirdPartyInformation()
    {
      return $this->ThirdPartyInformation;
    }

    /**
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return TravelComplianceData
     */
    public function getTravelComplianceData()
    {
      return $this->TravelComplianceData;
    }

    /**
     * @param TravelComplianceData $TravelComplianceData
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setTravelComplianceData($TravelComplianceData)
    {
      $this->TravelComplianceData = $TravelComplianceData;
      return $this;
    }

    /**
     * @return VehicleTypeIdentifier
     */
    public function getVehicleTypeIdentifier()
    {
      return $this->VehicleTypeIdentifier;
    }

    /**
     * @param VehicleTypeIdentifier $VehicleTypeIdentifier
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setVehicleTypeIdentifier($VehicleTypeIdentifier)
    {
      $this->VehicleTypeIdentifier = $VehicleTypeIdentifier;
      return $this;
    }

    /**
     * @return FlightArrivalInformation
     */
    public function getFlightArrivalInformation()
    {
      return $this->FlightArrivalInformation;
    }

    /**
     * @param FlightArrivalInformation $FlightArrivalInformation
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setFlightArrivalInformation($FlightArrivalInformation)
    {
      $this->FlightArrivalInformation = $FlightArrivalInformation;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getReservationLocatorCode()
    {
      return $this->ReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $ReservationLocatorCode
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setReservationLocatorCode($ReservationLocatorCode)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \Santosdave\Travelport\UniversalRecord\VehicleUpdate
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
