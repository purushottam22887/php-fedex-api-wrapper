<?php
namespace FedEx\ShipService\SimpleType;

/**
 * The types of references available for use.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomerReferenceType
    extends AbstractSimpleType
{
    const _BILL_OF_LADING = 'BILL_OF_LADING';
    const _CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
    const _DEPARTMENT_NUMBER = 'DEPARTMENT_NUMBER';
    const _INVOICE_NUMBER = 'INVOICE_NUMBER';
    const _P_O_NUMBER = 'P_O_NUMBER';
    const _SHIPMENT_INTEGRITY = 'SHIPMENT_INTEGRITY';
    const _STORE_NUMBER = 'STORE_NUMBER';
}