<?php

namespace QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use QuizzBundle\Entity\QuestionDone;
use QuizzBundle\Entity\Quizz;

/**
 * QuizzDone
 *
 * @ORM\Table(name="quizz_done")
 * @ORM\Entity(repositoryClass="QuizzBundle\Repository\QuizzDoneRepository")
 */
class QuizzDone
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
     * @ORM\ManyToOne(targetEntity="Quizz")
     */
    private $quizz;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="QuestionDone", mappedBy="quizzDone",  cascade={"persist", "remove"})
     *
     */
    private $questiondone;

    /**
     * @var \Integer
     *
     * @ORM\Column(name="percentage", type="integer")
     */
    private $percentage;
    
    /**
     * @var \Integer
     *
     * @ORM\Column(name="nb_valid_answer", type="integer")
     */
    private $nbValidAnswer;

    /**
     * @var \Integer
     *
     * @ORM\Column(name="nb_answer", type="integer")
     */
    private $nbAnswer;
    
    /**
     * @var \Integer
     *
     * @ORM\Column(name="nb_do", type="integer")
     */
    private $nbDo;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set quizz
     *
     * @param integer $quizz
     *
     * @return QuizzDone
     */
    public function setQuizz($quizz)
    {
        $this->quizz = $quizz;

        return $this;
    }

    /**
     * Get quizz
     *
     * @return int
     */
    public function getQuizz()
    {
        return $this->quizz;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return QuizzDone
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set questiondone
     *
     * @param integer $questiondone
     *
     * @return QuizzDone
     */
    public function setQuestiondone($questiondone)
    {
        $this->questiondone = $questiondone;

        return $this;
    }

    /**
     * Get questiondone
     *
     * @return int
     */
    public function getQuestiondone()
    {
        return $this->questiondone;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return QuizzDone
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questiondone = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add questiondone
     *
     * @param \QuizzIt\QuizzBundle\Entity\QuestionDone $questiondone
     * @return QuizzDone
     */
    public function addQuestiondone(\QuizzBundle\Entity\QuestionDone $questiondone)
    {
        $this->questiondone[] = $questiondone;

        return $this;
    }

    /**
     * Remove questiondone
     *
     * @param \QuizzIt\QuizzBundle\Entity\QuestionDone $questiondone
     */
    public function removeQuestiondone(\QuizzBundle\Entity\QuestionDone $questiondone)
    {
        $this->questiondone->removeElement($questiondone);
    }

    /**
     * Set nbQuestion
     *
     * @param integer $nbQuestion
     *
     * @return QuizzDone
     */
    public function setNbQuestion($nbQuestion)
    {
        $this->nbQuestion = $nbQuestion;

        return $this;
    }

    /**
     * Get nbQuestion
     *
     * @return integer
     */
    public function getNbQuestion()
    {
        return $this->nbQuestion;
    }

    /**
     * Set nbValidAnswer
     *
     * @param integer $nbValidAnswer
     *
     * @return QuizzDone
     */
    public function setNbValidAnswer($nbValidAnswer)
    {
        $this->nbValidAnswer = $nbValidAnswer;

        return $this;
    }

    /**
     * Get nbValidAnswer
     *
     * @return integer
     */
    public function getNbValidAnswer()
    {
        return $this->nbValidAnswer;
    }

    /**
     * Set percentage
     *
     * @param integer $percentage
     *
     * @return QuizzDone
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return integer
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Set nbDo
     *
     * @param integer $nbDo
     *
     * @return QuizzDone
     */
    public function setNbDo($nbDo)
    {
        $this->nbDo = $nbDo;

        return $this;
    }

    /**
     * Get nbDo
     *
     * @return integer
     */
    public function getNbDo()
    {
        return $this->nbDo;
    }

    /**
     * Set nbAnswer
     *
     * @param integer $nbAnswer
     *
     * @return QuizzDone
     */
    public function setNbAnswer($nbAnswer)
    {
        $this->nbAnswer = $nbAnswer;

        return $this;
    }

    /**
     * Get nbAnswer
     *
     * @return integer
     */
    public function getNbAnswer()
    {
        return $this->nbAnswer;
    }
}
