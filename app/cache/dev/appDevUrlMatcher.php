<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // checkout_index
        if (rtrim($pathinfo, '/') === '/checkout') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'checkout_index');
            }

            return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\CheckoutController::indexAction',  '_route' => 'checkout_index',);
        }

        // checkout_process_checkout
        if (rtrim($pathinfo, '/') === '/process-checkout') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'checkout_process_checkout');
            }

            return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\CheckoutController::processCheckoutAction',  '_route' => 'checkout_process_checkout',);
        }

        if (0 === strpos($pathinfo, '/ong')) {
            if (0 === strpos($pathinfo, '/ong/perfil')) {
                // ong_edit_perfil
                if ($pathinfo === '/ong/perfil/editar') {
                    return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\OngController::editPerfilAction',  '_route' => 'ong_edit_perfil',);
                }

                // ong_list_campaign
                if ($pathinfo === '/ong/perfil') {
                    return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\OngController::listCampaignAction',  '_route' => 'ong_list_campaign',);
                }

            }

            if (0 === strpos($pathinfo, '/ong/criar-')) {
                // ong_create_new_campaign
                if ($pathinfo === '/ong/criar-nova-campanha') {
                    return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\OngController::createNewCampaignAction',  '_route' => 'ong_create_new_campaign',);
                }

                // ong_create_campaign
                if ($pathinfo === '/ong/criar-campanha') {
                    return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\OngController::createCampaignAction',  '_route' => 'ong_create_campaign',);
                }

            }

            // ong_select_product
            if (0 === strpos($pathinfo, '/ong/selecionar-produto') && preg_match('#^/ong/selecionar\\-produto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ong_select_product')), array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\OngController::selectProductAction',));
            }

            // ong_remove_product
            if (0 === strpos($pathinfo, '/ong/remover-produto') && preg_match('#^/ong/remover\\-produto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ong_remove_product')), array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\OngController::removeProductAction',));
            }

        }

        // search_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'search_index');
            }

            return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\SearchController::indexAction',  '_route' => 'search_index',);
        }

        // search_faq
        if ($pathinfo === '/duvidas-frequentes') {
            return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\SearchController::faqAction',  '_route' => 'search_faq',);
        }

        // search_contact
        if ($pathinfo === '/contato') {
            return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\SearchController::contactAction',  '_route' => 'search_contact',);
        }

        // search_use_terms
        if ($pathinfo === '/termos-de-uso') {
            return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\SearchController::useTermsAction',  '_route' => 'search_use_terms',);
        }

        // search_about_us
        if ($pathinfo === '/quem-somos') {
            return array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\SearchController::aboutUsAction',  '_route' => 'search_about_us',);
        }

        if (0 === strpos($pathinfo, '/campanha')) {
            // search_campaign_show
            if (preg_match('#^/campanha/(?P<campaignId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_campaign_show')), array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\SearchController::campaignShowAction',));
            }

            // search_campaign_donate
            if (0 === strpos($pathinfo, '/campanha-doar') && preg_match('#^/campanha\\-doar/(?P<campaignId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_campaign_donate')), array (  '_controller' => 'SocialFunding\\Core\\FrontendBundle\\Controller\\SearchController::campaignDonateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/backend')) {
            // backend_costumer_index
            if (rtrim($pathinfo, '/') === '/backend/costumer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_costumer_index');
                }

                return array (  '_controller' => 'SocialFunding\\Core\\BackendBundle\\Controller\\CostumerController::indexAction',  '_route' => 'backend_costumer_index',);
            }

            if (0 === strpos($pathinfo, '/backend/ong')) {
                // backend_ong_index
                if (rtrim($pathinfo, '/') === '/backend/ong') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_ong_index');
                    }

                    return array (  '_controller' => 'SocialFunding\\Core\\BackendBundle\\Controller\\OngController::indexAction',  '_route' => 'backend_ong_index',);
                }

                if (0 === strpos($pathinfo, '/backend/ong/campanha')) {
                    // backend_ong_list_campaigns
                    if (rtrim($pathinfo, '/') === '/backend/ong/campanhas') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'backend_ong_list_campaigns');
                        }

                        return array (  '_controller' => 'SocialFunding\\Core\\BackendBundle\\Controller\\OngController::listCampaignsAction',  '_route' => 'backend_ong_list_campaigns',);
                    }

                    // backend_ong_activate_campaign
                    if (0 === strpos($pathinfo, '/backend/ong/campanha/ativar') && preg_match('#^/backend/ong/campanha/ativar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ong_activate_campaign')), array (  '_controller' => 'SocialFunding\\Core\\BackendBundle\\Controller\\OngController::activateCampaignAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/registrar/ong')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/registrar/ong') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/registrar/ong/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/registrar/ong/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/registrar/ong/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/registrar/ong/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/registrar/ong/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/log')) {
            // _security_check
            if ($pathinfo === '/login_check') {
                return array('_route' => '_security_check');
            }

            // _security_logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_security_logout');
            }

            if (0 === strpos($pathinfo, '/loginfb')) {
                // _security_login_fb
                if ($pathinfo === '/loginfb') {
                    return array('_route' => '_security_login_fb');
                }

                // _security_check_fb
                if ($pathinfo === '/loginfb_check') {
                    return array('_route' => '_security_check_fb');
                }

            }

        }

        // fos_facebook_channel
        if ($pathinfo === '/channel.html') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_facebook_channel;
            }

            return array (  '_controller' => 'FOS\\FacebookBundle\\Controller\\FacebookController::channelAction',  '_route' => 'fos_facebook_channel',);
        }
        not_fos_facebook_channel:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
