<?php

namespace Santosdave\Travelport\Rail;

class HotelAdd
{

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var Guarantee $Guarantee
     */
    protected $Guarantee = null;

    /**
     * @var GuestInformation $GuestInformation
     */
    protected $GuestInformation = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    protected $AssociatedRemark = null;

    /**
     * @var BookingSource $BookingSource
     */
    protected $BookingSource = null;

    /**
     * @var typeGeneralText $HotelSpecialRequest
     */
    protected $HotelSpecialRequest = null;

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    protected $CorporateDiscountID = null;

    /**
     * @var ReservationName $ReservationName
     */
    protected $ReservationName = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    protected $ThirdPartyInformation = null;

    /**
     * @var TravelComplianceData $TravelComplianceData
     */
    protected $TravelComplianceData = null;

    /**
     * @var HotelBedding $HotelBedding
     */
    protected $HotelBedding = null;

    /**
     * @var BookingConfirmation $BookingConfirmation
     */
    protected $BookingConfirmation = null;

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
     * @param Guarantee $Guarantee
     * @param GuestInformation $GuestInformation
     * @param AssociatedRemark $AssociatedRemark
     * @param BookingSource $BookingSource
     * @param typeGeneralText $HotelSpecialRequest
     * @param CorporateDiscountID $CorporateDiscountID
     * @param ReservationName $ReservationName
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param TravelComplianceData $TravelComplianceData
     * @param HotelBedding $HotelBedding
     * @param BookingConfirmation $BookingConfirmation
     * @param typeLocatorCode $ReservationLocatorCode
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($LoyaltyCard = null, $Guarantee = null, $GuestInformation = null, $AssociatedRemark = null, $BookingSource = null, $HotelSpecialRequest = null, $CorporateDiscountID = null, $ReservationName = null, $ThirdPartyInformation = null, $TravelComplianceData = null, $HotelBedding = null, $BookingConfirmation = null, $ReservationLocatorCode = null, $BookingTravelerRef = null)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      $this->Guarantee = $Guarantee;
      $this->GuestInformation = $GuestInformation;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->BookingSource = $BookingSource;
      $this->HotelSpecialRequest = $HotelSpecialRequest;
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->ReservationName = $ReservationName;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->TravelComplianceData = $TravelComplianceData;
      $this->HotelBedding = $HotelBedding;
      $this->BookingConfirmation = $BookingConfirmation;
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
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
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
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setGuarantee($Guarantee)
    {
      $this->Guarantee = $Guarantee;
      return $this;
    }

    /**
     * @return GuestInformation
     */
    public function getGuestInformation()
    {
      return $this->GuestInformation;
    }

    /**
     * @param GuestInformation $GuestInformation
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setGuestInformation($GuestInformation)
    {
      $this->GuestInformation = $GuestInformation;
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
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
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
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setBookingSource($BookingSource)
    {
      $this->BookingSource = $BookingSource;
      return $this;
    }

    /**
     * @return typeGeneralText
     */
    public function getHotelSpecialRequest()
    {
      return $this->HotelSpecialRequest;
    }

    /**
     * @param typeGeneralText $HotelSpecialRequest
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setHotelSpecialRequest($HotelSpecialRequest)
    {
      $this->HotelSpecialRequest = $HotelSpecialRequest;
      return $this;
    }

    /**
     * @return CorporateDiscountID
     */
    public function getCorporateDiscountID()
    {
      return $this->CorporateDiscountID;
    }

    /**
     * @param CorporateDiscountID $CorporateDiscountID
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
      return $this;
    }

    /**
     * @return ReservationName
     */
    public function getReservationName()
    {
      return $this->ReservationName;
    }

    /**
     * @param ReservationName $ReservationName
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setReservationName($ReservationName)
    {
      $this->ReservationName = $ReservationName;
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
     * @return \Santosdave\Travelport\Rail\HotelAdd
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
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setTravelComplianceData($TravelComplianceData)
    {
      $this->TravelComplianceData = $TravelComplianceData;
      return $this;
    }

    /**
     * @return HotelBedding
     */
    public function getHotelBedding()
    {
      return $this->HotelBedding;
    }

    /**
     * @param HotelBedding $HotelBedding
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setHotelBedding($HotelBedding)
    {
      $this->HotelBedding = $HotelBedding;
      return $this;
    }

    /**
     * @return BookingConfirmation
     */
    public function getBookingConfirmation()
    {
      return $this->BookingConfirmation;
    }

    /**
     * @param BookingConfirmation $BookingConfirmation
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setBookingConfirmation($BookingConfirmation)
    {
      $this->BookingConfirmation = $BookingConfirmation;
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
     * @return \Santosdave\Travelport\Rail\HotelAdd
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
     * @return \Santosdave\Travelport\Rail\HotelAdd
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
