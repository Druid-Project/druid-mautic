<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticOutlookBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticOutlookBundle\MauticOutlookBundle' shared autowired service.
     *
     * @return \MauticPlugin\MauticOutlookBundle\MauticOutlookBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticOutlookBundle\\MauticOutlookBundle'] = new \MauticPlugin\MauticOutlookBundle\MauticOutlookBundle();
    }
}
