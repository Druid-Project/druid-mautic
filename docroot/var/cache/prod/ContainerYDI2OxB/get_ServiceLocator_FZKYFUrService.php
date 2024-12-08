<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FZKYFUrService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.FZKYFUr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FZKYFUr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'parametersHelper' => ['services', 'mautic.helper.core_parameters', 'getMautic_Helper_CoreParametersService', false],
        ], [
            'parametersHelper' => '?',
        ]);
    }
}
