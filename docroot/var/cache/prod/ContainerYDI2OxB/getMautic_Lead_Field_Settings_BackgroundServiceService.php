<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Field_Settings_BackgroundServiceService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.field.settings.background_service' shared service.
     *
     * @return \Mautic\LeadBundle\Field\BackgroundService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.lead.field.settings.background_service'] = new \Mautic\LeadBundle\Field\BackgroundService(($container->services['Mautic\\LeadBundle\\Model\\FieldModel'] ?? $container->getFieldModel2Service()), ($container->services['mautic.lead.field.custom_field_column'] ?? $container->getMautic_Lead_Field_CustomFieldColumnService()), ($container->services['mautic.lead.field.lead_field_saver'] ?? $container->getMautic_Lead_Field_LeadFieldSaverService()), ($container->services['mautic.lead.field.dispatcher.field_column_background_dispatcher'] ?? $container->load('getMautic_Lead_Field_Dispatcher_FieldColumnBackgroundDispatcherService')), ($container->services['mautic.lead.field.notification.custom_field'] ?? $container->load('getMautic_Lead_Field_Notification_CustomFieldService')));
    }
}
