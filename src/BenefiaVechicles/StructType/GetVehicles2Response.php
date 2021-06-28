<?php

declare(strict_types=1);

namespace BenefiaVechicles\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehicles2Response StructType
 * @subpackage Structs
 */
class GetVehicles2Response extends AbstractStructBase
{
    /**
     * The GetVehicles2Result
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \BenefiaVechicles\StructType\GetVehicles2Result|null
     */
    protected ?\BenefiaVechicles\StructType\GetVehicles2Result $GetVehicles2Result = null;
    /**
     * Constructor method for GetVehicles2Response
     * @uses GetVehicles2Response::setGetVehicles2Result()
     * @param \BenefiaVechicles\StructType\GetVehicles2Result $getVehicles2Result
     */
    public function __construct(?\BenefiaVechicles\StructType\GetVehicles2Result $getVehicles2Result = null)
    {
        $this
            ->setGetVehicles2Result($getVehicles2Result);
    }
    /**
     * Get GetVehicles2Result value
     * @return \BenefiaVechicles\StructType\GetVehicles2Result|null
     */
    public function getGetVehicles2Result(): ?\BenefiaVechicles\StructType\GetVehicles2Result
    {
        return $this->GetVehicles2Result;
    }
    /**
     * Set GetVehicles2Result value
     * @param \BenefiaVechicles\StructType\GetVehicles2Result $getVehicles2Result
     * @return \BenefiaVechicles\StructType\GetVehicles2Response
     */
    public function setGetVehicles2Result(?\BenefiaVechicles\StructType\GetVehicles2Result $getVehicles2Result = null): self
    {
        $this->GetVehicles2Result = $getVehicles2Result;
        
        return $this;
    }
}
