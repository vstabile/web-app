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

class UserController extends Controller{

    /**
     * @Route("/usuario/perfil/editar", name="usuario_edit_perfil")
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
     * @Route("/usuario/perfil", name="user_user_perfil")
     * @Template()
     */
    public function userPerfilAction()
    {

        $user = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->get('doctrine')->getManager();
        $repoCostumer = $em->getRepository('SharedBundle:Costumer');
        $donatedOngs = $repoCostumer->findAllOngsDonated($user);

        //var_dump($donatedOngs);

        return array(
            'user' => $user,
            'donatedOngs' => $donatedOngs
        );

    }

}