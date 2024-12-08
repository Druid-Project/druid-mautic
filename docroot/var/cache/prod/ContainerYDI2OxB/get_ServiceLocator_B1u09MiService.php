<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B1u09MiService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.B1u09Mi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B1u09Mi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'transportChain' => ['services', 'mautic.sms.transport_chain', 'getMautic_Sms_TransportChainService', true],
        ], [
            'transportChain' => '?',
        ]);
    }
}
