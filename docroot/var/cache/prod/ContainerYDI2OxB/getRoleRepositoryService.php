<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRoleRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Entity\RoleRepository' shared autowired service.
     *
     * @return \Mautic\UserBundle\Entity\RoleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\Entity\\RoleRepository'] = new \Mautic\UserBundle\Entity\RoleRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
