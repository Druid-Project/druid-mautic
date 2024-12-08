<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticTagManagerBundle\Entity\TagRepository' shared autowired service.
     *
     * @return \MauticPlugin\MauticTagManagerBundle\Entity\TagRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticTagManagerBundle\\Entity\\TagRepository'] = new \MauticPlugin\MauticTagManagerBundle\Entity\TagRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}