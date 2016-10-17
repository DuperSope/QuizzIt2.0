<?php

namespace QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quizz
 *
 * @ORM\Table(name="quizz")
 * @ORM\Entity(repositoryClass="QuizzBundle\Repository\QuizzRepository")
 */
class Quizz implements \JsonSerializable
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="user_description", type="text", nullable=true)
     */
    private $userDescription;
//
//    /**
//     * @var int
//     *
//     * @ORM\Column(name="level", type="integer")
//     */
//    private $level;
//
//    /**
//     * @var int
//     *
//     * @ORM\Column(name="topic", type="integer")
//     */
//    private $topic;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="GeneralBundle\Entity\Theme")
     * @ORM\JoinColumn(name="theme_id", referencedColumnName="id")
     */
    private $theme;

    /**
     * @var bool
     *
     * @ORM\Column(name="back", type="boolean")
     */
    private $back;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="text", nullable=true)
     */
    private $tag;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="float", scale=10, nullable=true)
     */
    private $rate;
        
    /**
     * @var int
     *
     * @ORM\Column(name="nb_rate", type="integer")
     */
    private $nbRate;

    /**
     * @var int
     *
     * @ORM\Column(name="done", type="integer")
     */
    private $done;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="quizz",  cascade={"persist", "remove"})
     *
     */
    private $questions;
    
    /**
     * @var int
     *
     * @ORM\Column(name="nb_question", type="integer")
     */
    private $nbQuestion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="private", type="boolean")
     */
    private $private;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;
    
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="str_level", type="text", nullable=true)
//     */
//    private $strLevel;
//    public function getStrLevel()
//    {
//        return $this->strLevel;
//    }
//    public function setStrLevel() {
//        $level_array = array(0 => "Autre",
//                            1 => "Terminale",
//                            2 => "Première",
//                            3 => "Seconde",
//                            4 => "Troisième",
//                            5 => "Quatrième",
//                            6 => "Cinquième",
//                            7 => "Sixième");
//        $this->strLevel = $level_array[$this->level];
//    }
//    
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="str_topic", type="text", nullable=true)
//     */
//    private $strTopic;
//    public function getStrTopic()
//    {
//        return $this->strTopic;
//    }
//    public function setStrTopic() {
//        $topic_array = array(1 => "Français",
//                            2 => "Maths",
//                            3 => "Physique Chimie",
//                            4 => "SVT",
//                            5 => "Histoire Géographie",
//                            6 => "Anglais",
//                            7 => "Espagnol",
//                            8 => "Italien",
//                            9 => "Allemand",
//                            10 => "Philosophie",
//                            11 => "Autre");  
//        $this->strTopic = $topic_array[$this->topic];
//    }


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
     * Set name
     *
     * @param string $name
     *
     * @return Quizz
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Quizz
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set userDescription
     *
     * @param string $userDescription
     *
     * @return Quizz
     */
    public function setUserDescription($userDescription)
    {
        $this->userDescription = $userDescription;

        return $this;
    }

    /**
     * Get userDescription
     *
     * @return string
     */
    public function getUserDescription()
    {
        return $this->userDescription;
    }

//    /**
//     * Set level
//     *
//     * @param integer $level
//     *
//     * @return Quizz
//     */
//    public function setLevel($level)
//    {
//        $this->level = $level;
//
//        return $this;
//    }
//
//    /**
//     * Get level
//     *
//     * @return int
//     */
//    public function getLevel()
//    {
//        return $this->level;
//    }
//
//    /**
//     * Set topic
//     *
//     * @param integer $topic
//     *
//     * @return Quizz
//     */
//    public function setTopic($topic)
//    {
//        $this->topic = $topic;
//
//        return $this;
//    }
//
//    /**
//     * Get topic
//     *
//     * @return int
//     */
//    public function getTopic()
//    {
//        return $this->topic;
//    }

    /**
     * Set back
     *
     * @param boolean $back
     *
     * @return Quizz
     */
    public function setBack($back)
    {
        $this->back = $back;

        return $this;
    }

    /**
     * Get back
     *
     * @return bool
     */
    public function getBack()
    {
        return $this->back;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return Quizz
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return Quizz
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set done
     *
     * @param integer $done
     *
     * @return Quizz
     */
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get done
     *
     * @return int
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return Quizz
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
     * Set question
     *
     * @param integer $questions
     *
     * @return Quizz
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Get questions
     *
     * @return int
     */
    public function getQuestions()
    {
        return $this->questions;
    }
    
    /**
     * Set nbQuestion
     *
     * @param integer $nbquestion
     *
     * @return Quizz
     */
    public function setNbQuestion($nbquestion)
    {
        $this->nbQuestion = $nbquestion;

        return $this;
    }

    /**
     * Get nbQuestion
     *
     * @return int
     */
    public function getNbQuestion()
    {
        return $this->nbQuestion;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Quizz
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
     * Add question
     *
     * @param \QuizzBundle\Entity\Question $question
     *
     * @return Quizz
     */
    public function addQuestion(\QuizzBundle\Entity\Question $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \QuizzBundle\Entity\Question $question
     */
    public function removeQuestion(\QuizzBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Set private
     *
     * @param boolean $private
     *
     * @return Quizz
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return boolean
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Quizz
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
    
    
        
    
    
    
    public function __toString() {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function addDone() {
        $this->done = $this->done + 1;
    }

    /**
     * Set nbRate
     *
     * @param integer $nbRate
     *
     * @return Quizz
     */
    public function setNbRate($nbRate)
    {
        $this->nbRate = $nbRate;

        return $this;
    }

    /**
     * Get nbRate
     *
     * @return integer
     */
    public function getNbRate()
    {
        return $this->nbRate;
    }
    
    public function addRate() {
        $this->nbRate = $this->nbRate + 1;
    }
    public function calculRate($rate) {
        $sumrate = $this->rate * ($this->nbRate -1);
        $sumrate += $rate;
        
        $this->rate = $sumrate/$this->nbRate;
    }
    public function recalculRate($rate, $previousrate) {
        $sumrate = $this->rate * $this->nbRate;
        $sumrate = $sumrate - $previousrate + $rate;
        
        $this->rate = $sumrate/$this->nbRate;
    }

    /**
     * Set theme
     *
     * @param \GeneralBundle\Entity\Theme $theme
     *
     * @return Quizz
     */
    public function setTheme(\GeneralBundle\Entity\Theme $theme = null)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return \GeneralBundle\Entity\Theme
     */
    public function getTheme()
    {
        return $this->theme;
    }
    
    public function jsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }
}
