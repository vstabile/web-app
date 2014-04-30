<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 1/28/14
 * Time: 1:26 AM
 */

namespace SocialFunding\Core\SharedBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update\FullUpdate;

class NovaPontoComFullUpdate extends ContainerAwareCommand {

    protected $directory;

    private $downloadList = array(
        //'FullExtra.zip' => 'http://b2b.extrahlg.net/Arquivos/CatalogoB2B/Completo?idParceiro=2',
        'FullPontoFrio.zip' => 'http://b2b.pontofriohlg.net/Arquivos/CatalogoB2B/Completo?idParceiro=2',
//        'FullCasasBahia.zip' => 'http://b2b.casasbahiahlg.net/Arquivos/CatalogoB2B/Completo?idParceiro=2'
    );

    protected function configure()
    {
        $this
            ->setName('novapontocom:update:full')
            ->setDescription('NovaPontoCom full update')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Starting download');
        $update = new FullUpdate($this->getContainer()->get('doctrine'));
        $update->downloadAndExtractList();
        $output->writeln('Download finalized successfully');
        $output->writeln('Updating database information');
        $productList = $this->readCurrentXml();

        $output->writeln('Database updated successfully');

        return $this->productList;
    }

    public function insertXml($productList, $partner)
    {
        $repo = $this->getContainer()->get('doctrine')->getRepository('SharedBundle:IntegrationEnginePartner');
        $repoCategory = $this->getContainer()->get('doctrine')->getRepository('SharedBundle:IntegrationEngineCategory');
        $repoProduct = $this->getContainer()->get('doctrine')->getRepository('SharedBundle:Product');
        $em = $this->getContainer()->get('doctrine')->getManager();
        $partnerName = str_replace('Full', '', $partner);
        $iep = $repo->findOneBy( array('name' => $partnerName));
        $totalProducts = count($productList);
        $i = 0;
        foreach ($productList as $product) {
            $i++;
            $productFound = $repoProduct->findOneByCodeSku($product->getCodeSku());
            $product->setInDatabase(true);
            if (is_object($productFound)) {
                $product->setId($productFound->getId());
            }
            echo "Inserting product (" . $totalProducts . "/" . $i . ") " . date('d/m/Y h:i:s') . "\n";
            $iec = $repoCategory->findByCategoryIdAndPartner((int)$product->getIntegrationEngineCategory(), $iep->getId());
            if ($iec != null) {
                $product->setIntegrationEngineCategory((int)$product->getIntegrationEngineCategory());
                $product->setIntegrationEnginePartner($iep);
                $em->persist($product);
            }

            if ($i%600 == 0) {
                $em->flush();
            }
        }
        $em->flush();
    }

    public function readCurrentXml()
    {
        $this->directory = dirname(__FILE__) . '/../IntegrationEngine/NovaPontoCom/Update/Files';
        $update = new FullUpdate($this->getContainer()->get('doctrine'));
        foreach ($this->downloadList as $path => $downUrl) {
            $dirName = explode('.', $path);
            $finalDir = $this->directory . '/' . $dirName[0];
            echo "Opening directory: {$finalDir}\n";
            $directoryFiles = $this->listFileFromDirectory($finalDir);
            foreach ($directoryFiles as $k => $fileName) {
                if ($dirName[0] == 'FullPontoFrio' && $k < 30) {
                    continue;
                }
                echo "Reading file ({$k}/".count($directoryFiles)."): {$fileName}\n";
                $categories = simplexml_load_file($fileName);
                $this->insertXml($update->readXmlCategory($categories, $dirName[0]),$dirName[0]);
            }
            sleep(20);
        }

    }

    protected function listFileFromDirectory($path)
    {
        $fileList = array();
        if ($handle = opendir($path)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != ".." && $entry != "[Content_Types].xml" && $entry != "B2BCompleto_484.xml") {
                    $fileList[] = $path . '/' . $entry;
                }
            }
            closedir($handle);
        }

        return $fileList;
    }

} 