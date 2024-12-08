<?php

namespace Proxies\__CG__\Mautic\NotificationBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Stat extends \Mautic\NotificationBundle\Entity\Stat implements \Doctrine\ORM\Proxy\Proxy
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
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'id', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'notification', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'lead', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'list', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'dateRead', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'isClicked', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'dateClicked', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'trackingHash', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'retryCount', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'source', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'sourceId', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'tokens', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'clickCount', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'clickDetails', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'lastClicked'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'id', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'notification', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'lead', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'list', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'dateRead', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'isClicked', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'dateClicked', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'trackingHash', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'retryCount', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'source', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'sourceId', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'tokens', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'clickCount', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'clickDetails', '' . "\0" . 'Mautic\\NotificationBundle\\Entity\\Stat' . "\0" . 'lastClicked'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Stat $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getDateClicked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateClicked', []);

        return parent::getDateClicked();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateClicked($dateClicked): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateClicked', [$dateClicked]);

        parent::setDateClicked($dateClicked);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateSent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSent', []);

        return parent::getDateSent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateSent($dateSent): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSent', [$dateSent]);

        parent::setDateSent($dateSent);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotification()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotification', []);

        return parent::getNotification();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotification(?\Mautic\NotificationBundle\Entity\Notification $notification = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotification', [$notification]);

        parent::setNotification($notification);
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpAddress', []);

        return parent::getIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpAddress(\Mautic\CoreBundle\Entity\IpAddress $ip): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpAddress', [$ip]);

        parent::setIpAddress($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsClicked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsClicked', []);

        return parent::getIsClicked();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsClicked($isClicked): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsClicked', [$isClicked]);

        parent::setIsClicked($isClicked);
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', []);

        return parent::getLead();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead(?\Mautic\LeadBundle\Entity\Lead $lead = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', [$lead]);

        parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrackingHash()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrackingHash', []);

        return parent::getTrackingHash();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackingHash($trackingHash): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrackingHash', [$trackingHash]);

        parent::setTrackingHash($trackingHash);
    }

    /**
     * {@inheritDoc}
     */
    public function getList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getList', []);

        return parent::getList();
    }

    /**
     * {@inheritDoc}
     */
    public function setList($list): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setList', [$list]);

        parent::setList($list);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetryCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetryCount', []);

        return parent::getRetryCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetryCount($retryCount): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetryCount', [$retryCount]);

        parent::setRetryCount($retryCount);
    }

    /**
     * {@inheritDoc}
     */
    public function upRetryCount(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upRetryCount', []);

        parent::upRetryCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', []);

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', [$source]);

        parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getSourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSourceId', []);

        return parent::getSourceId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSourceId($sourceId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSourceId', [$sourceId]);

        parent::setSourceId($sourceId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTokens()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokens', []);

        return parent::getTokens();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokens($tokens): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokens', [$tokens]);

        parent::setTokens($tokens);
    }

    /**
     * {@inheritDoc}
     */
    public function getClickCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClickCount', []);

        return parent::getClickCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setClickCount($clickCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClickCount', [$clickCount]);

        return parent::setClickCount($clickCount);
    }

    /**
     * {@inheritDoc}
     */
    public function addClickDetails($details): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClickDetails', [$details]);

        parent::addClickDetails($details);
    }

    /**
     * {@inheritDoc}
     */
    public function upClickCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upClickCount', []);

        return parent::upClickCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastClicked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastClicked', []);

        return parent::getLastClicked();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastClicked(\DateTime $lastClicked)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastClicked', [$lastClicked]);

        return parent::setLastClicked($lastClicked);
    }

    /**
     * {@inheritDoc}
     */
    public function getClickDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClickDetails', []);

        return parent::getClickDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setClickDetails($clickDetails)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClickDetails', [$clickDetails]);

        return parent::setClickDetails($clickDetails);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateRead', []);

        return parent::getDateRead();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateRead($dateRead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateRead', [$dateRead]);

        return parent::setDateRead($dateRead);
    }

}
