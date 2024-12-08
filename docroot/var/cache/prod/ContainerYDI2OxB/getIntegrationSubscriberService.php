<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIntegrationSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\EventListener\IntegrationSubscriber' shared autowired service.
     *
     * @return \Mautic\PluginBundle\EventListener\IntegrationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\EventListener\\IntegrationSubscriber'] = new \Mautic\PluginBundle\EventListener\IntegrationSubscriber(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
