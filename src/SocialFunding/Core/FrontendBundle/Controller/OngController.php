<?php
/**
 * @author André Simões <sou@oand.re>
 */

namespace SocialFunding\Core\FrontendBundle\Controller;

use SocialFunding\Core\FrontendBundle\Form\Type\OngInformationType;
use SocialFunding\Core\SharedBundle\Entity\Ong;
use SocialFunding\Core\SharedBundle\Entity\Campaign;
use SocialFunding\Core\SharedBundle\Entity\CampaignProducts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Session\Session;

class OngController extends Controller{

    /**
     * @Route("/ong/perfil/editar", name="ong_edit_perfil")
     * @Template()
     */
    public function editPerfilAction(Request $request)
    {
        $ong = $this->container->get('security.context')->getToken()->getUser();

        if (!is_object($ong) || !$ong instanceof Ong) {
            return $this->redirect($this->generateUrl('search_index'));
        }

        $form = $this->createForm(new OngInformationType(), $ong);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($ong);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Alterações realizadas com sucesso!'
            );

            return $this->redirect($this->generateUrl('ong_edit_perfil'));
        }

        return array(
            'ong' => $ong,
            'form' => $form->createView()
        );
    }

    /**
     * @Route("/ong/perfil", name="ong_list_campaign")
     * @Template()
     */
    public function listCampaignAction()
    {

        $ong = $this->container->get('security.context')->getToken()->getUser();

        if (!is_object($ong) || !$ong instanceof Ong) {
            return $this->redirect($this->generateUrl('search_index'));
        }

        $em = $this->get('doctrine')->getManager();
        $repoCampaign = $em->getRepository('SharedBundle:Campaign');
        $activeCampaign = $repoCampaign->findAllApprovedByOng($ong->getId());
        $underModerationCampaign = count($repoCampaign->findAllUnderModerationByOng($ong->getId()));
        $allDoneCampaign = count($repoCampaign->findAllDoneByOng($ong->getId()));
        $totalActiveCampaigns = count($repoCampaign->findAllActiveByOng($ong->getId()));

        $historyCampaign = $repoCampaign->findAllDoneByOng($ong->getId());

        $dateNow = new \DateTime('now');
        $finalDate = $activeCampaign->getFinalDate();
        $interval = $dateNow->diff($finalDate);

        $totalValuePurchased = 0;
        $totalPurchased = 0;
        $totalNested = 0;
        foreach ($activeCampaign->getProducts() as $productCampaign) {
            $totalPurchased += $productCampaign->getQuantityPurchased();
            $totalNested += $productCampaign->getQuantity();
            $totalValuePurchased += $productCampaign->getQuantityPurchased()*$productCampaign->getProduct()->getPriceFrom();
        }

        if ($totalNested == 0) {
            $totalPercent = 0;
        } else {
            $totalPercent = floor(($totalPurchased*100)/$totalNested);
        }



        return array(
            'ong' => $ong,
            'activeCampaign' => $activeCampaign,
            'remainingDays' => $interval->format('%a'),
            'totalPurchased' => $totalPurchased,
            'totalPercent' => $totalPercent,
            'totalValuePurchased' => $totalValuePurchased,
            'totalActiveCampaigns' => $totalActiveCampaigns,
            'underModeration' => $underModerationCampaign,
            'allDone' => $allDoneCampaign,
            'historyCampaign' => $historyCampaign
        );
    }

    /**
     * @Route("/ong/criar-nova-campanha", name="ong_create_new_campaign")
     * @Template()
     */
    public function createNewCampaignAction(Request $request)
    {

        $session = new Session();
        $ong = $this->container->get('security.context')->getToken()->getUser();
        $selectedProducts = $session->get('product_list');

        if (!is_object($ong) || !$ong instanceof Ong) {
            return $this->redirect($this->generateUrl('search_index'));
        }

        $returnProductList = $request->request->get('selectedProducts');
        $em = $this->get('doctrine')->getManager();
        $repoProduct = $em->getRepository('SharedBundle:Product');

        if (!is_null($returnProductList)) {
            foreach ($returnProductList as $selectedProduct) {
                $selectedProductsList[] = $repoProduct->findOneById($selectedProduct);
            }
        }

        $selectedProduct = $request->request->has('quantity');

        if (!$selectedProduct) {
            return array(
                'ong' => $ong,
                'selectedProductsList' => $selectedProductsList
            );
        }

        $campaign = new Campaign();

        $selectedProductsList = $request->request->get('selectedProducts');
        $quantity = $request->request->get('quantity');
        $firstDesc = $request->request->get('description-1');
        $secondDesc = $request->request->get('description-2');
        $em = $this->get('doctrine')->getManager();
        $repoProduct = $em->getRepository('SharedBundle:Product');

        foreach ($selectedProductsList as $key => $productId) {
            $product = $repoProduct->findOneById($productId);
            $campaignProduct = new CampaignProducts();
            $campaignProduct->setProduct($product);
            $campaignProduct->setQuantityPurchased(0);
            $campaignProduct->setQuantity($quantity[$key]);
            $campaignProduct->setRemoteId($product->getCodeSku());
            $campaignProduct->setCampaign($campaign);
            $campaign->addProduct($campaignProduct);
        }

        $campaign->setFinalDate(new \DateTime('+15 days'));
        $campaign->setInitialDate(new \DateTime('now'));
        $campaign->setIsActive(1);
        $campaign->setFirstDescription($firstDesc);
        $campaign->setSecondDescription($secondDesc);
        $campaign->setIsApproved(0);
        $campaign->setOng($ong);

        foreach($request->files->get('coverPhoto') as $coverId => $file) {
            $campaign->upload($file, $coverId+1);
        }

        $em->persist($campaign);
        $em->flush();
        $session->remove('product_list');

        return $this->redirect($this->generateUrl('ong_list_campaign'));

    }

    /**
     * @Route("/ong/criar-campanha", name="ong_create_campaign")
     * @Template()
     */
    public function createCampaignAction(Request $request)
    {

        $session = new Session();
        $selectedProducts = $session->get('product_list');
        $ong = $this->container->get('security.context')->getToken()->getUser();

        if (!is_object($ong) || !$ong instanceof Ong) {
            return $this->redirect($this->generateUrl('search_index'));
        }

        $em = $this->get('doctrine')->getManager();
        $repoCategory = $em->getRepository('SharedBundle:IntegrationEngineCategory');
        $repoProduct = $em->getRepository('SharedBundle:Product');
        $selectedProductsList = array();

        if (!is_null($selectedProducts)) {
            foreach (json_decode($selectedProducts) as $selectedProduct) {
                $selectedProductsList[] = $repoProduct->findOneById($selectedProduct);
            }
        }

        $partner = $request->get('partner');
        $parent = $request->get('category');
        $search = $request->get('search_product');
        if (!is_null($partner) && !is_null($parent)) {

            $listCategory = $repoCategory->findAllByPartnerAndParent($partner, $parent);
            if (count($listCategory) == 0) {
                $categoryActual = $repoCategory->findByCategoryIdAndPartner($parent, $partner);
                $listCategory = $repoCategory->findAllByPartnerAndParent($partner, $categoryActual[0]->getDepartamentId());
            }
            $subCategoryList = array();
            foreach ($listCategory as $category) {
                if ($category->getLevel() == 3) {
                    $subCategoryList[$category->getCategoryId()][] = $category;
                } else {
                    $searchCategory = $repoCategory->findAllByPartnerAndParent($partner, $category->getCategoryId());
                    $retCat = $category;
                    if (!empty($searchCategory)) {
                        $retCat = $searchCategory;
                    }
                    if (is_array($retCat)){
                        $subCategoryList[$category->getCategoryId()] = $retCat;
                    } else {
                        $subCategoryList[$category->getCategoryId()][] = $retCat;
                    }
                }
            }


            $productList = $repoProduct->findAllByCategory($parent);

            return array(
                'ong' => $ong,
                'partner' => $partner,
                'categoryList' => $subCategoryList,
                'productList' => $productList,
                'selectedProductsList' => $selectedProductsList
            );

        }

        if (!is_null($search)) {
            $productList = $repoProduct->findAllByNameLike($search);
        } else {
            $productList = $repoProduct->findAllByNameOrder();
        }

        $categoriesPontoFrio = $repoCategory->findAllMainCategory(10);

        return array(
            'ong' => $ong,
            'categoryListPontoFrio' => $categoriesPontoFrio,
            'productList' => $productList,
            'selectedProductsList' => $selectedProductsList
        );

    }

    /**
     * @Route("/ong/selecionar-produto/{id}", name="ong_select_product")
     */
    public function selectProductAction($id)
    {
        $ong = $this->container->get('security.context')->getToken()->getUser();

        if (!is_object($ong) || !$ong instanceof Ong) {
            return $this->redirect($this->generateUrl('search_index'));
        }

        $session = new Session();
        $productList = json_decode($session->get('product_list'), true);

        if (count($productList) >= 4) {
            $session->set('product_list', json_encode($productList));
            return new JsonResponse(false);
        }
        if (is_null($productList) || !in_array($id, $productList)) {
            $productList[] = $id;
        }

        $session->set('product_list', json_encode($productList));

        $em = $this->get('doctrine')->getManager();
        $repoProduct = $em->getRepository('SharedBundle:Product');
        $product = $repoProduct->findOneById($id);

        $returnProduct = array(
            'img' => $product->getImageSmall(),
            'name' => $product->getName(),
            'id' => $id
        );

        return new JsonResponse($returnProduct);

    }

    /**
     * @Route("/ong/remover-produto/{id}", name="ong_remove_product")
     */
    public function removeProductAction($id)
    {
        $ong = $this->container->get('security.context')->getToken()->getUser();

        if (!is_object($ong) || !$ong instanceof Ong) {
            return $this->redirect($this->generateUrl('search_index'));
        }

        $session = new Session();
        $productList = json_decode($session->get('product_list'), true);

        if (count($productList) >= 4) {
            $session->set('product_list', json_encode($productList));
            return new JsonResponse(false);
        }

        if(($key = array_search($id, $productList)) !== false) {
            unset($productList[$key]);
            $session->set('product_list', json_encode($productList));

            return new JsonResponse(true);
        }

        return new JsonResponse(false);

    }

}