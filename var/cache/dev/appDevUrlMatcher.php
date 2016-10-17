<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/js/0ab09d7')) {
            // _assetic_0ab09d7
            if ($pathinfo === '/js/0ab09d7.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0ab09d7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0ab09d7',);
            }

            // _assetic_0ab09d7_0
            if ($pathinfo === '/js/0ab09d7_bytheme_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0ab09d7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0ab09d7_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images/a240c67')) {
            // _assetic_a240c67
            if ($pathinfo === '/images/a240c67.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a240c67',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_a240c67',);
            }

            // _assetic_a240c67_0
            if ($pathinfo === '/images/a240c67_logo_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a240c67',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_a240c67_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/fb55971')) {
            // _assetic_fb55971
            if ($pathinfo === '/js/fb55971.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fb55971',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fb55971',);
            }

            // _assetic_fb55971_0
            if ($pathinfo === '/js/fb55971_myquizz_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fb55971',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fb55971_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/f8cf4ce')) {
            // _assetic_f8cf4ce
            if ($pathinfo === '/css/f8cf4ce.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f8cf4ce',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f8cf4ce',);
            }

            // _assetic_f8cf4ce_0
            if ($pathinfo === '/css/f8cf4ce_part_1_custom_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f8cf4ce',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f8cf4ce_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/7ae9405')) {
                // _assetic_7ae9405
                if ($pathinfo === '/js/7ae9405.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7ae9405',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7ae9405',);
                }

                // _assetic_7ae9405_0
                if ($pathinfo === '/js/7ae9405_do_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7ae9405',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7ae9405_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/4d28477')) {
                // _assetic_4d28477
                if ($pathinfo === '/js/4d28477.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4d28477',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4d28477',);
                }

                // _assetic_4d28477_0
                if ($pathinfo === '/js/4d28477_theme_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4d28477',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4d28477_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/08831e2')) {
            // _assetic_08831e2
            if ($pathinfo === '/css/08831e2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '08831e2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_08831e2',);
            }

            if (0 === strpos($pathinfo, '/css/08831e2_part_1_')) {
                if (0 === strpos($pathinfo, '/css/08831e2_part_1_boot')) {
                    // _assetic_08831e2_0
                    if ($pathinfo === '/css/08831e2_part_1_bootflat_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '08831e2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_08831e2_0',);
                    }

                    // _assetic_08831e2_1
                    if ($pathinfo === '/css/08831e2_part_1_bootstrap.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '08831e2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_08831e2_1',);
                    }

                }

                // _assetic_08831e2_2
                if ($pathinfo === '/css/08831e2_part_1_custom_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '08831e2',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_08831e2_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/c0ff3d3')) {
            // _assetic_c0ff3d3
            if ($pathinfo === '/js/c0ff3d3.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c0ff3d3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c0ff3d3',);
            }

            if (0 === strpos($pathinfo, '/js/c0ff3d3_')) {
                // _assetic_c0ff3d3_0
                if ($pathinfo === '/js/c0ff3d3_jquery-1.10.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c0ff3d3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c0ff3d3_0',);
                }

                // _assetic_c0ff3d3_1
                if ($pathinfo === '/js/c0ff3d3_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c0ff3d3',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_c0ff3d3_1',);
                }

                // _assetic_c0ff3d3_2
                if ($pathinfo === '/js/c0ff3d3_html5shiv_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c0ff3d3',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_c0ff3d3_2',);
                }

                // _assetic_c0ff3d3_3
                if ($pathinfo === '/js/c0ff3d3_respond.min_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c0ff3d3',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_c0ff3d3_3',);
                }

                // _assetic_c0ff3d3_4
                if ($pathinfo === '/js/c0ff3d3_custom_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c0ff3d3',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_c0ff3d3_4',);
                }

                // _assetic_c0ff3d3_5
                if ($pathinfo === '/js/c0ff3d3_spin.min_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c0ff3d3',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_c0ff3d3_5',);
                }

            }

        }

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

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_homepage');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/themes')) {
                // admin_theme
                if ($pathinfo === '/admin/themes') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::themeAction',  '_route' => 'admin_theme',);
                }

                // admin_updatetheme
                if (0 === strpos($pathinfo, '/admin/themes/update') && preg_match('#^/admin/themes/update\\-(?P<themeid>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_updatetheme')), array (  '_controller' => 'AdminBundle\\Controller\\AdminController::updateThemeAction',));
                }

            }

        }

        // login
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // register
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::registerAction',  '_route' => 'register',);
        }

        // logout
        if ($pathinfo === '/deconnexion') {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/profil')) {
            // profile
            if (preg_match('#^/profil/(?P<userid>\\d+)\\-public$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_controller' => 'UserBundle\\Controller\\UserController::publicProfileAction',));
            }

            // privateprofile
            if (preg_match('#^/profil/(?P<userid>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'privateprofile')), array (  '_controller' => 'UserBundle\\Controller\\UserController::privateProfileAction',));
            }

            // changepassword
            if ($pathinfo === '/profil/mdp') {
                return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::changePasswordAction',  '_route' => 'changepassword',);
            }

        }

        if (0 === strpos($pathinfo, '/quizz')) {
            // quizz_preview
            if (0 === strpos($pathinfo, '/quizz/preview') && preg_match('#^/quizz/preview/(?P<quizzid>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizz_preview')), array (  '_controller' => 'QuizzBundle\\Controller\\QuizzController::previewAction',));
            }

            // quizz_do
            if (0 === strpos($pathinfo, '/quizz/do') && preg_match('#^/quizz/do/(?P<quizzid>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizz_do')), array (  '_controller' => 'QuizzBundle\\Controller\\QuizzController::doAction',));
            }

            // quizz_result
            if (0 === strpos($pathinfo, '/quizz/result') && preg_match('#^/quizz/result/(?P<quizzdoneid>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizz_result')), array (  '_controller' => 'QuizzBundle\\Controller\\QuizzController::dodoneAction',));
            }

            // quizz_modify
            if (0 === strpos($pathinfo, '/quizz/modifier') && preg_match('#^/quizz/modifier/(?P<quizzid>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizz_modify')), array (  '_controller' => 'QuizzBundle\\Controller\\QuizzController::modifyAction',));
            }

            if (0 === strpos($pathinfo, '/quizz/s')) {
                // quizz_delete
                if (0 === strpos($pathinfo, '/quizz/supprimer') && preg_match('#^/quizz/supprimer/(?P<quizzid>\\d+)\\-(?P<confirm>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizz_delete')), array (  '_controller' => 'QuizzBundle\\Controller\\QuizzController::deleteAction',));
                }

                // quizz_reporterror
                if (0 === strpos($pathinfo, '/quizz/signaler') && preg_match('#^/quizz/signaler/(?P<questionid>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizz_reporterror')), array (  '_controller' => 'QuizzBundle\\Controller\\QuizzController::reporterrorAction',));
                }

            }

            // teddypreview
            if (0 === strpos($pathinfo, '/quizz/preview2') && preg_match('#^/quizz/preview2/(?P<quizzid>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'teddypreview')), array (  '_controller' => 'QuizzBundle\\Controller\\QuizzController::teddypreviewAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'GeneralBundle\\Controller\\GeneralController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/recherche')) {
            // search
            if ($pathinfo === '/recherche') {
                return array (  '_controller' => 'GeneralBundle\\Controller\\GeneralController::searchAction',  '_route' => 'search',);
            }

            // bytheme
            if ($pathinfo === '/recherche-theme') {
                return array (  '_controller' => 'GeneralBundle\\Controller\\GeneralController::bythemeAction',  '_route' => 'bytheme',);
            }

        }

        if (0 === strpos($pathinfo, '/ajax')) {
            if (0 === strpos($pathinfo, '/ajax/get')) {
                // AJAXgetquizzbytheme
                if ($pathinfo === '/ajax/getquizzbytheme') {
                    return array (  '_controller' => 'GeneralBundle\\Controller\\AJAXController::bytheme_getquizzbythemeAction',  '_route' => 'AJAXgetquizzbytheme',);
                }

                // AJAXgettheme
                if ($pathinfo === '/ajax/gettheme') {
                    return array (  '_controller' => 'GeneralBundle\\Controller\\AJAXController::bytheme_getthemeAction',  '_route' => 'AJAXgettheme',);
                }

            }

            // AJAXreturntheme
            if ($pathinfo === '/ajax/returntheme') {
                return array (  '_controller' => 'GeneralBundle\\Controller\\AJAXController::bytheme_returnthemeAction',  '_route' => 'AJAXreturntheme',);
            }

        }

        if (0 === strpos($pathinfo, '/u/mes')) {
            // myquizz
            if (0 === strpos($pathinfo, '/u/mesquizz') && preg_match('#^/u/mesquizz(?:(?P<errorid>[^/\\-]++)(?:\\-(?P<errorstat>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'myquizz')), array (  '_controller' => 'GeneralBundle\\Controller\\GeneralController::myquizzAction',  'errorid' => 0,  'errorstat' => 0,));
            }

            // myresults
            if ($pathinfo === '/u/mesresultats') {
                return array (  '_controller' => 'GeneralBundle\\Controller\\GeneralController::myresultsAction',  '_route' => 'myresults',);
            }

            // myquizzteddy
            if ($pathinfo === '/u/mesquizz2') {
                return array (  '_controller' => 'GeneralBundle\\Controller\\GeneralController::TeddymyquizzAction',  '_route' => 'myquizzteddy',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
