<?php

namespace SocialFunding\Core\SharedBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use SocialFunding\Core\SharedBundle\Entity\IntegrationEngine;
use SocialFunding\Core\SharedBundle\Entity\IntegrationEnginePartner;

class LoadIntegrationEngine implements FixtureInterface{

    public function load(ObjectManager $manager)
    {
        $integrationEngine = new IntegrationEngine();
        $integrationEngine->setName('novapontocom');
        $integrationEngine->setIsActive(true);

        $integrationEnginePartnerPontoFrio = new IntegrationEnginePartner();
        $integrationEnginePartnerPontoFrio->setIntegrationEngine($integrationEngine);
        $integrationEnginePartnerPontoFrio->setName('PontoFrio');
        $integrationEnginePartnerPontoFrio->setPartnerId(1584);

        $integrationEngine->addPartner($integrationEnginePartnerPontoFrio);

        $integrationEnginePartnerExtra = new IntegrationEnginePartner();
        $integrationEnginePartnerExtra->setIntegrationEngine($integrationEngine);
        $integrationEnginePartnerExtra->setName('Extra');
        $integrationEnginePartnerExtra->setPartnerId(3231);

        $integrationEngine->addPartner($integrationEnginePartnerExtra);

        $integrationEnginePartnerCasasBahia = new IntegrationEnginePartner();
        $integrationEnginePartnerCasasBahia->setIntegrationEngine($integrationEngine);
        $integrationEnginePartnerCasasBahia->setName('CasasBahia');
        $integrationEnginePartnerCasasBahia->setPartnerId(1062);

        $integrationEngine->addPartner($integrationEnginePartnerCasasBahia);

        $manager->persist($integrationEngine);
        $manager->flush();
    }

} 