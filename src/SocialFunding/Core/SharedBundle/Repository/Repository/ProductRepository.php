<?php

namespace SocialFunding\Core\SharedBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository{

    public function findAllByCategory($categoryId)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM SharedBundle:Product p WHERE p.integrationEngineCategory = '.$categoryId.' AND p.availability = 1 ORDER BY p.name ASC'
            )
            ->getResult();
    }

    public function findAllByNameLike($name)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM SharedBundle:Product p WHERE p.name LIKE \'%'.$name.'%\' AND p.availability = 1 ORDER BY p.name ASC'
            )
            ->getResult();
    }

    public function findAllByNameOrder()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM SharedBundle:Product p WHERE p.availability = 1 ORDER BY p.name ASC'
            )
            ->setMaxResults(30)
            ->getResult();
    }

    public function findOneByPartnerAndSku($partner, $sku)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM SharedBundle:Product p WHERE p.integrationEnginePartner = '.$partner.' AND p.codeSku = ' . $sku . ' ORDER BY p.name ASC'
            )
            ->getResult();
    }

} 