<?php

namespace GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use QuizzBundle\Entity\Quizz;
use QuizzBundle\Entity\Question;
use QuizzBundle\Form\QuizzType;

class GeneralController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");
        $r_report = $em->getRepository("QuizzBundle:Report");
        
        $quizz_pop = $r_report->findBy(array("valid" => 1), array('popScore' => 'desc'), 15); // TODO?
        
        $quizz_new = $r_quizz->findBy(array("deleted" => 0, "private" => 0), array('id' => 'desc'), 15); // TODO?
        
        return $this->render('GeneralBundle::index.html.twig', array(
            "quizzpop" => $quizz_pop,
            "quizznew" => $quizz_new,
        ));
    }
    
    
    public function searchAction()
    {
        
        
        
        return $this->render('GeneralBundle::search.html.twig', array(
            
        ));
    }
    
    public function bythemeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $r_theme = $em->getRepository('GeneralBundle:Theme');
        
        $themes = $r_theme->findBy(array("level" => 0), array('id' => 'asc'));
        
        
        return $this->render('GeneralBundle::bytheme.html.twig', array(
            'themes' => $themes,
        ));
    }
    
    
    public function myquizzAction($errorid, $errorstat)
    {
        // Récupération de l'ORM, request, user et repositorys
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $r_error = $em->getRepository("QuizzBundle:Error");   
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");
        $r_theme = $em->getRepository("GeneralBundle:Theme");

        // Récupération des thèmes pour la création de Quizz
        $themes = $r_theme->findBy(array("level" => 0));
        
        // Création du form Quizz et des questions
        $quizz = new Quizz;
        $formquizz = $this->createForm(QuizzType::class, $quizz);
        
        // SI un quizz a été créé :
        $formquizz->handleRequest($request);
        if ($formquizz->isSubmitted() && $formquizz->isValid()) {
            $manager = $this->container->get('quizzmanager');
            $manager->addQuizz($formquizz, $request, $quizz, new Question, $em, $user);
            
            return $this->redirectToRoute('myquizz');
        }
        
        // SI une erreur a été traitée (validée ou pas)
        if($errorid != 0 && $errorstat != 0) {
            if($errorstat == 3 || $errorstat == 2) {
                $error = $r_error->findOneById($errorid);
            
                $manager = $this->container->get('errormanager');
                $manager->setStatus($error, $em, $errorstat);
            }
        }
        
        // Récupération de Mes Quizz
        $quizz_array = $r_quizz->findBy(array('user' => $user, 'deleted' => 0),
                array('id' => 'desc')
                );
        
        // Récupération des reports d'erreurs
        $active_errors = $r_error->findBy(array('userTarget' => $user, 'status' => 1), array('date' => 'desc'));
       
        
        return $this->render('GeneralBundle:UserZone:myquizz.html.twig', array(
            'quizzarray' => $quizz_array,
            'form' => $formquizz->createView(),
            'errors' => $active_errors,
            'themes' => $themes,
        ));
    }
    
    
    public function myresultsAction()
    {
        // Récupération de l'ORM, user et repository
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $r_error = $em->getRepository("QuizzBundle:Error");
        
        // Récupération de Mes Résultats
        $r_quizzdone = $em->getRepository("QuizzBundle:QuizzDone");
        $quizzdone_array = $r_quizzdone->findBy(array('user' => $user->getId()),
                array('id' => 'desc'),
                1000,
                0
                );
        
        // Récupération des erreurs signalées
        $reports = $r_error->findBy(array('user' => $user), array('date' => 'desc'));
        
        return $this->render('GeneralBundle:UserZone:myresults.html.twig', array(
            'quizzdones' => $quizzdone_array,
            'reports' => $reports
        ));
    }
    
    
    public function TeddymyquizzAction()
    {
        // Récupération de l'ORM et de la request et de la session + données user
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        
        // Création du form Quizz et des questions
        $quizz = new Quizz;
        $formquizz = $this->createForm(QuizzType::class, $quizz);
        
        // Récupération de Mes Quizz
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");
        $quizz_array = $r_quizz->findBy(array('user' => $user->getId()),
                array('id' => 'desc')
                );
        
        // SI un quizz a été créé :
        $formquizz->handleRequest($request);
        if ($formquizz->isSubmitted() && $formquizz->isValid()) {
            $manager = $this->container->get('quizzmanager');
            $manager->addQuizz($formquizz, $request, $quizz, new Question, $em, $user);
            
            return $this->redirectToRoute('myquizz');
        }
        
        return $this->render('GeneralBundle:UserZone:teddymyquizz.html.twig', array(
            'quizzarray' => $quizz_array,
            'form' => $formquizz->createView(),
        ));
    }
}
