<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportSubscriber10Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\EventListener\ReportSubscriber' shared autowired service.
     *
     * @return \Mautic\PointBundle\EventListener\ReportSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PointBundle\\EventListener\\ReportSubscriber'] = new \Mautic\PointBundle\EventListener\ReportSubscriber(($container->services['mautic.lead.reportbundle.fields_builder'] ?? $container->load('getMautic_Lead_Reportbundle_FieldsBuilderService')));
    }
}
