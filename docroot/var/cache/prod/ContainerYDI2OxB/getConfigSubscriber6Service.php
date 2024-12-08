<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigSubscriber6Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\EventListener\ConfigSubscriber' shared autowired service.
     *
     * @return \Mautic\CoreBundle\EventListener\ConfigSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\EventListener\\ConfigSubscriber'] = new \Mautic\CoreBundle\EventListener\ConfigSubscriber(($container->services['Mautic\\CoreBundle\\Helper\\LanguageHelper'] ?? $container->load('getLanguageHelperService')));
    }
}