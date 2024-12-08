<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonitoringControllerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Controller\MonitoringController' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Controller\MonitoringController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController'] = $instance = new \MauticPlugin\MauticSocialBundle\Controller\MonitoringController(($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService()), ($container->services['mautic.helper.form.field_helper'] ?? $container->getMautic_Helper_Form_FieldHelperService()), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['Mautic\\CoreBundle\\Factory\\MauticFactory'] ?? $container->getMauticFactoryService()), ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.core.service.flashbag'] ?? $container->getMautic_Core_Service_FlashbagService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->get_ServiceLocator_Mx0UMmYService())->withContext('MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController', $container));

        return $instance;
    }
}
