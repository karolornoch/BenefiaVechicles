<?php

declare(strict_types=1);

namespace BenefiaVechicles\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehicles2 StructType
 * @subpackage Structs
 */
class GetVehicles2 extends AbstractStructBase
{
    /**
     * The inpVehCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \BenefiaVechicles\StructType\InpVehCriteria|null
     */
    protected ?\BenefiaVechicles\StructType\InpVehCriteria $inpVehCriteria = null;
    /**
     * Constructor method for GetVehicles2
     * @uses GetVehicles2::setInpVehCriteria()
     * @param \BenefiaVechicles\StructType\InpVehCriteria $inpVehCriteria
     */
    public function __construct(?\BenefiaVechicles\StructType\InpVehCriteria $inpVehCriteria = null)
    {
        $this
            ->setInpVehCriteria($inpVehCriteria);
    }
    /**
     * Get inpVehCriteria value
     * @return \BenefiaVechicles\StructType\InpVehCriteria|null
     */
    public function getInpVehCriteria(): ?\BenefiaVechicles\StructType\InpVehCriteria
    {
        return $this->inpVehCriteria;
    }
    /**
     * Set inpVehCriteria value
     * @param \BenefiaVechicles\StructType\InpVehCriteria $inpVehCriteria
     * @return \BenefiaVechicles\StructType\GetVehicles2
     */
    public function setInpVehCriteria(?\BenefiaVechicles\StructType\InpVehCriteria $inpVehCriteria = null): self
    {
        $this->inpVehCriteria = $inpVehCriteria;
        
        return $this;
    }
}
