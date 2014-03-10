<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 2/15/14
 * Time: 2:00 PM
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output\BaseReturn;

class CalcularCarrinho extends BaseReturn{

    private $shipValue;

    private $tributeValue;

    private $totalValueProducts;

    private $totalValueOrder;

    private $products;

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

    /**
     * @param mixed $tributeValue
     */
    public function setTributeValue($tributeValue)
    {
        $this->tributeValue = $tributeValue;
    }

    /**
     * @return mixed
     */
    public function getTributeValue()
    {
        return $this->tributeValue;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $totalValueOrder
     */
    public function setTotalValueOrder($totalValueOrder)
    {
        $this->totalValueOrder = $totalValueOrder;
    }

    /**
     * @return mixed
     */
    public function getTotalValueOrder()
    {
        return $this->totalValueOrder;
    }

    /**
     * @param mixed $totalValueProducts
     */
    public function setTotalValueProducts($totalValueProducts)
    {
        $this->totalValueProducts = $totalValueProducts;
    }

    /**
     * @return mixed
     */
    public function getTotalValueProducts()
    {
        return $this->totalValueProducts;
    }

}