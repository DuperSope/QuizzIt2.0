<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Form\UserDescriptionType;


class UserController extends Controller
{

    public function publicProfileAction($userid) {
        $em = $this->getDoctrine()->getManager();
        $r_user = $em->getRepository("UserBundle:User");
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");
        
        $user = $r_user->findOneById($userid);
        if(count($user) == 0) {
            return $this->render('GeneralBundle:Error:access-404.html.twig', array('code' => 2));
        }
        
        $quizz_array = $r_quizz->findBy(array("user" => $user, "deleted" => 0, "private" => 0));
        return $this->render('UserBundle::publicprofile.html.twig', array(
            'user' => $user,
            'quizzs' => $quizz_array,
        ));
    }
    
    public function privateProfileAction($userid) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $request = $this->container->get('request_stack')->getCurrentRequest();

        if($user == "anon.") {
            return $this->render('GeneralBundle:Error:access-right.html.twig');
        }
        if($user->getId() != $userid) {
            return $this->redirect($this->generateUrl("profile", array("userid" => $userid)));
        }
        
        $form = $this->createForm(UserDescriptionType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
        }
        
        return $this->render('UserBundle::privateprofile.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }
    
    
    
}
