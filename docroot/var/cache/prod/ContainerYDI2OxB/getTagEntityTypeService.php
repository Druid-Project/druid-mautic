<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagEntityTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticTagManagerBundle\Form\Type\TagEntityType' shared autowired service.
     *
     * @return \MauticPlugin\MauticTagManagerBundle\Form\Type\TagEntityType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticTagManagerBundle\\Form\\Type\\TagEntityType'] = new \MauticPlugin\MauticTagManagerBundle\Form\Type\TagEntityType();
    }
}
