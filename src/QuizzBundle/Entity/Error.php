<?php

namespace QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Error
 *
 * @ORM\Table(name="error")
 * @ORM\Entity(repositoryClass="QuizzBundle\Repository\ErrorRepository")
 */
class Error
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
     * 
     * @ORM\ManyToOne(targetEntity="QuizzBundle\Entity\Question")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    private $question;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_target_id", referencedColumnName="id")
     */
    private $userTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text", nullable=true)
     */
    private $answer;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;
    
    /**
     * @var string
     *
     * @ORM\Column(name="str_status", type="string", length=50)
     */
    private $strStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \Datetime
     *
     * @ORM\Column(name="answerDate", type="datetime", nullable=true)
     */
    private $answerDate;


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
     * @return Error
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
     * Set user
     *
     * @param integer $user
     *
     * @return Error
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
     * Set content
     *
     * @param string $content
     *
     * @return Error
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set answer
     *
     * @param string $answer
     *
     * @return Error
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
     * Set status
     *
     * @param integer $status
     *
     * @return Error
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Error
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
     * Set answerDate
     *
     * @param string $answerDate
     *
     * @return Error
     */
    public function setAnswerDate($answerDate)
    {
        $this->answerDate = $answerDate;

        return $this;
    }

    /**
     * Get answerDate
     *
     * @return string
     */
    public function getAnswerDate()
    {
        return $this->answerDate;
    }

    /**
     * Set strStatus
     *
     * @param int $status
     *
     * @return Error
     */
    public function setStrStatus()
    {
        $status_list = array(   1 =>    "En attente",
                                2 =>    "Lu et corrigé",
                                3 =>    "Non-valable");
        
        $this->strStatus = $status_list[$this->getStatus()];

        return $this;
    }

    /**
     * Get strStatus
     *
     * @return string
     */
    public function getStrStatus()
    {
        return $this->strStatus;
    }

    /**
     * Set userTarget
     *
     * @param \UserBundle\Entity\User $userTarget
     *
     * @return Error
     */
    public function setUserTarget(\UserBundle\Entity\User $userTarget = null)
    {
        $this->userTarget = $userTarget;

        return $this;
    }

    /**
     * Get userTarget
     *
     * @return \UserBundle\Entity\User
     */
    public function getUserTarget()
    {
        return $this->userTarget;
    }
}
