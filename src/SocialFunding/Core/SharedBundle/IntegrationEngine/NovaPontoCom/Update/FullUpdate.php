<?php
/**
 * Class to download the full list of products
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update\Zip;
use SocialFunding\Core\SharedBundle\Entity\Product;


class FullUpdate extends Zip{

    protected $directory;

    protected $productList;

    protected $error;

    public function __construct()
    {
        $this->productList = array();
        $this->directory = dirname(__FILE__) . '/Files';
    }

    private $downloadList = array(
        'FullExtra.zip' => 'http://b2b.extrahlg.net/Arquivos/CatalogoB2B/Completo?idParceiro=2',
        'FullPontoFrio.zip' => 'http://b2b.pontofriohlg.net/Arquivos/CatalogoB2B/Completo?idParceiro=2',
        'FullCasasBahia.zip' => 'http://b2b.casasbahiahlg.net/Arquivos/CatalogoB2B/Completo?idParceiro=2'
    );

    public function downloadAndExtractList()
    {
        $this->download($this->downloadList);
    }

    public function readXmlCategory(\SimpleXMLElement $xml, $partner)
    {
        $xmlIterator = new \SimpleXMLIterator($xml->Produtos->asXML());
        for( $xmlIterator->rewind(); $xmlIterator->valid(); $xmlIterator->next() ) {
            $product = new Product();
            $currentXml = $xmlIterator->current();
            $attr = $currentXml->attributes();
            $product->setCode((string) $attr['Codigo']);
            $product->setName((string) $attr['DisplayName']);
            $product->setDescription((string) $attr['DescricaoLonga']);
            $product->setIntegrationEngineCategory((string) $attr['Categoria']);
            $product->setCodeManufacturer((string) $attr['CodigoFabricante']);
            $product->setNameManufacturer((string) $attr['Fabricante']);
            $product->setImageSmall((string) $attr['FotoPequena']);
            $product->setImageAverage((string) $attr['FotoMedia']);
            $product->setImageBig((string) $attr['FotoGrande']);
            $product->setKeywords((string) $attr['PalavraChave']);

            $skusXmlIterator = new \SimpleXMLIterator($currentXml->Skus->asXML());
            for( $skusXmlIterator->rewind(); $skusXmlIterator->valid(); $skusXmlIterator->next() ) {
                $currentSkusXml = $skusXmlIterator->current();
                $skusAttr = $currentSkusXml->attributes();
                $product->setCodeSku((string) $skusAttr['Codigo']);
                $priceProduct = str_replace('.', '', (string) $skusAttr['Preco']);
                $priceProduct = str_replace(',', '.', $priceProduct);
                $product->setPriceFrom($priceProduct);
                $product->setAvailable((string) $skusAttr['Habilitado']);
            }

            $this->error = (string) $attr['Codigo'];
            $currentXmlGroup = $currentXml->FichaTecnica->Grupos;
            if (is_object($currentXmlGroup->Grupo[0])){
                $specXmlIterator = new \SimpleXMLIterator($currentXmlGroup->Grupo[0]->Itens->asXML());
                $specArray = array();
                for( $specXmlIterator->rewind(); $specXmlIterator->valid(); $specXmlIterator->next() ) {
                    $currentSpecXml = $specXmlIterator->current();
                    $specAttr = $currentSpecXml->attributes();
                    $specArray[(string) $specAttr['Descricao']] = (string) $specAttr['Valor'];
                }
                $product->setSpecification(implode('<br />', $specArray));
            }

            $specArray = array();
            if (is_object($currentXmlGroup->Grupo[1])){
                $techSpecXmlIterator = new \SimpleXMLIterator($currentXmlGroup->Grupo[1]->Itens->asXML());
                for( $techSpecXmlIterator->rewind(); $techSpecXmlIterator->valid(); $techSpecXmlIterator->next() ) {
                    $currentTechSpecXml = $techSpecXmlIterator->current();
                    $specAttr = $currentTechSpecXml->attributes();
                    $specArray[(string) $specAttr['Descricao']] = (string) $specAttr['Valor'];
                }
                $product->setTechnicalSpecification(implode('<br />', $specArray));
            }

            $this->productList[] = $product;
        }

        return $this->productList;

    }

}
