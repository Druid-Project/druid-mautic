<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YlngViQService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.YlngViQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YlngViQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entity' => ['privates', '.errored..service_locator.YlngViQ.Mautic\\CampaignBundle\\Entity\\Campaign', NULL, 'Cannot autowire service ".service_locator.YlngViQ": it references class "Mautic\\CampaignBundle\\Entity\\Campaign" but no such service exists.'],
        ], [
            'entity' => 'Mautic\\CampaignBundle\\Entity\\Campaign',
        ]);
    }
}
