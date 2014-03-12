<?php

namespace Proxies\__CG__\Kronos\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Line extends \Kronos\CoreBundle\Entity\Line implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'id', 'created_on', 'project', 'task_type', 'user', 'line_type', 'datas');
        }

        return array('__isInitialized__', 'id', 'created_on', 'project', 'task_type', 'user', 'line_type', 'datas');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Line $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function onPrePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPrePersist', array());

        return parent::onPrePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedOn($createdOn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedOn', array($createdOn));

        return parent::setCreatedOn($createdOn);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedOn', array());

        return parent::getCreatedOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setProject(\Kronos\CoreBundle\Entity\Project $project = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProject', array($project));

        return parent::setProject($project);
    }

    /**
     * {@inheritDoc}
     */
    public function getProject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProject', array());

        return parent::getProject();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaskType(\Kronos\CoreBundle\Entity\TaskType $taskType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaskType', array($taskType));

        return parent::setTaskType($taskType);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaskType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaskType', array());

        return parent::getTaskType();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Kronos\UserBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineType(\Kronos\CoreBundle\Entity\LineType $lineType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineType', array($lineType));

        return parent::setLineType($lineType);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineType', array());

        return parent::getLineType();
    }

    /**
     * {@inheritDoc}
     */
    public function addData(\Kronos\CoreBundle\Entity\Data $datas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addData', array($datas));

        return parent::addData($datas);
    }

    /**
     * {@inheritDoc}
     */
    public function removeData(\Kronos\CoreBundle\Entity\Data $datas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeData', array($datas));

        return parent::removeData($datas);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatas', array());

        return parent::getDatas();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatas($datas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatas', array($datas));

        return parent::setDatas($datas);
    }

}
