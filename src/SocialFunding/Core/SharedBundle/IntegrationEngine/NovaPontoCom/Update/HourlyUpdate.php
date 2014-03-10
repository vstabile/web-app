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

class HourlyUpdate extends Zip{

    protected $directory;

    protected $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
        $this->directory = dirname(__FILE__) . '/Files';
    }

    private $downloadList = array(
        'HourlyExtra.zip' => 'http://b2b.extrahlg.net/Arquivos/CatalogoB2B/Disponibilidade?idParceiro=2',
        //'HourlyPontoFrio.zip' => 'http://b2b.pontofriohlg.net/Arquivos/CatalogoB2B/Disponibilidade?idParceiro=2',
        //'HourlyCasasBahia.zip' => 'http://b2b.casasbahiahlg.net/Arquivos/CatalogoB2B/Disponibilidade?idParceiro=2'
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
        if (strpos($partner, 'Extra') !== false) {
            $partnerId = 11;
        } elseif (strpos($partner, 'PontoFrio') !== false) {
            $partnerId = 10;
        } else {
            $partnerId = 12;
        }
        $repoProduct = $this->doctrine->getRepository('SharedBundle:Product');
        $em = $this->doctrine->getManager();
        $xmlIterator = new \SimpleXMLIterator($xml->Produtos->asXML());
        $total = count($xmlIterator);
        $i = 0;
        for( $xmlIterator->rewind(); $xmlIterator->valid(); $xmlIterator->next() ) {
            $i++;

            if ($i < 20000) {
                continue;
            }
            echo 'Reading... ('.$total . '/' . $i . ")\n";

            $currentXml = $xmlIterator->current();
            $attr = $currentXml->attributes();
            $priceFromProduct = str_replace('.', '', (string) $attr['precoDe']);
            $priceFromProduct = str_replace(',', '.', $priceFromProduct);
            $priceToProduct = str_replace('.', '', (string) $attr['precoPor']);
            $priceToProduct = str_replace(',', '.', $priceToProduct);

            $productLoaded = $repoProduct->findOneByPartnerAndSku($partnerId, (string) $attr['codigo']);
            $productLoaded = reset($productLoaded);
            if ($productLoaded !== false && $productLoaded != null && count($productLoaded) > 0) {

                $productLoaded->setPriceFrom($priceFromProduct);
                $productLoaded->setPriceTo($priceToProduct);
                $productLoaded->setAvailability((string) $attr['disponibilidade']);
                $em->persist($productLoaded);
            }

            if ($i%600 == 0) {
                $em->flush();
            }
        }
        $em->flush();

        return true;
    }

} 