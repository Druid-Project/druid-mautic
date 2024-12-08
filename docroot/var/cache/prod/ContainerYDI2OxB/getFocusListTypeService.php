<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFocusListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFocusBundle\Form\Type\FocusListType' shared autowired service.
     *
     * @return \MauticPlugin\MauticFocusBundle\Form\Type\FocusListType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['MauticPlugin\\MauticFocusBundle\\Model\\FocusModel'] ?? $container->getFocusModelService());

        if (isset($container->services['MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusListType'])) {
            return $container->services['MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusListType'];
        }

        return $container->services['MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusListType'] = new \MauticPlugin\MauticFocusBundle\Form\Type\FocusListType($a);
    }
}
