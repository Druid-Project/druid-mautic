<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMigrationsEnvVarsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Loader\EnvVars\MigrationsEnvVars' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Loader\EnvVars\MigrationsEnvVars
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Loader\\EnvVars\\MigrationsEnvVars'] = new \Mautic\CoreBundle\Loader\EnvVars\MigrationsEnvVars();
    }
}
