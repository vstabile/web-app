<?php

namespace SocialFunding\Core\SharedBundle\Repository;

use Doctrine\ORM\EntityRepository;

class IntegrationEngineCategoryRepository extends EntityRepository{

    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM SharedBundle:IntegrationEngineCategory c ORDER BY c.name ASC'
            )
            ->getResult();
    }

    public function findByCategoryIdAndPartner($id, $partner)
    {
        return $this->getEntityManager()
            ->createQuery(
            'SELECT c FROM SharedBundle:IntegrationEngineCategory c WHERE c.categoryId = '. $id . ' and c.integrationEnginePartner = ' . $partner . ' ORDER BY c.name ASC'
            )
            ->getResult();
    }

    public function findAllByPartnerAndParent($partner, $parent)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM SharedBundle:IntegrationEngineCategory c WHERE c.parentId = '. $parent . ' and c.integrationEnginePartner = ' . $partner . ' ORDER BY c.name ASC'
            )
            ->getResult();
    }

    public function findAllMainCategory($partner)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM SharedBundle:IntegrationEngineCategory c WHERE c.parentId = 0 and c.integrationEnginePartner = '.$partner.'ORDER BY c.name ASC'
            )
            ->getResult();
    }

} 