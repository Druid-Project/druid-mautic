<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticLeadBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\MauticLeadBundle' shared autowired service.
     *
     * @return \Mautic\LeadBundle\MauticLeadBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\MauticLeadBundle'] = new \Mautic\LeadBundle\MauticLeadBundle();
    }
}
