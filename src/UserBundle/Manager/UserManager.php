<?php
// src/UserBundle/Manager/UserManager.php

namespace UserBundle\Manager;

class UserManager
{

    public function addUser($form, $em, $user, $factory) 
    {
        

        $r_user = $em->getRepository('UserBundle:User');
        $verify_user = $r_user->findOneByUsername($user->getUsername());
        if(count($verify_user) == 1 ){
            return "Pseudo déjà utilisé, veuillez en choisir un autre.";
        } else if($user->getPassword() != $user->getPasswordVerify()) {
            return "Les mots de passe entrés ne correspondent pas.";
        }
        
        // Chaîne aléatoire pour le salt
        $randomstring = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
        $user->setSalt($randomstring);  

        // Encodage password
        $encoder = $factory->getEncoder($user);
        $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
        $user->setPassword($password);
        $user->setIsActive(0);
        $user->setNbQuizz(0);

        $user->setRoles(array("ROLE_USER"));
        $user = $form->getData();
        $em->persist($user);
        $em->flush();
        
    }
    
    public function setDescription($form, $em) {
        
        $user = $form->getData();
        
        $em->flush();
    }
    
    public function changePassword($user, $request, $factory, $em) {
        $encoder = $factory->getEncoder($user);
        
        $oldpass = $request->request->get("oldpass");
        $newpass = $request->request->get("newpass");
        $newpassverif = $request->request->get("newpassverif");
        
        if($user->getPassword() == $encoder->encodePassword($oldpass, $user->getSalt())) {
            if($newpass == $newpassverif) {
                $newpassword = $encoder->encodePassword($newpass, $user->getSalt());
                $user->setPassword($newpassword);
                $em->flush();
                
                return 1;
            } else {
                return "Les deux nouveaux mots de passe ne correspondent pas.";
            }
        } else {
            return "Mot de passe incorrect.";
        }
    }
    
}