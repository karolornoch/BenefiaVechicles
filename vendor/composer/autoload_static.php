<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92f13eac66770a60b07b8580245a251f
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WsdlToPhp\\PackageBase\\' => 22,
        ),
        'B' => 
        array (
            'BenefiaVechicles\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WsdlToPhp\\PackageBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/src',
        ),
        'BenefiaVechicles\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/BenefiaVechicles',
        ),
    );

    public static $classMap = array (
        'BenefiaVechicles\\ArrayType\\ArrayOfPOJAZD_TYP' => __DIR__ . '/../..' . '/src/BenefiaVechicles/ArrayType/ArrayOfPOJAZD_TYP.php',
        'BenefiaVechicles\\ClassMap' => __DIR__ . '/../..' . '/src/BenefiaVechicles/ClassMap.php',
        'BenefiaVechicles\\ServiceType\\Get' => __DIR__ . '/../..' . '/src/BenefiaVechicles/ServiceType/Get.php',
        'BenefiaVechicles\\StructType\\GetVehicles' => __DIR__ . '/../..' . '/src/BenefiaVechicles/StructType/GetVehicles.php',
        'BenefiaVechicles\\StructType\\GetVehicles2' => __DIR__ . '/../..' . '/src/BenefiaVechicles/StructType/GetVehicles2.php',
        'BenefiaVechicles\\StructType\\GetVehicles2Response' => __DIR__ . '/../..' . '/src/BenefiaVechicles/StructType/GetVehicles2Response.php',
        'BenefiaVechicles\\StructType\\GetVehicles2Result' => __DIR__ . '/../..' . '/src/BenefiaVechicles/StructType/GetVehicles2Result.php',
        'BenefiaVechicles\\StructType\\GetVehiclesResponse' => __DIR__ . '/../..' . '/src/BenefiaVechicles/StructType/GetVehiclesResponse.php',
        'BenefiaVechicles\\StructType\\GetVehiclesResult' => __DIR__ . '/../..' . '/src/BenefiaVechicles/StructType/GetVehiclesResult.php',
        'BenefiaVechicles\\StructType\\InpVehCriteria' => __DIR__ . '/../..' . '/src/BenefiaVechicles/StructType/InpVehCriteria.php',
        'BenefiaVechicles\\StructType\\POJAZD_TYP' => __DIR__ . '/../..' . '/src/BenefiaVechicles/StructType/POJAZD_TYP.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WsdlToPhp\\PackageBase\\AbstractSoapClientBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractSoapClientBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructArrayBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructArrayBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructEnumBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructEnumBase.php',
        'WsdlToPhp\\PackageBase\\SoapClientInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/SoapClientInterface.php',
        'WsdlToPhp\\PackageBase\\StructArrayInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructArrayInterface.php',
        'WsdlToPhp\\PackageBase\\StructEnumInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructEnumInterface.php',
        'WsdlToPhp\\PackageBase\\StructInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructInterface.php',
        'WsdlToPhp\\PackageBase\\Utils' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92f13eac66770a60b07b8580245a251f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92f13eac66770a60b07b8580245a251f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92f13eac66770a60b07b8580245a251f::$classMap;

        }, null, ClassLoader::class);
    }
}
