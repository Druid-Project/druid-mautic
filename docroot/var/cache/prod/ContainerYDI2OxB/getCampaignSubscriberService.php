<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFocusBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\MauticFocusBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\CampaignSubscriber'];
        }

        return $container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\CampaignSubscriber'] = new \MauticPlugin\MauticFocusBundle\EventListener\CampaignSubscriber(($container->services['mautic.page.helper.tracking'] ?? $container->load('getMautic_Page_Helper_TrackingService')), $a);
    }
}
