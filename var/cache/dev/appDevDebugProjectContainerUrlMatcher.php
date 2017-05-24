<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // dudeego_platform_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dudeego_platform_home');
            }

            return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::indexAction',  '_route' => 'dudeego_platform_home',);
        }

        if (0 === strpos($pathinfo, '/front')) {
            if (0 === strpos($pathinfo, '/front/a')) {
                // dudeego_platform_accueil
                if ($pathinfo === '/front/accueil') {
                    return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::showAccueilAction',  '_route' => 'dudeego_platform_accueil',);
                }

                // dudeego_platform_about
                if ($pathinfo === '/front/about') {
                    return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::showAboutAction',  '_route' => 'dudeego_platform_about',);
                }

            }

            // dudeego_platform_showComparateur
            if ($pathinfo === '/front/comparateur') {
                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::showComparateurAction',  '_route' => 'dudeego_platform_showComparateur',);
            }

            // dudeego_platform_detailsComparateur
            if (0 === strpos($pathinfo, '/front/detailscomparateur') && preg_match('#^/front/detailscomparateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dudeego_platform_detailsComparateur')), array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::detailsComparateurAction',));
            }

            if (0 === strpos($pathinfo, '/front/compar')) {
                // dudeego_platform_PanierComparateur
                if (0 === strpos($pathinfo, '/front/comparateur') && preg_match('#^/front/comparateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dudeego_platform_PanierComparateur')), array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::PanierComparateurAction',));
                }

                // dudeego_platform_comparerComparateur
                if ($pathinfo === '/front/comparer') {
                    return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::comparerUniversiteAction',  '_route' => 'dudeego_platform_comparerComparateur',);
                }

            }

            // dudeego_platform_filterComparateur
            if ($pathinfo === '/front/filtercomparateur') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_dudeego_platform_filterComparateur;
                }

                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::filterComparateurAction',  '_route' => 'dudeego_platform_filterComparateur',);
            }
            not_dudeego_platform_filterComparateur:

            // dudeego_platform_itemsComparateur
            if ($pathinfo === '/front/itemsComparateur') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_dudeego_platform_itemsComparateur;
                }

                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::itemsComparateurAction',  '_route' => 'dudeego_platform_itemsComparateur',);
            }
            not_dudeego_platform_itemsComparateur:

            // dudeego_platform_voirJob
            if ($pathinfo === '/front/job') {
                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::jobAction',  '_route' => 'dudeego_platform_voirJob',);
            }

            // dudeego_platform_voirStage
            if ($pathinfo === '/front/stage') {
                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::stageAction',  '_route' => 'dudeego_platform_voirStage',);
            }

            // dudeego_platform_voirLogement
            if ($pathinfo === '/front/Logement') {
                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::LogementAction',  '_route' => 'dudeego_platform_voirLogement',);
            }

            // dudeego_platform_voirLangue
            if ($pathinfo === '/front/langue') {
                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::langueAction',  '_route' => 'dudeego_platform_voirLangue',);
            }

            // dudeego_platform_voirBlog
            if ($pathinfo === '/front/blog') {
                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::blogAction',  '_route' => 'dudeego_platform_voirBlog',);
            }

            // dudeego_platform_voirOrientation
            if ($pathinfo === '/front/orientation') {
                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\frontController::showOrientationAction',  '_route' => 'dudeego_platform_voirOrientation',);
            }

        }

        if (0 === strpos($pathinfo, '/back')) {
            if (0 === strpos($pathinfo, '/back/m')) {
                // dudeego_platform_abonne_monProfil
                if (rtrim($pathinfo, '/') === '/back/monprofil') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dudeego_platform_abonne_monProfil');
                    }

                    return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::monprofilAction',  '_route' => 'dudeego_platform_abonne_monProfil',);
                }

                if (0 === strpos($pathinfo, '/back/mes')) {
                    if (0 === strpos($pathinfo, '/back/mesparametres')) {
                        // dudeego_platform_abonne_mesParametres
                        if ($pathinfo === '/back/mesparametres') {
                            return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::mesparametresAction',  '_route' => 'dudeego_platform_abonne_mesParametres',);
                        }

                        if (0 === strpos($pathinfo, '/back/mesparametresM')) {
                            // dudeego_platform_abonne_mesParametresMDP
                            if ($pathinfo === '/back/mesparametresMDP') {
                                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::mesparametresMDPAction',  '_route' => 'dudeego_platform_abonne_mesParametresMDP',);
                            }

                            // dudeego_platform_abonne_mesParametresMAIL
                            if ($pathinfo === '/back/mesparametresMAIL') {
                                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::mesparametresMAILAction',  '_route' => 'dudeego_platform_abonne_mesParametresMAIL',);
                            }

                        }

                    }

                    // dudeego_platform_abonne_mesDemandes
                    if ($pathinfo === '/back/mesdemandes') {
                        return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::mesdemandesAction',  '_route' => 'dudeego_platform_abonne_mesDemandes',);
                    }

                }

            }

            // dudeego_platform_abonne_detailsDemandes
            if (0 === strpos($pathinfo, '/back/detailsdemandes') && preg_match('#^/back/detailsdemandes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dudeego_platform_abonne_detailsDemandes')), array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::detailsdemandesAction',));
            }

            if (0 === strpos($pathinfo, '/back/m')) {
                // dudeego_platform_abonne_modifierDemandes
                if (0 === strpos($pathinfo, '/back/modifierdemandes') && preg_match('#^/back/modifierdemandes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dudeego_platform_abonne_modifierDemandes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dudeego_platform_abonne_modifierDemandes')), array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::modifierdemandesAction',));
                }
                not_dudeego_platform_abonne_modifierDemandes:

                // dudeego_platform_abonne_mesDocuments
                if ($pathinfo === '/back/mesdocuments') {
                    return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::mesdocumentsAction',  '_route' => 'dudeego_platform_abonne_mesDocuments',);
                }

            }

            // dudeego_platform_abonne_aide
            if ($pathinfo === '/back/aide') {
                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::aideAction',  '_route' => 'dudeego_platform_abonne_aide',);
            }

            // dudeego_platform_abonne_contact
            if ($pathinfo === '/back/contact') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_dudeego_platform_abonne_contact;
                }

                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::contactAction',  '_route' => 'dudeego_platform_abonne_contact',);
            }
            not_dudeego_platform_abonne_contact:

            if (0 === strpos($pathinfo, '/back/universite')) {
                // dudeego_platform_abonne_universiteStepsOne
                if ($pathinfo === '/back/universiteOne') {
                    return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::universiteOneAction',  '_route' => 'dudeego_platform_abonne_universiteStepsOne',);
                }

                if (0 === strpos($pathinfo, '/back/universiteT')) {
                    // dudeego_platform_abonne_universiteStepsTwo
                    if ($pathinfo === '/back/universiteTwo') {
                        return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::universiteTwoAction',  '_route' => 'dudeego_platform_abonne_universiteStepsTwo',);
                    }

                    // dudeego_platform_abonne_universiteStepsThree
                    if ($pathinfo === '/back/universiteThree') {
                        return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::universiteTwoAction',  '_route' => 'dudeego_platform_abonne_universiteStepsThree',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/back/l')) {
                if (0 === strpos($pathinfo, '/back/langue')) {
                    // dudeego_platform_abonne_langueStepsOne
                    if ($pathinfo === '/back/langueOne') {
                        return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::langueOneAction',  '_route' => 'dudeego_platform_abonne_langueStepsOne',);
                    }

                    if (0 === strpos($pathinfo, '/back/langueT')) {
                        // dudeego_platform_abonne_langueStepsTwo
                        if ($pathinfo === '/back/langueTwo') {
                            return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::langueTwoAction',  '_route' => 'dudeego_platform_abonne_langueStepsTwo',);
                        }

                        // dudeego_platform_abonne_langueStepsThree
                        if ($pathinfo === '/back/langueThree') {
                            return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::langueTwoAction',  '_route' => 'dudeego_platform_abonne_langueStepsThree',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/back/logement')) {
                    // dudeego_platform_abonne_logementStepsOne
                    if ($pathinfo === '/back/logementOne') {
                        return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::logementOneAction',  '_route' => 'dudeego_platform_abonne_logementStepsOne',);
                    }

                    if (0 === strpos($pathinfo, '/back/logementT')) {
                        // dudeego_platform_abonne_logementStepsTwo
                        if ($pathinfo === '/back/logementTwo') {
                            return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::logementTwoAction',  '_route' => 'dudeego_platform_abonne_logementStepsTwo',);
                        }

                        // dudeego_platform_abonne_logementStepsThree
                        if ($pathinfo === '/back/logementThree') {
                            return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::logementTwoAction',  '_route' => 'dudeego_platform_abonne_logementStepsThree',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/back/preparation')) {
                // dudeego_platform_abonne_preparationStepsOne
                if ($pathinfo === '/back/preparationOne') {
                    return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::preparationOneAction',  '_route' => 'dudeego_platform_abonne_preparationStepsOne',);
                }

                if (0 === strpos($pathinfo, '/back/preparationT')) {
                    // dudeego_platform_abonne_preparationStepsTwo
                    if ($pathinfo === '/back/preparationTwo') {
                        return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::preparationTwoAction',  '_route' => 'dudeego_platform_abonne_preparationStepsTwo',);
                    }

                    // dudeego_platform_abonne_preparationStepsThree
                    if ($pathinfo === '/back/preparationThree') {
                        return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::preparationTwoAction',  '_route' => 'dudeego_platform_abonne_preparationStepsThree',);
                    }

                }

            }

            // dudeego_platform_abonne_mutuelle
            if ($pathinfo === '/back/mutuelle') {
                return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\backController::mutuelleAction',  '_route' => 'dudeego_platform_abonne_mutuelle',);
            }

        }

        // dudeego_platform_admin_panel
        if ($pathinfo === '/Admin/adminPanel') {
            return array (  '_controller' => 'DUDEEGO\\PlatformBundle\\Controller\\adminController::adminPanelAction',  '_route' => 'dudeego_platform_admin_panel',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
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

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
