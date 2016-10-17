<?php
// src/QuizzBundle/Command/ReportCommand.php
namespace QuizzBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;


class ReportCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
        // the name of the command (the part after "bin/console")
        ->setName('report:update')

        // the short description shown while running "php bin/console list"
        ->setDescription('Creates new reports for all Quizz')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp("You have nothing to do !");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $r_quizz = $em->getRepository("QuizzBundle:Quizz");
        $quizz_array = $r_quizz->findBy(array("deleted" => 0, "private" => 0));
        
        $reportmanager = $this->getContainer()->get('reportmanager');
        foreach($quizz_array as $quizz) {
            // Création d'un report
            $output->writeln("Creating report for Quizz n°".$quizz->getId()." (".$quizz->getName().")");
            $reportmanager->addReport($quizz, $em, $output);
        }
        $em->flush();
        $output->writeln("Report's generation ended !");
    }
}