<?php
/**
 * @author André Simões <sou@oand.re>
 */

namespace SocialFunding\Core\FrontendBundle\Controller;

use SocialFunding\Core\SharedBundle\Entity\Newsletter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class NewsletterController extends Controller{

    /**
     * @Route("/newsletter/cadastrar", name="newsletter_register")
     * @Template()
     */
    public function registerAction(Request $request)
    {
        $newsLetter = new Newsletter();
        $newsLetter->setEmail($request->request->get('email'));
        $newsLetter->setIsActive(1);
        $newsLetter->setCreateAt(new \DateTime('now'));
        $em = $this->get('doctrine')->getManager();

        $registerUrl = $this->generateUrl('fos_user_security_login');

        $this->get('session')->getFlashBag()->add(
            'notice',
            'Obrigado por se cadastrar em nossa News Letter, comece a doar agora mesmo, clickando <a href="'. $registerUrl.'">aqui</a>!'
        );

        $em->persist($newsLetter);
        $em->flush();

        return $this->redirect($this->generateUrl('search_index'));

    }

}