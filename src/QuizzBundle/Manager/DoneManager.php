<?php
// src/QuizzBundle/Manager/DoneManager.php

namespace QuizzBundle\Manager;

class DoneManager
{

    public function addQuizzDone($formquizzdone, $quizzdone, $questiondone, $quizz, $em, $user, $r_quizzdone) {
        $quizzdone = $formquizzdone->getData();
        
        $i = 0;
        $nbValid = 0;
        foreach($quizz->getQuestions() as $question) {
            $questiondone = $quizzdone->getQuestionDone()[$i];
            $valid = $this->addQuestionDone($question, $questiondone);
            
            if($valid == 1) {
                $nbValid ++;
            }
            $i++;
        }
        
        $quizzdone->setNbValidAnswer($nbValid);
        $quizzdone->setNbAnswer($quizz->getNbQuestion());
        $quizzdone->setPercentage(round($nbValid/count($quizz->getQuestions())*100, 0, PHP_ROUND_HALF_UP)); // Pourcentage arrondi à l'entier supérieur
        $quizzdone->setUser($user);
        $quizzdone->setQuizz($quizz);
        $quizzdone->setDate(new \DateTime());
        
        // Vérification du nbDo
        $alreadydone = $r_quizzdone->findBy(
                        array('quizz' => $quizz->getId(),
                                'user' => $user->getId())
                    );
        $quizzdone->setNbDo(count($alreadydone)+1);
        
        $r_quizzdone = $em->getRepository("QuizzBundle:QuizzDone");
        $quizzdone_verification = $r_quizzdone->findBy(array('quizz' => $quizz, 'user' => $user));
        if(count($quizzdone_verification) == 0) {
            $quizz->addDone();
        }
        
        // Persistance du QuizzDone
        $em->persist($quizzdone);
        $em->flush();
        
        foreach($quizzdone->getQuestionDone() as $questiondone) {
            $this->setQuestionDoneId($questiondone, $quizzdone);
            $em->persist($questiondone);
        }
        // Persistance du Quizz avec les QuestionId
        $em->persist($quizz);
        $em->flush();
        
        return $quizzdone->getId();
    }
    
    public function addQuestionDone($question, $questiondone) {
        
        if($question->getQuestionType() == 1) {
            if($questiondone->getAnswer() == null) {
                $questiondone->setAnswer("Pas de réponse.");
                $questiondone->setAnswerValid(0);
            }
            else if(strtolower($question->getAnswer()) == strtolower($questiondone->getAnswer())) {
                $questiondone->setAnswerValid(1);
            } else {
                $questiondone->setAnswerValid(0);
            }
        } else if($question->getQuestionType() == 2) {
            $validAnswer = explode("{T}", $question->getAnswer());
            $validAnswer = explode("[||]", $validAnswer[1]);
            $validAnswer = $validAnswer[0];
            
            if($questiondone->getAnswer() == null) {
                $questiondone->setAnswerValid(0);
            }
            else if($validAnswer == $questiondone->getAnswer()) {
                $questiondone->setAnswerValid(1);
            } else {
                $questiondone->setAnswerValid(0);
            }
            
        }
        
        $questiondone->setQuestion($question->getId());
        
        if($questiondone->getAnswerValid() == 1) {
            return 1;
        }
    }
    
    
        
    public function setQuestionDoneId($questiondone, $quizzdone) {
        $questiondone->setQuizzDone($quizzdone);
    }
}