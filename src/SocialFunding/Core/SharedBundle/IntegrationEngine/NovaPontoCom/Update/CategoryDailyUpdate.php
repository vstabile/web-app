<?php

/**
 * Download of the Daily Category Update
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update\Zip;
use SocialFunding\Core\SharedBundle\Entity\IntegrationEngineCategory;


class CategoryDailyUpdate extends Zip{

    protected $directory;

    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->directory = dirname(__FILE__) . '/Files';
        $this->objectReturn = array();
    }

    private $downloadList = array(
        'CategoryExtra.zip' => 'http://b2b.extrahlg.net/Arquivos/CatalogoB2B/Categoria?idParceiro=2',
        'CategoryPontoFrio.zip' => 'http://b2b.pontofriohlg.net/Arquivos/CatalogoB2B/Categoria?idParceiro=2',
        'CategoryCasasBahia.zip' => 'http://b2b.casasbahiahlg.net/Arquivos/CatalogoB2B/Categoria?idParceiro=2'
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
            foreach ($this->listFileFromDirectory($finalDir) as $fileName) {
                echo "Reading file: {$fileName}\n";
                $categories = simplexml_load_file($fileName);
                $this->readXmlCategory($categories, $dirName[0]);
            }
        }

        return $this->objectReturn;
    }

    private function readXmlCategory(\SimpleXMLElement $xml, $partner)
    {
        $xmlIterator = new \SimpleXMLIterator($xml->asXML());
        for( $xmlIterator->rewind(); $xmlIterator->valid(); $xmlIterator->next() ) {
            $integrationCategory = new IntegrationEngineCategory();
            $attr = $xmlIterator->current()->attributes();
            if($xmlIterator->hasChildren()) {
                if (json_decode($attr, true)) {
                    $integrationCategory->setCategoryId((string)$attr['IdCategoria'])
                        ->setDepartamentId((string)$attr['IdDepartamento'])
                        ->setLevel((string)$attr['Level'])
                        ->setName((string)$attr['Nome'])
                        ->setParentId((string)$attr['IdCategoriaPai']);
                    $this->objectReturn[$partner][] =$integrationCategory;
                }
                $this->readXmlCategory($xmlIterator->current(), $partner);
                continue;
            }
            $integrationCategory->setCategoryId((string)$attr['IdCategoria'])
                ->setDepartamentId((string)$attr['IdDepartamento'])
                ->setLevel((string)$attr['Level'])
                ->setName((string)$attr['Nome'])
                ->setParentId((string)$attr['IdCategoriaPai']);
            $this->objectReturn[$partner][] =$integrationCategory;
        }
    }

} 