<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HhvkkJRService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.hhvkkJR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hhvkkJR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'themeHelper' => ['services', 'mautic.helper.theme', 'getMautic_Helper_ThemeService', false],
        ], [
            'themeHelper' => '?',
        ]);
    }
}
