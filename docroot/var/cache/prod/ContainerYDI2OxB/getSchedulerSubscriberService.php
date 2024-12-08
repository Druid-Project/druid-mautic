<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchedulerSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\EventListener\SchedulerSubscriber' shared autowired service.
     *
     * @return \Mautic\ReportBundle\EventListener\SchedulerSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.report.model.send_schedule'] ?? $container->load('getMautic_Report_Model_SendScheduleService'));

        if (isset($container->services['Mautic\\ReportBundle\\EventListener\\SchedulerSubscriber'])) {
            return $container->services['Mautic\\ReportBundle\\EventListener\\SchedulerSubscriber'];
        }

        return $container->services['Mautic\\ReportBundle\\EventListener\\SchedulerSubscriber'] = new \Mautic\ReportBundle\EventListener\SchedulerSubscriber($a);
    }
}
