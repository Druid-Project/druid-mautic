<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommonRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Entity\CommonRepository' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Entity\CommonRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Entity\\CommonRepository'] = new \Mautic\CoreBundle\Entity\CommonRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}