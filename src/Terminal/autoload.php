<?php


 function autoload_c1d4692ae37b27c55b45425a66a879e4($class)
{
    $classes = array(
        'FilippoToso\Travelport\Terminal\TerminalService' => __DIR__ .'/TerminalService.php',
        'FilippoToso\Travelport\Terminal\NextResultReference' => __DIR__ .'/NextResultReference.php',
        'FilippoToso\Travelport\Terminal\Airport' => __DIR__ .'/Airport.php',
        'FilippoToso\Travelport\Terminal\VendorLocation' => __DIR__ .'/VendorLocation.php',
        'FilippoToso\Travelport\Terminal\typeVendorLocation' => __DIR__ .'/typeVendorLocation.php',
        'FilippoToso\Travelport\Terminal\AgencySellInfo' => __DIR__ .'/AgencySellInfo.php',
        'FilippoToso\Travelport\Terminal\AgencyInfo' => __DIR__ .'/AgencyInfo.php',
        'FilippoToso\Travelport\Terminal\AgentAction' => __DIR__ .'/AgentAction.php',
        'FilippoToso\Travelport\Terminal\AirExchangeInfo' => __DIR__ .'/AirExchangeInfo.php',
        'FilippoToso\Travelport\Terminal\TotalPenaltyTaxInfo' => __DIR__ .'/TotalPenaltyTaxInfo.php',
        'FilippoToso\Travelport\Terminal\TicketFeeInfo' => __DIR__ .'/TicketFeeInfo.php',
        'FilippoToso\Travelport\Terminal\Auxdata' => __DIR__ .'/Auxdata.php',
        'FilippoToso\Travelport\Terminal\Entry' => __DIR__ .'/Entry.php',
        'FilippoToso\Travelport\Terminal\Carrier' => __DIR__ .'/Carrier.php',
        'FilippoToso\Travelport\Terminal\Provider' => __DIR__ .'/Provider.php',
        'FilippoToso\Travelport\Terminal\Certificate' => __DIR__ .'/Certificate.php',
        'FilippoToso\Travelport\Terminal\Check' => __DIR__ .'/Check.php',
        'FilippoToso\Travelport\Terminal\City' => __DIR__ .'/City.php',
        'FilippoToso\Travelport\Terminal\CityOrAirport' => __DIR__ .'/CityOrAirport.php',
        'FilippoToso\Travelport\Terminal\CoordinateLocation' => __DIR__ .'/CoordinateLocation.php',
        'FilippoToso\Travelport\Terminal\RailLocation' => __DIR__ .'/RailLocation.php',
        'FilippoToso\Travelport\Terminal\Credentials' => __DIR__ .'/Credentials.php',
        'FilippoToso\Travelport\Terminal\CreditCard' => __DIR__ .'/CreditCard.php',
        'FilippoToso\Travelport\Terminal\CustomizedNameData' => __DIR__ .'/CustomizedNameData.php',
        'FilippoToso\Travelport\Terminal\DebitCard' => __DIR__ .'/DebitCard.php',
        'FilippoToso\Travelport\Terminal\Requisition' => __DIR__ .'/Requisition.php',
        'FilippoToso\Travelport\Terminal\MiscFormOfPayment' => __DIR__ .'/MiscFormOfPayment.php',
        'FilippoToso\Travelport\Terminal\SupplierLocator' => __DIR__ .'/SupplierLocator.php',
        'FilippoToso\Travelport\Terminal\typePaymentCard' => __DIR__ .'/typePaymentCard.php',
        'FilippoToso\Travelport\Terminal\CreditCardAuth' => __DIR__ .'/CreditCardAuth.php',
        'FilippoToso\Travelport\Terminal\typeGeneralReference' => __DIR__ .'/typeGeneralReference.php',
        'FilippoToso\Travelport\Terminal\typeFormOfPaymentPNRReference' => __DIR__ .'/typeFormOfPaymentPNRReference.php',
        'FilippoToso\Travelport\Terminal\FormOfPayment' => __DIR__ .'/FormOfPayment.php',
        'FilippoToso\Travelport\Terminal\EnettVan' => __DIR__ .'/EnettVan.php',
        'FilippoToso\Travelport\Terminal\typeVoucherInformation' => __DIR__ .'/typeVoucherInformation.php',
        'FilippoToso\Travelport\Terminal\typeVoucherType' => __DIR__ .'/typeVoucherType.php',
        'FilippoToso\Travelport\Terminal\UnitedNations' => __DIR__ .'/UnitedNations.php',
        'FilippoToso\Travelport\Terminal\DirectPayment' => __DIR__ .'/DirectPayment.php',
        'FilippoToso\Travelport\Terminal\AgentVoucher' => __DIR__ .'/AgentVoucher.php',
        'FilippoToso\Travelport\Terminal\typeAgencyPayment' => __DIR__ .'/typeAgencyPayment.php',
        'FilippoToso\Travelport\Terminal\FormOfPaymentRef' => __DIR__ .'/FormOfPaymentRef.php',
        'FilippoToso\Travelport\Terminal\Distance' => __DIR__ .'/Distance.php',
        'FilippoToso\Travelport\Terminal\Email' => __DIR__ .'/Email.php',
        'FilippoToso\Travelport\Terminal\MealRequest' => __DIR__ .'/MealRequest.php',
        'FilippoToso\Travelport\Terminal\Name' => __DIR__ .'/Name.php',
        'FilippoToso\Travelport\Terminal\ProviderARNKSegment' => __DIR__ .'/ProviderARNKSegment.php',
        'FilippoToso\Travelport\Terminal\PreviousSegment' => __DIR__ .'/PreviousSegment.php',
        'FilippoToso\Travelport\Terminal\NextSegment' => __DIR__ .'/NextSegment.php',
        'FilippoToso\Travelport\Terminal\PassiveInfo' => __DIR__ .'/PassiveInfo.php',
        'FilippoToso\Travelport\Terminal\BookingTraveler' => __DIR__ .'/BookingTraveler.php',
        'FilippoToso\Travelport\Terminal\BookingTravelerName' => __DIR__ .'/BookingTravelerName.php',
        'FilippoToso\Travelport\Terminal\NameRemark' => __DIR__ .'/NameRemark.php',
        'FilippoToso\Travelport\Terminal\PhoneNumber' => __DIR__ .'/PhoneNumber.php',
        'FilippoToso\Travelport\Terminal\ProviderReservationInfoRef' => __DIR__ .'/ProviderReservationInfoRef.php',
        'FilippoToso\Travelport\Terminal\ResponseMessage' => __DIR__ .'/ResponseMessage.php',
        'FilippoToso\Travelport\Terminal\State' => __DIR__ .'/State.php',
        'FilippoToso\Travelport\Terminal\Remark' => __DIR__ .'/Remark.php',
        'FilippoToso\Travelport\Terminal\SegmentRemark' => __DIR__ .'/SegmentRemark.php',
        'FilippoToso\Travelport\Terminal\RefundRemark' => __DIR__ .'/RefundRemark.php',
        'FilippoToso\Travelport\Terminal\GeneralRemark' => __DIR__ .'/GeneralRemark.php',
        'FilippoToso\Travelport\Terminal\CommissionRemark' => __DIR__ .'/CommissionRemark.php',
        'FilippoToso\Travelport\Terminal\ProviderReservationLevel' => __DIR__ .'/ProviderReservationLevel.php',
        'FilippoToso\Travelport\Terminal\PassengerTypeLevel' => __DIR__ .'/PassengerTypeLevel.php',
        'FilippoToso\Travelport\Terminal\typeDirection' => __DIR__ .'/typeDirection.php',
        'FilippoToso\Travelport\Terminal\AccountingRemark' => __DIR__ .'/AccountingRemark.php',
        'FilippoToso\Travelport\Terminal\XMLRemark' => __DIR__ .'/XMLRemark.php',
        'FilippoToso\Travelport\Terminal\HostToken' => __DIR__ .'/HostToken.php',
        'FilippoToso\Travelport\Terminal\HostTokenList' => __DIR__ .'/HostTokenList.php',
        'FilippoToso\Travelport\Terminal\AppliedProfile' => __DIR__ .'/AppliedProfile.php',
        'FilippoToso\Travelport\Terminal\typeGuaranteeInformation' => __DIR__ .'/typeGuaranteeInformation.php',
        'FilippoToso\Travelport\Terminal\AccountCode' => __DIR__ .'/AccountCode.php',
        'FilippoToso\Travelport\Terminal\AirSearchParameters' => __DIR__ .'/AirSearchParameters.php',
        'FilippoToso\Travelport\Terminal\Commission' => __DIR__ .'/Commission.php',
        'FilippoToso\Travelport\Terminal\DeliveryInfo' => __DIR__ .'/DeliveryInfo.php',
        'FilippoToso\Travelport\Terminal\ShippingAddress' => __DIR__ .'/ShippingAddress.php',
        'FilippoToso\Travelport\Terminal\ActionStatus' => __DIR__ .'/ActionStatus.php',
        'FilippoToso\Travelport\Terminal\Endorsement' => __DIR__ .'/Endorsement.php',
        'FilippoToso\Travelport\Terminal\typeProviderReservationSpecificInfo' => __DIR__ .'/typeProviderReservationSpecificInfo.php',
        'FilippoToso\Travelport\Terminal\LoyaltyCard' => __DIR__ .'/LoyaltyCard.php',
        'FilippoToso\Travelport\Terminal\DiscountCard' => __DIR__ .'/DiscountCard.php',
        'FilippoToso\Travelport\Terminal\OperatedBy' => __DIR__ .'/OperatedBy.php',
        'FilippoToso\Travelport\Terminal\Penalty' => __DIR__ .'/Penalty.php',
        'FilippoToso\Travelport\Terminal\Restriction' => __DIR__ .'/Restriction.php',
        'FilippoToso\Travelport\Terminal\SeatAssignment' => __DIR__ .'/SeatAssignment.php',
        'FilippoToso\Travelport\Terminal\AirSeatAssignment' => __DIR__ .'/AirSeatAssignment.php',
        'FilippoToso\Travelport\Terminal\RailSeatAssignment' => __DIR__ .'/RailSeatAssignment.php',
        'FilippoToso\Travelport\Terminal\Characteristic' => __DIR__ .'/Characteristic.php',
        'FilippoToso\Travelport\Terminal\ServiceData' => __DIR__ .'/ServiceData.php',
        'FilippoToso\Travelport\Terminal\ServiceInfo' => __DIR__ .'/ServiceInfo.php',
        'FilippoToso\Travelport\Terminal\SSR' => __DIR__ .'/SSR.php',
        'FilippoToso\Travelport\Terminal\TravelerType' => __DIR__ .'/TravelerType.php',
        'FilippoToso\Travelport\Terminal\PaymentRef' => __DIR__ .'/PaymentRef.php',
        'FilippoToso\Travelport\Terminal\BookingTravelerRef' => __DIR__ .'/BookingTravelerRef.php',
        'FilippoToso\Travelport\Terminal\DiscountCardRef' => __DIR__ .'/DiscountCardRef.php',
        'FilippoToso\Travelport\Terminal\DriversLicenseRef' => __DIR__ .'/DriversLicenseRef.php',
        'FilippoToso\Travelport\Terminal\LoyaltyCardRef' => __DIR__ .'/LoyaltyCardRef.php',
        'FilippoToso\Travelport\Terminal\typeRemark' => __DIR__ .'/typeRemark.php',
        'FilippoToso\Travelport\Terminal\UnassociatedRemark' => __DIR__ .'/UnassociatedRemark.php',
        'FilippoToso\Travelport\Terminal\typeRemarkWithTravelerRef' => __DIR__ .'/typeRemarkWithTravelerRef.php',
        'FilippoToso\Travelport\Terminal\CustomerID' => __DIR__ .'/CustomerID.php',
        'FilippoToso\Travelport\Terminal\BaseReservation' => __DIR__ .'/BaseReservation.php',
        'FilippoToso\Travelport\Terminal\MCO' => __DIR__ .'/MCO.php',
        'FilippoToso\Travelport\Terminal\MCOText' => __DIR__ .'/MCOText.php',
        'FilippoToso\Travelport\Terminal\typeFreeFormText' => __DIR__ .'/typeFreeFormText.php',
        'FilippoToso\Travelport\Terminal\MCOPriceData' => __DIR__ .'/MCOPriceData.php',
        'FilippoToso\Travelport\Terminal\PassengerInfo' => __DIR__ .'/PassengerInfo.php',
        'FilippoToso\Travelport\Terminal\MCOInformation' => __DIR__ .'/MCOInformation.php',
        'FilippoToso\Travelport\Terminal\MCOExchangeInfo' => __DIR__ .'/MCOExchangeInfo.php',
        'FilippoToso\Travelport\Terminal\MCOFeeInfo' => __DIR__ .'/MCOFeeInfo.php',
        'FilippoToso\Travelport\Terminal\MCORemark' => __DIR__ .'/MCORemark.php',
        'FilippoToso\Travelport\Terminal\StockControl' => __DIR__ .'/StockControl.php',
        'FilippoToso\Travelport\Terminal\ExchangedCoupon' => __DIR__ .'/ExchangedCoupon.php',
        'FilippoToso\Travelport\Terminal\typeTaxInfo' => __DIR__ .'/typeTaxInfo.php',
        'FilippoToso\Travelport\Terminal\TaxDetail' => __DIR__ .'/TaxDetail.php',
        'FilippoToso\Travelport\Terminal\MetaData' => __DIR__ .'/MetaData.php',
        'FilippoToso\Travelport\Terminal\RoleInfo' => __DIR__ .'/RoleInfo.php',
        'FilippoToso\Travelport\Terminal\OSI' => __DIR__ .'/OSI.php',
        'FilippoToso\Travelport\Terminal\Segment' => __DIR__ .'/Segment.php',
        'FilippoToso\Travelport\Terminal\TravelSegment' => __DIR__ .'/TravelSegment.php',
        'FilippoToso\Travelport\Terminal\SearchEvent' => __DIR__ .'/SearchEvent.php',
        'FilippoToso\Travelport\Terminal\SearchTicketing' => __DIR__ .'/SearchTicketing.php',
        'FilippoToso\Travelport\Terminal\SearchPassenger' => __DIR__ .'/SearchPassenger.php',
        'FilippoToso\Travelport\Terminal\SpecialEquipment' => __DIR__ .'/SpecialEquipment.php',
        'FilippoToso\Travelport\Terminal\ContinuityCheckOverride' => __DIR__ .'/ContinuityCheckOverride.php',
        'FilippoToso\Travelport\Terminal\typeAgentInfo' => __DIR__ .'/typeAgentInfo.php',
        'FilippoToso\Travelport\Terminal\typeProviderToken' => __DIR__ .'/typeProviderToken.php',
        'FilippoToso\Travelport\Terminal\typeProfileLevel' => __DIR__ .'/typeProfileLevel.php',
        'FilippoToso\Travelport\Terminal\typeProfileApplicability' => __DIR__ .'/typeProfileApplicability.php',
        'FilippoToso\Travelport\Terminal\typeEventType' => __DIR__ .'/typeEventType.php',
        'FilippoToso\Travelport\Terminal\typeCommissionLevel' => __DIR__ .'/typeCommissionLevel.php',
        'FilippoToso\Travelport\Terminal\typeCommissionType' => __DIR__ .'/typeCommissionType.php',
        'FilippoToso\Travelport\Terminal\typeDistance' => __DIR__ .'/typeDistance.php',
        'FilippoToso\Travelport\Terminal\typeElement' => __DIR__ .'/typeElement.php',
        'FilippoToso\Travelport\Terminal\typeResultMessage' => __DIR__ .'/typeResultMessage.php',
        'FilippoToso\Travelport\Terminal\typeInvoiceRecordCategory' => __DIR__ .'/typeInvoiceRecordCategory.php',
        'FilippoToso\Travelport\Terminal\Location' => __DIR__ .'/Location.php',
        'FilippoToso\Travelport\Terminal\typeMCOStatus' => __DIR__ .'/typeMCOStatus.php',
        'FilippoToso\Travelport\Terminal\typeMCOType' => __DIR__ .'/typeMCOType.php',
        'FilippoToso\Travelport\Terminal\typeMCOFeeType' => __DIR__ .'/typeMCOFeeType.php',
        'FilippoToso\Travelport\Terminal\typePurchaseWindow' => __DIR__ .'/typePurchaseWindow.php',
        'FilippoToso\Travelport\Terminal\typeResidency' => __DIR__ .'/typeResidency.php',
        'FilippoToso\Travelport\Terminal\typeQueueModifyAction' => __DIR__ .'/typeQueueModifyAction.php',
        'FilippoToso\Travelport\Terminal\typeReqSeat' => __DIR__ .'/typeReqSeat.php',
        'FilippoToso\Travelport\Terminal\typeSearchTimeSpec' => __DIR__ .'/typeSearchTimeSpec.php',
        'FilippoToso\Travelport\Terminal\typeProfileType' => __DIR__ .'/typeProfileType.php',
        'FilippoToso\Travelport\Terminal\typeStructuredAddress' => __DIR__ .'/typeStructuredAddress.php',
        'FilippoToso\Travelport\Terminal\typeTicketStatus' => __DIR__ .'/typeTicketStatus.php',
        'FilippoToso\Travelport\Terminal\typeTimeRange' => __DIR__ .'/typeTimeRange.php',
        'FilippoToso\Travelport\Terminal\typeProduct' => __DIR__ .'/typeProduct.php',
        'FilippoToso\Travelport\Terminal\typeVehicleCategory' => __DIR__ .'/typeVehicleCategory.php',
        'FilippoToso\Travelport\Terminal\typeVehicleClass' => __DIR__ .'/typeVehicleClass.php',
        'FilippoToso\Travelport\Terminal\typeVehicleTransmission' => __DIR__ .'/typeVehicleTransmission.php',
        'FilippoToso\Travelport\Terminal\typeFuel' => __DIR__ .'/typeFuel.php',
        'FilippoToso\Travelport\Terminal\typeDoorCount' => __DIR__ .'/typeDoorCount.php',
        'FilippoToso\Travelport\Terminal\typeRateDescription' => __DIR__ .'/typeRateDescription.php',
        'FilippoToso\Travelport\Terminal\MediaItem' => __DIR__ .'/MediaItem.php',
        'FilippoToso\Travelport\Terminal\typeImageSize' => __DIR__ .'/typeImageSize.php',
        'FilippoToso\Travelport\Terminal\typeOtherImageSize' => __DIR__ .'/typeOtherImageSize.php',
        'FilippoToso\Travelport\Terminal\typeReserveRequirement' => __DIR__ .'/typeReserveRequirement.php',
        'FilippoToso\Travelport\Terminal\PointOfSale' => __DIR__ .'/PointOfSale.php',
        'FilippoToso\Travelport\Terminal\BookingTravelerInfo' => __DIR__ .'/BookingTravelerInfo.php',
        'FilippoToso\Travelport\Terminal\TravelInfo' => __DIR__ .'/TravelInfo.php',
        'FilippoToso\Travelport\Terminal\typeSource' => __DIR__ .'/typeSource.php',
        'FilippoToso\Travelport\Terminal\BookingSource' => __DIR__ .'/BookingSource.php',
        'FilippoToso\Travelport\Terminal\typeSearchLocation' => __DIR__ .'/typeSearchLocation.php',
        'FilippoToso\Travelport\Terminal\typeTimeSpec' => __DIR__ .'/typeTimeSpec.php',
        'FilippoToso\Travelport\Terminal\typeSpecificTime' => __DIR__ .'/typeSpecificTime.php',
        'FilippoToso\Travelport\Terminal\typeFlexibleTimeSpec' => __DIR__ .'/typeFlexibleTimeSpec.php',
        'FilippoToso\Travelport\Terminal\SearchExtraDays' => __DIR__ .'/SearchExtraDays.php',
        'FilippoToso\Travelport\Terminal\typePassengerType' => __DIR__ .'/typePassengerType.php',
        'FilippoToso\Travelport\Terminal\typeCommissionModifier' => __DIR__ .'/typeCommissionModifier.php',
        'FilippoToso\Travelport\Terminal\Guarantee' => __DIR__ .'/Guarantee.php',
        'FilippoToso\Travelport\Terminal\OtherGuaranteeInfo' => __DIR__ .'/OtherGuaranteeInfo.php',
        'FilippoToso\Travelport\Terminal\typeFulfillmentIDType' => __DIR__ .'/typeFulfillmentIDType.php',
        'FilippoToso\Travelport\Terminal\typeFulfillmentType' => __DIR__ .'/typeFulfillmentType.php',
        'FilippoToso\Travelport\Terminal\Payment' => __DIR__ .'/Payment.php',
        'FilippoToso\Travelport\Terminal\ServiceRuleType' => __DIR__ .'/ServiceRuleType.php',
        'FilippoToso\Travelport\Terminal\ApplicationRules' => __DIR__ .'/ApplicationRules.php',
        'FilippoToso\Travelport\Terminal\ApplicationLevel' => __DIR__ .'/ApplicationLevel.php',
        'FilippoToso\Travelport\Terminal\ApplicationLimits' => __DIR__ .'/ApplicationLimits.php',
        'FilippoToso\Travelport\Terminal\ModifyRules' => __DIR__ .'/ModifyRules.php',
        'FilippoToso\Travelport\Terminal\ModifyRule' => __DIR__ .'/ModifyRule.php',
        'FilippoToso\Travelport\Terminal\SecondaryTypeRules' => __DIR__ .'/SecondaryTypeRules.php',
        'FilippoToso\Travelport\Terminal\SecondaryTypeRule' => __DIR__ .'/SecondaryTypeRule.php',
        'FilippoToso\Travelport\Terminal\OptionalServiceApplicabilityType' => __DIR__ .'/OptionalServiceApplicabilityType.php',
        'FilippoToso\Travelport\Terminal\OptionalServiceApplicationLimitType' => __DIR__ .'/OptionalServiceApplicationLimitType.php',
        'FilippoToso\Travelport\Terminal\ModificationType' => __DIR__ .'/ModificationType.php',
        'FilippoToso\Travelport\Terminal\FormattedTextTextType' => __DIR__ .'/FormattedTextTextType.php',
        'FilippoToso\Travelport\Terminal\typeRateCategory' => __DIR__ .'/typeRateCategory.php',
        'FilippoToso\Travelport\Terminal\typeVehicleLocation' => __DIR__ .'/typeVehicleLocation.php',
        'FilippoToso\Travelport\Terminal\typeRateTimePeriod' => __DIR__ .'/typeRateTimePeriod.php',
        'FilippoToso\Travelport\Terminal\CorporateDiscountID' => __DIR__ .'/CorporateDiscountID.php',
        'FilippoToso\Travelport\Terminal\AgencyContactInfo' => __DIR__ .'/AgencyContactInfo.php',
        'FilippoToso\Travelport\Terminal\typeLocation' => __DIR__ .'/typeLocation.php',
        'FilippoToso\Travelport\Terminal\typeProfileLevelWithSystem' => __DIR__ .'/typeProfileLevelWithSystem.php',
        'FilippoToso\Travelport\Terminal\typeProfileRef' => __DIR__ .'/typeProfileRef.php',
        'FilippoToso\Travelport\Terminal\ServiceFeeTaxInfo' => __DIR__ .'/ServiceFeeTaxInfo.php',
        'FilippoToso\Travelport\Terminal\typeStatus' => __DIR__ .'/typeStatus.php',
        'FilippoToso\Travelport\Terminal\ServiceFeeInfo' => __DIR__ .'/ServiceFeeInfo.php',
        'FilippoToso\Travelport\Terminal\LinkedUniversalRecord' => __DIR__ .'/LinkedUniversalRecord.php',
        'FilippoToso\Travelport\Terminal\typeDateRange' => __DIR__ .'/typeDateRange.php',
        'FilippoToso\Travelport\Terminal\typeAgencyProfileLevel' => __DIR__ .'/typeAgencyProfileLevel.php',
        'FilippoToso\Travelport\Terminal\MarketingInformation' => __DIR__ .'/MarketingInformation.php',
        'FilippoToso\Travelport\Terminal\Postscript' => __DIR__ .'/Postscript.php',
        'FilippoToso\Travelport\Terminal\typeRateGuarantee' => __DIR__ .'/typeRateGuarantee.php',
        'FilippoToso\Travelport\Terminal\typeAgencyHierarchyReference' => __DIR__ .'/typeAgencyHierarchyReference.php',
        'FilippoToso\Travelport\Terminal\typeAgencyHierarchyLongReference' => __DIR__ .'/typeAgencyHierarchyLongReference.php',
        'FilippoToso\Travelport\Terminal\DriversLicense' => __DIR__ .'/DriversLicense.php',
        'FilippoToso\Travelport\Terminal\typeLicenseCode' => __DIR__ .'/typeLicenseCode.php',
        'FilippoToso\Travelport\Terminal\typeAssociatedRemarkWithSegmentRef' => __DIR__ .'/typeAssociatedRemarkWithSegmentRef.php',
        'FilippoToso\Travelport\Terminal\typeAssociatedRemark' => __DIR__ .'/typeAssociatedRemark.php',
        'FilippoToso\Travelport\Terminal\typePolicy' => __DIR__ .'/typePolicy.php',
        'FilippoToso\Travelport\Terminal\ShopInformation' => __DIR__ .'/ShopInformation.php',
        'FilippoToso\Travelport\Terminal\SearchRequest' => __DIR__ .'/SearchRequest.php',
        'FilippoToso\Travelport\Terminal\FlightsOffered' => __DIR__ .'/FlightsOffered.php',
        'FilippoToso\Travelport\Terminal\PolicyInformation' => __DIR__ .'/PolicyInformation.php',
        'FilippoToso\Travelport\Terminal\ReasonCode' => __DIR__ .'/ReasonCode.php',
        'FilippoToso\Travelport\Terminal\AgencyInformation' => __DIR__ .'/AgencyInformation.php',
        'FilippoToso\Travelport\Terminal\AccountInformation' => __DIR__ .'/AccountInformation.php',
        'FilippoToso\Travelport\Terminal\TravelerInformation' => __DIR__ .'/TravelerInformation.php',
        'FilippoToso\Travelport\Terminal\EmergencyContact' => __DIR__ .'/EmergencyContact.php',
        'FilippoToso\Travelport\Terminal\CustomProfileInformation' => __DIR__ .'/CustomProfileInformation.php',
        'FilippoToso\Travelport\Terminal\FileFinishingInfo' => __DIR__ .'/FileFinishingInfo.php',
        'FilippoToso\Travelport\Terminal\typeProfileEntityStatus' => __DIR__ .'/typeProfileEntityStatus.php',
        'FilippoToso\Travelport\Terminal\typeProfileEntityStatusWithDelete' => __DIR__ .'/typeProfileEntityStatusWithDelete.php',
        'FilippoToso\Travelport\Terminal\BillingPointOfSaleInfo' => __DIR__ .'/BillingPointOfSaleInfo.php',
        'FilippoToso\Travelport\Terminal\AgentIDOverride' => __DIR__ .'/AgentIDOverride.php',
        'FilippoToso\Travelport\Terminal\OverridePCC' => __DIR__ .'/OverridePCC.php',
        'FilippoToso\Travelport\Terminal\typeKeyword' => __DIR__ .'/typeKeyword.php',
        'FilippoToso\Travelport\Terminal\typeSubKey' => __DIR__ .'/typeSubKey.php',
        'FilippoToso\Travelport\Terminal\Keyword' => __DIR__ .'/Keyword.php',
        'FilippoToso\Travelport\Terminal\BookingDates' => __DIR__ .'/BookingDates.php',
        'FilippoToso\Travelport\Terminal\PaymentRestriction' => __DIR__ .'/PaymentRestriction.php',
        'FilippoToso\Travelport\Terminal\RequiredField' => __DIR__ .'/RequiredField.php',
        'FilippoToso\Travelport\Terminal\CardRestriction' => __DIR__ .'/CardRestriction.php',
        'FilippoToso\Travelport\Terminal\AddressRestriction' => __DIR__ .'/AddressRestriction.php',
        'FilippoToso\Travelport\Terminal\SSRInfo' => __DIR__ .'/SSRInfo.php',
        'FilippoToso\Travelport\Terminal\typeNonAirReservationRef' => __DIR__ .'/typeNonAirReservationRef.php',
        'FilippoToso\Travelport\Terminal\typeSegmentRef' => __DIR__ .'/typeSegmentRef.php',
        'FilippoToso\Travelport\Terminal\InvoiceRemark' => __DIR__ .'/InvoiceRemark.php',
        'FilippoToso\Travelport\Terminal\RequestKeyMappings' => __DIR__ .'/RequestKeyMappings.php',
        'FilippoToso\Travelport\Terminal\KeyMapping' => __DIR__ .'/KeyMapping.php',
        'FilippoToso\Travelport\Terminal\ReservationName' => __DIR__ .'/ReservationName.php',
        'FilippoToso\Travelport\Terminal\NameOverride' => __DIR__ .'/NameOverride.php',
        'FilippoToso\Travelport\Terminal\APIProvider' => __DIR__ .'/APIProvider.php',
        'FilippoToso\Travelport\Terminal\AvailablePseudoCityCode' => __DIR__ .'/AvailablePseudoCityCode.php',
        'FilippoToso\Travelport\Terminal\TransactionType' => __DIR__ .'/TransactionType.php',
        'FilippoToso\Travelport\Terminal\Air' => __DIR__ .'/Air.php',
        'FilippoToso\Travelport\Terminal\typeTransactionsAllowed' => __DIR__ .'/typeTransactionsAllowed.php',
        'FilippoToso\Travelport\Terminal\typeBookingTransactionsAllowed' => __DIR__ .'/typeBookingTransactionsAllowed.php',
        'FilippoToso\Travelport\Terminal\typeRecordStatus' => __DIR__ .'/typeRecordStatus.php',
        'FilippoToso\Travelport\Terminal\ThirdPartyInformation' => __DIR__ .'/ThirdPartyInformation.php',
        'FilippoToso\Travelport\Terminal\TravelComplianceData' => __DIR__ .'/TravelComplianceData.php',
        'FilippoToso\Travelport\Terminal\PolicyCompliance' => __DIR__ .'/PolicyCompliance.php',
        'FilippoToso\Travelport\Terminal\ContractCompliance' => __DIR__ .'/ContractCompliance.php',
        'FilippoToso\Travelport\Terminal\PreferredSupplier' => __DIR__ .'/PreferredSupplier.php',
        'FilippoToso\Travelport\Terminal\typeProfileLevelWithCredential' => __DIR__ .'/typeProfileLevelWithCredential.php',
        'FilippoToso\Travelport\Terminal\LoyaltyProgram' => __DIR__ .'/LoyaltyProgram.php',
        'FilippoToso\Travelport\Terminal\typeErrorInfo' => __DIR__ .'/typeErrorInfo.php',
        'FilippoToso\Travelport\Terminal\URTicketStatus' => __DIR__ .'/URTicketStatus.php',
        'FilippoToso\Travelport\Terminal\PermittedProviders' => __DIR__ .'/PermittedProviders.php',
        'FilippoToso\Travelport\Terminal\typeAdjustmentTarget' => __DIR__ .'/typeAdjustmentTarget.php',
        'FilippoToso\Travelport\Terminal\typeAdjustmentType' => __DIR__ .'/typeAdjustmentType.php',
        'FilippoToso\Travelport\Terminal\ReviewBooking' => __DIR__ .'/ReviewBooking.php',
        'FilippoToso\Travelport\Terminal\typeCreditCardType' => __DIR__ .'/typeCreditCardType.php',
        'FilippoToso\Travelport\Terminal\PersonalGeography' => __DIR__ .'/PersonalGeography.php',
        'FilippoToso\Travelport\Terminal\Group' => __DIR__ .'/Group.php',
        'FilippoToso\Travelport\Terminal\SSRRef' => __DIR__ .'/SSRRef.php',
        'FilippoToso\Travelport\Terminal\typeElementStatus' => __DIR__ .'/typeElementStatus.php',
        'FilippoToso\Travelport\Terminal\ConsolidatorRemark' => __DIR__ .'/ConsolidatorRemark.php',
        'FilippoToso\Travelport\Terminal\PseudoCityCode' => __DIR__ .'/PseudoCityCode.php',
        'FilippoToso\Travelport\Terminal\BaseAsyncProviderSpecificResponse' => __DIR__ .'/BaseAsyncProviderSpecificResponse.php',
        'FilippoToso\Travelport\Terminal\typeProviderReservationDetail' => __DIR__ .'/typeProviderReservationDetail.php',
        'FilippoToso\Travelport\Terminal\CabinClass' => __DIR__ .'/CabinClass.php',
        'FilippoToso\Travelport\Terminal\SeatAttributes' => __DIR__ .'/SeatAttributes.php',
        'FilippoToso\Travelport\Terminal\SeatAttribute' => __DIR__ .'/SeatAttribute.php',
        'FilippoToso\Travelport\Terminal\typeKeyBasedReference' => __DIR__ .'/typeKeyBasedReference.php',
        'FilippoToso\Travelport\Terminal\InvoiceData' => __DIR__ .'/InvoiceData.php',
        'FilippoToso\Travelport\Terminal\BookingTravelerInformation' => __DIR__ .'/BookingTravelerInformation.php',
        'FilippoToso\Travelport\Terminal\OwnershipChange' => __DIR__ .'/OwnershipChange.php',
        'FilippoToso\Travelport\Terminal\IndustryStandardSSR' => __DIR__ .'/IndustryStandardSSR.php',
        'FilippoToso\Travelport\Terminal\PaymentAdvice' => __DIR__ .'/PaymentAdvice.php',
        'FilippoToso\Travelport\Terminal\EmailNotification' => __DIR__ .'/EmailNotification.php',
        'FilippoToso\Travelport\Terminal\typeItineraryCode' => __DIR__ .'/typeItineraryCode.php',
        'FilippoToso\Travelport\Terminal\typeItineraryType' => __DIR__ .'/typeItineraryType.php',
        'FilippoToso\Travelport\Terminal\typeFormOfRefund' => __DIR__ .'/typeFormOfRefund.php',
        'FilippoToso\Travelport\Terminal\typeFarePull' => __DIR__ .'/typeFarePull.php',
        'FilippoToso\Travelport\Terminal\typePriceClassOfService' => __DIR__ .'/typePriceClassOfService.php',
        'FilippoToso\Travelport\Terminal\typePricingType' => __DIR__ .'/typePricingType.php',
        'FilippoToso\Travelport\Terminal\typeTax' => __DIR__ .'/typeTax.php',
        'FilippoToso\Travelport\Terminal\typeFeeInfo' => __DIR__ .'/typeFeeInfo.php',
        'FilippoToso\Travelport\Terminal\TaxInfoRef' => __DIR__ .'/TaxInfoRef.php',
        'FilippoToso\Travelport\Terminal\QueuePlace' => __DIR__ .'/QueuePlace.php',
        'FilippoToso\Travelport\Terminal\QueueSelector' => __DIR__ .'/QueueSelector.php',
        'FilippoToso\Travelport\Terminal\BaseReq' => __DIR__ .'/BaseReq.php',
        'FilippoToso\Travelport\Terminal\BaseCoreReq' => __DIR__ .'/BaseCoreReq.php',
        'FilippoToso\Travelport\Terminal\BaseSearchReq' => __DIR__ .'/BaseSearchReq.php',
        'FilippoToso\Travelport\Terminal\BaseCoreSearchReq' => __DIR__ .'/BaseCoreSearchReq.php',
        'FilippoToso\Travelport\Terminal\BaseSearchRsp' => __DIR__ .'/BaseSearchRsp.php',
        'FilippoToso\Travelport\Terminal\BaseRsp' => __DIR__ .'/BaseRsp.php',
        'FilippoToso\Travelport\Terminal\BaseCreateReservationReq' => __DIR__ .'/BaseCreateReservationReq.php',
        'FilippoToso\Travelport\Terminal\ErrorInfo' => __DIR__ .'/ErrorInfo.php',
        'FilippoToso\Travelport\Terminal\typeLoggingLevel' => __DIR__ .'/typeLoggingLevel.php',
        'FilippoToso\Travelport\Terminal\BaseCreateWithFormOfPaymentReq' => __DIR__ .'/BaseCreateWithFormOfPaymentReq.php',
        'FilippoToso\Travelport\Terminal\CreateTerminalSessionReq' => __DIR__ .'/CreateTerminalSessionReq.php',
        'FilippoToso\Travelport\Terminal\CreateTerminalSessionRsp' => __DIR__ .'/CreateTerminalSessionRsp.php',
        'FilippoToso\Travelport\Terminal\EndTerminalSessionReq' => __DIR__ .'/EndTerminalSessionReq.php',
        'FilippoToso\Travelport\Terminal\EndTerminalSessionRsp' => __DIR__ .'/EndTerminalSessionRsp.php',
        'FilippoToso\Travelport\Terminal\TerminalReq' => __DIR__ .'/TerminalReq.php',
        'FilippoToso\Travelport\Terminal\TerminalRsp' => __DIR__ .'/TerminalRsp.php',
        'FilippoToso\Travelport\Terminal\typeTextBlock' => __DIR__ .'/typeTextBlock.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c1d4692ae37b27c55b45425a66a879e4');

// Do nothing. The rest is just leftovers from the code generation.
{
}
