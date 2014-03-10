<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 2/15/14
 * Time: 5:04 AM
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Input;


class ConsultarProdutoCampanha {

    private $idCampaign;

    private $document;

    private $idSku;

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
     * @param mixed $idSku
     */
    public function setIdSku($idSku)
    {
        $this->idSku = $idSku;
    }

    /**
     * @return mixed
     */
    public function getIdSku()
    {
        return $this->idSku;
    }



} 