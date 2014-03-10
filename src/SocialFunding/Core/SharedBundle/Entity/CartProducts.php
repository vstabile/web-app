<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 3/8/14
 * Time: 11:22 AM
 */

namespace SocialFunding\Core\SharedBundle\Entity;

class CartProducts {

    private $product;

    private $quantity;

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

}