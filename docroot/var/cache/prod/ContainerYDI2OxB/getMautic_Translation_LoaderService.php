<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Translation_LoaderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.translation.loader' shared service.
     *
     * @return \Mautic\CoreBundle\Loader\TranslationLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.translation.loader'] = new \Mautic\CoreBundle\Loader\TranslationLoader(($container->services['mautic.helper.bundle'] ?? $container->getMautic_Helper_BundleService()), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()));
    }
}
