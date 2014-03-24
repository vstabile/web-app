<?php
/**
 * @author André Simões <sou@oand.re>
 */

namespace SocialFunding\Core\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Session\Session;

class CostumerController extends Controller{

    /**
     * @Route("/costumer/", name="backend_costumer_index")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $repoCostumer = $em->getRepository('SharedBundle:Costumer');
        $repoCampaign = $em->getRepository('SharedBundle:Campaign');

        $allCostumers = $repoCostumer->findAll();
        $allPendentCampaigns = $repoCampaign->findAllPendentCampaigns();

        return array(
            'allPendentCampaigns' => count($allPendentCampaigns),
            'allCostumers' => $allCostumers,
        );
    }

}