<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiEnvVarsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Loader\EnvVars\ApiEnvVars' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Loader\EnvVars\ApiEnvVars
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Loader\\EnvVars\\ApiEnvVars'] = new \Mautic\CoreBundle\Loader\EnvVars\ApiEnvVars();
    }
}
