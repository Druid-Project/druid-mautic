<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8gMNrgBService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.8gMNrgB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8gMNrgB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'fieldValidator' => ['services', 'mautic.integrations.helper.field_validator', 'getMautic_Integrations_Helper_FieldValidatorService', true],
            'formExtension' => ['services', 'Mautic\\CoreBundle\\Twig\\Extension\\FormExtension', 'getFormExtensionService', false],
            'formFactory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', false],
            'integrationsHelper' => ['services', 'mautic.integrations.helper.config_integrations', 'getMautic_Integrations_Helper_ConfigIntegrationsService', true],
        ], [
            'dispatcher' => '?',
            'fieldValidator' => '?',
            'formExtension' => 'Mautic\\CoreBundle\\Twig\\Extension\\FormExtension',
            'formFactory' => '?',
            'integrationsHelper' => '?',
        ]);
    }
}