<?php
// src/QuizzBundle/Manager/ReportManager.php

namespace QuizzBundle\Manager;

use QuizzBundle\Entity\Report;



class ReportManager
{
    
    public function addReport($quizz, $em) {
        $report_repository = $em->getRepository("QuizzBundle:Report");
        $rate_repository = $em->getRepository("QuizzBundle:Rate");
        $done_repository = $em->getRepository("QuizzBundle:QuizzDone");
        
        $last_report = $report_repository->findOneBy(array("quizz" => $quizz, "valid" => 1));
        $report = new Report();
        
        // Comptage des done
        $count = $done_repository->countbetween($quizz->getId(), $last_report->getDate(), new \DateTime);
        // Récupération des rate
        $rates = $rate_repository->getbetween($quizz->getId(), $last_report->getDate(), new \DateTime);
        
        
        $report->setNbReport($last_report->getNbReport() +1);
        $report->setQuizz($quizz);
        $report->setAllNbDone($quizz->getDone());
        $report->setInterNbDone($report->getAllNbDone() - $last_report->getAllNbDone());
        $report->setAllNbRate($quizz->getNbRate());
        $report->setInterNbRate($report->getAllNbRate() - $last_report->getAllNbRate());
        $report->setRate($quizz->getRate());
        $report->calcRate($rates);
        $report->setDate(new \DateTime);
        $interval = 0; // TODO
        $report->setDateInterval(new \DateTime);
        $report->setValid(1);
        $last_report->setValid(0);
        
        if($report->getNbReport() > 1) {
            if($last_report->getInterNbDone() == 0 || $count == 0) {
                $popdone = 0;
            } else {
                $popdone = ($report->getInterNbDone()/$last_report->getInterNbDone())*($report->getInterNbDone()/$count);
            }
            if($report->getInterRate() == 0) {
                $poprate = 0;
            } else {
                $poprate = ($report->getInterRate()/5);
            }
            $popScore = ($popdone + $poprate)/2*100;
            $report->setPopScore($popScore);
        } else {
            $report->setPopScore(0);
        }
        
        $em->persist($last_report);
        $em->persist($report);
        
        return($rates);
    }
    
    
    
}