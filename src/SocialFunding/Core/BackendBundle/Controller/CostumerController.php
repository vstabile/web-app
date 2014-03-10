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
        $repoCampaign = $em->getRepository('SharedBundle:Campaign');
        $repoOng = $em->getRepository('SharedBundle:Ong');

        $allPendentCampaigns = $repoCampaign->findAllPendentCampaigns();

        $allOngs = $repoOng->findAll();

//        $form = $this->createForm(new OngInformationType(), $ong);
//
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//
//            $em->persist($ong);
//            $em->flush();
//
//            $this->get('session')->getFlashBag()->add(
//                'notice',
//                'Alterações realizadas com sucesso!'
//            );
//
//            return $this->redirect($this->generateUrl('ong_edit_perfil'));
//        }

        return array(
            'allPendentCampaigns' => count($allPendentCampaigns),
            'allOngs' => $allOngs,
        );
    }

    /**
     * @Route("/ong/campanhas/", name="backend_ong_list_campaigns")
     * @Template()
     */
    public function listCampaignsAction(Request $request)
    {
        $filters = $request->query->get('filter');
        $em = $this->get('doctrine')->getManager();
        $repoCampaign = $em->getRepository('SharedBundle:Campaign');
        $allPendentCampaigns = $repoCampaign->findAllPendentCampaigns();

        $campaignList = array();
        if ($filters == 'new_campaign') {
            $campaignList = $repoCampaign->findAllPendentCampaigns();
        } else {
            $campaignList = $repoCampaign->findAll();
        }

        return array(
            'campaignList' => $campaignList,
            'allPendentCampaigns' => count($allPendentCampaigns),
        );

    }

}