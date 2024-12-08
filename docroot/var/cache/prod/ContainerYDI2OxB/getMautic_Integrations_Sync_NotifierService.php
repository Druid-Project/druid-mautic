<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Sync_NotifierService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.sync.notifier' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\Notification\Notifier
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.sync.notifier'] = new \Mautic\IntegrationsBundle\Sync\Notification\Notifier(($container->services['mautic.integrations.sync.notification.handler_container'] ?? $container->load('getMautic_Integrations_Sync_Notification_HandlerContainerService')), ($container->services['mautic.integrations.helper.sync_integrations'] ?? $container->load('getMautic_Integrations_Helper_SyncIntegrationsService')), ($container->services['mautic.integrations.helper.config_integrations'] ?? $container->load('getMautic_Integrations_Helper_ConfigIntegrationsService')), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
