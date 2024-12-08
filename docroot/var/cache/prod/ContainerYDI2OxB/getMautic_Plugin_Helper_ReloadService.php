<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Plugin_Helper_ReloadService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.plugin.helper.reload' shared service.
     *
     * @return \Mautic\PluginBundle\Helper\ReloadHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.plugin.helper.reload'])) {
            return $container->services['mautic.plugin.helper.reload'];
        }
        $b = ($container->services['Mautic\\CoreBundle\\Factory\\MauticFactory'] ?? $container->getMauticFactoryService());

        if (isset($container->services['mautic.plugin.helper.reload'])) {
            return $container->services['mautic.plugin.helper.reload'];
        }

        return $container->services['mautic.plugin.helper.reload'] = new \Mautic\PluginBundle\Helper\ReloadHelper($a, $b);
    }
}