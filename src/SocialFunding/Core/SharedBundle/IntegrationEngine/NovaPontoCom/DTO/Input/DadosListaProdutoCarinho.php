<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 2/15/14
 * Time: 1:58 PM
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Input;


class DadosListaProdutoCarinho {

    private $code;

    private $quantity;

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

}