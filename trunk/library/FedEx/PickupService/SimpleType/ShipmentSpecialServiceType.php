<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the collection of special service offered by FedEx. BROKER_SELECT_OPTION should be used for Express shipments only.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ShipmentSpecialServiceType
    extends AbstractSimpleType
{
    const _BLIND_SHIPMENT = 'BLIND_SHIPMENT';
    const _BROKER_SELECT_OPTION = 'BROKER_SELECT_OPTION';
    const _CALL_BEFORE_DELIVERY = 'CALL_BEFORE_DELIVERY';
    const _COD = 'COD';
    const _COD_REMITTANCE = 'COD_REMITTANCE';
    const _CUSTOM_DELIVERY_WINDOW = 'CUSTOM_DELIVERY_WINDOW';
    const _CUT_FLOWERS = 'CUT_FLOWERS';
    const _DANGEROUS_GOODS = 'DANGEROUS_GOODS';
    const _DELIVERY_ON_INVOICE_ACCEPTANCE = 'DELIVERY_ON_INVOICE_ACCEPTANCE';
    const _DETENTION = 'DETENTION';
    const _DO_NOT_BREAK_DOWN_PALLETS = 'DO_NOT_BREAK_DOWN_PALLETS';
    const _DO_NOT_STACK_PALLETS = 'DO_NOT_STACK_PALLETS';
    const _DRY_ICE = 'DRY_ICE';
    const _EAST_COAST_SPECIAL = 'EAST_COAST_SPECIAL';
    const _ELECTRONIC_TRADE_DOCUMENTS = 'ELECTRONIC_TRADE_DOCUMENTS';
    const _EMAIL_NOTIFICATION = 'EMAIL_NOTIFICATION';
    const _EMAIL_NOTIFICATION_AGGREGATED = 'EMAIL_NOTIFICATION_AGGREGATED';
    const _EXCLUSIVE_USE = 'EXCLUSIVE_USE';
    const _EXHIBITION_DELIVERY = 'EXHIBITION_DELIVERY';
    const _EXHIBITION_PICKUP = 'EXHIBITION_PICKUP';
    const _EXPEDITED_ALTERNATE_DELIVERY_ROUTE = 'EXPEDITED_ALTERNATE_DELIVERY_ROUTE';
    const _EXPEDITED_ONE_DAY_EARLIER = 'EXPEDITED_ONE_DAY_EARLIER';
    const _EXPEDITED_SERVICE_MONITORING_AND_DELIVERY = 'EXPEDITED_SERVICE_MONITORING_AND_DELIVERY';
    const _EXPEDITED_STANDARD_DAY_EARLY_DELIVERY = 'EXPEDITED_STANDARD_DAY_EARLY_DELIVERY';
    const _EXTRA_LABOR = 'EXTRA_LABOR';
    const _EXTREME_LENGTH = 'EXTREME_LENGTH';
    const _FLATBED_TRAILER = 'FLATBED_TRAILER';
    const _FOOD = 'FOOD';
    const _FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
    const _FREIGHT_TO_COLLECT = 'FREIGHT_TO_COLLECT';
    const _FUTURE_DAY_SHIPMENT = 'FUTURE_DAY_SHIPMENT';
    const _HOLD_AT_LOCATION = 'HOLD_AT_LOCATION';
    const _HOLIDAY_DELIVERY = 'HOLIDAY_DELIVERY';
    const _HOLIDAY_GUARANTEE = 'HOLIDAY_GUARANTEE';
    const _HOME_DELIVERY_PREMIUM = 'HOME_DELIVERY_PREMIUM';
    const _INSIDE_DELIVERY = 'INSIDE_DELIVERY';
    const _INSIDE_PICKUP = 'INSIDE_PICKUP';
    const _INTERNATIONAL_CONTROLLED_EXPORT_SERVICE = 'INTERNATIONAL_CONTROLLED_EXPORT_SERVICE';
    const _INTERNATIONAL_MAIL_SERVICE = 'INTERNATIONAL_MAIL_SERVICE';
    const _LIFTGATE_DELIVERY = 'LIFTGATE_DELIVERY';
    const _LIFTGATE_PICKUP = 'LIFTGATE_PICKUP';
    const _LIMITED_ACCESS_DELIVERY = 'LIMITED_ACCESS_DELIVERY';
    const _LIMITED_ACCESS_PICKUP = 'LIMITED_ACCESS_PICKUP';
    const _MARKING_OR_TAGGING = 'MARKING_OR_TAGGING';
    const _NON_BUSINESS_TIME = 'NON_BUSINESS_TIME';
    const _PALLETS_PROVIDED = 'PALLETS_PROVIDED';
    const _PALLET_SHRINKWRAP = 'PALLET_SHRINKWRAP';
    const _PALLET_WEIGHT_ALLOWANCE = 'PALLET_WEIGHT_ALLOWANCE';
    const _PENDING_COMPLETE = 'PENDING_COMPLETE';
    const _PENDING_SHIPMENT = 'PENDING_SHIPMENT';
    const _PERMIT = 'PERMIT';
    const _POISON = 'POISON';
    const _PORT_DELIVERY = 'PORT_DELIVERY';
    const _PORT_PICKUP = 'PORT_PICKUP';
    const _PRE_DELIVERY_NOTIFICATION = 'PRE_DELIVERY_NOTIFICATION';
    const _PRE_EIG_PROCESSING = 'PRE_EIG_PROCESSING';
    const _PRE_MULTIPLIER_PROCESSING = 'PRE_MULTIPLIER_PROCESSING';
    const _PROTECTION_FROM_FREEZING = 'PROTECTION_FROM_FREEZING';
    const _REGIONAL_MALL_DELIVERY = 'REGIONAL_MALL_DELIVERY';
    const _REGIONAL_MALL_PICKUP = 'REGIONAL_MALL_PICKUP';
    const _RETURN_SHIPMENT = 'RETURN_SHIPMENT';
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _SATURDAY_PICKUP = 'SATURDAY_PICKUP';
    const _SHIPMENT_ASSEMBLY = 'SHIPMENT_ASSEMBLY';
    const _SORT_AND_SEGREGATE = 'SORT_AND_SEGREGATE';
    const _SPECIAL_DELIVERY = 'SPECIAL_DELIVERY';
    const _SPECIAL_EQUIPMENT = 'SPECIAL_EQUIPMENT';
    const _STORAGE = 'STORAGE';
    const _SUNDAY_DELIVERY = 'SUNDAY_DELIVERY';
    const _THIRD_PARTY_CONSIGNEE = 'THIRD_PARTY_CONSIGNEE';
    const _TOP_LOAD = 'TOP_LOAD';
    const _USPS_DELIVERY = 'USPS_DELIVERY';
    const _USPS_PICKUP = 'USPS_PICKUP';
    const _WEIGHING = 'WEIGHING';
}