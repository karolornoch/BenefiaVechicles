<?php

declare(strict_types=1);

namespace BenefiaVechicles\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPOJAZD_TYP ArrayType
 * @subpackage Arrays
 */
class ArrayOfPOJAZD_TYP extends AbstractStructArrayBase
{
    /**
     * The POJAZD
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \BenefiaVechicles\StructType\POJAZD_TYP[]
     */
    protected array $POJAZD = [];
    /**
     * Constructor method for ArrayOfPOJAZD_TYP
     * @uses ArrayOfPOJAZD_TYP::setPOJAZD()
     * @param \BenefiaVechicles\StructType\POJAZD_TYP[] $pOJAZD
     */
    public function __construct(array $pOJAZD = [])
    {
        $this
            ->setPOJAZD($pOJAZD);
    }
    /**
     * Get POJAZD value
     * @return \BenefiaVechicles\StructType\POJAZD_TYP[]
     */
    public function getPOJAZD(): array
    {
        return $this->POJAZD;
    }
    /**
     * This method is responsible for validating the values passed to the setPOJAZD method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPOJAZD method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePOJAZDForArrayConstraintsFromSetPOJAZD(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPOJAZD_TYPPOJAZDItem) {
            // validation for constraint: itemType
            if (!$arrayOfPOJAZD_TYPPOJAZDItem instanceof \BenefiaVechicles\StructType\POJAZD_TYP) {
                $invalidValues[] = is_object($arrayOfPOJAZD_TYPPOJAZDItem) ? get_class($arrayOfPOJAZD_TYPPOJAZDItem) : sprintf('%s(%s)', gettype($arrayOfPOJAZD_TYPPOJAZDItem), var_export($arrayOfPOJAZD_TYPPOJAZDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The POJAZD property can only contain items of type \BenefiaVechicles\StructType\POJAZD_TYP, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set POJAZD value
     * @throws InvalidArgumentException
     * @param \BenefiaVechicles\StructType\POJAZD_TYP[] $pOJAZD
     * @return \BenefiaVechicles\ArrayType\ArrayOfPOJAZD_TYP
     */
    public function setPOJAZD(array $pOJAZD = []): self
    {
        // validation for constraint: array
        if ('' !== ($pOJAZDArrayErrorMessage = self::validatePOJAZDForArrayConstraintsFromSetPOJAZD($pOJAZD))) {
            throw new InvalidArgumentException($pOJAZDArrayErrorMessage, __LINE__);
        }
        $this->POJAZD = $pOJAZD;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \BenefiaVechicles\StructType\POJAZD_TYP|null
     */
    public function current(): ?\BenefiaVechicles\StructType\POJAZD_TYP
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \BenefiaVechicles\StructType\POJAZD_TYP|null
     */
    public function item($index): ?\BenefiaVechicles\StructType\POJAZD_TYP
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \BenefiaVechicles\StructType\POJAZD_TYP|null
     */
    public function first(): ?\BenefiaVechicles\StructType\POJAZD_TYP
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \BenefiaVechicles\StructType\POJAZD_TYP|null
     */
    public function last(): ?\BenefiaVechicles\StructType\POJAZD_TYP
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \BenefiaVechicles\StructType\POJAZD_TYP|null
     */
    public function offsetGet($offset): ?\BenefiaVechicles\StructType\POJAZD_TYP
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \BenefiaVechicles\StructType\POJAZD_TYP $item
     * @return \BenefiaVechicles\ArrayType\ArrayOfPOJAZD_TYP
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BenefiaVechicles\StructType\POJAZD_TYP) {
            throw new InvalidArgumentException(sprintf('The POJAZD property can only contain items of type \BenefiaVechicles\StructType\POJAZD_TYP, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string POJAZD
     */
    public function getAttributeName(): string
    {
        return 'POJAZD';
    }
}
