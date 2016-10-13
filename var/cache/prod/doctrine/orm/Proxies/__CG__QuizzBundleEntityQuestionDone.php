<?php

namespace Proxies\__CG__\QuizzBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class QuestionDone extends \QuizzBundle\Entity\QuestionDone implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'QuizzBundle\\Entity\\QuestionDone' . "\0" . 'id', '' . "\0" . 'QuizzBundle\\Entity\\QuestionDone' . "\0" . 'question', '' . "\0" . 'QuizzBundle\\Entity\\QuestionDone' . "\0" . 'answer', '' . "\0" . 'QuizzBundle\\Entity\\QuestionDone' . "\0" . 'answerValid', '' . "\0" . 'QuizzBundle\\Entity\\QuestionDone' . "\0" . 'quizzDone'];
        }

        return ['__isInitialized__', '' . "\0" . 'QuizzBundle\\Entity\\QuestionDone' . "\0" . 'id', '' . "\0" . 'QuizzBundle\\Entity\\QuestionDone' . "\0" . 'question', '' . "\0" . 'QuizzBundle\\Entity\\QuestionDone' . "\0" . 'answer', '' . "\0" . 'QuizzBundle\\Entity\\QuestionDone' . "\0" . 'answerValid', '' . "\0" . 'QuizzBundle\\Entity\\QuestionDone' . "\0" . 'quizzDone'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (QuestionDone $proxy) {
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
    public function setQuestion($question)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestion', [$question]);

        return parent::setQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestion', []);

        return parent::getQuestion();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnswer($answer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnswer', [$answer]);

        return parent::setAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswer', []);

        return parent::getAnswer();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnswerValid($answerValid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnswerValid', [$answerValid]);

        return parent::setAnswerValid($answerValid);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswerValid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswerValid', []);

        return parent::getAnswerValid();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuizzdone(\QuizzBundle\Entity\QuizzDone $quizzDone = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuizzdone', [$quizzDone]);

        return parent::setQuizzdone($quizzDone);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuizzdone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuizzdone', []);

        return parent::getQuizzdone();
    }

}
