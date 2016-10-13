<?php
// src/QuizzBundle/Manager/RateManager.php

namespace QuizzBundle\Manager;


class RateManager
{
    
    public function addRate($rateform, $quizz, $user, $em) {
        $rate = $rateform->getData();
        
        $rate->setUser($user);
        $rate->setQuizz($quizz);
        $rate->setDate(new \DateTime());
        $rate->setComment(null);
        
        $quizz->addRate();
        $quizz->calculRate($rate->getRate());
        
        $em->persist($rate);
        $em->flush();
        
    }
    
    public function updateRate($previousRate, $rateform, $quizz, $em) {
        $rate = $rateform->getData();
        
        $rate->setDate(new \DateTime());
        
        $quizz->recalculRate($rate->getRate(), $previousRate);
        
        $em->flush();
    }
    
}