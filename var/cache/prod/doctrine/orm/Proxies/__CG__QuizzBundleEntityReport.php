<?php

namespace Proxies\__CG__\QuizzBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Report extends \QuizzBundle\Entity\Report implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'id', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'nbReport', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'quizz', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'allNbDone', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'interNbDone', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'allNbRate', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'interNbRate', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'rate', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'interRate', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'date', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'dateInterval', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'popScore', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'valid'];
        }

        return ['__isInitialized__', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'id', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'nbReport', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'quizz', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'allNbDone', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'interNbDone', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'allNbRate', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'interNbRate', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'rate', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'interRate', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'date', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'dateInterval', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'popScore', '' . "\0" . 'QuizzBundle\\Entity\\Report' . "\0" . 'valid'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Report $proxy) {
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
    public function setNbReport($nbReport)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbReport', [$nbReport]);

        return parent::setNbReport($nbReport);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbReport()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbReport', []);

        return parent::getNbReport();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllNbDone($allNbDone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllNbDone', [$allNbDone]);

        return parent::setAllNbDone($allNbDone);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllNbDone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllNbDone', []);

        return parent::getAllNbDone();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterNbDone($interNbDone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterNbDone', [$interNbDone]);

        return parent::setInterNbDone($interNbDone);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterNbDone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterNbDone', []);

        return parent::getInterNbDone();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllNbRate($allNbRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllNbRate', [$allNbRate]);

        return parent::setAllNbRate($allNbRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllNbRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllNbRate', []);

        return parent::getAllNbRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterNbRate($interNbRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterNbRate', [$interNbRate]);

        return parent::setInterNbRate($interNbRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterNbRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterNbRate', []);

        return parent::getInterNbRate();
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
    public function setInterRate($interRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterRate', [$interRate]);

        return parent::setInterRate($interRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterRate', []);

        return parent::getInterRate();
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
    public function setInterval($interval)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterval', [$interval]);

        return parent::setInterval($interval);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterval()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterval', []);

        return parent::getInterval();
    }

    /**
     * {@inheritDoc}
     */
    public function setPopScore($popScore)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPopScore', [$popScore]);

        return parent::setPopScore($popScore);
    }

    /**
     * {@inheritDoc}
     */
    public function getPopScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPopScore', []);

        return parent::getPopScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuizz(\QuizzBundle\Entity\Quizz $quizz = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuizz', [$quizz]);

        return parent::setQuizz($quizz);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuizz()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuizz', []);

        return parent::getQuizz();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateInterval($dateInterval)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateInterval', [$dateInterval]);

        return parent::setDateInterval($dateInterval);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateInterval()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateInterval', []);

        return parent::getDateInterval();
    }

    /**
     * {@inheritDoc}
     */
    public function calcRate($rates)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calcRate', [$rates]);

        return parent::calcRate($rates);
    }

    /**
     * {@inheritDoc}
     */
    public function setValid($valid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValid', [$valid]);

        return parent::setValid($valid);
    }

    /**
     * {@inheritDoc}
     */
    public function getValid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValid', []);

        return parent::getValid();
    }

}