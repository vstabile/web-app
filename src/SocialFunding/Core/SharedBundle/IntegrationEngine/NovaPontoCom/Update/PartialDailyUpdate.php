<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 1/29/14
 * Time: 12:20 AM
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update\Zip;
use SocialFunding\Core\SharedBundle\Entity\Product;

class PartialDailyUpdate extends Zip{

    protected $directory;

    protected $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
        $this->directory = dirname(__FILE__) . '/Files';
    }

    private $downloadList = array(
        'PartialExtra.zip' => 'http://b2b.extrahlg.net/Arquivos/CatalogoB2B/Parcial?idParceiro=2',
        'PartialPontoFrio.zip' => 'http://b2b.pontofriohlg.net/Arquivos/CatalogoB2B/Parcial?idParceiro=2',
        'PartialCasasBahia.zip' => 'http://b2b.casasbahiahlg.net/Arquivos/CatalogoB2B/Parcial?idParceiro=2'
    );

    public function downloadAndExtractList()
    {
        $this->download($this->downloadList);
    }

    public function readCurrentXml()
    {
        foreach ($this->downloadList as $path => $downUrl) {
            $dirName = explode('.', $path);
            $finalDir = $this->directory . '/' . $dirName[0];
            echo "Opening directory: {$finalDir}\n";
            foreach ($this->listFileFromDirectory($finalDir) as $fileName) {
                echo "Reading file: {$fileName}\n";
                $categories = simplexml_load_file($fileName);
                $this->readXmlCategory($categories, $dirName[0]);
            }
        }

    }

    private function readXmlCategory(\SimpleXMLElement $xml, $partner)
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

            $currentXmlGroup = $currentXml->FichaTecnica->Grupos;
            if (is_object($currentXmlGroup->Grupo[0])) {
                $specXmlIterator = new \SimpleXMLIterator($currentXmlGroup->Grupo[0]->Itens->asXML());
                $specArray = array();
                for( $specXmlIterator->rewind(); $specXmlIterator->valid(); $specXmlIterator->next() ) {
                    $currentSpecXml = $specXmlIterator->current();
                    $specAttr = $currentSpecXml->attributes();
                    $specArray[(string) $specAttr['Descricao']] = (string) $specAttr['Valor'];
                }
                $product->setSpecification(implode('<br />', $specArray));
            }

            if (is_object($currentXmlGroup->Grupo[1])) {

                $specArray = array();
                $techSpecXmlIterator = new \SimpleXMLIterator($currentXmlGroup->Grupo[1]->Itens->asXML());
                for( $techSpecXmlIterator->rewind(); $techSpecXmlIterator->valid(); $techSpecXmlIterator->next() ) {
                    $currentTechSpecXml = $techSpecXmlIterator->current();
                    $specAttr = $currentTechSpecXml->attributes();
                    $specArray[(string) $specAttr['Descricao']] = (string) $specAttr['Valor'];
                }
                $product->setTechnicalSpecification(implode('<br />', $specArray));
            }

        }

        return true;
    }
} 