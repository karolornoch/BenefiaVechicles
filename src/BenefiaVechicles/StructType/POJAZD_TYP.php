<?php

declare(strict_types=1);

namespace BenefiaVechicles\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for POJAZD_TYP StructType
 * @subpackage Structs
 */
class POJAZD_TYP extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ID = null;
    /**
     * The MARKA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MARKA = null;
    /**
     * The MODEL
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MODEL = null;
    /**
     * The WERSJA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WERSJA = null;
    /**
     * The NADWOZIE
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NADWOZIE = null;
    /**
     * The RODZAJ_POJAZDU
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RODZAJ_POJAZDU = null;
    /**
     * The ROK_PRODUKCJI_POCZ
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ROK_PRODUKCJI_POCZ = null;
    /**
     * The ROK_PRODUKCJI_KONIEC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ROK_PRODUKCJI_KONIEC = null;
    /**
     * The POJEMNOSC_SILNIKA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $POJEMNOSC_SILNIKA = null;
    /**
     * The MOC_SILNIKA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MOC_SILNIKA = null;
    /**
     * The SKRZYNIA_BIEGOW
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SKRZYNIA_BIEGOW = null;
    /**
     * Constructor method for POJAZD_TYP
     * @uses POJAZD_TYP::setID()
     * @uses POJAZD_TYP::setMARKA()
     * @uses POJAZD_TYP::setMODEL()
     * @uses POJAZD_TYP::setWERSJA()
     * @uses POJAZD_TYP::setNADWOZIE()
     * @uses POJAZD_TYP::setRODZAJ_POJAZDU()
     * @uses POJAZD_TYP::setROK_PRODUKCJI_POCZ()
     * @uses POJAZD_TYP::setROK_PRODUKCJI_KONIEC()
     * @uses POJAZD_TYP::setPOJEMNOSC_SILNIKA()
     * @uses POJAZD_TYP::setMOC_SILNIKA()
     * @uses POJAZD_TYP::setSKRZYNIA_BIEGOW()
     * @param int $iD
     * @param string $mARKA
     * @param string $mODEL
     * @param string $wERSJA
     * @param string $nADWOZIE
     * @param string $rODZAJ_POJAZDU
     * @param string $rOK_PRODUKCJI_POCZ
     * @param string $rOK_PRODUKCJI_KONIEC
     * @param string $pOJEMNOSC_SILNIKA
     * @param string $mOC_SILNIKA
     * @param string $sKRZYNIA_BIEGOW
     */
    public function __construct(?int $iD = null, ?string $mARKA = null, ?string $mODEL = null, ?string $wERSJA = null, ?string $nADWOZIE = null, ?string $rODZAJ_POJAZDU = null, ?string $rOK_PRODUKCJI_POCZ = null, ?string $rOK_PRODUKCJI_KONIEC = null, ?string $pOJEMNOSC_SILNIKA = null, ?string $mOC_SILNIKA = null, ?string $sKRZYNIA_BIEGOW = null)
    {
        $this
            ->setID($iD)
            ->setMARKA($mARKA)
            ->setMODEL($mODEL)
            ->setWERSJA($wERSJA)
            ->setNADWOZIE($nADWOZIE)
            ->setRODZAJ_POJAZDU($rODZAJ_POJAZDU)
            ->setROK_PRODUKCJI_POCZ($rOK_PRODUKCJI_POCZ)
            ->setROK_PRODUKCJI_KONIEC($rOK_PRODUKCJI_KONIEC)
            ->setPOJEMNOSC_SILNIKA($pOJEMNOSC_SILNIKA)
            ->setMOC_SILNIKA($mOC_SILNIKA)
            ->setSKRZYNIA_BIEGOW($sKRZYNIA_BIEGOW);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID(): ?int
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setID(?int $iD = null): self
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get MARKA value
     * @return string|null
     */
    public function getMARKA(): ?string
    {
        return $this->MARKA;
    }
    /**
     * Set MARKA value
     * @param string $mARKA
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setMARKA(?string $mARKA = null): self
    {
        // validation for constraint: string
        if (!is_null($mARKA) && !is_string($mARKA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mARKA, true), gettype($mARKA)), __LINE__);
        }
        $this->MARKA = $mARKA;
        
        return $this;
    }
    /**
     * Get MODEL value
     * @return string|null
     */
    public function getMODEL(): ?string
    {
        return $this->MODEL;
    }
    /**
     * Set MODEL value
     * @param string $mODEL
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setMODEL(?string $mODEL = null): self
    {
        // validation for constraint: string
        if (!is_null($mODEL) && !is_string($mODEL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mODEL, true), gettype($mODEL)), __LINE__);
        }
        $this->MODEL = $mODEL;
        
        return $this;
    }
    /**
     * Get WERSJA value
     * @return string|null
     */
    public function getWERSJA(): ?string
    {
        return $this->WERSJA;
    }
    /**
     * Set WERSJA value
     * @param string $wERSJA
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setWERSJA(?string $wERSJA = null): self
    {
        // validation for constraint: string
        if (!is_null($wERSJA) && !is_string($wERSJA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wERSJA, true), gettype($wERSJA)), __LINE__);
        }
        $this->WERSJA = $wERSJA;
        
        return $this;
    }
    /**
     * Get NADWOZIE value
     * @return string|null
     */
    public function getNADWOZIE(): ?string
    {
        return $this->NADWOZIE;
    }
    /**
     * Set NADWOZIE value
     * @param string $nADWOZIE
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setNADWOZIE(?string $nADWOZIE = null): self
    {
        // validation for constraint: string
        if (!is_null($nADWOZIE) && !is_string($nADWOZIE)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nADWOZIE, true), gettype($nADWOZIE)), __LINE__);
        }
        $this->NADWOZIE = $nADWOZIE;
        
        return $this;
    }
    /**
     * Get RODZAJ_POJAZDU value
     * @return string|null
     */
    public function getRODZAJ_POJAZDU(): ?string
    {
        return $this->RODZAJ_POJAZDU;
    }
    /**
     * Set RODZAJ_POJAZDU value
     * @param string $rODZAJ_POJAZDU
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setRODZAJ_POJAZDU(?string $rODZAJ_POJAZDU = null): self
    {
        // validation for constraint: string
        if (!is_null($rODZAJ_POJAZDU) && !is_string($rODZAJ_POJAZDU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rODZAJ_POJAZDU, true), gettype($rODZAJ_POJAZDU)), __LINE__);
        }
        $this->RODZAJ_POJAZDU = $rODZAJ_POJAZDU;
        
        return $this;
    }
    /**
     * Get ROK_PRODUKCJI_POCZ value
     * @return string|null
     */
    public function getROK_PRODUKCJI_POCZ(): ?string
    {
        return $this->ROK_PRODUKCJI_POCZ;
    }
    /**
     * Set ROK_PRODUKCJI_POCZ value
     * @param string $rOK_PRODUKCJI_POCZ
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setROK_PRODUKCJI_POCZ(?string $rOK_PRODUKCJI_POCZ = null): self
    {
        // validation for constraint: string
        if (!is_null($rOK_PRODUKCJI_POCZ) && !is_string($rOK_PRODUKCJI_POCZ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rOK_PRODUKCJI_POCZ, true), gettype($rOK_PRODUKCJI_POCZ)), __LINE__);
        }
        $this->ROK_PRODUKCJI_POCZ = $rOK_PRODUKCJI_POCZ;
        
        return $this;
    }
    /**
     * Get ROK_PRODUKCJI_KONIEC value
     * @return string|null
     */
    public function getROK_PRODUKCJI_KONIEC(): ?string
    {
        return $this->ROK_PRODUKCJI_KONIEC;
    }
    /**
     * Set ROK_PRODUKCJI_KONIEC value
     * @param string $rOK_PRODUKCJI_KONIEC
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setROK_PRODUKCJI_KONIEC(?string $rOK_PRODUKCJI_KONIEC = null): self
    {
        // validation for constraint: string
        if (!is_null($rOK_PRODUKCJI_KONIEC) && !is_string($rOK_PRODUKCJI_KONIEC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rOK_PRODUKCJI_KONIEC, true), gettype($rOK_PRODUKCJI_KONIEC)), __LINE__);
        }
        $this->ROK_PRODUKCJI_KONIEC = $rOK_PRODUKCJI_KONIEC;
        
        return $this;
    }
    /**
     * Get POJEMNOSC_SILNIKA value
     * @return string|null
     */
    public function getPOJEMNOSC_SILNIKA(): ?string
    {
        return $this->POJEMNOSC_SILNIKA;
    }
    /**
     * Set POJEMNOSC_SILNIKA value
     * @param string $pOJEMNOSC_SILNIKA
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setPOJEMNOSC_SILNIKA(?string $pOJEMNOSC_SILNIKA = null): self
    {
        // validation for constraint: string
        if (!is_null($pOJEMNOSC_SILNIKA) && !is_string($pOJEMNOSC_SILNIKA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pOJEMNOSC_SILNIKA, true), gettype($pOJEMNOSC_SILNIKA)), __LINE__);
        }
        $this->POJEMNOSC_SILNIKA = $pOJEMNOSC_SILNIKA;
        
        return $this;
    }
    /**
     * Get MOC_SILNIKA value
     * @return string|null
     */
    public function getMOC_SILNIKA(): ?string
    {
        return $this->MOC_SILNIKA;
    }
    /**
     * Set MOC_SILNIKA value
     * @param string $mOC_SILNIKA
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setMOC_SILNIKA(?string $mOC_SILNIKA = null): self
    {
        // validation for constraint: string
        if (!is_null($mOC_SILNIKA) && !is_string($mOC_SILNIKA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mOC_SILNIKA, true), gettype($mOC_SILNIKA)), __LINE__);
        }
        $this->MOC_SILNIKA = $mOC_SILNIKA;
        
        return $this;
    }
    /**
     * Get SKRZYNIA_BIEGOW value
     * @return string|null
     */
    public function getSKRZYNIA_BIEGOW(): ?string
    {
        return $this->SKRZYNIA_BIEGOW;
    }
    /**
     * Set SKRZYNIA_BIEGOW value
     * @param string $sKRZYNIA_BIEGOW
     * @return \BenefiaVechicles\StructType\POJAZD_TYP
     */
    public function setSKRZYNIA_BIEGOW(?string $sKRZYNIA_BIEGOW = null): self
    {
        // validation for constraint: string
        if (!is_null($sKRZYNIA_BIEGOW) && !is_string($sKRZYNIA_BIEGOW)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKRZYNIA_BIEGOW, true), gettype($sKRZYNIA_BIEGOW)), __LINE__);
        }
        $this->SKRZYNIA_BIEGOW = $sKRZYNIA_BIEGOW;
        
        return $this;
    }
}
