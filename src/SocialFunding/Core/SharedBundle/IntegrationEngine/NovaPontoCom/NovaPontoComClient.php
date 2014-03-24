<?php

/**
 * Client to make requests to NovaPontoCom System
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom;

use SocialFunding\Core\SharedBundle\IntegrationEngine\AbstractIntegrationEngineClient;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Input\ConsultarProdutoCampanha;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Input\DadosCalcularCarrinho;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Order;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output\ConsultarProdutoCampanha as ConsultarProdutoCampanhaReturn;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output\FreteConsultarProduto;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output\CalcularCarrinho;
use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\DTO\Output\ListaProdutoCarinho;

class NovaPontoComClient implements AbstractIntegrationEngineClient{

    protected $client;

    protected $wsdl;

    protected $idCampaign;

    protected $document;

    protected $partnerId;

    CONST PONTO_FRIO_WSDL = 'http://b2b.pontofriohlg.net/Parceirosv3.svc?wsdl';
    CONST EXTRA_WSDL = 'http://b2b.extrahlg.net/Parceirosv3.svc?wsdl';
    CONST CASAS_BAHIA_WSDL = 'http://b2b.casasbahiahlg.net/Parceirosv3.svc?wsdl';
    CONST INTEGRATION_DOCUMENT = '65.972.247/0001-15';
    CONST PARTNER_ID = 2;

    public function __construct($patnerId)
    {
        $this->document = self::INTEGRATION_DOCUMENT;
        $this->partnerId = self::PARTNER_ID;

        if ($patnerId == 10) {
            $this->idCampaign = 1584;
            $this->wsdl = self::PONTO_FRIO_WSDL;
        } elseif ($patnerId == 11) {
            $this->idCampaign = 3231;
            $this->wsdl = self::EXTRA_WSDL;
        } else {
            $this->idCampaign = 1062;
            $this->wsdl = self::CASAS_BAHIA_WSDL;
        }

        $this->client = new \SoapClient($this->wsdl);
    }

    /**
     * @param ConsultarProdutoCampanha $input
     * @return ConsultarProdutoCampanhaReturn
     * @throws \Exception
     */
    public function searchProductByCampaign(ConsultarProdutoCampanha $input)
    {
        $input->setIdCampaign($this->idCampaign);
        $input->setDocument($this->document);

        try {
            $response = $this->client->__soapCall('ConsultarProdutoPorCampanha', array(
                'ConsultarProdutoPorCampanha' => array(
                    'produtoCampanha' => array(
                        'IdCampanha' => $input->getIdCampaign(),
                        'CNPJ' => $input->getDocument(),
                        'IdSku' => $input->getIdSku()
                    )
                )
            ));

            $return = $response->ConsultarProdutoPorCampanhaResult;

            $productCampaign = new ConsultarProdutoCampanhaReturn();
            $productCampaign->setErrorCode($return->CodigoDoErro);
            $productCampaign->setError($return->Erro);
            $productCampaign->setErrorType($return->TipoDeErro);
            $productCampaign->setErrorMessage($return->MensagemDeErro);
            $productCampaign->setCategoryId($return->Produto->Categoria);
            $productCampaign->setDescription($return->Produto->Descricao);
            $productCampaign->setDisponibility($return->Produto->Disponibilidade);
            $productCampaign->setOutLine($return->Produto->ForaDeLinha);
            $productCampaign->setImage($return->Produto->Imagem);
            $productCampaign->setName($return->Produto->Nome);
            $productCampaign->setValue($return->Produto->Valor);
            $productCampaign->setValueFrom($return->Produto->ValorDe);

            foreach ($return->Produto->Fretes->FreteConsultarProduto as $key => $frete) {
                $freteConsult = new FreteConsultarProduto();
                $freteConsult->setState($frete->Estado);
                $freteConsult->setValueTown($frete->PrecoCapital);
                $freteConsult->setValueCamp($frete->PrecoInterior);
                $productCampaign->addShipValue($key, $freteConsult);
            }
        } catch (\Exception $e) {
            throw $e;
        }

        return $productCampaign;
    }

    /**
     * @param DadosCalcularCarrinho $input
     * @return CalcularCarrinho
     */
    public function calculateCart(DadosCalcularCarrinho $input)
    {
        $input->setIdCampaign($this->idCampaign);
        $input->setDocument($this->document);

        try {
            $products = array();
            foreach ($input->getProducts() as $product) {
                $products[] = array(
                    'Codigo' => $product->getCode(),
                    'Quantidade' => $product->getQuantity()
                );
            }


            $response = $this->client->__soapCall('CalcularCarrinho', array(
                'CalcularCarrinho' => array(
                    'carrinho' => array(
                        'IdCampanha' => $input->getIdCampaign(),
                        'CNPJ' => $input->getDocument(),
                        'CEP' => $input->getZipCode(),
                        'Produtos' => array(
                            'DadosListaProdutoCarrinhoDTO' => $products
                        )
                    )
                )
            ));

            var_dump($response);
            $return = $response->CalcularCarrinhoResult;
            var_dump($return->Produtos);
            exit();
            $carrinho = new CalcularCarrinho();
            $carrinho->setErrorCode($return->CodigoDoErro);
            $carrinho->setError($return->Erro);
            $carrinho->setErrorType($return->TipoDeErro);
            $carrinho->setErrorMessage($return->MensagemDeErro);
            $carrinho->setProtocol($return->Protocolo);
            $carrinho->setShipValue($return->ValorFrete);
            $carrinho->setTributeValue($return->ValorImpostos);
            $carrinho->setTotalValueOrder($return->ValorTotaldoPedido);
            $carrinho->setTotalValueProducts($return->ValorTotaldosProdutos);

            $productList = array();
            foreach ($return->Produtos->ListaProdutoCarrinhoDTO  as $carProductReturn) {
                $cartProduct = new ListaProdutoCarinho();
                $cartProduct->setErrorCode($carProductReturn->CodigoDoErro);
                $cartProduct->setError($carProductReturn->Erro);
                $cartProduct->setErrorType($carProductReturn->TipoDeErro);
                $cartProduct->setErrorMessage($carProductReturn->MensagemDeErro);
                $cartProduct->setCode($carProductReturn->Codigo);
                $cartProduct->setQuantity($carProductReturn->Quantidade);
                $cartProduct->setTotalValue($carProductReturn->ValorTotal);
                $cartProduct->setTotalValueShip($carProductReturn->ValorTotalFrete);
                $cartProduct->setTotalValueTribute($carProductReturn->ValorTotalImpostos);
                $cartProduct->setTimeToShip($carProductReturn->PrevisaoEntrega);
                $productList[] = $cartProduct;
            }
            $carrinho->setProducts($productList);
        } catch (\Exception $e) {
            throw $e;
        }

        return $carrinho;

    }

    public function createOrder($order)
    {

            

    }

    public function findProductById($id)
    {
        $request = $this->client->__soapCall('ConsultarProduto', array(
            'ConsultarProduto' => array(
                'idSku' => $id
            )
        ));
    }

    public function finalizeOrder($order)
    {
        // TODO: Implement finalizeOrder() method.
    }

}