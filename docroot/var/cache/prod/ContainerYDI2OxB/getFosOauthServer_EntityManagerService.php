<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_EntityManagerService extends AppKernelProdContainer
{
    /*
     * Gets the private 'fos_oauth_server.entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['fos_oauth_server.entity_manager'] = ($container->services['doctrine'] ?? $container->getDoctrineService())->getManager(NULL);
    }
}
