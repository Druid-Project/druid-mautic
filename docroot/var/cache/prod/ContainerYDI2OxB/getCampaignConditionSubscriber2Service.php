<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignConditionSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\EventListener\CampaignConditionSubscriber' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\EventListener\CampaignConditionSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\NotificationBundle\\EventListener\\CampaignConditionSubscriber'] = new \Mautic\NotificationBundle\EventListener\CampaignConditionSubscriber();
    }
}
