<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'metadata_driver' => ['privates', 'jms_serializer.metadata.typed_properties_driver', 'getJmsSerializer_Metadata_TypedPropertiesDriverService', true],
        ], [
            'metadata_driver' => '?',
        ]), 'metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $a->setCache(($container->privates['jms_serializer.metadata.cache.file_cache'] ?? ($container->privates['jms_serializer.metadata.cache.file_cache'] = new \Metadata\Cache\FileCache(($container->targetDir.''.'/jms_serializer_default')))));
        $a->setIncludeInterfaces(false);
        $b = new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService', true],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService', true],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService', true],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService', true],
            'fos_rest.serializer.form_error_handler' => ['privates', 'fos_rest.serializer.form_error_handler', 'getFosRest_Serializer_FormErrorHandlerService', true],
        ], [
            'jms_serializer.array_collection_handler' => '?',
            'jms_serializer.constraint_violation_handler' => '?',
            'jms_serializer.datetime_handler' => '?',
            'jms_serializer.iterator_handler' => '?',
            'fos_rest.serializer.form_error_handler' => '?',
        ]), [1 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Symfony\\Component\\Validator\\ConstraintViolationList' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson']], 'Symfony\\Component\\Validator\\ConstraintViolation' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']], 'DateTimeInterface' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeInterface'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeInterface']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Symfony\\Component\\Form\\Form' => ['xml' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormToxml'], 'json' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormTojson']], 'Symfony\\Component\\Form\\FormInterface' => ['xml' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormToXml'], 'json' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormToJson']], 'Symfony\\Component\\Form\\FormError' => ['xml' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorToxml'], 'json' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorTojson']]], 2 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml']], 'DateTimeInterface' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromJson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromXml']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']]]]);
        $c = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $c->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        $d = new \JMS\Serializer\Expression\ExpressionEvaluator($c, ['container' => $container]);

        $e = new \JMS\Serializer\Accessor\DefaultAccessorStrategy($d);
        $f = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService', true],
            'MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\SerializerSubscriber' => ['services', 'MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\SerializerSubscriber', 'getSerializerSubscriberService', true],
            'mautic.lead.serializer.subscriber' => ['services', 'mautic.lead.serializer.subscriber', 'getMautic_Lead_Serializer_SubscriberService', true],
        ], [
            'jms_serializer.doctrine_proxy_subscriber' => '?',
            'MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\SerializerSubscriber' => '?',
            'mautic.lead.serializer.subscriber' => '?',
        ]));
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ORM\\PersistentCollection');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\MongoDB\\PersistentCollection');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\PHPCR\\PersistentCollection');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'ProxyManager\\Proxy\\LazyLoadingInterface');
        $f->addListener('serializer.post_serialize', [0 => 'MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\SerializerSubscriber', 1 => 'addCustomMJML'], NULL, NULL, NULL);
        $f->addListener('serializer.post_serialize', [0 => 'mautic.lead.serializer.subscriber', 1 => 'changeEmptyArraysToObject'], NULL, NULL, NULL);
        $g = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
        $g->setOptions(1024);
        $h = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory(false);
        $h->setOptions(128);

        return $container->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, new \JMS\Serializer\Construction\DoctrineObjectConstructor(($container->services['doctrine'] ?? $container->getDoctrineService()), new \JMS\Serializer\Construction\UnserializeObjectConstructor(), 'null'), $e, $f, $d), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $e, $f, $d)], ['json' => $g, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory()], ['json' => $h, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($container->services['jms_serializer.serialization_context_factory'] ?? ($container->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->services['jms_serializer.deserialization_context_factory'] ?? ($container->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}