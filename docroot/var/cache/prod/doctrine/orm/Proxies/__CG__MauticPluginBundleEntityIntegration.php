<?php

namespace Proxies\__CG__\Mautic\PluginBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Integration extends \Mautic\PluginBundle\Entity\Integration implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'id', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'plugin', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'name', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'isPublished', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'supportedFeatures', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'apiKeys', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'featureSettings', 'changes', 'pastChanges'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'id', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'plugin', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'name', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'isPublished', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'supportedFeatures', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'apiKeys', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\Integration' . "\0" . 'featureSettings', 'changes', 'pastChanges'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Integration $proxy) {
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
    public function getPlugin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlugin', []);

        return parent::getPlugin();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlugin($plugin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlugin', [$plugin]);

        return parent::setPlugin($plugin);
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', []);

        return parent::isPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getSupportedFeatures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupportedFeatures', []);

        return parent::getSupportedFeatures();
    }

    /**
     * {@inheritDoc}
     */
    public function setSupportedFeatures($supportedFeatures)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupportedFeatures', [$supportedFeatures]);

        return parent::setSupportedFeatures($supportedFeatures);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiKeys()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiKeys', []);

        return parent::getApiKeys();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiKeys($apiKeys)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiKeys', [$apiKeys]);

        return parent::setApiKeys($apiKeys);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeatureSettings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeatureSettings', []);

        return parent::getFeatureSettings();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeatureSettings($featureSettings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeatureSettings', [$featureSettings]);

        return parent::setFeatureSettings($featureSettings);
    }

    /**
     * {@inheritDoc}
     */
    public function getCacheNamespacesToDelete(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCacheNamespacesToDelete', []);

        return parent::getCacheNamespacesToDelete();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges($includePast = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', [$includePast]);

        return parent::getChanges($includePast);
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', []);

        parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanges(array $changes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanges', [$changes]);

        parent::setChanges($changes);
    }

}