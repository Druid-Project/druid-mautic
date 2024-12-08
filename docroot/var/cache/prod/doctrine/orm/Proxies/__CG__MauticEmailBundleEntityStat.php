<?php

namespace Proxies\__CG__\Mautic\EmailBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Stat extends \Mautic\EmailBundle\Entity\Stat implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'id', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'email', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'lead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'emailAddress', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'list', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'isRead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'isFailed', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'viewedInBrowser', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'dateRead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'trackingHash', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'retryCount', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'source', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'sourceId', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'tokens', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'storedCopy', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'openCount', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'lastOpened', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'openDetails', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'replies', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'changes'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'id', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'email', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'lead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'emailAddress', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'list', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'isRead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'isFailed', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'viewedInBrowser', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'dateRead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'trackingHash', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'retryCount', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'source', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'sourceId', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'tokens', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'storedCopy', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'openCount', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'lastOpened', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'openDetails', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'replies', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'changes'];
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
    public function getDateRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateRead', []);

        return parent::getDateRead();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateRead($dateRead): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateRead', [$dateRead]);

        parent::setDateRead($dateRead);
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
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(?\Mautic\EmailBundle\Entity\Email $email = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        parent::setEmail($email);
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
    public function getIsRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRead', []);

        return parent::getIsRead();
    }

    /**
     * {@inheritDoc}
     */
    public function isRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRead', []);

        return parent::isRead();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRead($isRead): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRead', [$isRead]);

        parent::setIsRead($isRead);
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
    public function getIsFailed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFailed', []);

        return parent::getIsFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFailed($isFailed): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFailed', [$isFailed]);

        parent::setIsFailed($isFailed);
    }

    /**
     * {@inheritDoc}
     */
    public function isFailed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFailed', []);

        return parent::isFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailAddress', []);

        return parent::getEmailAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailAddress($emailAddress): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailAddress', [$emailAddress]);

        parent::setEmailAddress($emailAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getViewedInBrowser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getViewedInBrowser', []);

        return parent::getViewedInBrowser();
    }

    /**
     * {@inheritDoc}
     */
    public function setViewedInBrowser($viewedInBrowser): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setViewedInBrowser', [$viewedInBrowser]);

        parent::setViewedInBrowser($viewedInBrowser);
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
    public function setTokens(array $tokens): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokens', [$tokens]);

        parent::setTokens($tokens);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpenCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpenCount', []);

        return parent::getOpenCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpenCount($openCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpenCount', [$openCount]);

        return parent::setOpenCount($openCount);
    }

    /**
     * {@inheritDoc}
     */
    public function addOpenDetails($details): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOpenDetails', [$details]);

        parent::addOpenDetails($details);
    }

    /**
     * {@inheritDoc}
     */
    public function upOpenCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upOpenCount', []);

        return parent::upOpenCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastOpened()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastOpened', []);

        return parent::getLastOpened();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastOpened($lastOpened)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastOpened', [$lastOpened]);

        return parent::setLastOpened($lastOpened);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpenDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpenDetails', []);

        return parent::getOpenDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpenDetails(array $openDetails)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpenDetails', [$openDetails]);

        return parent::setOpenDetails($openDetails);
    }

    /**
     * {@inheritDoc}
     */
    public function getStoredCopy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStoredCopy', []);

        return parent::getStoredCopy();
    }

    /**
     * {@inheritDoc}
     */
    public function setStoredCopy(\Mautic\EmailBundle\Entity\Copy $storedCopy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStoredCopy', [$storedCopy]);

        return parent::setStoredCopy($storedCopy);
    }

    /**
     * {@inheritDoc}
     */
    public function getReplies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReplies', []);

        return parent::getReplies();
    }

    /**
     * {@inheritDoc}
     */
    public function addReply(\Mautic\EmailBundle\Entity\EmailReply $reply): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReply', [$reply]);

        parent::addReply($reply);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', []);

        return parent::getChanges();
    }

}
