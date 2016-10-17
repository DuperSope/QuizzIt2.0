<?php

namespace QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionDone
 *
 * @ORM\Table(name="question_done")
 * @ORM\Entity(repositoryClass="QuizzBundle\Repository\QuestionDoneRepository")
 */
class QuestionDone
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="question", type="integer")
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text")
     */
    private $answer;

    /**
     * @var bool
     *
     * @ORM\Column(name="answer_valid", type="boolean")
     */
    private $answerValid;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="QuizzDone", inversedBy="questiondone")
     * @ORM\JoinColumn(name="quizzdone_id", referencedColumnName="id")
     */
    private $quizzDone;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set question
     *
     * @param integer $question
     *
     * @return QuestionDone
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return int
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set answer
     *
     * @param string $answer
     *
     * @return QuestionDone
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set answerValid
     *
     * @param boolean $answerValid
     *
     * @return QuestionDone
     */
    public function setAnswerValid($answerValid)
    {
        $this->answerValid = $answerValid;

        return $this;
    }

    /**
     * Get answerValid
     *
     * @return bool
     */
    public function getAnswerValid()
    {
        return $this->answerValid;
    }

    /**
     * Set quizzDone
     *
     * @param \QuizzBundle\Entity\QuizzDone $quizzDone
     *
     * @return QuestionDone
     */
    public function setQuizzdone(\QuizzBundle\Entity\QuizzDone $quizzDone = null)
    {
        $this->quizzDone = $quizzDone;

        return $this;
    }

    /**
     * Get quizzDone
     *
     * @return \QuizzBundle\Entity\QuizzDone
     */
    public function getQuizzdone()
    {
        return $this->quizzDone;
    }
}
