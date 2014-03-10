<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 2/15/14
 * Time: 2:05 PM
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output\BaseReturn;

class ListaProdutoCarinho extends BaseReturn {

    private $code;

    private $quantity;

    private $timeToShip;

    private $totalValue;

    private $totalValueShip;

    private $totalValueTribute;

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $timeToShip
     */
    public function setTimeToShip($timeToShip)
    {
        $this->timeToShip = $timeToShip;
    }

    /**
     * @return mixed
     */
    public function getTimeToShip()
    {
        return $this->timeToShip;
    }

    /**
     * @param mixed $totalValue
     */
    public function setTotalValue($totalValue)
    {
        $this->totalValue = $totalValue;
    }

    /**
     * @return mixed
     */
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /**
     * @param mixed $totalValueShip
     */
    public function setTotalValueShip($totalValueShip)
    {
        $this->totalValueShip = $totalValueShip;
    }

    /**
     * @return mixed
     */
    public function getTotalValueShip()
    {
        return $this->totalValueShip;
    }

    /**
     * @param mixed $totalValueTribute
     */
    public function setTotalValueTribute($totalValueTribute)
    {
        $this->totalValueTribute = $totalValueTribute;
    }

    /**
     * @return mixed
     */
    public function getTotalValueTribute()
    {
        return $this->totalValueTribute;
    }

}