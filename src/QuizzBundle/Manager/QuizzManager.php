<?php
// src/QuizzBundle/Manager/QuizzManager.php

namespace QuizzBundle\Manager;

class QuizzManager
{
    protected $questionmanager;
    
    public function __construct($questionmanager) {
        $this->questionmanager = $questionmanager;
    }

    public function addQuizz($formquizz, $request, $quizz, $question, $em, $user) {
        
        $quizz = $formquizz->getData();
        
        
        $i = 0;
        foreach($quizz->getQuestions() as $question) {
            $this->questionmanager->createQuestion($request, $question, $i, $quizz);
            $i ++;
        }
        
        $quizz->setDone(0);
        $quizz->setUser($user);
        $quizz->setDate(new \DateTime());
//        $quizz->setStrLevel();
//        $quizz->setStrTopic();
        $quizz->setNbQuestion($i);
        $quizz->setNbRate(0);
        $quizz->setDeleted(false);
        $user->nbQuizzAdd();
        
        // Persistance du Quizz
        $em->persist($quizz);
        $em->flush();
        
        foreach($quizz->getQuestions() as $question) {
            $this->questionmanager->setId($question, $quizz);
            $em->persist($question);
        }
        // Persistance du Quizz avec les QuestionId
        $em->persist($quizz);
        $em->flush();
        
    }
    
    public function updateQuizz($formquizz, $request, $quizz, $question, $user, $em) {
        $newquizz = $formquizz->getData();
        
        $i = 0;
        foreach($newquizz->getQuestions() as $question) {
            $this->questionmanager->createQuestion($request, $question, $i, $quizz);
            $i ++;
        }
        
        $newquizz->setDate(new \DateTime());
//        $newquizz->setStrLevel();
//        $newquizz->setStrTopic();
//        
        
        $em->flush();
        
        $i = 0;
        foreach($newquizz->getQuestions() as $question) {
            $this->questionmanager->setId($question, $newquizz);
            $em->persist($question);
            $i ++;
        }
        $newquizz->setNbQuestion($i);
        // Persistance du Quizz avec les QuestionId
        $em->flush();
        
    }
    
    public function deleteQuizz($quizz, $user, $em) {
        $quizz->setDeleted(1);
        foreach($quizz->getQuestions() as $question) {
            $question->setDeleted(1);
        }
        $quizz->setDate(new \DateTime());
        $quizz->setStrLevel();
        $quizz->setStrTopic();
        $user->nbQuizzRemove();
        $em->flush();
    }
    
}