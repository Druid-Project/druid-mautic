<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardLeadsInTimeWidgetTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\DashboardLeadsInTimeWidgetType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\DashboardLeadsInTimeWidgetType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\DashboardLeadsInTimeWidgetType'] = new \Mautic\LeadBundle\Form\Type\DashboardLeadsInTimeWidgetType();
    }
}
