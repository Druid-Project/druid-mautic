<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integration_ConnectwiseService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integration.connectwise' shared service.
     *
     * @return \MauticPlugin\MauticCrmBundle\Integration\ConnectwiseIntegration
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.integration.connectwise'])) {
            return $container->services['mautic.integration.connectwise'];
        }
        $b = ($container->services['mautic.helper.cache_storage'] ?? $container->getMautic_Helper_CacheStorageService());

        if (isset($container->services['mautic.integration.connectwise'])) {
            return $container->services['mautic.integration.connectwise'];
        }
        $c = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['mautic.integration.connectwise'])) {
            return $container->services['mautic.integration.connectwise'];
        }
        $d = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['mautic.integration.connectwise'])) {
            return $container->services['mautic.integration.connectwise'];
        }
        $e = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.integration.connectwise'])) {
            return $container->services['mautic.integration.connectwise'];
        }
        $f = ($container->services['Mautic\\LeadBundle\\Model\\CompanyModel'] ?? $container->getCompanyModelService());

        if (isset($container->services['mautic.integration.connectwise'])) {
            return $container->services['mautic.integration.connectwise'];
        }
        $g = ($container->services['Mautic\\CoreBundle\\Model\\NotificationModel'] ?? $container->getNotificationModelService());

        if (isset($container->services['mautic.integration.connectwise'])) {
            return $container->services['mautic.integration.connectwise'];
        }
        $h = ($container->services['Mautic\\LeadBundle\\Model\\FieldModel'] ?? $container->getFieldModel2Service());

        if (isset($container->services['mautic.integration.connectwise'])) {
            return $container->services['mautic.integration.connectwise'];
        }
        $i = ($container->services['Mautic\\PluginBundle\\Model\\IntegrationEntityModel'] ?? $container->load('getIntegrationEntityModelService'));

        if (isset($container->services['mautic.integration.connectwise'])) {
            return $container->services['mautic.integration.connectwise'];
        }
        $j = ($container->services['Mautic\\LeadBundle\\Model\\DoNotContact'] ?? $container->getDoNotContactService());

        if (isset($container->services['mautic.integration.connectwise'])) {
            return $container->services['mautic.integration.connectwise'];
        }

        return $container->services['mautic.integration.connectwise'] = new \MauticPlugin\MauticCrmBundle\Integration\ConnectwiseIntegration($a, $b, $c, ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $d, ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.helper.encryption'] ?? $container->getMautic_Helper_EncryptionService()), $e, $f, ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), $g, $h, $i, $j);
    }
}