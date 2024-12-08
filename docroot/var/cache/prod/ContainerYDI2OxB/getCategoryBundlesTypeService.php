<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryBundlesTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CategoryBundle\Form\Type\CategoryBundlesType' shared autowired service.
     *
     * @return \Mautic\CategoryBundle\Form\Type\CategoryBundlesType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\CategoryBundle\\Form\\Type\\CategoryBundlesType'])) {
            return $container->services['Mautic\\CategoryBundle\\Form\\Type\\CategoryBundlesType'];
        }

        return $container->services['Mautic\\CategoryBundle\\Form\\Type\\CategoryBundlesType'] = new \Mautic\CategoryBundle\Form\Type\CategoryBundlesType($a);
    }
}
