<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContentTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFocusBundle\Form\Type\ContentType' shared autowired service.
     *
     * @return \MauticPlugin\MauticFocusBundle\Form\Type\ContentType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticFocusBundle\\Form\\Type\\ContentType'] = new \MauticPlugin\MauticFocusBundle\Form\Type\ContentType();
    }
}