<?php
namespace FedEx\RateService\SimpleType;

/**
 * Specifies the type of paper (stock) on which a document will be printed.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ShippingDocumentStockType
    extends AbstractSimpleType
{
    const _PAPER_4X6 = 'PAPER_4X6';
    const _PAPER_LETTER = 'PAPER_LETTER';
    const _STOCK_4X6 = 'STOCK_4X6';
    const _STOCK_4X6point75_LEADING_DOC_TAB = 'STOCK_4X6.75_LEADING_DOC_TAB';
    const _STOCK_4X6point75_TRAILING_DOC_TAB = 'STOCK_4X6.75_TRAILING_DOC_TAB';
    const _STOCK_4X8 = 'STOCK_4X8';
    const _STOCK_4X9_LEADING_DOC_TAB = 'STOCK_4X9_LEADING_DOC_TAB';
    const _STOCK_4X9_TRAILING_DOC_TAB = 'STOCK_4X9_TRAILING_DOC_TAB';
}