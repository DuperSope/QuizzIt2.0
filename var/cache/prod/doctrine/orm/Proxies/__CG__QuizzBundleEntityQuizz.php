<?php

namespace Proxies\__CG__\QuizzBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Quizz extends \QuizzBundle\Entity\Quizz implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'id', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'name', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'description', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'userDescription', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'theme', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'back', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'tag', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'rate', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'nbRate', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'done', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'user', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'questions', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'nbQuestion', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'date', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'private', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'deleted'];
        }

        return ['__isInitialized__', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'id', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'name', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'description', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'userDescription', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'theme', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'back', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'tag', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'rate', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'nbRate', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'done', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'user', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'questions', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'nbQuestion', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'date', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'private', '' . "\0" . 'QuizzBundle\\Entity\\Quizz' . "\0" . 'deleted'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Quizz $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserDescription($userDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserDescription', [$userDescription]);

        return parent::setUserDescription($userDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserDescription', []);

        return parent::getUserDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setBack($back)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBack', [$back]);

        return parent::setBack($back);
    }

    /**
     * {@inheritDoc}
     */
    public function getBack()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBack', []);

        return parent::getBack();
    }

    /**
     * {@inheritDoc}
     */
    public function setTag($tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTag', [$tag]);

        return parent::setTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getTag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTag', []);

        return parent::getTag();
    }

    /**
     * {@inheritDoc}
     */
    public function setRate($rate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRate', [$rate]);

        return parent::setRate($rate);
    }

    /**
     * {@inheritDoc}
     */
    public function getRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRate', []);

        return parent::getRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDone($done)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDone', [$done]);

        return parent::setDone($done);
    }

    /**
     * {@inheritDoc}
     */
    public function getDone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDone', []);

        return parent::getDone();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestions($questions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestions', [$questions]);

        return parent::setQuestions($questions);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestions', []);

        return parent::getQuestions();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbQuestion($nbquestion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbQuestion', [$nbquestion]);

        return parent::setNbQuestion($nbquestion);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbQuestion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbQuestion', []);

        return parent::getNbQuestion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addQuestion(\QuizzBundle\Entity\Question $question)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addQuestion', [$question]);

        return parent::addQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function removeQuestion(\QuizzBundle\Entity\Question $question)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeQuestion', [$question]);

        return parent::removeQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrivate($private)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrivate', [$private]);

        return parent::setPrivate($private);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrivate', []);

        return parent::getPrivate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addDone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDone', []);

        return parent::addDone();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbRate($nbRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbRate', [$nbRate]);

        return parent::setNbRate($nbRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbRate', []);

        return parent::getNbRate();
    }

    /**
     * {@inheritDoc}
     */
    public function addRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRate', []);

        return parent::addRate();
    }

    /**
     * {@inheritDoc}
     */
    public function calculRate($rate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculRate', [$rate]);

        return parent::calculRate($rate);
    }

    /**
     * {@inheritDoc}
     */
    public function recalculRate($rate, $previousrate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'recalculRate', [$rate, $previousrate]);

        return parent::recalculRate($rate, $previousrate);
    }

    /**
     * {@inheritDoc}
     */
    public function setTheme(\GeneralBundle\Entity\Theme $theme = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTheme', [$theme]);

        return parent::setTheme($theme);
    }

    /**
     * {@inheritDoc}
     */
    public function getTheme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTheme', []);

        return parent::getTheme();
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

}
