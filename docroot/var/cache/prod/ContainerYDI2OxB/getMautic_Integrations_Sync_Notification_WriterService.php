<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Sync_Notification_WriterService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.sync.notification.writer' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\Notification\Writer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.sync.notification.writer'] = new \Mautic\IntegrationsBundle\Sync\Notification\Writer(($container->services['Mautic\\CoreBundle\\Model\\NotificationModel'] ?? $container->getNotificationModelService()), ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}