<?php

declare(strict_types=1);

namespace BenefiaVechicles;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'GetVehicles' => '\\BenefiaVechicles\\StructType\\GetVehicles',
            'GetVehiclesResponse' => '\\BenefiaVechicles\\StructType\\GetVehiclesResponse',
            'GetVehicles2' => '\\BenefiaVechicles\\StructType\\GetVehicles2',
            'inpVehCriteria' => '\\BenefiaVechicles\\StructType\\InpVehCriteria',
            'GetVehicles2Response' => '\\BenefiaVechicles\\StructType\\GetVehicles2Response',
            'GetVehicles2Result' => '\\BenefiaVechicles\\StructType\\GetVehicles2Result',
            'GetVehiclesResult' => '\\BenefiaVechicles\\StructType\\GetVehiclesResult',
            'ArrayOfPOJAZD_TYP' => '\\BenefiaVechicles\\ArrayType\\ArrayOfPOJAZD_TYP',
            'POJAZD_TYP' => '\\BenefiaVechicles\\StructType\\POJAZD_TYP',
        ];
    }
}
