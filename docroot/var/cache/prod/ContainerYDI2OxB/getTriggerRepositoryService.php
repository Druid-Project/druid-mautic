<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTriggerRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\Entity\TriggerRepository' shared autowired service.
     *
     * @return \Mautic\PointBundle\Entity\TriggerRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PointBundle\\Entity\\TriggerRepository'] = new \Mautic\PointBundle\Entity\TriggerRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
