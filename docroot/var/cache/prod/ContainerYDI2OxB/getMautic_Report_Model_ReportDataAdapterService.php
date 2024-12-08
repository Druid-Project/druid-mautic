<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Report_Model_ReportDataAdapterService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.report.model.report_data_adapter' shared service.
     *
     * @return \Mautic\ReportBundle\Adapter\ReportDataAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.report.model.report_data_adapter'] = new \Mautic\ReportBundle\Adapter\ReportDataAdapter(($container->services['Mautic\\ReportBundle\\Model\\ReportModel'] ?? $container->load('getReportModelService')));
    }
}
