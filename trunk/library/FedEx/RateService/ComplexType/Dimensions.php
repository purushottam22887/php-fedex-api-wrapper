<?php
namespace FedEx\RateService\ComplexType;

/**
 * The dimensions of this package and the unit type used for the measurements.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class Dimensions
    extends AbstractComplexType
{
    protected $_name = 'Dimensions';

    /**
     * 
     *
     * @param  $Length
     * return Dimensions
     */
    public function setLength( $length)
    {
        $this->Length = $length;
        return $this;
    }
    
    /**
     * 
     *
     * @param  $Width
     * return Dimensions
     */
    public function setWidth( $width)
    {
        $this->Width = $width;
        return $this;
    }
    
    /**
     * 
     *
     * @param  $Height
     * return Dimensions
     */
    public function setHeight( $height)
    {
        $this->Height = $height;
        return $this;
    }
    
    /**
     * 
     *
     * @param LinearUnits $Units
     * return Dimensions
     */
    public function setUnits(\FedEx\RateService\SimpleType\LinearUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}