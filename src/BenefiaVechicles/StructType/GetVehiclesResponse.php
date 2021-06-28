<?php

declare(strict_types=1);

namespace BenefiaVechicles\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehiclesResponse StructType
 * @subpackage Structs
 */
class GetVehiclesResponse extends AbstractStructBase
{
    /**
     * The GetVehiclesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s2:GetVehiclesResult
     * @var \BenefiaVechicles\StructType\GetVehiclesResult|null
     */
    protected ?\BenefiaVechicles\StructType\GetVehiclesResult $GetVehiclesResult = null;
    /**
     * Constructor method for GetVehiclesResponse
     * @uses GetVehiclesResponse::setGetVehiclesResult()
     * @param \BenefiaVechicles\StructType\GetVehiclesResult $getVehiclesResult
     */
    public function __construct(?\BenefiaVechicles\StructType\GetVehiclesResult $getVehiclesResult = null)
    {
        $this
            ->setGetVehiclesResult($getVehiclesResult);
    }
    /**
     * Get GetVehiclesResult value
     * @return \BenefiaVechicles\StructType\GetVehiclesResult|null
     */
    public function getGetVehiclesResult(): ?\BenefiaVechicles\StructType\GetVehiclesResult
    {
        return $this->GetVehiclesResult;
    }
    /**
     * Set GetVehiclesResult value
     * @param \BenefiaVechicles\StructType\GetVehiclesResult $getVehiclesResult
     * @return \BenefiaVechicles\StructType\GetVehiclesResponse
     */
    public function setGetVehiclesResult(?\BenefiaVechicles\StructType\GetVehiclesResult $getVehiclesResult = null): self
    {
        $this->GetVehiclesResult = $getVehiclesResult;
        
        return $this;
    }
}
