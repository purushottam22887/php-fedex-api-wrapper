<?php
namespace FedEx\RateService\ComplexType;

/**
 * Rate data specific to FedEx Freight or FedEx National Freight services.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class FreightRateDetail
    extends AbstractComplexType
{
    protected $_name = 'FreightRateDetail';

    /**
     * A unique identifier for a specific rate quotation.
     *
     * @param string $QuoteNumber
     * return FreightRateDetail
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->QuoteNumber = $quoteNumber;
        return $this;
    }
    
    /**
     * Freight charges which accumulate to the total base charge for the shipment.
     *
     * @param array[FreightBaseCharge] $BaseCharges
     * return FreightRateDetail
     */
    public function setBaseCharges(array $baseCharges)
    {
        $this->BaseCharges = $baseCharges;
        return $this;
    }
    
    /**
     * Human-readable descriptions of additional information on this shipment rating.
     *
     * @param array[FreightRateNotation] $Notations
     * return FreightRateDetail
     */
    public function setNotations(array $notations)
    {
        $this->Notations = $notations;
        return $this;
    }
    

    
}