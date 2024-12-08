<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0vRmUtZService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.0vRmUtZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0vRmUtZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lookupHelper' => ['services', 'mautic.plugin.fullcontact.lookup_helper', 'getMautic_Plugin_Fullcontact_LookupHelperService', true],
        ], [
            'lookupHelper' => '?',
        ]);
    }
}
