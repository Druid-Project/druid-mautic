<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriber5Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'] ?? $container->load('getMessageModelService'));

        if (isset($container->services['Mautic\\ChannelBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\ChannelBundle\\EventListener\\CampaignSubscriber'];
        }
        $b = ($container->services['mautic.campaign.dispatcher.action'] ?? $container->load('getMautic_Campaign_Dispatcher_ActionService'));

        if (isset($container->services['Mautic\\ChannelBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\ChannelBundle\\EventListener\\CampaignSubscriber'];
        }
        $c = ($container->services['mautic.campaign.event_collector'] ?? $container->getMautic_Campaign_EventCollectorService());

        if (isset($container->services['Mautic\\ChannelBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\ChannelBundle\\EventListener\\CampaignSubscriber'];
        }

        return $container->services['Mautic\\ChannelBundle\\EventListener\\CampaignSubscriber'] = new \Mautic\ChannelBundle\EventListener\CampaignSubscriber($a, $b, $c, ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}