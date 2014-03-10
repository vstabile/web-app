<?php
/**
 * @author André Simões <sou@oand.re>
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output\BaseReturn;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output\FreteConsultarProduto;

/**
 * Class ConsultarProdutoCampanha
 * @package SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output
 */
class ConsultarProdutoCampanha extends BaseReturn{

    private $categoryId;

    private $description;

    private $disponibility;

    private $outLine;

    private $image;

    private $name;

    private $value;

    private $valueFrom;

    private $shipValue;

    public function __construct()
    {
        $this->shipValue = array();
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $disponibility
     */
    public function setDisponibility($disponibility)
    {
        $this->disponibility = $disponibility;
    }

    /**
     * @return mixed
     */
    public function getDisponibility()
    {
        return $this->disponibility;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $outLine
     */
    public function setOutLine($outLine)
    {
        $this->outLine = $outLine;
    }

    /**
     * @return mixed
     */
    public function getOutLine()
    {
        return $this->outLine;
    }

    /**
     * @param mixed $shipValue
     */
    public function setShipValue($shipValue)
    {
        $this->shipValue = $shipValue;
    }

    /**
     * @return mixed
     */
    public function getShipValue()
    {
        return $this->shipValue;
    }

    public function addShipValue($key, $value)
    {
        $this->shipValue[$key] = $value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $valueFrom
     */
    public function setValueFrom($valueFrom)
    {
        $this->valueFrom = $valueFrom;
    }

    /**
     * @return mixed
     */
    public function getValueFrom()
    {
        return $this->valueFrom;
    }

} 