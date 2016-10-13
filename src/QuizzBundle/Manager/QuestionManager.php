<?php
// src/QuizzBundle/Manager/QuestionManager.php

namespace QuizzBundle\Manager;

class QuestionManager
{

    public function createQuestion($request, $question, $i, $quizz) {
                
        if($question->getQuestionType() == 1) {          // Question TEXTE
            $question->setQuestionType(1);
            $question->setAnswer($question->getAnswer());
            $question->setQuestion($question->getQuestion());
        } else if($question->getQuestionType() == 2) {   // Question QCM
            $question->setQuestionType(2);
            
            $ii = 1;
            $answer = "";
            while(null !== $request->request->get("QCM_Q".$i."answer".$ii)) {
                if(null !== $request->request->get("QCM_Q".$i."istrue".$ii)) {
                    $answer .= "{T}";
                }
                
                $answer .= $request->request->get("QCM_Q".$i."answer".$ii);
                $answer .= "[||]";
                
                $ii++;
            }
            
            $question->setAnswer($answer);
        } else {
            $question->setQuizz(null);
            $quizz->removeQuestion($question);
        }
        
        $question->setDate(new \DateTime());
        $question->setDeleted(false);
        
        
    }
    
    
    public function setId($question, $quizz) {
        $question->setQuizz($quizz);
        
        if($question->getQuizz() == null) {
            $question->setDeleted(true);
        } else {
            $question->setDeleted(false);
        }
    }
    
}