<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 3/8/14
 * Time: 11:05 AM
 */

namespace SocialFunding\Core\SharedBundle\Entity;

use SocialFunding\Core\SharedBundle\Entity\CartProducts;
use Symfony\Component\HttpFoundation\Session\Session;

class Cart {

    private $cartProducts;

    private $campaign;

    private $session;

    public function __construct(Session $session)
    {
        $this->cartProducts = array();
        $this->session = $session;
    }

    public function addProduct(CartProducts $cartProduct)
    {
        $campaignProduct = $cartProduct->getProduct();
        $campaignInformation = $campaignProduct->getCampaign();
        $productInformation = $campaignProduct->getProduct();

        $totalProducts = (array_key_exists('totalProducts', $this->cartProducts))? $this->cartProducts['totalProducts']: 0;
        $valueTotalProducts = (array_key_exists('valueTotalProducts', $this->cartProducts))? $this->cartProducts['valueTotalProducts']: 0;

        $this->cartProducts['campaign'] = $campaignInformation->getId();
        $this->cartProducts['product'][$productInformation->getId()]['id'] = $productInformation->getName();
        $this->cartProducts['product'][$productInformation->getId()]['name'] = $productInformation->getName();
        $this->cartProducts['product'][$productInformation->getId()]['price'] = $productInformation->getPriceFrom();
        $this->cartProducts['product'][$productInformation->getId()]['quantity'] = $cartProduct->getQuantity();
        $this->cartProducts['totalProducts'] = $totalProducts+$cartProduct->getQuantity();
        $this->cartProducts['valueTotalProducts'] = $valueTotalProducts+($productInformation->getPriceFrom()*$cartProduct->getQuantity());

    }

    public function save()
    {
        $this->session->set('cart', json_encode($this->cartProducts));
    }

    public function getCart()
    {
        return json_decode($this->session->get('cart'), true);
    }

    public function removeCart()
    {
        $this->session->remove('cart');
    }

    /**
     * @param mixed $campaign
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * @return mixed
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

}