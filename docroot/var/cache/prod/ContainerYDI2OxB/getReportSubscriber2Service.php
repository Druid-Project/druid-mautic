<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\EventListener\ReportSubscriber' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\EventListener\ReportSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\EventListener\\ReportSubscriber'] = new \Mautic\CampaignBundle\EventListener\ReportSubscriber(($container->services['Mautic\\LeadBundle\\Model\\CompanyReportData'] ?? $container->load('getCompanyReportDataService')));
    }
}
