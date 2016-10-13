<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
