<?php

namespace MailPoetDoctrineProxies\__CG__\MailPoet\Entities;

if (!defined('ABSPATH')) exit;



/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ScheduledTaskEntity extends \MailPoet\Entities\ScheduledTaskEntity implements \MailPoetVendor\Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
  'subscribers' => NULL,
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
  'subscribers' => NULL,
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        unset($this->subscribers);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);

    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'type', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'status', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'priority', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'scheduledAt', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'processedAt', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'meta', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'inProgress', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'rescheduleCount', 'subscribers', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'sendingQueue', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'id', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'createdAt', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'updatedAt', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'deletedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'type', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'status', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'priority', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'scheduledAt', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'processedAt', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'meta', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'inProgress', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'rescheduleCount', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'sendingQueue', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'id', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'createdAt', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'updatedAt', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskEntity' . "\0" . 'deletedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ScheduledTaskEntity $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->subscribers);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriority', []);

        return parent::getPriority();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriority($priority)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriority', [$priority]);

        return parent::setPriority($priority);
    }

    /**
     * {@inheritDoc}
     */
    public function getScheduledAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScheduledAt', []);

        return parent::getScheduledAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setScheduledAt($scheduledAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScheduledAt', [$scheduledAt]);

        return parent::setScheduledAt($scheduledAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcessedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcessedAt', []);

        return parent::getProcessedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcessedAt($processedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcessedAt', [$processedAt]);

        return parent::setProcessedAt($processedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getMeta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMeta', []);

        return parent::getMeta();
    }

    /**
     * {@inheritDoc}
     */
    public function setMeta($meta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMeta', [$meta]);

        return parent::setMeta($meta);
    }

    /**
     * {@inheritDoc}
     */
    public function getInProgress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInProgress', []);

        return parent::getInProgress();
    }

    /**
     * {@inheritDoc}
     */
    public function setInProgress($inProgress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInProgress', [$inProgress]);

        return parent::setInProgress($inProgress);
    }

    /**
     * {@inheritDoc}
     */
    public function getRescheduleCount(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRescheduleCount', []);

        return parent::getRescheduleCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setRescheduleCount(int $rescheduleCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRescheduleCount', [$rescheduleCount]);

        return parent::setRescheduleCount($rescheduleCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscribers(): \MailPoetVendor\Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscribers', []);

        return parent::getSubscribers();
    }

    /**
     * {@inheritDoc}
     */
    public function getSendingQueue(): ?\MailPoet\Entities\SendingQueueEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSendingQueue', []);

        return parent::getSendingQueue();
    }

    /**
     * {@inheritDoc}
     */
    public function setSendingQueue(\MailPoet\Entities\SendingQueueEntity $sendingQueue): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSendingQueue', [$sendingQueue]);

        parent::setSendingQueue($sendingQueue);
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', []);

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt($deletedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deletedAt]);

        return parent::setDeletedAt($deletedAt);
    }

}
