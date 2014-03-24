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

class OrderController extends Controller{

    /**
     * @Route("/order/", name="backend_order_index")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $repoOrder = $em->getRepository('SharedBundle:Order');
        $repoCampaign = $em->getRepository('SharedBundle:Campaign');

        $allOrders = $repoOrder->findAll();
        $allPendentCampaigns = $repoCampaign->findAllPendentCampaigns();

        return array(
            'allPendentCampaigns' => count($allPendentCampaigns),
            'allOrders' => $allOrders,
        );
    }

}