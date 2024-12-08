<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ttl__JSService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.ttl..JS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ttl..JS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doNotContact' => ['services', 'Mautic\\LeadBundle\\Model\\DoNotContact', 'getDoNotContactService', false],
            'model' => ['services', 'Mautic\\LeadBundle\\Model\\LeadModel', 'getLeadModelService', false],
        ], [
            'doNotContact' => 'Mautic\\LeadBundle\\Model\\DoNotContact',
            'model' => 'Mautic\\LeadBundle\\Model\\LeadModel',
        ]);
    }
}