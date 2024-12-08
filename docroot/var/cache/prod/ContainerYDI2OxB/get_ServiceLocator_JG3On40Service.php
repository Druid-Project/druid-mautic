<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JG3On40Service extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.jG3On40' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jG3On40'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tagDependencies' => ['services', 'MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies', 'getTagDependenciesService', true],
        ], [
            'tagDependencies' => 'MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies',
        ]);
    }
}
