<?php
// src/QuizzBundle/Manager/ErrorManager.php

namespace QuizzBundle\Manager;

class ErrorManager
{

    public function addError($form, $question, $em, $user) {
        $error = $form->getData();
        
        $error->setUserTarget($question->getQuizz()->getUser());
        $error->setQuestion($question);
        $error->setUser($user);
        $error->setStatus(1);
        $error->setStrStatus();
        $error->setDate(new \DateTime());
        
        $em->persist($error);
        $em->flush();
    }
    
    public function setStatus($error, $em, $status) {
        $error->setStatus($status);
        $error->setStrStatus();
        
        $em->flush();
    }
}