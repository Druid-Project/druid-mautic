<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Executioner_DecisionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.executioner.decision' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Event\DecisionExecutioner
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.campaign.event_logger'] ?? $container->load('getMautic_Campaign_EventLoggerService'));

        if (isset($container->services['mautic.campaign.executioner.decision'])) {
            return $container->services['mautic.campaign.executioner.decision'];
        }
        $b = ($container->services['mautic.campaign.dispatcher.decision'] ?? $container->load('getMautic_Campaign_Dispatcher_DecisionService'));

        if (isset($container->services['mautic.campaign.executioner.decision'])) {
            return $container->services['mautic.campaign.executioner.decision'];
        }

        return $container->services['mautic.campaign.executioner.decision'] = new \Mautic\CampaignBundle\Executioner\Event\DecisionExecutioner($a, $b);
    }
}
