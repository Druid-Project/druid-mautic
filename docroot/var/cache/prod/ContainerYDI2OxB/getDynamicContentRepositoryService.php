<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDynamicContentRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DynamicContentBundle\Entity\DynamicContentRepository' shared autowired service.
     *
     * @return \Mautic\DynamicContentBundle\Entity\DynamicContentRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\DynamicContentBundle\\Entity\\DynamicContentRepository'] = new \Mautic\DynamicContentBundle\Entity\DynamicContentRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
