<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 1/28/14
 * Time: 1:26 AM
 */

namespace SocialFunding\Core\SharedBundle\Command;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update\CategoryDailyUpdate;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class NovaPontoComCategoryDailyUpdate extends ContainerAwareCommand {

    protected function configure()
    {
        $this
            ->setName('novapontocom:update:categorydaily')
            ->setDescription('NovaPontoCom category daily update')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Starting download');
        $update = $this->getContainer()->get('novapontocom.update.category');

        $repo = $this->getContainer()->get('doctrine')->getRepository('SharedBundle:IntegrationEnginePartner');
        $em = $this->getContainer()->get('doctrine')->getManager();
        $update->downloadAndExtractList();
        $output->writeln('Download finalized successfully');
        $output->writeln('Updating database information');
        $catList = $update->readCurrentXml();
        $i = 0;
        foreach($catList as $partner => $objects) {
            $i++;
            $partnerName = str_replace('Category', '', $partner);
            $iep = $repo->findOneBy( array('name' => $partnerName));
            foreach ($objects as $iePartnerCategory) {
                $iePartnerCategory->setIntegrationEnginePartner($iep);
                $em->persist($iePartnerCategory);
                if ($i%600 == 0) {
                    $em->flush();
                }
            }
            $em->flush();
        }
        $output->writeln('Database updated successfully');



    }

} 