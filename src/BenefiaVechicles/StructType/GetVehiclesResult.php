<?php

declare(strict_types=1);

namespace BenefiaVechicles\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehiclesResult StructType
 * @subpackage Structs
 */
class GetVehiclesResult extends AbstractStructBase
{
    /**
     * The ERROR_NR
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ERROR_NR;
    /**
     * The KOMUNIKAT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $KOMUNIKAT = null;
    /**
     * The POJAZDY
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \BenefiaVechicles\ArrayType\ArrayOfPOJAZD_TYP|null
     */
    protected ?\BenefiaVechicles\ArrayType\ArrayOfPOJAZD_TYP $POJAZDY = null;
    /**
     * Constructor method for GetVehiclesResult
     * @uses GetVehiclesResult::setERROR_NR()
     * @uses GetVehiclesResult::setKOMUNIKAT()
     * @uses GetVehiclesResult::setPOJAZDY()
     * @param int $eRROR_NR
     * @param string $kOMUNIKAT
     * @param \BenefiaVechicles\ArrayType\ArrayOfPOJAZD_TYP $pOJAZDY
     */
    public function __construct(int $eRROR_NR, ?string $kOMUNIKAT = null, ?\BenefiaVechicles\ArrayType\ArrayOfPOJAZD_TYP $pOJAZDY = null)
    {
        $this
            ->setERROR_NR($eRROR_NR)
            ->setKOMUNIKAT($kOMUNIKAT)
            ->setPOJAZDY($pOJAZDY);
    }
    /**
     * Get ERROR_NR value
     * @return int
     */
    public function getERROR_NR(): int
    {
        return $this->ERROR_NR;
    }
    /**
     * Set ERROR_NR value
     * @param int $eRROR_NR
     * @return \BenefiaVechicles\StructType\GetVehiclesResult
     */
    public function setERROR_NR(int $eRROR_NR): self
    {
        // validation for constraint: int
        if (!is_null($eRROR_NR) && !(is_int($eRROR_NR) || ctype_digit($eRROR_NR))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eRROR_NR, true), gettype($eRROR_NR)), __LINE__);
        }
        $this->ERROR_NR = $eRROR_NR;
        
        return $this;
    }
    /**
     * Get KOMUNIKAT value
     * @return string|null
     */
    public function getKOMUNIKAT(): ?string
    {
        return $this->KOMUNIKAT;
    }
    /**
     * Set KOMUNIKAT value
     * @param string $kOMUNIKAT
     * @return \BenefiaVechicles\StructType\GetVehiclesResult
     */
    public function setKOMUNIKAT(?string $kOMUNIKAT = null): self
    {
        // validation for constraint: string
        if (!is_null($kOMUNIKAT) && !is_string($kOMUNIKAT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kOMUNIKAT, true), gettype($kOMUNIKAT)), __LINE__);
        }
        $this->KOMUNIKAT = $kOMUNIKAT;
        
        return $this;
    }
    /**
     * Get POJAZDY value
     * @return \BenefiaVechicles\ArrayType\ArrayOfPOJAZD_TYP|null
     */
    public function getPOJAZDY(): ?\BenefiaVechicles\ArrayType\ArrayOfPOJAZD_TYP
    {
        return $this->POJAZDY;
    }
    /**
     * Set POJAZDY value
     * @param \BenefiaVechicles\ArrayType\ArrayOfPOJAZD_TYP $pOJAZDY
     * @return \BenefiaVechicles\StructType\GetVehiclesResult
     */
    public function setPOJAZDY(?\BenefiaVechicles\ArrayType\ArrayOfPOJAZD_TYP $pOJAZDY = null): self
    {
        $this->POJAZDY = $pOJAZDY;
        
        return $this;
    }
}
