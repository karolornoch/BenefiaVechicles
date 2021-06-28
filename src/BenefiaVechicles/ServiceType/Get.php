<?php

declare(strict_types=1);

namespace BenefiaVechicles\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetVehicles
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \BenefiaVechicles\StructType\GetVehicles $parameters
     * @return \BenefiaVechicles\StructType\GetVehiclesResponse|bool
     */
    public function GetVehicles(\BenefiaVechicles\StructType\GetVehicles $parameters)
    {
        try {
            $this->setResult($resultGetVehicles = $this->getSoapClient()->__soapCall('GetVehicles', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVehicles;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVehicles2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \BenefiaVechicles\StructType\GetVehicles2 $parameters
     * @return \BenefiaVechicles\StructType\GetVehicles2Response|bool
     */
    public function GetVehicles2(\BenefiaVechicles\StructType\GetVehicles2 $parameters)
    {
        try {
            $this->setResult($resultGetVehicles2 = $this->getSoapClient()->__soapCall('GetVehicles2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVehicles2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \BenefiaVechicles\StructType\GetVehicles2Response|\BenefiaVechicles\StructType\GetVehiclesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
