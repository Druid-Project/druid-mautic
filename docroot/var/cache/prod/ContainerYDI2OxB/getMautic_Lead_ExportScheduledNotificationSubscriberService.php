<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_ExportScheduledNotificationSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.export_scheduled_notification_subscriber' shared service.
     *
     * @return \Mautic\LeadBundle\EventListener\ContactExportSchedulerNotificationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\NotificationModel'] ?? $container->getNotificationModelService());

        if (isset($container->services['mautic.lead.export_scheduled_notification_subscriber'])) {
            return $container->services['mautic.lead.export_scheduled_notification_subscriber'];
        }

        return $container->services['mautic.lead.export_scheduled_notification_subscriber'] = new \Mautic\LeadBundle\EventListener\ContactExportSchedulerNotificationSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}