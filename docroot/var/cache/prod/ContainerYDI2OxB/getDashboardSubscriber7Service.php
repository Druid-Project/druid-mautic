<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardSubscriber7Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\DashboardSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\DashboardSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\DashboardSubscriber'];
        }
        $b = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? $container->getListModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\DashboardSubscriber'];
        }
        $c = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\DashboardSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\DashboardSubscriber'] = new \Mautic\LeadBundle\EventListener\DashboardSubscriber($a, $b, $c, ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.twig.date'] ?? $container->getMautic_Helper_Twig_DateService()));
    }
}
