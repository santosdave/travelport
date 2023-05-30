<?php

namespace Santosdave\Travelport\UProfile;

class RailPreference extends typeBasePreference
{

    /**
     * @var int $DomesticTripJourneyHours
     */
    protected $DomesticTripJourneyHours = null;

    /**
     * @var anonymous661 $StartingTrainNumber
     */
    protected $StartingTrainNumber = null;

    /**
     * @var anonymous662 $EndingTrainNumber
     */
    protected $EndingTrainNumber = null;

    /**
     * @var int $InternationalTripJourneyHours
     */
    protected $InternationalTripJourneyHours = null;

    /**
     * @var int $MaxEmployeesPerTrain
     */
    protected $MaxEmployeesPerTrain = null;

    /**
     * @var typeMoney $MaxFareAmount
     */
    protected $MaxFareAmount = null;

    /**
     * @var typeRailCabin $CabinType
     */
    protected $CabinType = null;

    /**
     * @var typeRailGenderCompartment $GenderCompartmentType
     */
    protected $GenderCompartmentType = null;

    /**
     * @var typeRailCoachCompartment $CoachCompartmentType
     */
    protected $CoachCompartmentType = null;

    /**
     * @var typeRailSeatArrangement $SeatArrangementType
     */
    protected $SeatArrangementType = null;

    /**
     * @var typeRailSeating $SeatingType
     */
    protected $SeatingType = null;

    /**
     * @var boolean $Smoking
     */
    protected $Smoking = null;

    /**
     * @var typeRailTicketFulfillmentOption $TicketFulfillmentType
     */
    protected $TicketFulfillmentType = null;

    /**
     * @var anonymous882 $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var typeGeoPoliticalAreaType $ArrivalGeoPoliticalAreaType
     */
    protected $ArrivalGeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $ArrivalGeoPoliticalAreaCode
     */
    protected $ArrivalGeoPoliticalAreaCode = null;

    /**
     * @var typeMoney $BenchMarkAmount
     */
    protected $BenchMarkAmount = null;

    /**
     * @var typeGeoPoliticalAreaType $ConnectionGeoPoliticalAreaType
     */
    protected $ConnectionGeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $ConnectionGeoPoliticalAreaCode
     */
    protected $ConnectionGeoPoliticalAreaCode = null;

    /**
     * @var anonymous883 $ContractCode
     */
    protected $ContractCode = null;

    /**
     * @var anonymous884 $CorporateID
     */
    protected $CorporateID = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var date $TravelStartDate
     */
    protected $TravelStartDate = null;

    /**
     * @var date $TravelEndDate
     */
    protected $TravelEndDate = null;

    /**
     * @var anonymous885 $SeatPositionMiscTravel
     */
    protected $SeatPositionMiscTravel = null;

    /**
     * @var anonymous886 $SeatPositionRefCategory
     */
    protected $SeatPositionRefCategory = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param date $BookingStartDate
     * @param date $BookingEndDate
     * @param typeCurrency $Currency
     * @param typeGeoPoliticalAreaType $DepartureGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $DepartureGeoPoliticalAreaCode
     * @param boolean $Emphasis
     * @param StringLength1to255 $GeneralPreference
     * @param boolean $Inclusive
     * @param typeRef $LoyaltyProgramEnrollmentRef
     * @param anonymous656 $OtherLoyaltyProgramNumber
     * @param typeRef $PaymentDetailsRef
     * @param typePreferencePaymentMethod $PreferencePaymentMethod
     * @param typePreferencePurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     * @param typeSupplier $Supplier
     * @param boolean $TripApproval
     * @param int $DomesticTripJourneyHours
     * @param anonymous661 $StartingTrainNumber
     * @param anonymous662 $EndingTrainNumber
     * @param int $InternationalTripJourneyHours
     * @param int $MaxEmployeesPerTrain
     * @param typeMoney $MaxFareAmount
     * @param typeRailCabin $CabinType
     * @param typeRailGenderCompartment $GenderCompartmentType
     * @param typeRailCoachCompartment $CoachCompartmentType
     * @param typeRailSeatArrangement $SeatArrangementType
     * @param typeRailSeating $SeatingType
     * @param boolean $Smoking
     * @param typeRailTicketFulfillmentOption $TicketFulfillmentType
     * @param anonymous882 $AccountCode
     * @param typeGeoPoliticalAreaType $ArrivalGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $ArrivalGeoPoliticalAreaCode
     * @param typeMoney $BenchMarkAmount
     * @param typeGeoPoliticalAreaType $ConnectionGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $ConnectionGeoPoliticalAreaCode
     * @param anonymous883 $ContractCode
     * @param anonymous884 $CorporateID
     * @param typePCC $PseudoCityCode
     * @param date $TravelStartDate
     * @param date $TravelEndDate
     * @param anonymous885 $SeatPositionMiscTravel
     * @param anonymous886 $SeatPositionRefCategory
     */
    public function __construct($Key = null, $TagRef = null, $BookingStartDate = null, $BookingEndDate = null, $Currency = null, $DepartureGeoPoliticalAreaType = null, $DepartureGeoPoliticalAreaCode = null, $Emphasis = null, $GeneralPreference = null, $Inclusive = null, $LoyaltyProgramEnrollmentRef = null, $OtherLoyaltyProgramNumber = null, $PaymentDetailsRef = null, $PreferencePaymentMethod = null, $Purpose = null, $PriorityOrder = null, $Supplier = null, $TripApproval = null, $DomesticTripJourneyHours = null, $StartingTrainNumber = null, $EndingTrainNumber = null, $InternationalTripJourneyHours = null, $MaxEmployeesPerTrain = null, $MaxFareAmount = null, $CabinType = null, $GenderCompartmentType = null, $CoachCompartmentType = null, $SeatArrangementType = null, $SeatingType = null, $Smoking = null, $TicketFulfillmentType = null, $AccountCode = null, $ArrivalGeoPoliticalAreaType = null, $ArrivalGeoPoliticalAreaCode = null, $BenchMarkAmount = null, $ConnectionGeoPoliticalAreaType = null, $ConnectionGeoPoliticalAreaCode = null, $ContractCode = null, $CorporateID = null, $PseudoCityCode = null, $TravelStartDate = null, $TravelEndDate = null, $SeatPositionMiscTravel = null, $SeatPositionRefCategory = null)
    {
      parent::__construct($Key, $TagRef, $BookingStartDate, $BookingEndDate, $Currency, $DepartureGeoPoliticalAreaType, $DepartureGeoPoliticalAreaCode, $Emphasis, $GeneralPreference, $Inclusive, $LoyaltyProgramEnrollmentRef, $OtherLoyaltyProgramNumber, $PaymentDetailsRef, $PreferencePaymentMethod, $Purpose, $PriorityOrder, $Supplier, $TripApproval);
      $this->DomesticTripJourneyHours = $DomesticTripJourneyHours;
      $this->StartingTrainNumber = $StartingTrainNumber;
      $this->EndingTrainNumber = $EndingTrainNumber;
      $this->InternationalTripJourneyHours = $InternationalTripJourneyHours;
      $this->MaxEmployeesPerTrain = $MaxEmployeesPerTrain;
      $this->MaxFareAmount = $MaxFareAmount;
      $this->CabinType = $CabinType;
      $this->GenderCompartmentType = $GenderCompartmentType;
      $this->CoachCompartmentType = $CoachCompartmentType;
      $this->SeatArrangementType = $SeatArrangementType;
      $this->SeatingType = $SeatingType;
      $this->Smoking = $Smoking;
      $this->TicketFulfillmentType = $TicketFulfillmentType;
      $this->AccountCode = $AccountCode;
      $this->ArrivalGeoPoliticalAreaType = $ArrivalGeoPoliticalAreaType;
      $this->ArrivalGeoPoliticalAreaCode = $ArrivalGeoPoliticalAreaCode;
      $this->BenchMarkAmount = $BenchMarkAmount;
      $this->ConnectionGeoPoliticalAreaType = $ConnectionGeoPoliticalAreaType;
      $this->ConnectionGeoPoliticalAreaCode = $ConnectionGeoPoliticalAreaCode;
      $this->ContractCode = $ContractCode;
      $this->CorporateID = $CorporateID;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->TravelStartDate = $TravelStartDate;
      $this->TravelEndDate = $TravelEndDate;
      $this->SeatPositionMiscTravel = $SeatPositionMiscTravel;
      $this->SeatPositionRefCategory = $SeatPositionRefCategory;
    }

    /**
     * @return int
     */
    public function getDomesticTripJourneyHours()
    {
      return $this->DomesticTripJourneyHours;
    }

    /**
     * @param int $DomesticTripJourneyHours
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setDomesticTripJourneyHours($DomesticTripJourneyHours)
    {
      $this->DomesticTripJourneyHours = $DomesticTripJourneyHours;
      return $this;
    }

    /**
     * @return anonymous661
     */
    public function getStartingTrainNumber()
    {
      return $this->StartingTrainNumber;
    }

    /**
     * @param anonymous661 $StartingTrainNumber
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setStartingTrainNumber($StartingTrainNumber)
    {
      $this->StartingTrainNumber = $StartingTrainNumber;
      return $this;
    }

    /**
     * @return anonymous662
     */
    public function getEndingTrainNumber()
    {
      return $this->EndingTrainNumber;
    }

    /**
     * @param anonymous662 $EndingTrainNumber
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setEndingTrainNumber($EndingTrainNumber)
    {
      $this->EndingTrainNumber = $EndingTrainNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getInternationalTripJourneyHours()
    {
      return $this->InternationalTripJourneyHours;
    }

    /**
     * @param int $InternationalTripJourneyHours
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setInternationalTripJourneyHours($InternationalTripJourneyHours)
    {
      $this->InternationalTripJourneyHours = $InternationalTripJourneyHours;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxEmployeesPerTrain()
    {
      return $this->MaxEmployeesPerTrain;
    }

    /**
     * @param int $MaxEmployeesPerTrain
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setMaxEmployeesPerTrain($MaxEmployeesPerTrain)
    {
      $this->MaxEmployeesPerTrain = $MaxEmployeesPerTrain;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMaxFareAmount()
    {
      return $this->MaxFareAmount;
    }

    /**
     * @param typeMoney $MaxFareAmount
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setMaxFareAmount($MaxFareAmount)
    {
      $this->MaxFareAmount = $MaxFareAmount;
      return $this;
    }

    /**
     * @return typeRailCabin
     */
    public function getCabinType()
    {
      return $this->CabinType;
    }

    /**
     * @param typeRailCabin $CabinType
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setCabinType($CabinType)
    {
      $this->CabinType = $CabinType;
      return $this;
    }

    /**
     * @return typeRailGenderCompartment
     */
    public function getGenderCompartmentType()
    {
      return $this->GenderCompartmentType;
    }

    /**
     * @param typeRailGenderCompartment $GenderCompartmentType
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setGenderCompartmentType($GenderCompartmentType)
    {
      $this->GenderCompartmentType = $GenderCompartmentType;
      return $this;
    }

    /**
     * @return typeRailCoachCompartment
     */
    public function getCoachCompartmentType()
    {
      return $this->CoachCompartmentType;
    }

    /**
     * @param typeRailCoachCompartment $CoachCompartmentType
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setCoachCompartmentType($CoachCompartmentType)
    {
      $this->CoachCompartmentType = $CoachCompartmentType;
      return $this;
    }

    /**
     * @return typeRailSeatArrangement
     */
    public function getSeatArrangementType()
    {
      return $this->SeatArrangementType;
    }

    /**
     * @param typeRailSeatArrangement $SeatArrangementType
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setSeatArrangementType($SeatArrangementType)
    {
      $this->SeatArrangementType = $SeatArrangementType;
      return $this;
    }

    /**
     * @return typeRailSeating
     */
    public function getSeatingType()
    {
      return $this->SeatingType;
    }

    /**
     * @param typeRailSeating $SeatingType
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setSeatingType($SeatingType)
    {
      $this->SeatingType = $SeatingType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSmoking()
    {
      return $this->Smoking;
    }

    /**
     * @param boolean $Smoking
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setSmoking($Smoking)
    {
      $this->Smoking = $Smoking;
      return $this;
    }

    /**
     * @return typeRailTicketFulfillmentOption
     */
    public function getTicketFulfillmentType()
    {
      return $this->TicketFulfillmentType;
    }

    /**
     * @param typeRailTicketFulfillmentOption $TicketFulfillmentType
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setTicketFulfillmentType($TicketFulfillmentType)
    {
      $this->TicketFulfillmentType = $TicketFulfillmentType;
      return $this;
    }

    /**
     * @return anonymous882
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param anonymous882 $AccountCode
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getArrivalGeoPoliticalAreaType()
    {
      return $this->ArrivalGeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $ArrivalGeoPoliticalAreaType
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setArrivalGeoPoliticalAreaType($ArrivalGeoPoliticalAreaType)
    {
      $this->ArrivalGeoPoliticalAreaType = $ArrivalGeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getArrivalGeoPoliticalAreaCode()
    {
      return $this->ArrivalGeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $ArrivalGeoPoliticalAreaCode
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setArrivalGeoPoliticalAreaCode($ArrivalGeoPoliticalAreaCode)
    {
      $this->ArrivalGeoPoliticalAreaCode = $ArrivalGeoPoliticalAreaCode;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBenchMarkAmount()
    {
      return $this->BenchMarkAmount;
    }

    /**
     * @param typeMoney $BenchMarkAmount
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setBenchMarkAmount($BenchMarkAmount)
    {
      $this->BenchMarkAmount = $BenchMarkAmount;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getConnectionGeoPoliticalAreaType()
    {
      return $this->ConnectionGeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $ConnectionGeoPoliticalAreaType
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setConnectionGeoPoliticalAreaType($ConnectionGeoPoliticalAreaType)
    {
      $this->ConnectionGeoPoliticalAreaType = $ConnectionGeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getConnectionGeoPoliticalAreaCode()
    {
      return $this->ConnectionGeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $ConnectionGeoPoliticalAreaCode
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setConnectionGeoPoliticalAreaCode($ConnectionGeoPoliticalAreaCode)
    {
      $this->ConnectionGeoPoliticalAreaCode = $ConnectionGeoPoliticalAreaCode;
      return $this;
    }

    /**
     * @return anonymous883
     */
    public function getContractCode()
    {
      return $this->ContractCode;
    }

    /**
     * @param anonymous883 $ContractCode
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setContractCode($ContractCode)
    {
      $this->ContractCode = $ContractCode;
      return $this;
    }

    /**
     * @return anonymous884
     */
    public function getCorporateID()
    {
      return $this->CorporateID;
    }

    /**
     * @param anonymous884 $CorporateID
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setCorporateID($CorporateID)
    {
      $this->CorporateID = $CorporateID;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getTravelStartDate()
    {
      return $this->TravelStartDate;
    }

    /**
     * @param date $TravelStartDate
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setTravelStartDate($TravelStartDate)
    {
      $this->TravelStartDate = $TravelStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getTravelEndDate()
    {
      return $this->TravelEndDate;
    }

    /**
     * @param date $TravelEndDate
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setTravelEndDate($TravelEndDate)
    {
      $this->TravelEndDate = $TravelEndDate;
      return $this;
    }

    /**
     * @return anonymous885
     */
    public function getSeatPositionMiscTravel()
    {
      return $this->SeatPositionMiscTravel;
    }

    /**
     * @param anonymous885 $SeatPositionMiscTravel
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setSeatPositionMiscTravel($SeatPositionMiscTravel)
    {
      $this->SeatPositionMiscTravel = $SeatPositionMiscTravel;
      return $this;
    }

    /**
     * @return anonymous886
     */
    public function getSeatPositionRefCategory()
    {
      return $this->SeatPositionRefCategory;
    }

    /**
     * @param anonymous886 $SeatPositionRefCategory
     * @return \Santosdave\Travelport\UProfile\RailPreference
     */
    public function setSeatPositionRefCategory($SeatPositionRefCategory)
    {
      $this->SeatPositionRefCategory = $SeatPositionRefCategory;
      return $this;
    }

}
