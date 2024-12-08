<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListController2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\MarketplaceBundle\Controller\Package\ListController' shared autowired service.
     *
     * @return \Mautic\MarketplaceBundle\Controller\Package\ListController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Mautic\\MarketplaceBundle\\Controller\\Package\\ListController'] = $instance = new \Mautic\MarketplaceBundle\Controller\Package\ListController(($container->services['marketplace.service.plugin_collector'] ?? $container->load('getMarketplace_Service_PluginCollectorService')), ($container->services['marketplace.service.route_provider'] ?? $container->load('getMarketplace_Service_RouteProviderService')), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['marketplace.service.config'] ?? $container->getMarketplace_Service_ConfigService()), ($container->services['Mautic\\CoreBundle\\Factory\\MauticFactory'] ?? $container->getMauticFactoryService()), ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.core.service.flashbag'] ?? $container->getMautic_Core_Service_FlashbagService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->get_ServiceLocator_Mx0UMmYService())->withContext('Mautic\\MarketplaceBundle\\Controller\\Package\\ListController', $container));

        return $instance;
    }
}
