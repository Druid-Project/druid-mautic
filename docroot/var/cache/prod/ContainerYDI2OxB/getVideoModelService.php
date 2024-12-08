<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVideoModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Model\VideoModel' shared autowired service.
     *
     * @return \Mautic\PageBundle\Model\VideoModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.tracker.contact'] ?? $container->getMautic_Tracker_ContactService());

        if (isset($container->services['Mautic\\PageBundle\\Model\\VideoModel'])) {
            return $container->services['Mautic\\PageBundle\\Model\\VideoModel'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\PageBundle\\Model\\VideoModel'])) {
            return $container->services['Mautic\\PageBundle\\Model\\VideoModel'];
        }
        $c = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\PageBundle\\Model\\VideoModel'])) {
            return $container->services['Mautic\\PageBundle\\Model\\VideoModel'];
        }

        return $container->services['Mautic\\PageBundle\\Model\\VideoModel'] = new \Mautic\PageBundle\Model\VideoModel(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a, ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $b, $c, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
