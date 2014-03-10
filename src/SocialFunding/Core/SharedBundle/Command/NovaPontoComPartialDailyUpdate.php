<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 1/28/14
 * Time: 1:26 AM
 */

namespace SocialFunding\Core\SharedBundle\Command;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update\PartialDailyUpdate;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class NovaPontoComPartialDailyUpdate extends ContainerAwareCommand {

    protected function configure()
    {
        $this
            ->setName('novapontocom:update:partialdaily')
            ->setDescription('NovaPontoCom partial daily update')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Starting download');
        $update = new PartialDailyUpdate($this->getContainer()->get('doctrine'));

        //$update->downloadAndExtractList();
        $output->writeln('Download finalized successfully');
        $output->writeln('Updating database information');
        $update->readCurrentXml();
        $output->writeln('Database updated successfully');

    }

} 