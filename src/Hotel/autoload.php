<?php


 function autoload_dbd6f8221bc2a549854a8687de630df1($class)
{
    $classes = array(
        'Santosdave\Travelport\Hotel\HotelService' => __DIR__ .'/HotelService.php',
        'Santosdave\Travelport\Hotel\NextResultReference' => __DIR__ .'/NextResultReference.php',
        'Santosdave\Travelport\Hotel\Airport' => __DIR__ .'/Airport.php',
        'Santosdave\Travelport\Hotel\VendorLocation' => __DIR__ .'/VendorLocation.php',
        'Santosdave\Travelport\Hotel\typeVendorLocation' => __DIR__ .'/typeVendorLocation.php',
        'Santosdave\Travelport\Hotel\AgencySellInfo' => __DIR__ .'/AgencySellInfo.php',
        'Santosdave\Travelport\Hotel\AgencyInfo' => __DIR__ .'/AgencyInfo.php',
        'Santosdave\Travelport\Hotel\AgentAction' => __DIR__ .'/AgentAction.php',
        'Santosdave\Travelport\Hotel\AirExchangeInfo' => __DIR__ .'/AirExchangeInfo.php',
        'Santosdave\Travelport\Hotel\TotalPenaltyTaxInfo' => __DIR__ .'/TotalPenaltyTaxInfo.php',
        'Santosdave\Travelport\Hotel\TicketFeeInfo' => __DIR__ .'/TicketFeeInfo.php',
        'Santosdave\Travelport\Hotel\Auxdata' => __DIR__ .'/Auxdata.php',
        'Santosdave\Travelport\Hotel\Entry' => __DIR__ .'/Entry.php',
        'Santosdave\Travelport\Hotel\Carrier' => __DIR__ .'/Carrier.php',
        'Santosdave\Travelport\Hotel\Provider' => __DIR__ .'/Provider.php',
        'Santosdave\Travelport\Hotel\Certificate' => __DIR__ .'/Certificate.php',
        'Santosdave\Travelport\Hotel\Check' => __DIR__ .'/Check.php',
        'Santosdave\Travelport\Hotel\City' => __DIR__ .'/City.php',
        'Santosdave\Travelport\Hotel\CityOrAirport' => __DIR__ .'/CityOrAirport.php',
        'Santosdave\Travelport\Hotel\CoordinateLocation' => __DIR__ .'/CoordinateLocation.php',
        'Santosdave\Travelport\Hotel\RailLocation' => __DIR__ .'/RailLocation.php',
        'Santosdave\Travelport\Hotel\Credentials' => __DIR__ .'/Credentials.php',
        'Santosdave\Travelport\Hotel\CreditCard' => __DIR__ .'/CreditCard.php',
        'Santosdave\Travelport\Hotel\CustomizedNameData' => __DIR__ .'/CustomizedNameData.php',
        'Santosdave\Travelport\Hotel\DebitCard' => __DIR__ .'/DebitCard.php',
        'Santosdave\Travelport\Hotel\Requisition' => __DIR__ .'/Requisition.php',
        'Santosdave\Travelport\Hotel\MiscFormOfPayment' => __DIR__ .'/MiscFormOfPayment.php',
        'Santosdave\Travelport\Hotel\SupplierLocator' => __DIR__ .'/SupplierLocator.php',
        'Santosdave\Travelport\Hotel\typePaymentCard' => __DIR__ .'/typePaymentCard.php',
        'Santosdave\Travelport\Hotel\CreditCardAuth' => __DIR__ .'/CreditCardAuth.php',
        'Santosdave\Travelport\Hotel\typeGeneralReference' => __DIR__ .'/typeGeneralReference.php',
        'Santosdave\Travelport\Hotel\typeFormOfPaymentPNRReference' => __DIR__ .'/typeFormOfPaymentPNRReference.php',
        'Santosdave\Travelport\Hotel\FormOfPayment' => __DIR__ .'/FormOfPayment.php',
        'Santosdave\Travelport\Hotel\BSPPayment' => __DIR__ .'/BSPPayment.php',
        'Santosdave\Travelport\Hotel\ARCPayment' => __DIR__ .'/ARCPayment.php',
        'Santosdave\Travelport\Hotel\EnettVan' => __DIR__ .'/EnettVan.php',
        'Santosdave\Travelport\Hotel\typeVoucherInformation' => __DIR__ .'/typeVoucherInformation.php',
        'Santosdave\Travelport\Hotel\typeVoucherType' => __DIR__ .'/typeVoucherType.php',
        'Santosdave\Travelport\Hotel\UnitedNations' => __DIR__ .'/UnitedNations.php',
        'Santosdave\Travelport\Hotel\DirectPayment' => __DIR__ .'/DirectPayment.php',
        'Santosdave\Travelport\Hotel\AgentVoucher' => __DIR__ .'/AgentVoucher.php',
        'Santosdave\Travelport\Hotel\typeAgencyPayment' => __DIR__ .'/typeAgencyPayment.php',
        'Santosdave\Travelport\Hotel\FormOfPaymentRef' => __DIR__ .'/FormOfPaymentRef.php',
        'Santosdave\Travelport\Hotel\Distance' => __DIR__ .'/Distance.php',
        'Santosdave\Travelport\Hotel\Email' => __DIR__ .'/Email.php',
        'Santosdave\Travelport\Hotel\MealRequest' => __DIR__ .'/MealRequest.php',
        'Santosdave\Travelport\Hotel\Name' => __DIR__ .'/Name.php',
        'Santosdave\Travelport\Hotel\ProviderARNKSegment' => __DIR__ .'/ProviderARNKSegment.php',
        'Santosdave\Travelport\Hotel\PreviousSegment' => __DIR__ .'/PreviousSegment.php',
        'Santosdave\Travelport\Hotel\NextSegment' => __DIR__ .'/NextSegment.php',
        'Santosdave\Travelport\Hotel\PassiveInfo' => __DIR__ .'/PassiveInfo.php',
        'Santosdave\Travelport\Hotel\BookingTraveler' => __DIR__ .'/BookingTraveler.php',
        'Santosdave\Travelport\Hotel\BookingTravelerName' => __DIR__ .'/BookingTravelerName.php',
        'Santosdave\Travelport\Hotel\NameRemark' => __DIR__ .'/NameRemark.php',
        'Santosdave\Travelport\Hotel\PhoneNumber' => __DIR__ .'/PhoneNumber.php',
        'Santosdave\Travelport\Hotel\ProviderReservationInfoRef' => __DIR__ .'/ProviderReservationInfoRef.php',
        'Santosdave\Travelport\Hotel\ResponseMessage' => __DIR__ .'/ResponseMessage.php',
        'Santosdave\Travelport\Hotel\State' => __DIR__ .'/State.php',
        'Santosdave\Travelport\Hotel\Remark' => __DIR__ .'/Remark.php',
        'Santosdave\Travelport\Hotel\SegmentRemark' => __DIR__ .'/SegmentRemark.php',
        'Santosdave\Travelport\Hotel\RefundRemark' => __DIR__ .'/RefundRemark.php',
        'Santosdave\Travelport\Hotel\GeneralRemark' => __DIR__ .'/GeneralRemark.php',
        'Santosdave\Travelport\Hotel\CommissionRemark' => __DIR__ .'/CommissionRemark.php',
        'Santosdave\Travelport\Hotel\ProviderReservationLevel' => __DIR__ .'/ProviderReservationLevel.php',
        'Santosdave\Travelport\Hotel\PassengerTypeLevel' => __DIR__ .'/PassengerTypeLevel.php',
        'Santosdave\Travelport\Hotel\typeDirection' => __DIR__ .'/typeDirection.php',
        'Santosdave\Travelport\Hotel\AccountingRemark' => __DIR__ .'/AccountingRemark.php',
        'Santosdave\Travelport\Hotel\XMLRemark' => __DIR__ .'/XMLRemark.php',
        'Santosdave\Travelport\Hotel\HostToken' => __DIR__ .'/HostToken.php',
        'Santosdave\Travelport\Hotel\HostTokenList' => __DIR__ .'/HostTokenList.php',
        'Santosdave\Travelport\Hotel\AddSvc' => __DIR__ .'/AddSvc.php',
        'Santosdave\Travelport\Hotel\AppliedProfile' => __DIR__ .'/AppliedProfile.php',
        'Santosdave\Travelport\Hotel\typeGuaranteeInformation' => __DIR__ .'/typeGuaranteeInformation.php',
        'Santosdave\Travelport\Hotel\AccountCode' => __DIR__ .'/AccountCode.php',
        'Santosdave\Travelport\Hotel\AirSearchParameters' => __DIR__ .'/AirSearchParameters.php',
        'Santosdave\Travelport\Hotel\Commission' => __DIR__ .'/Commission.php',
        'Santosdave\Travelport\Hotel\DeliveryInfo' => __DIR__ .'/DeliveryInfo.php',
        'Santosdave\Travelport\Hotel\ShippingAddress' => __DIR__ .'/ShippingAddress.php',
        'Santosdave\Travelport\Hotel\ActionStatus' => __DIR__ .'/ActionStatus.php',
        'Santosdave\Travelport\Hotel\Endorsement' => __DIR__ .'/Endorsement.php',
        'Santosdave\Travelport\Hotel\typeProviderReservationSpecificInfo' => __DIR__ .'/typeProviderReservationSpecificInfo.php',
        'Santosdave\Travelport\Hotel\LoyaltyCard' => __DIR__ .'/LoyaltyCard.php',
        'Santosdave\Travelport\Hotel\DiscountCard' => __DIR__ .'/DiscountCard.php',
        'Santosdave\Travelport\Hotel\OperatedBy' => __DIR__ .'/OperatedBy.php',
        'Santosdave\Travelport\Hotel\Penalty' => __DIR__ .'/Penalty.php',
        'Santosdave\Travelport\Hotel\Restriction' => __DIR__ .'/Restriction.php',
        'Santosdave\Travelport\Hotel\SeatAssignment' => __DIR__ .'/SeatAssignment.php',
        'Santosdave\Travelport\Hotel\AirSeatAssignment' => __DIR__ .'/AirSeatAssignment.php',
        'Santosdave\Travelport\Hotel\RailSeatAssignment' => __DIR__ .'/RailSeatAssignment.php',
        'Santosdave\Travelport\Hotel\Characteristic' => __DIR__ .'/Characteristic.php',
        'Santosdave\Travelport\Hotel\ServiceData' => __DIR__ .'/ServiceData.php',
        'Santosdave\Travelport\Hotel\ServiceInfo' => __DIR__ .'/ServiceInfo.php',
        'Santosdave\Travelport\Hotel\SSR' => __DIR__ .'/SSR.php',
        'Santosdave\Travelport\Hotel\TravelerType' => __DIR__ .'/TravelerType.php',
        'Santosdave\Travelport\Hotel\PaymentRef' => __DIR__ .'/PaymentRef.php',
        'Santosdave\Travelport\Hotel\BookingTravelerRef' => __DIR__ .'/BookingTravelerRef.php',
        'Santosdave\Travelport\Hotel\DiscountCardRef' => __DIR__ .'/DiscountCardRef.php',
        'Santosdave\Travelport\Hotel\DriversLicenseRef' => __DIR__ .'/DriversLicenseRef.php',
        'Santosdave\Travelport\Hotel\LoyaltyCardRef' => __DIR__ .'/LoyaltyCardRef.php',
        'Santosdave\Travelport\Hotel\typeRemark' => __DIR__ .'/typeRemark.php',
        'Santosdave\Travelport\Hotel\UnassociatedRemark' => __DIR__ .'/UnassociatedRemark.php',
        'Santosdave\Travelport\Hotel\typeRemarkWithTravelerRef' => __DIR__ .'/typeRemarkWithTravelerRef.php',
        'Santosdave\Travelport\Hotel\CustomerID' => __DIR__ .'/CustomerID.php',
        'Santosdave\Travelport\Hotel\BaseReservation' => __DIR__ .'/BaseReservation.php',
        'Santosdave\Travelport\Hotel\MCO' => __DIR__ .'/MCO.php',
        'Santosdave\Travelport\Hotel\MCOText' => __DIR__ .'/MCOText.php',
        'Santosdave\Travelport\Hotel\typeFreeFormText' => __DIR__ .'/typeFreeFormText.php',
        'Santosdave\Travelport\Hotel\MCOPriceData' => __DIR__ .'/MCOPriceData.php',
        'Santosdave\Travelport\Hotel\PassengerInfo' => __DIR__ .'/PassengerInfo.php',
        'Santosdave\Travelport\Hotel\MCOInformation' => __DIR__ .'/MCOInformation.php',
        'Santosdave\Travelport\Hotel\MCOExchangeInfo' => __DIR__ .'/MCOExchangeInfo.php',
        'Santosdave\Travelport\Hotel\MCOFeeInfo' => __DIR__ .'/MCOFeeInfo.php',
        'Santosdave\Travelport\Hotel\MCORemark' => __DIR__ .'/MCORemark.php',
        'Santosdave\Travelport\Hotel\StockControl' => __DIR__ .'/StockControl.php',
        'Santosdave\Travelport\Hotel\ExchangedCoupon' => __DIR__ .'/ExchangedCoupon.php',
        'Santosdave\Travelport\Hotel\typeTaxInfo' => __DIR__ .'/typeTaxInfo.php',
        'Santosdave\Travelport\Hotel\TaxDetail' => __DIR__ .'/TaxDetail.php',
        'Santosdave\Travelport\Hotel\MetaData' => __DIR__ .'/MetaData.php',
        'Santosdave\Travelport\Hotel\RoleInfo' => __DIR__ .'/RoleInfo.php',
        'Santosdave\Travelport\Hotel\OSI' => __DIR__ .'/OSI.php',
        'Santosdave\Travelport\Hotel\Segment' => __DIR__ .'/Segment.php',
        'Santosdave\Travelport\Hotel\TravelSegment' => __DIR__ .'/TravelSegment.php',
        'Santosdave\Travelport\Hotel\SearchEvent' => __DIR__ .'/SearchEvent.php',
        'Santosdave\Travelport\Hotel\SearchTicketing' => __DIR__ .'/SearchTicketing.php',
        'Santosdave\Travelport\Hotel\SearchPassenger' => __DIR__ .'/SearchPassenger.php',
        'Santosdave\Travelport\Hotel\SpecialEquipment' => __DIR__ .'/SpecialEquipment.php',
        'Santosdave\Travelport\Hotel\ContinuityCheckOverride' => __DIR__ .'/ContinuityCheckOverride.php',
        'Santosdave\Travelport\Hotel\typeAgentInfo' => __DIR__ .'/typeAgentInfo.php',
        'Santosdave\Travelport\Hotel\typeProviderToken' => __DIR__ .'/typeProviderToken.php',
        'Santosdave\Travelport\Hotel\typeProfileLevel' => __DIR__ .'/typeProfileLevel.php',
        'Santosdave\Travelport\Hotel\typeProfileApplicability' => __DIR__ .'/typeProfileApplicability.php',
        'Santosdave\Travelport\Hotel\typeEventType' => __DIR__ .'/typeEventType.php',
        'Santosdave\Travelport\Hotel\typeCommissionLevel' => __DIR__ .'/typeCommissionLevel.php',
        'Santosdave\Travelport\Hotel\typeCommissionType' => __DIR__ .'/typeCommissionType.php',
        'Santosdave\Travelport\Hotel\typeDistance' => __DIR__ .'/typeDistance.php',
        'Santosdave\Travelport\Hotel\typeElement' => __DIR__ .'/typeElement.php',
        'Santosdave\Travelport\Hotel\typeResultMessage' => __DIR__ .'/typeResultMessage.php',
        'Santosdave\Travelport\Hotel\typeInvoiceRecordCategory' => __DIR__ .'/typeInvoiceRecordCategory.php',
        'Santosdave\Travelport\Hotel\Location' => __DIR__ .'/Location.php',
        'Santosdave\Travelport\Hotel\typeMCOStatus' => __DIR__ .'/typeMCOStatus.php',
        'Santosdave\Travelport\Hotel\typeMCOType' => __DIR__ .'/typeMCOType.php',
        'Santosdave\Travelport\Hotel\typeMCOFeeType' => __DIR__ .'/typeMCOFeeType.php',
        'Santosdave\Travelport\Hotel\typePurchaseWindow' => __DIR__ .'/typePurchaseWindow.php',
        'Santosdave\Travelport\Hotel\typeResidency' => __DIR__ .'/typeResidency.php',
        'Santosdave\Travelport\Hotel\typeQueueModifyAction' => __DIR__ .'/typeQueueModifyAction.php',
        'Santosdave\Travelport\Hotel\typeReqSeat' => __DIR__ .'/typeReqSeat.php',
        'Santosdave\Travelport\Hotel\typeSearchTimeSpec' => __DIR__ .'/typeSearchTimeSpec.php',
        'Santosdave\Travelport\Hotel\typeProfileType' => __DIR__ .'/typeProfileType.php',
        'Santosdave\Travelport\Hotel\typeStructuredAddress' => __DIR__ .'/typeStructuredAddress.php',
        'Santosdave\Travelport\Hotel\typeTicketStatus' => __DIR__ .'/typeTicketStatus.php',
        'Santosdave\Travelport\Hotel\typeTimeRange' => __DIR__ .'/typeTimeRange.php',
        'Santosdave\Travelport\Hotel\typeProduct' => __DIR__ .'/typeProduct.php',
        'Santosdave\Travelport\Hotel\typeVehicleCategory' => __DIR__ .'/typeVehicleCategory.php',
        'Santosdave\Travelport\Hotel\typeVehicleClass' => __DIR__ .'/typeVehicleClass.php',
        'Santosdave\Travelport\Hotel\typeVehicleTransmission' => __DIR__ .'/typeVehicleTransmission.php',
        'Santosdave\Travelport\Hotel\typeFuel' => __DIR__ .'/typeFuel.php',
        'Santosdave\Travelport\Hotel\typeDoorCount' => __DIR__ .'/typeDoorCount.php',
        'Santosdave\Travelport\Hotel\typeRateDescription' => __DIR__ .'/typeRateDescription.php',
        'Santosdave\Travelport\Hotel\MediaItem' => __DIR__ .'/MediaItem.php',
        'Santosdave\Travelport\Hotel\typeImageSize' => __DIR__ .'/typeImageSize.php',
        'Santosdave\Travelport\Hotel\typeOtherImageSize' => __DIR__ .'/typeOtherImageSize.php',
        'Santosdave\Travelport\Hotel\typeReserveRequirement' => __DIR__ .'/typeReserveRequirement.php',
        'Santosdave\Travelport\Hotel\PointOfSale' => __DIR__ .'/PointOfSale.php',
        'Santosdave\Travelport\Hotel\BookingTravelerInfo' => __DIR__ .'/BookingTravelerInfo.php',
        'Santosdave\Travelport\Hotel\TravelInfo' => __DIR__ .'/TravelInfo.php',
        'Santosdave\Travelport\Hotel\typeSource' => __DIR__ .'/typeSource.php',
        'Santosdave\Travelport\Hotel\BookingSource' => __DIR__ .'/BookingSource.php',
        'Santosdave\Travelport\Hotel\typeSearchLocation' => __DIR__ .'/typeSearchLocation.php',
        'Santosdave\Travelport\Hotel\typeTimeSpec' => __DIR__ .'/typeTimeSpec.php',
        'Santosdave\Travelport\Hotel\typeSpecificTime' => __DIR__ .'/typeSpecificTime.php',
        'Santosdave\Travelport\Hotel\typeFlexibleTimeSpec' => __DIR__ .'/typeFlexibleTimeSpec.php',
        'Santosdave\Travelport\Hotel\SearchExtraDays' => __DIR__ .'/SearchExtraDays.php',
        'Santosdave\Travelport\Hotel\typePassengerType' => __DIR__ .'/typePassengerType.php',
        'Santosdave\Travelport\Hotel\typeCommissionModifier' => __DIR__ .'/typeCommissionModifier.php',
        'Santosdave\Travelport\Hotel\Guarantee' => __DIR__ .'/Guarantee.php',
        'Santosdave\Travelport\Hotel\OtherGuaranteeInfo' => __DIR__ .'/OtherGuaranteeInfo.php',
        'Santosdave\Travelport\Hotel\typeFulfillmentIDType' => __DIR__ .'/typeFulfillmentIDType.php',
        'Santosdave\Travelport\Hotel\typeFulfillmentType' => __DIR__ .'/typeFulfillmentType.php',
        'Santosdave\Travelport\Hotel\Payment' => __DIR__ .'/Payment.php',
        'Santosdave\Travelport\Hotel\ServiceRuleType' => __DIR__ .'/ServiceRuleType.php',
        'Santosdave\Travelport\Hotel\ApplicationRules' => __DIR__ .'/ApplicationRules.php',
        'Santosdave\Travelport\Hotel\ApplicationLevel' => __DIR__ .'/ApplicationLevel.php',
        'Santosdave\Travelport\Hotel\ApplicationLimits' => __DIR__ .'/ApplicationLimits.php',
        'Santosdave\Travelport\Hotel\ModifyRules' => __DIR__ .'/ModifyRules.php',
        'Santosdave\Travelport\Hotel\ModifyRule' => __DIR__ .'/ModifyRule.php',
        'Santosdave\Travelport\Hotel\SecondaryTypeRules' => __DIR__ .'/SecondaryTypeRules.php',
        'Santosdave\Travelport\Hotel\SecondaryTypeRule' => __DIR__ .'/SecondaryTypeRule.php',
        'Santosdave\Travelport\Hotel\OptionalServiceApplicabilityType' => __DIR__ .'/OptionalServiceApplicabilityType.php',
        'Santosdave\Travelport\Hotel\OptionalServiceApplicationLimitType' => __DIR__ .'/OptionalServiceApplicationLimitType.php',
        'Santosdave\Travelport\Hotel\ModificationType' => __DIR__ .'/ModificationType.php',
        'Santosdave\Travelport\Hotel\FormattedTextTextType' => __DIR__ .'/FormattedTextTextType.php',
        'Santosdave\Travelport\Hotel\typeRateCategory' => __DIR__ .'/typeRateCategory.php',
        'Santosdave\Travelport\Hotel\typeVehicleLocation' => __DIR__ .'/typeVehicleLocation.php',
        'Santosdave\Travelport\Hotel\typeRateTimePeriod' => __DIR__ .'/typeRateTimePeriod.php',
        'Santosdave\Travelport\Hotel\CorporateDiscountID' => __DIR__ .'/CorporateDiscountID.php',
        'Santosdave\Travelport\Hotel\AgencyContactInfo' => __DIR__ .'/AgencyContactInfo.php',
        'Santosdave\Travelport\Hotel\typeLocation' => __DIR__ .'/typeLocation.php',
        'Santosdave\Travelport\Hotel\typeProfileLevelWithSystem' => __DIR__ .'/typeProfileLevelWithSystem.php',
        'Santosdave\Travelport\Hotel\typeProfileRef' => __DIR__ .'/typeProfileRef.php',
        'Santosdave\Travelport\Hotel\ServiceFeeTaxInfo' => __DIR__ .'/ServiceFeeTaxInfo.php',
        'Santosdave\Travelport\Hotel\typeStatus' => __DIR__ .'/typeStatus.php',
        'Santosdave\Travelport\Hotel\ServiceFeeInfo' => __DIR__ .'/ServiceFeeInfo.php',
        'Santosdave\Travelport\Hotel\LinkedUniversalRecord' => __DIR__ .'/LinkedUniversalRecord.php',
        'Santosdave\Travelport\Hotel\typeDateRange' => __DIR__ .'/typeDateRange.php',
        'Santosdave\Travelport\Hotel\typeAgencyProfileLevel' => __DIR__ .'/typeAgencyProfileLevel.php',
        'Santosdave\Travelport\Hotel\MarketingInformation' => __DIR__ .'/MarketingInformation.php',
        'Santosdave\Travelport\Hotel\Postscript' => __DIR__ .'/Postscript.php',
        'Santosdave\Travelport\Hotel\typeRateGuarantee' => __DIR__ .'/typeRateGuarantee.php',
        'Santosdave\Travelport\Hotel\typeAgencyHierarchyReference' => __DIR__ .'/typeAgencyHierarchyReference.php',
        'Santosdave\Travelport\Hotel\typeAgencyHierarchyLongReference' => __DIR__ .'/typeAgencyHierarchyLongReference.php',
        'Santosdave\Travelport\Hotel\DriversLicense' => __DIR__ .'/DriversLicense.php',
        'Santosdave\Travelport\Hotel\typeLicenseCode' => __DIR__ .'/typeLicenseCode.php',
        'Santosdave\Travelport\Hotel\typeAssociatedRemarkWithSegmentRef' => __DIR__ .'/typeAssociatedRemarkWithSegmentRef.php',
        'Santosdave\Travelport\Hotel\typeAssociatedRemark' => __DIR__ .'/typeAssociatedRemark.php',
        'Santosdave\Travelport\Hotel\typePolicy' => __DIR__ .'/typePolicy.php',
        'Santosdave\Travelport\Hotel\ShopInformation' => __DIR__ .'/ShopInformation.php',
        'Santosdave\Travelport\Hotel\SearchRequest' => __DIR__ .'/SearchRequest.php',
        'Santosdave\Travelport\Hotel\FlightsOffered' => __DIR__ .'/FlightsOffered.php',
        'Santosdave\Travelport\Hotel\PolicyInformation' => __DIR__ .'/PolicyInformation.php',
        'Santosdave\Travelport\Hotel\ReasonCode' => __DIR__ .'/ReasonCode.php',
        'Santosdave\Travelport\Hotel\AgencyInformation' => __DIR__ .'/AgencyInformation.php',
        'Santosdave\Travelport\Hotel\AccountInformation' => __DIR__ .'/AccountInformation.php',
        'Santosdave\Travelport\Hotel\TravelerInformation' => __DIR__ .'/TravelerInformation.php',
        'Santosdave\Travelport\Hotel\EmergencyContact' => __DIR__ .'/EmergencyContact.php',
        'Santosdave\Travelport\Hotel\CustomProfileInformation' => __DIR__ .'/CustomProfileInformation.php',
        'Santosdave\Travelport\Hotel\FileFinishingInfo' => __DIR__ .'/FileFinishingInfo.php',
        'Santosdave\Travelport\Hotel\typeProfileEntityStatus' => __DIR__ .'/typeProfileEntityStatus.php',
        'Santosdave\Travelport\Hotel\typeProfileEntityStatusWithDelete' => __DIR__ .'/typeProfileEntityStatusWithDelete.php',
        'Santosdave\Travelport\Hotel\BillingPointOfSaleInfo' => __DIR__ .'/BillingPointOfSaleInfo.php',
        'Santosdave\Travelport\Hotel\AgentIDOverride' => __DIR__ .'/AgentIDOverride.php',
        'Santosdave\Travelport\Hotel\OverridePCC' => __DIR__ .'/OverridePCC.php',
        'Santosdave\Travelport\Hotel\typeKeyword' => __DIR__ .'/typeKeyword.php',
        'Santosdave\Travelport\Hotel\typeSubKey' => __DIR__ .'/typeSubKey.php',
        'Santosdave\Travelport\Hotel\typeOTAKeyword' => __DIR__ .'/typeOTAKeyword.php',
        'Santosdave\Travelport\Hotel\typeOTASubKey' => __DIR__ .'/typeOTASubKey.php',
        'Santosdave\Travelport\Hotel\Keyword' => __DIR__ .'/Keyword.php',
        'Santosdave\Travelport\Hotel\BookingDates' => __DIR__ .'/BookingDates.php',
        'Santosdave\Travelport\Hotel\PaymentRestriction' => __DIR__ .'/PaymentRestriction.php',
        'Santosdave\Travelport\Hotel\RequiredField' => __DIR__ .'/RequiredField.php',
        'Santosdave\Travelport\Hotel\CardRestriction' => __DIR__ .'/CardRestriction.php',
        'Santosdave\Travelport\Hotel\AddressRestriction' => __DIR__ .'/AddressRestriction.php',
        'Santosdave\Travelport\Hotel\SSRInfo' => __DIR__ .'/SSRInfo.php',
        'Santosdave\Travelport\Hotel\typeNonAirReservationRef' => __DIR__ .'/typeNonAirReservationRef.php',
        'Santosdave\Travelport\Hotel\typeSegmentRef' => __DIR__ .'/typeSegmentRef.php',
        'Santosdave\Travelport\Hotel\InvoiceRemark' => __DIR__ .'/InvoiceRemark.php',
        'Santosdave\Travelport\Hotel\RequestKeyMappings' => __DIR__ .'/RequestKeyMappings.php',
        'Santosdave\Travelport\Hotel\KeyMapping' => __DIR__ .'/KeyMapping.php',
        'Santosdave\Travelport\Hotel\ReservationName' => __DIR__ .'/ReservationName.php',
        'Santosdave\Travelport\Hotel\NameOverride' => __DIR__ .'/NameOverride.php',
        'Santosdave\Travelport\Hotel\APIProvider' => __DIR__ .'/APIProvider.php',
        'Santosdave\Travelport\Hotel\AvailablePseudoCityCode' => __DIR__ .'/AvailablePseudoCityCode.php',
        'Santosdave\Travelport\Hotel\TransactionType' => __DIR__ .'/TransactionType.php',
        'Santosdave\Travelport\Hotel\Air' => __DIR__ .'/Air.php',
        'Santosdave\Travelport\Hotel\typeTransactionsAllowed' => __DIR__ .'/typeTransactionsAllowed.php',
        'Santosdave\Travelport\Hotel\typeBookingTransactionsAllowed' => __DIR__ .'/typeBookingTransactionsAllowed.php',
        'Santosdave\Travelport\Hotel\typeRecordStatus' => __DIR__ .'/typeRecordStatus.php',
        'Santosdave\Travelport\Hotel\ThirdPartyInformation' => __DIR__ .'/ThirdPartyInformation.php',
        'Santosdave\Travelport\Hotel\TravelComplianceData' => __DIR__ .'/TravelComplianceData.php',
        'Santosdave\Travelport\Hotel\PolicyCompliance' => __DIR__ .'/PolicyCompliance.php',
        'Santosdave\Travelport\Hotel\ContractCompliance' => __DIR__ .'/ContractCompliance.php',
        'Santosdave\Travelport\Hotel\PreferredSupplier' => __DIR__ .'/PreferredSupplier.php',
        'Santosdave\Travelport\Hotel\typeProfileLevelWithCredential' => __DIR__ .'/typeProfileLevelWithCredential.php',
        'Santosdave\Travelport\Hotel\LoyaltyProgram' => __DIR__ .'/LoyaltyProgram.php',
        'Santosdave\Travelport\Hotel\typeErrorInfo' => __DIR__ .'/typeErrorInfo.php',
        'Santosdave\Travelport\Hotel\URTicketStatus' => __DIR__ .'/URTicketStatus.php',
        'Santosdave\Travelport\Hotel\PermittedProviders' => __DIR__ .'/PermittedProviders.php',
        'Santosdave\Travelport\Hotel\typeAdjustmentTarget' => __DIR__ .'/typeAdjustmentTarget.php',
        'Santosdave\Travelport\Hotel\typeAdjustmentType' => __DIR__ .'/typeAdjustmentType.php',
        'Santosdave\Travelport\Hotel\ReviewBooking' => __DIR__ .'/ReviewBooking.php',
        'Santosdave\Travelport\Hotel\typeCreditCardType' => __DIR__ .'/typeCreditCardType.php',
        'Santosdave\Travelport\Hotel\PersonalGeography' => __DIR__ .'/PersonalGeography.php',
        'Santosdave\Travelport\Hotel\Group' => __DIR__ .'/Group.php',
        'Santosdave\Travelport\Hotel\SSRRef' => __DIR__ .'/SSRRef.php',
        'Santosdave\Travelport\Hotel\typeElementStatus' => __DIR__ .'/typeElementStatus.php',
        'Santosdave\Travelport\Hotel\ConsolidatorRemark' => __DIR__ .'/ConsolidatorRemark.php',
        'Santosdave\Travelport\Hotel\PseudoCityCode' => __DIR__ .'/PseudoCityCode.php',
        'Santosdave\Travelport\Hotel\BaseAsyncProviderSpecificResponse' => __DIR__ .'/BaseAsyncProviderSpecificResponse.php',
        'Santosdave\Travelport\Hotel\typeProviderReservationDetail' => __DIR__ .'/typeProviderReservationDetail.php',
        'Santosdave\Travelport\Hotel\CabinClass' => __DIR__ .'/CabinClass.php',
        'Santosdave\Travelport\Hotel\SeatAttributes' => __DIR__ .'/SeatAttributes.php',
        'Santosdave\Travelport\Hotel\SeatAttribute' => __DIR__ .'/SeatAttribute.php',
        'Santosdave\Travelport\Hotel\typeKeyBasedReference' => __DIR__ .'/typeKeyBasedReference.php',
        'Santosdave\Travelport\Hotel\InvoiceData' => __DIR__ .'/InvoiceData.php',
        'Santosdave\Travelport\Hotel\BookingTravelerInformation' => __DIR__ .'/BookingTravelerInformation.php',
        'Santosdave\Travelport\Hotel\OwnershipChange' => __DIR__ .'/OwnershipChange.php',
        'Santosdave\Travelport\Hotel\IndustryStandardSSR' => __DIR__ .'/IndustryStandardSSR.php',
        'Santosdave\Travelport\Hotel\PaymentAdvice' => __DIR__ .'/PaymentAdvice.php',
        'Santosdave\Travelport\Hotel\EmailNotification' => __DIR__ .'/EmailNotification.php',
        'Santosdave\Travelport\Hotel\typeItineraryCode' => __DIR__ .'/typeItineraryCode.php',
        'Santosdave\Travelport\Hotel\typeItineraryType' => __DIR__ .'/typeItineraryType.php',
        'Santosdave\Travelport\Hotel\typeFormOfRefund' => __DIR__ .'/typeFormOfRefund.php',
        'Santosdave\Travelport\Hotel\typeFarePull' => __DIR__ .'/typeFarePull.php',
        'Santosdave\Travelport\Hotel\typePriceClassOfService' => __DIR__ .'/typePriceClassOfService.php',
        'Santosdave\Travelport\Hotel\typePricingType' => __DIR__ .'/typePricingType.php',
        'Santosdave\Travelport\Hotel\typeTax' => __DIR__ .'/typeTax.php',
        'Santosdave\Travelport\Hotel\typeFeeInfo' => __DIR__ .'/typeFeeInfo.php',
        'Santosdave\Travelport\Hotel\TaxInfoRef' => __DIR__ .'/TaxInfoRef.php',
        'Santosdave\Travelport\Hotel\QueuePlace' => __DIR__ .'/QueuePlace.php',
        'Santosdave\Travelport\Hotel\QueueSelector' => __DIR__ .'/QueueSelector.php',
        'Santosdave\Travelport\Hotel\typeTrinary' => __DIR__ .'/typeTrinary.php',
        'Santosdave\Travelport\Hotel\typePolicyCodesList' => __DIR__ .'/typePolicyCodesList.php',
        'Santosdave\Travelport\Hotel\IncludedInBase' => __DIR__ .'/IncludedInBase.php',
        'Santosdave\Travelport\Hotel\PointOfCommencement' => __DIR__ .'/PointOfCommencement.php',
        'Santosdave\Travelport\Hotel\PriceMatchError' => __DIR__ .'/PriceMatchError.php',
        'Santosdave\Travelport\Hotel\BaseReq' => __DIR__ .'/BaseReq.php',
        'Santosdave\Travelport\Hotel\BaseCoreReq' => __DIR__ .'/BaseCoreReq.php',
        'Santosdave\Travelport\Hotel\BaseSearchReq' => __DIR__ .'/BaseSearchReq.php',
        'Santosdave\Travelport\Hotel\BaseCoreSearchReq' => __DIR__ .'/BaseCoreSearchReq.php',
        'Santosdave\Travelport\Hotel\BaseSearchRsp' => __DIR__ .'/BaseSearchRsp.php',
        'Santosdave\Travelport\Hotel\BaseRsp' => __DIR__ .'/BaseRsp.php',
        'Santosdave\Travelport\Hotel\BaseCreateReservationReq' => __DIR__ .'/BaseCreateReservationReq.php',
        'Santosdave\Travelport\Hotel\ErrorInfo' => __DIR__ .'/ErrorInfo.php',
        'Santosdave\Travelport\Hotel\typeLoggingLevel' => __DIR__ .'/typeLoggingLevel.php',
        'Santosdave\Travelport\Hotel\BaseCreateWithFormOfPaymentReq' => __DIR__ .'/BaseCreateWithFormOfPaymentReq.php',
        'Santosdave\Travelport\Hotel\HotelReservation' => __DIR__ .'/HotelReservation.php',
        'Santosdave\Travelport\Hotel\HotelProperty' => __DIR__ .'/HotelProperty.php',
        'Santosdave\Travelport\Hotel\MarketingMessage' => __DIR__ .'/MarketingMessage.php',
        'Santosdave\Travelport\Hotel\typeNetTransCommission' => __DIR__ .'/typeNetTransCommission.php',
        'Santosdave\Travelport\Hotel\HotelRateDetail' => __DIR__ .'/HotelRateDetail.php',
        'Santosdave\Travelport\Hotel\RoomCapacity' => __DIR__ .'/RoomCapacity.php',
        'Santosdave\Travelport\Hotel\ExtraCharges' => __DIR__ .'/ExtraCharges.php',
        'Santosdave\Travelport\Hotel\Inclusions' => __DIR__ .'/Inclusions.php',
        'Santosdave\Travelport\Hotel\BedTypes' => __DIR__ .'/BedTypes.php',
        'Santosdave\Travelport\Hotel\MealPlans' => __DIR__ .'/MealPlans.php',
        'Santosdave\Travelport\Hotel\MealPlan' => __DIR__ .'/MealPlan.php',
        'Santosdave\Travelport\Hotel\TaxDetails' => __DIR__ .'/TaxDetails.php',
        'Santosdave\Travelport\Hotel\Tax' => __DIR__ .'/Tax.php',
        'Santosdave\Travelport\Hotel\GuestInformation' => __DIR__ .'/GuestInformation.php',
        'Santosdave\Travelport\Hotel\ExtraChild' => __DIR__ .'/ExtraChild.php',
        'Santosdave\Travelport\Hotel\NumberOfAdults' => __DIR__ .'/NumberOfAdults.php',
        'Santosdave\Travelport\Hotel\HotelRateByDate' => __DIR__ .'/HotelRateByDate.php',
        'Santosdave\Travelport\Hotel\HotelStay' => __DIR__ .'/HotelStay.php',
        'Santosdave\Travelport\Hotel\HotelChain' => __DIR__ .'/HotelChain.php',
        'Santosdave\Travelport\Hotel\HotelLocation' => __DIR__ .'/HotelLocation.php',
        'Santosdave\Travelport\Hotel\HotelSearchLocation' => __DIR__ .'/HotelSearchLocation.php',
        'Santosdave\Travelport\Hotel\ProviderLocation' => __DIR__ .'/ProviderLocation.php',
        'Santosdave\Travelport\Hotel\HotelDetailItem' => __DIR__ .'/HotelDetailItem.php',
        'Santosdave\Travelport\Hotel\HotelDetailsModifiers' => __DIR__ .'/HotelDetailsModifiers.php',
        'Santosdave\Travelport\Hotel\HotelSearchModifiers' => __DIR__ .'/HotelSearchModifiers.php',
        'Santosdave\Travelport\Hotel\PermittedChains' => __DIR__ .'/PermittedChains.php',
        'Santosdave\Travelport\Hotel\ProhibitedChains' => __DIR__ .'/ProhibitedChains.php',
        'Santosdave\Travelport\Hotel\Amenities' => __DIR__ .'/Amenities.php',
        'Santosdave\Travelport\Hotel\HotelTransportation' => __DIR__ .'/HotelTransportation.php',
        'Santosdave\Travelport\Hotel\typeHotelPaymentType' => __DIR__ .'/typeHotelPaymentType.php',
        'Santosdave\Travelport\Hotel\SearchPriority' => __DIR__ .'/SearchPriority.php',
        'Santosdave\Travelport\Hotel\Criteria' => __DIR__ .'/Criteria.php',
        'Santosdave\Travelport\Hotel\HotelSearchResult' => __DIR__ .'/HotelSearchResult.php',
        'Santosdave\Travelport\Hotel\HotelSearchError' => __DIR__ .'/HotelSearchError.php',
        'Santosdave\Travelport\Hotel\PropertyDescription' => __DIR__ .'/PropertyDescription.php',
        'Santosdave\Travelport\Hotel\RateInfo' => __DIR__ .'/RateInfo.php',
        'Santosdave\Travelport\Hotel\HotelPropertyWithMediaItems' => __DIR__ .'/HotelPropertyWithMediaItems.php',
        'Santosdave\Travelport\Hotel\RoomConfirmationCodes' => __DIR__ .'/RoomConfirmationCodes.php',
        'Santosdave\Travelport\Hotel\TotalReservationPrice' => __DIR__ .'/TotalReservationPrice.php',
        'Santosdave\Travelport\Hotel\AdaptedRoomGuestAllocation' => __DIR__ .'/AdaptedRoomGuestAllocation.php',
        'Santosdave\Travelport\Hotel\typeAllImageSize' => __DIR__ .'/typeAllImageSize.php',
        'Santosdave\Travelport\Hotel\typeHotelLocation' => __DIR__ .'/typeHotelLocation.php',
        'Santosdave\Travelport\Hotel\typeRateRuleDetail' => __DIR__ .'/typeRateRuleDetail.php',
        'Santosdave\Travelport\Hotel\typeHotelAvailability' => __DIR__ .'/typeHotelAvailability.php',
        'Santosdave\Travelport\Hotel\typeUnstructuredAddress' => __DIR__ .'/typeUnstructuredAddress.php',
        'Santosdave\Travelport\Hotel\typeHotelRateDescription' => __DIR__ .'/typeHotelRateDescription.php',
        'Santosdave\Travelport\Hotel\typeHotelReferencePoint' => __DIR__ .'/typeHotelReferencePoint.php',
        'Santosdave\Travelport\Hotel\HotelRating' => __DIR__ .'/HotelRating.php',
        'Santosdave\Travelport\Hotel\typeAmenityLevel' => __DIR__ .'/typeAmenityLevel.php',
        'Santosdave\Travelport\Hotel\RatingRange' => __DIR__ .'/RatingRange.php',
        'Santosdave\Travelport\Hotel\HotelRuleItem' => __DIR__ .'/HotelRuleItem.php',
        'Santosdave\Travelport\Hotel\HotelAmenity' => __DIR__ .'/HotelAmenity.php',
        'Santosdave\Travelport\Hotel\HotelRulesModifiers' => __DIR__ .'/HotelRulesModifiers.php',
        'Santosdave\Travelport\Hotel\NumberOfChildren' => __DIR__ .'/NumberOfChildren.php',
        'Santosdave\Travelport\Hotel\HotelBedding' => __DIR__ .'/HotelBedding.php',
        'Santosdave\Travelport\Hotel\PromotionCode' => __DIR__ .'/PromotionCode.php',
        'Santosdave\Travelport\Hotel\RequestedHotelDetails' => __DIR__ .'/RequestedHotelDetails.php',
        'Santosdave\Travelport\Hotel\HotelAlternateProperties' => __DIR__ .'/HotelAlternateProperties.php',
        'Santosdave\Travelport\Hotel\RateMatchIndicator' => __DIR__ .'/RateMatchIndicator.php',
        'Santosdave\Travelport\Hotel\AssociatedRemark' => __DIR__ .'/AssociatedRemark.php',
        'Santosdave\Travelport\Hotel\Amenity' => __DIR__ .'/Amenity.php',
        'Santosdave\Travelport\Hotel\HotelRateInfo' => __DIR__ .'/HotelRateInfo.php',
        'Santosdave\Travelport\Hotel\GuestReviews' => __DIR__ .'/GuestReviews.php',
        'Santosdave\Travelport\Hotel\Comments' => __DIR__ .'/Comments.php',
        'Santosdave\Travelport\Hotel\HotelType' => __DIR__ .'/HotelType.php',
        'Santosdave\Travelport\Hotel\HotelSuperShopperResults' => __DIR__ .'/HotelSuperShopperResults.php',
        'Santosdave\Travelport\Hotel\CancelInfo' => __DIR__ .'/CancelInfo.php',
        'Santosdave\Travelport\Hotel\RoomView' => __DIR__ .'/RoomView.php',
        'Santosdave\Travelport\Hotel\GuaranteeInfo' => __DIR__ .'/GuaranteeInfo.php',
        'Santosdave\Travelport\Hotel\DepositAmount' => __DIR__ .'/DepositAmount.php',
        'Santosdave\Travelport\Hotel\GuaranteePaymentType' => __DIR__ .'/GuaranteePaymentType.php',
        'Santosdave\Travelport\Hotel\QuickResponse' => __DIR__ .'/QuickResponse.php',
        'Santosdave\Travelport\Hotel\typeGuestChildInformation' => __DIR__ .'/typeGuestChildInformation.php',
        'Santosdave\Travelport\Hotel\typeGuestRoomInformation' => __DIR__ .'/typeGuestRoomInformation.php',
        'Santosdave\Travelport\Hotel\Child' => __DIR__ .'/Child.php',
        'Santosdave\Travelport\Hotel\typeRoomDispatch' => __DIR__ .'/typeRoomDispatch.php',
        'Santosdave\Travelport\Hotel\Room' => __DIR__ .'/Room.php',
        'Santosdave\Travelport\Hotel\BookingGuestInformation' => __DIR__ .'/BookingGuestInformation.php',
        'Santosdave\Travelport\Hotel\typeHotelDetails' => __DIR__ .'/typeHotelDetails.php',
        'Santosdave\Travelport\Hotel\PermittedAggregators' => __DIR__ .'/PermittedAggregators.php',
        'Santosdave\Travelport\Hotel\Aggregator' => __DIR__ .'/Aggregator.php',
        'Santosdave\Travelport\Hotel\typeAdaptedRoomGuestAllocation' => __DIR__ .'/typeAdaptedRoomGuestAllocation.php',
        'Santosdave\Travelport\Hotel\AcceptedPayment' => __DIR__ .'/AcceptedPayment.php',
        'Santosdave\Travelport\Hotel\CurrencyRateConversion' => __DIR__ .'/CurrencyRateConversion.php',
        'Santosdave\Travelport\Hotel\HotelSearchAvailabilityReq' => __DIR__ .'/HotelSearchAvailabilityReq.php',
        'Santosdave\Travelport\Hotel\HotelSearchAvailabilityAsynchRsp' => __DIR__ .'/HotelSearchAvailabilityAsynchRsp.php',
        'Santosdave\Travelport\Hotel\RetrieveHotelSearchAvailabilityReq' => __DIR__ .'/RetrieveHotelSearchAvailabilityReq.php',
        'Santosdave\Travelport\Hotel\RetrieveHotelSearchAvailabilityRsp' => __DIR__ .'/RetrieveHotelSearchAvailabilityRsp.php',
        'Santosdave\Travelport\Hotel\BaseHotelSearchReq' => __DIR__ .'/BaseHotelSearchReq.php',
        'Santosdave\Travelport\Hotel\BaseHotelSearchRsp' => __DIR__ .'/BaseHotelSearchRsp.php',
        'Santosdave\Travelport\Hotel\HotelDetailsReq' => __DIR__ .'/HotelDetailsReq.php',
        'Santosdave\Travelport\Hotel\HotelDetailsRsp' => __DIR__ .'/HotelDetailsRsp.php',
        'Santosdave\Travelport\Hotel\AggregatorHotelDetails' => __DIR__ .'/AggregatorHotelDetails.php',
        'Santosdave\Travelport\Hotel\HotelRetrieveReq' => __DIR__ .'/HotelRetrieveReq.php',
        'Santosdave\Travelport\Hotel\HotelRetrieveRsp' => __DIR__ .'/HotelRetrieveRsp.php',
        'Santosdave\Travelport\Hotel\HotelMediaLinksReq' => __DIR__ .'/HotelMediaLinksReq.php',
        'Santosdave\Travelport\Hotel\HotelMediaLinksRsp' => __DIR__ .'/HotelMediaLinksRsp.php',
        'Santosdave\Travelport\Hotel\HotelRulesReq' => __DIR__ .'/HotelRulesReq.php',
        'Santosdave\Travelport\Hotel\HotelRulesLookup' => __DIR__ .'/HotelRulesLookup.php',
        'Santosdave\Travelport\Hotel\HotelRulesRsp' => __DIR__ .'/HotelRulesRsp.php',
        'Santosdave\Travelport\Hotel\RatesAndDates' => __DIR__ .'/RatesAndDates.php',
        'Santosdave\Travelport\Hotel\HotelUpsellDetailsReq' => __DIR__ .'/HotelUpsellDetailsReq.php',
        'Santosdave\Travelport\Hotel\HotelUpsellDetailsRsp' => __DIR__ .'/HotelUpsellDetailsRsp.php',
        'Santosdave\Travelport\Hotel\BaseHotelDetailsReq' => __DIR__ .'/BaseHotelDetailsReq.php',
        'Santosdave\Travelport\Hotel\BaseHotelDetailsRsp' => __DIR__ .'/BaseHotelDetailsRsp.php',
        'Santosdave\Travelport\Hotel\HotelKeywordReq' => __DIR__ .'/HotelKeywordReq.php',
        'Santosdave\Travelport\Hotel\HotelKeywordRsp' => __DIR__ .'/HotelKeywordRsp.php',
        'Santosdave\Travelport\Hotel\HotelSuperShopperReq' => __DIR__ .'/HotelSuperShopperReq.php',
        'Santosdave\Travelport\Hotel\HotelSuperShopperRsp' => __DIR__ .'/HotelSuperShopperRsp.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_dbd6f8221bc2a549854a8687de630df1');

// Do nothing. The rest is just leftovers from the code generation.
{
}
