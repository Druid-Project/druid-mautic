<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCopyRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Entity\CopyRepository' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Entity\CopyRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Entity\\CopyRepository'] = new \Mautic\EmailBundle\Entity\CopyRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
