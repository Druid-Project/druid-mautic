<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Scheduler_DatetimeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.scheduler.datetime' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Scheduler\Mode\DateTime
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.campaign.scheduler.datetime'] = new \Mautic\CampaignBundle\Executioner\Scheduler\Mode\DateTime(($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));
    }
}
