<?php

namespace SocialFunding\Core\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    /**
     * @Route("/", name="search_index")
     * @Template()
     */
    public function indexAction()
    {

        $em = $this->get('doctrine')->getManager();
        $repoCampaign = $em->getRepository('SharedBundle:Campaign');
        $recommendedCampaigns = $repoCampaign->findAllRecommendedCampaigns();
        return array(
            'recommendedCampaigns' => $recommendedCampaigns
        );
    }

    /**
     * @Route("/duvidas-frequentes", name="search_faq")
     * @Template()
     */
    public function faqAction()
    {
        return array();
    }

    /**
     * @Route("/contato", name="search_contact")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        if ($request->getMethod()) {

            $nome = $request->request->get('name');
            $email = $request->request->get('email');
            $message = $request->request->get('message');

            mail('andre.simoes@quup.com.br', 'Formulário Contato', 'Nome: ' . $nome . ' | Email: ' . $email . ' | Message: ' . $message);
        }

        return array();
    }

    /**
     * @Route("/termos-de-uso", name="search_use_terms")
     * @Template()
     */
    public function useTermsAction()
    {
        return array();
    }

    /**
     * @Route("/quem-somos", name="search_about_us")
     * @Template()
     */
    public function aboutUsAction()
    {
        return array();
    }

    /**
     * @Route("/campanha/{campaignId}", name="search_campaign_show")
     * @Template()
     */
    public function campaignShowAction($campaignId)
    {

        $em = $this->get('doctrine')->getManager();
        $repoCampaign = $em->getRepository('SharedBundle:Campaign');
        $campaign = $repoCampaign->findOneById($campaignId);

        $dateNow = new \DateTime('now');
        $finalDate = $campaign->getFinalDate();
        $interval = $dateNow->diff($finalDate);

        $totalPurchased = 0;
        $totalNested = 0;
        foreach ($campaign->getProducts() as $productCampaign) {
            $totalPurchased += $productCampaign->getQuantityPurchased();
            $totalNested += $productCampaign->getQuantity();
        }

        $totalPercent = floor(($totalPurchased*100)/$totalNested);

        return array(
            'campaign' => $campaign,
            'remainingDays' => $interval->format('%a'),
            'totalPurchased' => $totalPurchased,
            'totalPercent' => $totalPercent,
        );
    }

    /**
     * @Route("/campanha-doar/{campaignId}", name="search_campaign_donate")
     * @Template()
     */
    public function campaignDonateAction($campaignId)
    {

        $em = $this->get('doctrine')->getManager();
        $repoCampaign = $em->getRepository('SharedBundle:Campaign');
        $campaign = $repoCampaign->findOneById($campaignId);

        $dateNow = new \DateTime('now');
        $finalDate = $campaign->getFinalDate();
        $interval = $dateNow->diff($finalDate);

        $totalPurchased = 0;
        $totalNested = 0;
        foreach ($campaign->getProducts() as $productCampaign) {
            $totalPurchased += $productCampaign->getQuantityPurchased();
            $totalNested += $productCampaign->getQuantity();
        }

        $totalPercent = floor(($totalPurchased*100)/$totalNested);
        return array(
            'campaign' => $campaign,
            'remainingDays' => $interval->format('%a'),
            'totalPurchased' => $totalPurchased,
            'totalPercent' => $totalPercent,
        );
    }

}