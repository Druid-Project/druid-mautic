<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_RouteLoaderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.route_loader' shared service.
     *
     * @return \Mautic\CoreBundle\Loader\RouteLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.route_loader'])) {
            return $container->services['mautic.route_loader'];
        }

        return $container->services['mautic.route_loader'] = new \Mautic\CoreBundle\Loader\RouteLoader($a, ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}