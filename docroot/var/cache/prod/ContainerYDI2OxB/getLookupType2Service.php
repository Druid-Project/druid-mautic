<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLookupType2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFullContactBundle\Form\Type\LookupType' shared autowired service.
     *
     * @return \MauticPlugin\MauticFullContactBundle\Form\Type\LookupType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticFullContactBundle\\Form\\Type\\LookupType'] = new \MauticPlugin\MauticFullContactBundle\Form\Type\LookupType();
    }
}