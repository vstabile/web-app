<?php
/**
 * @author André Simões <sou@oand.re>
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Input;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Input\DadosListaProdutoCarinho;


class DadosCalcularCarrinho {

    private $idCampaign;

    private $document;

    private $zipCode;

    private $products;

    /**
     * @param mixed $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $idCampaign
     */
    public function setIdCampaign($idCampaign)
    {
        $this->idCampaign = $idCampaign;
    }

    /**
     * @return mixed
     */
    public function getIdCampaign()
    {
        return $this->idCampaign;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     * @return array|DadosListaProdutoCarinho
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param DadosListaProdutoCarinho $productCarrinho
     */
    public function addProducts(DadosListaProdutoCarinho $productCarrinho)
    {
        array_push($this->products, $productCarrinho);
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }



} 