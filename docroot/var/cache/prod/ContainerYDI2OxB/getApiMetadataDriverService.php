<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiMetadataDriverService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ApiBundle\Serializer\Driver\ApiMetadataDriver' shared autowired service.
     *
     * @return \Mautic\ApiBundle\Serializer\Driver\ApiMetadataDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver'] = new \Mautic\ApiBundle\Serializer\Driver\ApiMetadataDriver();
    }
}