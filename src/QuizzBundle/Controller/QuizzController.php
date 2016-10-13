<?php

namespace QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use QuizzBundle\Form\QuizzDoneType;
use QuizzBundle\Form\ErrorType;
use QuizzBundle\Form\QuizzType;
use QuizzBundle\Form\RateType;
use QuizzBundle\Entity\QuizzDone;
use QuizzBundle\Entity\QuestionDone;
use QuizzBundle\Entity\Question;
use QuizzBundle\Entity\Error;
use QuizzBundle\Entity\Rate;

class QuizzController extends Controller
{

    public function previewAction($quizzid) {
        // Récupération de l'em et du repository quizz
        $em = $this->getDoctrine()->getManager();
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");
        $r_rate = $em->getRepository("QuizzBundle:Rate");
        $r_quizzdone = $em->getRepository("QuizzBundle:QuizzDone");
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        
        $quizz = $r_quizz->findOneById($quizzid);
        if(count($quizz) == 0) {
            return $this->render('GeneralBundle:Error:access-404.html.twig', array('code' => 1));
        } if($quizz->getDeleted() == 1) {
            return $this->render('GeneralBundle:Error:access-deleted.html.twig');
        }
        $quizzdone = $r_quizzdone->findBy(array('user' => $user, 'quizz' => $quizz));
        if(count($quizzdone) > 0) { $a_done = 1; } else { $a_done = 0; }
        
        
        $a_rated = 1;                                                           // PARTIE RATE
        $rate = $r_rate->findOneBy(array('user' => $user, 'quizz' => $quizz));
        if(count($rate) == 0) { $rate = new Rate(); $a_rated = 0; }
        $previousrate = $rate->getRate();
        $rateform = $this->createForm(RateType::class, $rate);
        
        $rateform->handleRequest($request);
        if ($rateform->isSubmitted() && $rateform->isValid()) {
            $manager = $this->container->get('ratemanager');
            
            if($a_rated == 0) {
                $manager->addRate($rateform, $quizz, $user, $em);
            } else {
                $manager->updateRate($previousrate, $rateform, $quizz, $em);
            }
        }
        
        $owner = 0;
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) { // Si l'user est connecté
            if($quizz->getUser()->getId() == $user->getId()) { // Et que son ID correspond à celui ayant créé le Quizz
                $owner = 1; // La variable owner transmise au document html est égale à 1
            }
        }
        
        return $this->render('QuizzBundle:Quizz:preview.html.twig', array(
            'quizz' => $quizz,
            'owner' => $owner,
            'adone' => $a_done,
            'arated' => $a_rated,
            'rateform' => $rateform->createView(),
        ));
    }
    
    public function doAction($quizzid) {
        // Récupération de l'em et du repository quizz et de l'user
        $em = $this->getDoctrine()->getManager();
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");
        $r_quizzdone = $em->getRepository("QuizzBundle:QuizzDone");
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        
        $quizz = $r_quizz->findOneById($quizzid);
        if(count($quizz) == 0) {
            return $this->render('GeneralBundle:Error:access-404.html.twig', array('code' => 1));
        } if($quizz->getDeleted() == 1) {
            return $this->render('GeneralBundle:Error:access-deleted.html.twig');
        }
        
        // Création du form Quizzdone et des questiondone
        $quizzdone = new QuizzDone;
        foreach($quizz->getQuestions() as $question) {
            $questiondone = new QuestionDone;
            $questiondone->setQuestion($question->getQuestion());
            $quizzdone->addQuestiondone($questiondone);
        }
        $formquizzdone = $this->createForm(QuizzDoneType::class, $quizzdone);
        
        // SI un quizz a été fait :
        $formquizzdone->handleRequest($request);
        if ($formquizzdone->isSubmitted() && $formquizzdone->isValid()) {
            $manager = $this->container->get('donemanager');
            
            $securityContext = $this->container->get('security.authorization_checker');     // Si l'user est connecté
            if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
                $quizzdone_id = $manager->addQuizzDone($formquizzdone, $quizzdone, $questiondone, $quizz, $em, $user, $r_quizzdone);            
            }  
            return $this->redirect($this->generateUrl("quizz_result", array("quizzdoneid" => $quizzdone_id)));
        }
        
        
        return $this->render('QuizzBundle:Quizz:do.html.twig', array(
            'quizz' => $quizz,
            'formquizzdone' => $formquizzdone->createView()
        ));
    }
    
    public function doDoneAction($quizzdoneid) {
        // Récupération de l'em et du repository quizzdonne/quizz
        $em = $this->getDoctrine()->getManager();
        $r_quizzdone = $em->getRepository("QuizzBundle:QuizzDone");
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");

        $quizzdone = $r_quizzdone->findOneById($quizzdoneid);
        if(count($quizzdone) == 1) {
            $quizz = $r_quizz->findOneById($quizzdone->getQuizz());
        } else {
            return $this->render("GeneralBundle:Error:access-404.html.twig", array(
                'code' => 3,
            ));
        }

        return $this->render('QuizzBundle:Quizz:dodone.html.twig', array(
            'quizzdone' => $quizzdone,
            'quizz'     => $quizz,
        ));
        }
        
    public function modifyAction($quizzid) {
        // Récupération de l'em et du repository quizz et du manager et de la request
        $em = $this->getDoctrine()->getManager();
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        
        $quizz = $r_quizz->findOneById($quizzid);
        $formquizz = $this->createForm(QuizzType::class, $quizz);

        // Récupération des thèmes pour la modification de Quizz
        $r_theme = $em->getRepository("GeneralBundle:Theme");
        $themes = $r_theme->findBy(array("level" => 0));
        
        // SI un quizz a été modifié :
        $formquizz->handleRequest($request);
        if ($formquizz->isSubmitted() && $formquizz->isValid()) {
            $manager = $this->container->get('quizzmanager');
            
            $question = new Question();
            $manager->updateQuizz($formquizz, $request, $quizz, $question, $user, $em);     
            return $this->redirect($this->generateUrl("quizz_preview", array("quizzid" => $quizz->getId())));
        }
        
        
        if($user != $quizz->getUser()) {
            return $this->render('GeneralBundle:Error:access-right.html.twig', array(
                'code' => 1,
            ));
        } else if($quizz->getDeleted() == 1) {
            return $this->render('GeneralBundle:Error:access-deleted.html.twig');
        } else {
            return $this->render('QuizzBundle:Quizz:modify.html.twig', array(
                'quizz' => $quizz,
                'form' => $formquizz->createView(),
                'themes' => $themes,
            ));
        }
        
    }
    
    public function deleteAction($quizzid, $confirm) {
        // Récupération de l'em et du repository quizz et du manager et de la request
        $em = $this->getDoctrine()->getManager();
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        
        $quizz = $r_quizz->findOneById($quizzid);

        
        if ($confirm == 1) {
            $manager = $this->container->get('quizzmanager');
            
            $manager->deleteQuizz($quizz,$user, $em);     
            return $this->redirect($this->generateUrl("quizz_preview", array("quizzid" => $quizz->getId())));
        }
        
        
        if($user != $quizz->getUser()) {
            return $this->render('GeneralBundle:Error:access-right.html.twig', array(
                'code' => 1,
            ));
        } else if($quizz->getDeleted() == 1) {
            return $this->render('GeneralBundle:Error:access-deleted.html.twig');
        } else {
            return $this->render('QuizzBundle:Quizz:delete.html.twig', array(
                'quizz' => $quizz,
                ));
        }
        
    }
    
    public function reporterrorAction($questionid) {
        // Récupération de l'em et du repository question
        $em = $this->getDoctrine()->getManager();
        $r_question = $em->getRepository("QuizzBundle:Question");
        $r_error = $em->getRepository("QuizzBundle:Error");
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $request = $this->container->get('request_stack')->getCurrentRequest();
        
        $question = $r_question->findOneById($questionid);
        $errors = $r_error->findOneByQuestion($question);
        
        
        if(count($errors) > 15) {
            $alreadyreported = 1;
        } else if($r_error->findBy(array('question' => $question, 'user' => $user, 'status' => 1))) {
            $alreadyreported = 2;
        } else {
            $alreadyreported = 0;
        }
        $error = new Error();
        $formerror = $this->createForm(ErrorType::class, $error);
        
        $formerror->handleRequest($request);
        if ($formerror->isSubmitted() && $formerror->isValid()) {
            $manager = $this->container->get('errormanager');
            
            $manager->addError($formerror, $question, $em, $user);
            
            return $this->render('QuizzBundle:Quizz:reporterror.html.twig', array(
            'reported' => 10,
        )); 
        }
       return $this->render('QuizzBundle:Quizz:reporterror.html.twig', array(
            'form' => $formerror->createView(),
            'reported' => $alreadyreported,
            'question' => $question,
        )); 
    }
    
    public function teddypreviewAction($quizzid) {
        // Récupération de l'em et du repository quizz
        $em = $this->getDoctrine()->getManager();
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        
        $owner = 0;
        
        
        $quizz = $r_quizz->findOneById($quizzid);
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) { // Si l'user est connecté
            if($quizz->getUser() == $user->getId()) { // Et que son ID correspond à celui ayant créé le Quizz
                $owner = 1; // La variable owner transmise au document html est égale à 1
            }
        }
        
        return $this->render('QuizzBundle:Quizz:teddypreview.html.twig', array(
            'quizz' => $quizz,
            'owner' => $owner,
        ));
    }
    
    
}
