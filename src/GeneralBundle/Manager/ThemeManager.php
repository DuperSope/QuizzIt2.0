<?php
// src/GeneralBundle/Manager/ThemeManager.php

namespace GeneralBundle\Manager;

class ThemeManager
{

    public function addTheme($form, $em, $r_theme)
    {        
        $theme = $form->getData();
        
        $theme->setNbQuizz(1); 
    // Mise en place du parent
        $parent = $r_theme->findOneById($theme->getParent());
        $theme->setParent($parent);
        
        $em->persist($theme);
        $em->flush();
    }
    
    public function updateTheme($form, $em)
    {
        $theme = $form->getData();
        $em->persist($theme);
        $em->flush();
    }
            
}