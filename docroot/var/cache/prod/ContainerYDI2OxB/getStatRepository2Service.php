<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatRepository2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DynamicContentBundle\Entity\StatRepository' shared autowired service.
     *
     * @return \Mautic\DynamicContentBundle\Entity\StatRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\DynamicContentBundle\\Entity\\StatRepository'] = new \Mautic\DynamicContentBundle\Entity\StatRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
