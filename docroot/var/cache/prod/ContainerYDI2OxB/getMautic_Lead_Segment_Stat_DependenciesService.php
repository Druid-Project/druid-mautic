<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Segment_Stat_DependenciesService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.segment.stat.dependencies' shared service.
     *
     * @return \Mautic\LeadBundle\Segment\Stat\SegmentDependencies
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\Model\\EmailModel'] ?? $container->getEmailModelService());

        if (isset($container->services['mautic.lead.segment.stat.dependencies'])) {
            return $container->services['mautic.lead.segment.stat.dependencies'];
        }
        $b = ($container->services['Mautic\\CampaignBundle\\Model\\CampaignModel'] ?? $container->getCampaignModelService());

        if (isset($container->services['mautic.lead.segment.stat.dependencies'])) {
            return $container->services['mautic.lead.segment.stat.dependencies'];
        }
        $c = ($container->services['Mautic\\FormBundle\\Model\\ActionModel'] ?? $container->getActionModelService());

        if (isset($container->services['mautic.lead.segment.stat.dependencies'])) {
            return $container->services['mautic.lead.segment.stat.dependencies'];
        }
        $d = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? $container->getListModelService());

        if (isset($container->services['mautic.lead.segment.stat.dependencies'])) {
            return $container->services['mautic.lead.segment.stat.dependencies'];
        }
        $e = ($container->services['Mautic\\PointBundle\\Model\\TriggerEventModel'] ?? $container->load('getTriggerEventModelService'));

        if (isset($container->services['mautic.lead.segment.stat.dependencies'])) {
            return $container->services['mautic.lead.segment.stat.dependencies'];
        }
        $f = ($container->services['Mautic\\ReportBundle\\Model\\ReportModel'] ?? $container->load('getReportModelService'));

        if (isset($container->services['mautic.lead.segment.stat.dependencies'])) {
            return $container->services['mautic.lead.segment.stat.dependencies'];
        }

        return $container->services['mautic.lead.segment.stat.dependencies'] = new \Mautic\LeadBundle\Segment\Stat\SegmentDependencies($a, $b, $c, $d, $e, $f);
    }
}
