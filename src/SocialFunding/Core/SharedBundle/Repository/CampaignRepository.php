<?php

namespace SocialFunding\Core\SharedBundle\Repository;

use SocialFunding\Core\SharedBundle\Entity\Campaign;
use Doctrine\ORM\EntityRepository;

class CampaignRepository extends EntityRepository{

    public function findAllApprovedByOng($ong)
    {
        $minimunDate = new \DateTime('now');
        $formatedDate = $minimunDate->format('Y-m-d H:i:s');
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM SharedBundle:Campaign c WHERE c.ong = ' . $ong .
                ' AND c.finalDate > \'' . $formatedDate . '\' AND c.isApproved = 1 AND c.isActive = 1'
            )
            ->getSingleResult();
    }

    public function findAllActiveByOng($ong)
    {
        $minimunDate = new \DateTime('now');
        $formatedDate = $minimunDate->format('Y-m-d H:i:s');
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM SharedBundle:Campaign c WHERE c.ong = ' . $ong .
                ' AND c.finalDate > \'' . $formatedDate . '\' AND c.isApproved = 1 AND c.isActive = 1'
            )
            ->getResult();
    }

    public function findAllUnderModerationByOng($ong)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM SharedBundle:Campaign c WHERE c.ong = ' . $ong .
                ' AND c.isApproved = 0 AND c.isActive = 1'
            )
            ->getResult();
    }

    public function findAllDoneByOng($ong)
    {
        $minimunDate = new \DateTime('now');
        $formatedDate = $minimunDate->format('Y-m-d H:i:s');
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM SharedBundle:Campaign c WHERE c.ong = ' . $ong .
                ' AND c.finalDate < \'' . $formatedDate . '\' AND c.isApproved = 1 AND c.isActive = 0'
            )
            ->getResult();
    }

    public function findAllByOng($ong)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM SharedBundle:Campaign c WHERE c.ong = ' . $ong
            )
            ->getResult();
    }

    public function findAllRecommendedCampaigns()
    {
        $minimunDate = new \DateTime('now');
        $formatedDate = $minimunDate->format('Y-m-d H:i:s');
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM SharedBundle:Campaign c WHERE  c.finalDate > \'' . $formatedDate .
                '\' AND c.isApproved = 1 AND c.isActive = 1'
            )
            ->setMaxResults(4)
            ->getResult();
    }

    public function findAllPendentCampaigns()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM SharedBundle:Campaign c WHERE c.isActive = 1 AND c.isApproved = 0'
            )
            ->getResult();
    }

    public function findAllByNameLike($name)
    {
        $minimunDate = new \DateTime('now');
        $formatedDate = $minimunDate->format('Y-m-d H:i:s');
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select('c')
            ->from('SocialFunding\Core\SharedBundle\Entity\Campaign', 'c')
            ->leftJoin('c.ong', 'o')
            ->where('c.finalDate > :finalDate')
            ->andWhere('o.nomeFantasia LIKE \'%'.$name.'%\' ')
            ->andWhere('c.isApproved = 1')
            ->andWhere('c.isActive = 1')
            ->andWhere('c.isActive = 1')
            ->setParameters(array('finalDate' => $formatedDate))
            ->getQuery()
            ->getResult();
    }

}