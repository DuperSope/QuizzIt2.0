<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;
use UserBundle\Form\UserType;

class SecurityController extends Controller
{

    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // La raison de l'arrivée sur la page de login
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $previousUrl = $request->headers->get('referer');
        if(strstr($previousUrl, "quizz/preview")) {
            $alert = "Vous devez être connecté pour effectuer un Quizz.";
        } else {
            $alert = null;
        }
        
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'UserBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
                'alert'         => $alert,
            )
        );
    }
    
    
    public function registerAction()
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $request = $this->container->get('request_stack')->getCurrentRequest();
        
        
        $form->handleRequest($request);
        $errormessage = null;
        if ($form->isSubmitted() && $form->isValid()) {

            $manager = $this->container->get('usermanager');
            $em = $this->getDoctrine()->getEntityManager();
            $factory = $this->get('security.encoder_factory');

            $errormessage = $manager->addUser($form, $em, $user, $factory);
            if($errormessage == null) {
                return $this->redirect($this->generateUrl("login"));
            }
        }
        
        return $this->render('UserBundle:Security:register.html.twig',
                array(
                    'error' => $errormessage,
                    'form' => $form->createView(),
                ));
    }
    
    public function changePasswordAction() {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $factory = $this->get('security.encoder_factory');
        
        if($request->getMethod() == "POST") {
            $manager = $this->container->get('usermanager');
            $response = $manager->changepassword($user, $request, $factory, $em);
            
            if($response == 1) {
                return $this->render("UserBundle:Security:changepassword.html.twig", array(
                    'success' => $response,
                ));
            } else {
                return $this->render("UserBundle:Security:changepassword.html.twig", array(
                    'error' => $response,
                ));
            }
            
            
        }
        
        return $this->render("UserBundle:Security:changepassword.html.twig");
    }
    

}
