<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRequestStorageHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Helper\RequestStorageHelper' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Helper\RequestStorageHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Helper\\RequestStorageHelper'] = new \Mautic\EmailBundle\Helper\RequestStorageHelper(($container->services['mautic.cache.provider'] ?? $container->getMautic_Cache_ProviderService()));
    }
}
