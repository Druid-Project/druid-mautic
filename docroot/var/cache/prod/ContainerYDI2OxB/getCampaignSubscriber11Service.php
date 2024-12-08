<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriber11Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\PluginBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Mautic\\PluginBundle\\EventListener\\CampaignSubscriber'] = $instance = new \Mautic\PluginBundle\EventListener\CampaignSubscriber();

        $instance->setIntegrationHelper(($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService()));

        return $instance;
    }
}
