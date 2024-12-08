<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriber7Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\Model\\EmailModel'] ?? $container->getEmailModelService());

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\CampaignSubscriber'];
        }
        $b = ($container->services['mautic.campaign.executioner.realtime'] ?? $container->load('getMautic_Campaign_Executioner_RealtimeService'));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\CampaignSubscriber'];
        }
        $c = ($container->services['Mautic\\EmailBundle\\Model\\SendEmailToUser'] ?? $container->load('getSendEmailToUserService'));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\CampaignSubscriber'];
        }
        $d = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\CampaignSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\CampaignSubscriber'] = new \Mautic\EmailBundle\EventListener\CampaignSubscriber($a, $b, $c, ($container->services['translator'] ?? $container->getTranslator2Service()), $d);
    }
}