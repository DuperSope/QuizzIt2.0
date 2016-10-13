<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GeneralBundle\Form\ThemeType;
use GeneralBundle\Form\ThemeTypeUpdate;
use GeneralBundle\Entity\Theme;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render("AdminBundle::index.html.twig");
    }
    
    public function themeAction() {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        $theme_r = $em->getRepository("GeneralBundle:Theme");
                        
        $themes = $theme_r->findBy(array("level" => 0));
        
        $form = $this->createForm(ThemeType::class);
        // Si un thème a été ajouté
        if($request->isMethod('POST')) {
            
            $form->handleRequest($request);
            $manager = $this->container->get('thememanager');
            $manager->addTheme($form, $em, $theme_r);
            
            return $this->redirectToRoute('admin_theme');
        }
        
        
        return $this->render("AdminBundle::theme.html.twig", array(
            "themes" => $themes,
            "form" => $form->createView(),
        ));
    }
    
    public function updateThemeAction($themeid) {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        $theme_r = $em->getRepository("GeneralBundle:Theme");
        
        $theme = $theme_r->findOneById($themeid);
        if($theme == null) {    // Si le thème à modifier est inexistant
            return $this->render("GeneralBundle:Error:access-404.html.twig", array(
                "code" => 4,
            ));
        }
        
        $form = $this->createForm(ThemeTypeUpdate::class, $theme);
        
        // Si un thème a été ajouté
        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            $manager = $this->container->get('thememanager');
            $manager->updateTheme($form, $em);
            
            return $this->redirectToRoute('admin_theme');
        }
        
        
        return $this->render("AdminBundle::updatetheme.html.twig", array(
            "form" => $form->createView(),
            "theme" => $theme,
        ));
        
    }
    
}
