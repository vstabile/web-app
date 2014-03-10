<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 1/28/14
 * Time: 1:26 AM
 */

namespace SocialFunding\Core\SharedBundle\Command;

use SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update\HourlyUpdate;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class NovaPontoComHourlyUpdate extends ContainerAwareCommand {

    protected function configure()
    {
        $this
            ->setName('novapontocom:update:hourly')
            ->setDescription('NovaPontoCom daily update')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Starting download');
        $update = new HourlyUpdate($this->getContainer()->get('doctrine'));

        $update->downloadAndExtractList();
        $output->writeln('Download finalized successfully');
        $output->writeln('Updating database information');
        $update->readCurrentXml();
        $output->writeln('Database updated successfully');

    }

} 