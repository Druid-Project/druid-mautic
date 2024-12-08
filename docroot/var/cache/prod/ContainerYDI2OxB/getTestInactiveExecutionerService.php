<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestInactiveExecutionerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Executioner\TestInactiveExecutioner' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Executioner\TestInactiveExecutioner
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Executioner\\TestInactiveExecutioner'] = new \Mautic\CampaignBundle\Executioner\TestInactiveExecutioner(($container->services['mautic.campaign.contact_finder.inactive'] ?? $container->load('getMautic_Campaign_ContactFinder_InactiveService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.campaign.scheduler'] ?? $container->load('getMautic_Campaign_SchedulerService')), ($container->services['mautic.campaign.helper.inactivity'] ?? $container->load('getMautic_Campaign_Helper_InactivityService')), ($container->services['mautic.campaign.event_executioner'] ?? $container->load('getMautic_Campaign_EventExecutionerService')));
    }
}
