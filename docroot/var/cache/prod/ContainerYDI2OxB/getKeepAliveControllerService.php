<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKeepAliveControllerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Controller\KeepAliveController' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Controller\KeepAliveController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Controller\\KeepAliveController'] = new \Mautic\CoreBundle\Controller\KeepAliveController();
    }
}
