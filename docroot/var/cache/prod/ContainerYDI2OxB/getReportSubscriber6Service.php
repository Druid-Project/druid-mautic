<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportSubscriber6Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\EventListener\ReportSubscriber' shared autowired service.
     *
     * @return \Mautic\FormBundle\EventListener\ReportSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\FormBundle\\Model\\FormModel'] ?? $container->getFormModelService());

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\ReportSubscriber'];
        }
        $b = ($container->services['mautic.report.helper.report'] ?? $container->load('getMautic_Report_Helper_ReportService'));

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\ReportSubscriber'];
        }

        return $container->services['Mautic\\FormBundle\\EventListener\\ReportSubscriber'] = new \Mautic\FormBundle\EventListener\ReportSubscriber(($container->services['Mautic\\LeadBundle\\Model\\CompanyReportData'] ?? $container->load('getCompanyReportDataService')), ($container->services['Mautic\\FormBundle\\Entity\\SubmissionRepository'] ?? $container->load('getSubmissionRepositoryService')), $a, $b, ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
