<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_ContactFinder_InactiveService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.contact_finder.inactive' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\ContactFinder\InactiveContactFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.campaign.contact_finder.inactive'] = new \Mautic\CampaignBundle\Executioner\ContactFinder\InactiveContactFinder(($container->services['Mautic\\LeadBundle\\Entity\\LeadRepository'] ?? $container->getLeadRepository2Service()), ($container->services['Mautic\\CampaignBundle\\Entity\\LeadRepository'] ?? $container->getLeadRepositoryService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));
    }
}
