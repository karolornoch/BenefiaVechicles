<?php

declare(strict_types=1);

namespace BenefiaVechicles\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for inpVehCriteria StructType
 * @subpackage Structs
 */
class InpVehCriteria extends AbstractStructBase
{
    /**
     * The ProduktId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ProduktId;
    /**
     * The PojemnoscSilnika
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $PojemnoscSilnika;
    /**
     * The MocSilnika
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $MocSilnika;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The Marka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Marka = null;
    /**
     * The Model
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Model = null;
    /**
     * The RokProdukcji
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RokProdukcji = null;
    /**
     * Constructor method for inpVehCriteria
     * @uses InpVehCriteria::setProduktId()
     * @uses InpVehCriteria::setPojemnoscSilnika()
     * @uses InpVehCriteria::setMocSilnika()
     * @uses InpVehCriteria::setAny()
     * @uses InpVehCriteria::setMarka()
     * @uses InpVehCriteria::setModel()
     * @uses InpVehCriteria::setRokProdukcji()
     * @param int $produktId
     * @param int $pojemnoscSilnika
     * @param int $mocSilnika
     * @param \DOMDocument|string|null $any
     * @param string $marka
     * @param string $model
     * @param string $rokProdukcji
     */
    public function __construct(int $produktId, int $pojemnoscSilnika, int $mocSilnika, $any = null, ?string $marka = null, ?string $model = null, ?string $rokProdukcji = null)
    {
        $this
            ->setProduktId($produktId)
            ->setPojemnoscSilnika($pojemnoscSilnika)
            ->setMocSilnika($mocSilnika)
            ->setAny($any)
            ->setMarka($marka)
            ->setModel($model)
            ->setRokProdukcji($rokProdukcji);
    }
    /**
     * Get ProduktId value
     * @return int
     */
    public function getProduktId(): int
    {
        return $this->ProduktId;
    }
    /**
     * Set ProduktId value
     * @param int $produktId
     * @return \BenefiaVechicles\StructType\InpVehCriteria
     */
    public function setProduktId(int $produktId): self
    {
        // validation for constraint: int
        if (!is_null($produktId) && !(is_int($produktId) || ctype_digit($produktId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($produktId, true), gettype($produktId)), __LINE__);
        }
        $this->ProduktId = $produktId;
        
        return $this;
    }
    /**
     * Get PojemnoscSilnika value
     * @return int
     */
    public function getPojemnoscSilnika(): int
    {
        return $this->PojemnoscSilnika;
    }
    /**
     * Set PojemnoscSilnika value
     * @param int $pojemnoscSilnika
     * @return \BenefiaVechicles\StructType\InpVehCriteria
     */
    public function setPojemnoscSilnika(int $pojemnoscSilnika): self
    {
        // validation for constraint: int
        if (!is_null($pojemnoscSilnika) && !(is_int($pojemnoscSilnika) || ctype_digit($pojemnoscSilnika))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pojemnoscSilnika, true), gettype($pojemnoscSilnika)), __LINE__);
        }
        $this->PojemnoscSilnika = $pojemnoscSilnika;
        
        return $this;
    }
    /**
     * Get MocSilnika value
     * @return int
     */
    public function getMocSilnika(): int
    {
        return $this->MocSilnika;
    }
    /**
     * Set MocSilnika value
     * @param int $mocSilnika
     * @return \BenefiaVechicles\StructType\InpVehCriteria
     */
    public function setMocSilnika(int $mocSilnika): self
    {
        // validation for constraint: int
        if (!is_null($mocSilnika) && !(is_int($mocSilnika) || ctype_digit($mocSilnika))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mocSilnika, true), gettype($mocSilnika)), __LINE__);
        }
        $this->MocSilnika = $mocSilnika;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \BenefiaVechicles\StructType\InpVehCriteria
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
    /**
     * Get Marka value
     * @return string|null
     */
    public function getMarka(): ?string
    {
        return $this->Marka;
    }
    /**
     * Set Marka value
     * @param string $marka
     * @return \BenefiaVechicles\StructType\InpVehCriteria
     */
    public function setMarka(?string $marka = null): self
    {
        // validation for constraint: string
        if (!is_null($marka) && !is_string($marka)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marka, true), gettype($marka)), __LINE__);
        }
        $this->Marka = $marka;
        
        return $this;
    }
    /**
     * Get Model value
     * @return string|null
     */
    public function getModel(): ?string
    {
        return $this->Model;
    }
    /**
     * Set Model value
     * @param string $model
     * @return \BenefiaVechicles\StructType\InpVehCriteria
     */
    public function setModel(?string $model = null): self
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($model, true), gettype($model)), __LINE__);
        }
        $this->Model = $model;
        
        return $this;
    }
    /**
     * Get RokProdukcji value
     * @return string|null
     */
    public function getRokProdukcji(): ?string
    {
        return $this->RokProdukcji;
    }
    /**
     * Set RokProdukcji value
     * @param string $rokProdukcji
     * @return \BenefiaVechicles\StructType\InpVehCriteria
     */
    public function setRokProdukcji(?string $rokProdukcji = null): self
    {
        // validation for constraint: string
        if (!is_null($rokProdukcji) && !is_string($rokProdukcji)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rokProdukcji, true), gettype($rokProdukcji)), __LINE__);
        }
        $this->RokProdukcji = $rokProdukcji;
        
        return $this;
    }
}
