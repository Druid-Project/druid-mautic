<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticDashboardBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DashboardBundle\MauticDashboardBundle' shared autowired service.
     *
     * @return \Mautic\DashboardBundle\MauticDashboardBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\DashboardBundle\\MauticDashboardBundle'] = new \Mautic\DashboardBundle\MauticDashboardBundle();
    }
}
