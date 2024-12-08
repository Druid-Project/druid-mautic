<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NGV6EpService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.NG_v6Ep' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NG_v6Ep'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bundleHelper' => ['services', 'mautic.helper.bundle', 'getMautic_Helper_BundleService', false],
            'cacheHelper' => ['services', 'mautic.helper.cache', 'getMautic_Helper_CacheService', false],
            'configurator' => ['services', 'mautic.configurator', 'getMautic_ConfiguratorService', false],
        ], [
            'bundleHelper' => '?',
            'cacheHelper' => '?',
            'configurator' => '?',
        ]);
    }
}
