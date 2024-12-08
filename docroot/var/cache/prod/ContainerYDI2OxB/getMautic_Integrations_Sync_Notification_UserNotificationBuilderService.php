<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Sync_Notification_UserNotificationBuilderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.sync.notification.user_notification_builder' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\Notification\Helper\UserNotificationBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.sync.notification.user_notification_builder'] = new \Mautic\IntegrationsBundle\Sync\Notification\Helper\UserNotificationBuilder(($container->services['mautic.integrations.sync.notification.helper_user'] ?? $container->load('getMautic_Integrations_Sync_Notification_HelperUserService')), ($container->services['mautic.integrations.sync.notification.helper.owner_provider'] ?? $container->load('getMautic_Integrations_Sync_Notification_Helper_OwnerProviderService')), ($container->services['mautic.integrations.sync.notification.helper_route'] ?? $container->load('getMautic_Integrations_Sync_Notification_HelperRouteService')), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
